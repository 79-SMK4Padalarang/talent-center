<?php

namespace App\Http\Controllers;
use App\Models\Ptags;
use Illuminate\Http\Request;
use App\Models\Skillset;

class PtagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Ptags::
            join('skillset', 'most_frequent_skillset.skillset_id', '=', 'skillset.skillset_id')
            ->select('most_frequent_skillset.skillset_id','most_frequent_skillset.counter', 'skillset.skillset_name')
            ->limit(5)
            ->orderBydesc('counter')
            ->get();

        return response()->json($result);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
