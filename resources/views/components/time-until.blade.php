@props(['datetime'])
@php
$datetime = $datetime instanceof \Carbon\Carbon ? $datetime->toIso8601ZuluString() : $datetime;
@endphp


<time-until datetime="{{ $datetime }}" {{ $attributes }} wire:replace.self>{{ $slot }}</time-until>
