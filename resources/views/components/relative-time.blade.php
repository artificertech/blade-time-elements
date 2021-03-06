@props(['datetime'])
@php
$datetime = $datetime instanceof \Carbon\Carbon ? $datetime->toIso8601ZuluString() : $datetime;
@endphp


<relative-time datetime="{{ $datetime }}" {{ $attributes }} wire:replace.self>{{ $slot }}</relative-time>
