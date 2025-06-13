@props(['errors' => []])


<div class="mt-10 rounded-md bg-red-900/10 px-3 py-2">
    <strong class="mt-1 text-sm/6 text-red-600">Something went wrong!</strong>
    <ul>
        @foreach ($errors->all() as $error)
            <li class="mt-1 text-sm/6 text-red-600">{{ $error }}</li>
        @endforeach
    </ul>
</div>
