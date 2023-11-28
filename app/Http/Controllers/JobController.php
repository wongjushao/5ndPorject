<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use Illuminate\Http\Request;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $jobs =Job::query();

        $jobs->when(request('search'),function($query){
           $query->where(function($query){
               $query->where('title','like','%'.request('search').'%')
                   ->orWhere('description','like','%'.request('search').'%');
           });
        })->when(request('min_salary'),function($query){
            $query->where('salary','>=',request('min_salary'));
        })->when(request('max_salary'),function($query){
            $query->where('salary','<=',request('max_salary'));
        })->when(request('experience'),function($query){
            $query->where('experience',request('experience'));
        })->when(request('category'),function($query){
            $query->where('category',request('category'));
        });
        return view('jobs.index',['jobs'=>$jobs->get()]);
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
    public function store(StoreJobRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show',['job'=>$job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
