@include('blade-time-elements::parse-datetime')

<time-until datetime="{{ $datetime }}" {{ $attributes }}>{{ $slot ?? '' }}</time-until>
