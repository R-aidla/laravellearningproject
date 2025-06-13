<x-layout>
    <x-slot:heading>
        Create new Job Listing
    </x-slot:heading>
    <div>
        <form method="POST" action="/jobs">
            @csrf

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Job</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

                    @if($errors->any())
                        <x-form-error-box :errors="$errors" />
                    @endif

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <x-form-input name="title" id="title" placeholder="CEO" required>Job Title</x-form-input>
                        </div>

                        <div class="sm:col-span-2">
                            <x-form-input type="number" name="salary" id="salary" explain="What is the amount of money paid in dollars, annually?" placeholder="100000000" required>Annual Salary</x-form-input>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <x-button href="/jobs" :active="false" bg_color="red">Cancel</x-button>
                        <x-form-button>Create</x-form-button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layout>
