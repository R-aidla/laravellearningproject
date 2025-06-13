<h2>
    Dear {{ $job->employer->user->name }}
</h2>

<p>
    You created a new job posting!
</p>

<p>
    <a href="{{ url('/jobs/') . $job->id }}">View Your Job Listing</a>
</p>

