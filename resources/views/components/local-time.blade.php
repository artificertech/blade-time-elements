@props(['datetime'])
@php
$datetime = $datetime instanceof \Carbon\Carbon ? $datetime->toIso8601ZuluString() : $datetime;
@endphp


<local-time datetime="{{ $datetime }}" {{ $attributes }} wire:replace.self>{{ $slot }}</local-time>
