<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Talent;
use App\Models\TalentSkillset; 
use Illuminate\Support\Facades\Storage;

class PutEditDataController extends Controller
{
    public function updateTalent(Request $request)
    {
        $talentId = $request->input('talentId');
        // $extension = $talentPhoto ? $talentPhoto->getClientOriginalExtension() : null;
        // Validate the incoming request data
        $validatedData = $request->validate([
            'talentPhoto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'talentName' => 'required|string',
            'talentStatusId' => 'nullable|exists:talent_status,talent_status_id',
            'nip' => 'nullable|string',
            'sex' => 'nullable|string',
            'dob' => 'nullable|date',
            'talentDescription' => 'nullable|string',
            'cv' => 'nullable|mimes:pdf,docx|max:2048',
            'talentExperience' => 'nullable|integer',
            'talentLevelId' => 'nullable|exists:talent_level,talent_level_id',
            'projectCompleted' => 'nullable|integer',
            'position' => 'nullable|array',
            'position.*.positionId' => 'nullable|exists:position,position_id',
            'skillSet' => 'nullable|array',
            'skillSet.*.skillId' => 'nullable|exists:skillset,skillset_id',
            'email' => 'nullable|email',
            'cellphone' => 'nullable|string',
            'employeeStatusId' => 'nullable|exists:employee_status,employee_status_id',
            'talentAvailability' => 'nullable|string',
            'videoUrl' => 'nullable|string',

        ]);
        
        // Find the talent by ID
        $talent = Talent::where('talent_id', $talentId)->first();
        //$extension = getClientOriginalExtension();
        
        $talent->update([
            'talent_photo_filename' => $validatedData['talentPhoto'] ?? $talent->talent_photo_filename,
            'talent_name' => $validatedData['talentName'] ?? $talent->talent_name,
            'talent_status_id' => $validatedData['talentStatusId'] ?? $talent->talentStatus->talent_status_id,
            'employee_number' => $validatedData['nip'] ?? $talent->employee_number,
            'sex' => $validatedData['sex'] ?? $talent->sex,
            'birth_date' => $validatedData['dob'] ?? $talent->birth_date,
            'talent_description' => $validatedData['talentDescription'] ?? $talent->talent_description,
            'talent_cv_filename' => $validatedData['cv'] ?? $talent->talent_cv_filename,
            'experience' => $validatedData['talentExperience'] ?? $talent->experience,
            'talent_level_id' => $validatedData['talentLevelId'] ?? $talent->talentLevel->talent_level_id,
            'total_project_completed' => $validatedData['projectCompleted'] ?? $talent->total_project_completed,
            'position_id' => json_encode($validatedData['position']),
            'skillset_id' => json_encode($validatedData['skillSet']),
            'email' => $validatedData['email'] ?? $talent->email,
            'cellphone' => $validatedData['cellphone'] ?? $talent->cellphone,
            'employee_status_id' => $validatedData['employeeStatusId'] ?? $talent->employeeStatus->employee_status_id,
            'talent_availability' => $validatedData['talentAvailability'] ?? $talent->talent_availability,
            'biography_video_url' => $validatedData['videoUrl'] ?? $talent->biography_video_url
        ]);
    
        if ($request->hasFile('talentPhoto')) {
            $talentPhoto = $request->file('talentPhoto');
            $talentPhotoPath = $talentPhoto->storeAs('talent_photos', 'talent_' . $talentId . '.' . $talentPhoto->getClientOriginalExtension(), 'photos');
    
            // Update the talent record with the new file path
            $talent->update(['talent_photo_filename' => $talentPhotoPath]);
        }
        
        // $talent->positions()->sync($request->input('position', []));
        // $talent->skillsets()->sync($request->input('skillset', []));
           
    return response()->json(['message' => $talent /*'Updated'*/]);

    }
}
