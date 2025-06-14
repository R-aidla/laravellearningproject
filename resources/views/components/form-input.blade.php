@props(['explain' => ''])

<x-form-label for="{{ $attributes['name'] }}">{{ $slot }}</x-form-label>
<div class="mt-2">
    <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
        <input {{ $attributes->merge(['class' => 'block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6'])}}></input>
    </div>
    <x-form-error-field name="{{ $attributes['name'] }}" />
</div>
@if ($explain)
    <p class="mt-3 text-sm/6 text-gray-600">{{ $explain }}</p>
@endif
