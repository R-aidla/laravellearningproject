<x-layout>
    <x-slot:heading>
        Job offerings
    </x-slot:heading>
    <div class="mt-6 flex items-center justify-between gap-x-6">
        {{ $jobs->links('vendor.pagination.simple-tailwind') }}
        <a href="/jobs/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Job Listing</a>
    </div>
    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="block rounded-md px-3 m-2 py-2 text-sm font-medium bg-gray-300">
            <h2><strong>Company:</strong> {{ $job->employer->company_name }}</h2>
            <strong>{{ $job->title }} | </strong> Pays ${{ $job->salary }} per year.
        </a>
    @endforeach
    <div>
        {{ $jobs->links() }}
    </div>
    </div>
</x-layout>
