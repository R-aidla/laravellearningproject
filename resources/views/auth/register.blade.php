<x-layout>
    <x-slot:heading>
        Register new user
    </x-slot:heading>
    <div>
        <form method="POST" action="/register">
            @csrf

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">User</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">The user details required to register.</p>

                    @if($errors->any())
                        <x-form-error-box :errors="$errors" />
                    @endif

                    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <x-form-input name="name" id="name" placeholder="John Doe" required>Name</x-form-input>
                        </div>

                        <div class="sm:col-span-3">
                            <x-form-input type="email" name="email" id="email" placeholder="john.doe@hotmail.com" required>Email</x-form-input>
                        </div>

                        <div class="sm:col-span-3">
                            <x-form-input type="password" name="password" id="password" placeholder="Don't worry! I won't tell anyone..." required>Password</x-form-input>
                        </div>

                        <div class="sm:col-span-3">
                            <x-form-input type="password" name="password_confirmation" id="password_confirmation">Confirm Password</x-form-input>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between gap-x-6">
                        <x-button href="/login" :active="false" :text_only="true" color="indigo">Already have an account?</x-button>
                        <x-form-button>Register</x-form-button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layout>
