<x-layout>
    <x-slot:heading>
        Editing Job: {{ $job->title }}
    </x-slot:heading>
    <div>
        <form method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method('PATCH')

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Job</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

                    @if($errors->any())
                    <div class="mt-10 rounded-md bg-red-900/10 px-3 py-2">
                        <strong class="mt-1 text-sm/6 text-red-600">Something went wrong!</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="mt-1 text-sm/6 text-red-600">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif


                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="title" class="block text-sm/6 font-medium text-gray-900">Job Title</label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="CEO of Mann Co." value="{{ $job->title }}" required>
                                </div>
                                @error('title')
                                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="salary" class="block text-sm/6 font-medium text-gray-900">Annual Salary</label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="number" name="salary" id="salary" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="1000000000" value="{{ $job->salary }}" required></input>
                                </div>
                                @error('salary')
                                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <p class="mt-3 text-sm/6 text-gray-600">What is the amount of money paid in dollars, annually.</p>
                        </div>
                    </div>


                    <div class="mt-6 flex items-center justify-between gap-x-6">
                        <div class="flex items-center">
                            <button form="delete" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-700 hover:text-red-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
                        </div>

                        <div class="flex items-center gap-x-6">
                            <x-button href="/jobs/{{$job->id}}" :active="false" bg_color="gray">Cancel</x-button>
                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form method="POST" action="/jobs/{{ $job->id }}" id="delete" hidden>
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>
