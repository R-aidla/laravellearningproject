<x-layout>
    <x-slot:heading>
        Homepage
    </x-slot:heading>
    @auth
        <h1>Hello, {{ Auth::user()->name }}, and welcome the Home Page.</h1>
    @endauth
    @guest
        <h1>Welcome the Home Page!</h1>
    @endguest
</x-layout>
