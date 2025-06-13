<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Job;
use App\Models\Employer;
use App\Models\User;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(10);

        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $employer = Employer::where('user_id', Auth::id())->first();

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => $employer->id
        ]);

        Illuminate\Support\Facades\Mail::to($job->employer->user)->queue(
            new App\Mail\JobPosted($job)
        );

        return redirect('/jobs/' . $job->id);
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs');
    }
}
