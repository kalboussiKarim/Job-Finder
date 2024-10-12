<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Arr;
use Auth;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class JobController extends Controller
{
    
    public function index()
    {
        $jobs = Job::latest()->get()->groupBy('featured');

        return view("jobs.index",[
            'featuredJobs'=> $jobs[0],
            'jobs' => $jobs[1],
            'tags'=> Tag::all(),
        ]);
    }

    
    public function create()
    {
        return view('jobs.create');
    }

    
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title'=> 'required',
            'salary'=> 'required',
            'location'=>['required'],
            'schedule'=> ['required', Rule::in(['Part Time','Full Time'])],
            'url'=> ['required', 'url'],
            'tags'=> ['nullable'],
        ]);

        $attributes['featured']= $request->has('featured');
        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes,'tags'));
        if($attributes['tags'] ?? false){
            foreach( explode(',',$attributes['tags']) as $tag ){
                $job->tag($tag);
            } 
        }

        return redirect('/');
    }

}
