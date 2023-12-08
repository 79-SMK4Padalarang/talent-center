<?php

namespace App\Http\Controllers;

use App\Models\Talent;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DisplayDataController extends Controller
{
    public function display(Request $request) 
    {
        try {
            $filter = $request->input('filter');
           // $sortBy = $request->input('sortBy');
            //$shortBy = $request->input('shortBy', 'experience');
            //$shortOrder = $request->input('shortOrder', 'desc');

            $perPage = 9;
            $query = Talent::query()->orderBydesc('experience');

            if ($filter) 
            {
                $query->where('talent_name', 'like', '%' . $filter . '%');
            }
            
            $talents = $query->paginate($perPage);

            $data = $talents->map(function ($talentDetail) {
                return [
                    'talentId' => $talentDetail->talent_id,
                    'talentPhotoUrl' => $talentDetail->photo_url,
                    'talentName' => $talentDetail->talent_name,
                    'talentStatus' => $talentDetail->talentStatus->talent_status_name,
                    'employeeStatus' => $talentDetail->employeeStatus->employee_status_name,
                    'talentAvailability' => $talentDetail->talent_availability,
                    'talentExperience' => $talentDetail->experience,
                    'talentLevel' => $talentDetail->talentLevel->talent_level_name,
                    'positions' => $talentDetail->positions->map(function ($position) {
                        return [
                            'positionId' => $position->position_id,
                            'positionName' => $position->position_name,
                        ];
                    }),
                    'skillSet' => $talentDetail->skillsets->map(function ($skill) {
                        return [
                            'skillId' => $skill->skillset_id,
                            'skillName' => $skill->skillset_name,
                        ];
                    }),
                ];
            });

            $pagination = [
                'currentPage' => $talents->currentPage(),
                'totalPages' => $talents->lastPage(),
                'perPage' => $talents->perPage(),
                'totalItems' => $talents->total(),
                'nextPageUrl' => $talents->nextPageUrl(),
                'prevPageUrl' => $talents->previousPageUrl(),
            ];

            return response()->json(['data' => $data, 'pagination' => $pagination]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    } 
}
