<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Search;

class SearchController extends Controller
{
    public function index()
    {
        $tags = Search::select('skillset_name')->get();
        $data = [];

        foreach ($tags as $item) {
            $data[] = $item['skillset_name'];
        }

        return $data;
    }
public function search(Request $request)
    {
        $query = $request->input('search-bar');
        $mostFrequentSkillsetId = Uuid::uuid4();
        $updatedRows = Ptags::join('skillset', 'skillset.skillset_id', '=', 'most_frequent_skillset.skillset_id')
        ->where('skillset.skillset_name', 'LIKE', '%' . $query . '%')
        ->update(['most_frequent_skillset.counter' => \DB::raw('most_frequent_skillset.counter + 1')]);

    if ($updatedRows > 0) {
        // If at least one row was updated, it means a match was found, and the counter was incremented
        return Redirect::to('/');
    } else {
        // If no rows were updated, create a new entry
        $newPtag = Ptags::create([
            'most_frequent_skillset_id' => $mostFrequentSkillsetId,
        ]);
        return Redirect::to('/');

    }

        }
    }
