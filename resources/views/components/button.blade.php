@props(['active' => false, 'bg_color' => 'gray', 'text_only' => false, 'color' => 'white'])

@php
    $baseButton = "rounded-md px-3 py-2 text-sm font-semibold text-{$color} shadow-xs";
    $activeButton = $text_only ? "text-{$color}-800" : "bg-{$bg_color}-800 outline-{$bg_color}-600" . "outline-4 outline-offset-4";
    $inactiveButton = $text_only ? "text-{$color}-500 hover:text-{$color}-600" : "bg-{$bg_color}-500 hover:bg-{$bg_color}-600" . "focus-visible:outline-{$bg_color}-600 focus-visible:outline-4 focus-visible:outline-offset-4";
@endphp

<a {{ $attributes }} class="{{ $baseButton }} {{ $active ? $activeButton : $inactiveButton }}">{{ $slot }}</a>
