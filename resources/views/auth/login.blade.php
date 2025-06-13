<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>
    <div>
        <form method="POST" action="/login">
            @csrf

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">User</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">Login to create new job listings.</p>

                    @if($errors->any())
                        <x-form-error-box :errors="$errors" />
                    @endif

                    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <x-form-input type="email" name="email" id="email" :value="old('email')" required>Email</x-form-input>
                        </div>

                        <div class="sm:col-span-3">
                            <x-form-input type="password" name="password" id="password" required>Password</x-form-input>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between gap-x-6">
                        <x-button href="/register" :active="false" :text_only="true" color="indigo">Register an account</x-button>
                        <x-form-button>Login</x-form-button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layout>
