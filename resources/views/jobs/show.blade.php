<x-layout>
    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>
    <h1><strong>Company:</strong> {{ $job->employer->company_name }}</h1>
    <h1><strong>Job title:</strong> {{ $job->title }}</h1>
    <h1><strong>Salary:</strong> ${{ $job->salary }}</h1>
    <h1><strong>Employer Name:</strong> {{ $job->employer->user->name }}</h1>

        <div class="flex items-center justify-between gap-x-6 mt-10">

            @can('edit', $job)
                <x-button href="/jobs/{{ $job->id }}/edit" bg_color="yellow">Edit Job</x-button>
            @endcan

            <x-button href="/jobs" bg_color="gray">Back to Listings</x-button>
        </div>
</x-layout>
