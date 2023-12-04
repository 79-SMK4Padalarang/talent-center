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


    public function results(Request $request)
    {
        $query = $request->input('skillset');
        $tags = explode(', ', $query);

        $results = Search::where(function ($queryBuilder) use ($tags) {
            foreach ($tags as $tag) {
                $queryBuilder->orWhere('skillset_name', 'LIKE', '%' . $tag . '%');
            }
        })->get();

        $foundResults = [];
        $notFoundTags = [];

        foreach ($tags as $tag) {
            $tagFound = false;

            foreach ($results as $result) {
                if (stripos($result->skillset_name, $tag) !== false) {
                    $foundResults[] = [
                        'skillset_id' => $result->skillset_id,
                        'skillset_name' => $result->skillset_name,
                    ];
                    $tagFound = true;
                    break;
                }
            }

            if (!$tagFound) {
                $notFoundTags[] = $tag;
            }
        }

        $response = ['results' => $foundResults, 'query' => $query];

        if (!empty($notFoundTags)) {
            $response['message'] = count($notFoundTags) . ' tag(s) not found: ' . implode(', ', $notFoundTags);
        }

        return response()->json($response);
    }
}
