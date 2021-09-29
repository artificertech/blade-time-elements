@props(['datetime'])
@php
$datetime = $datetime instanceof \Carbon\Carbon ? $datetime->toIso8601ZuluString() : $datetime;
@endphp
