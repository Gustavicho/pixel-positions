<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Job $jobs, Tag $tags)
    {
        $jobs = $jobs->all()->groupBy('featured');

        return view('jobs.index', [
            'featuredJobs' => $jobs[1],
            'jobs' => $jobs[0],
            'tags' => $tags->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Job $job)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
    }
}
