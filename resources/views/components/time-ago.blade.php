@include('blade-time-elements::parse-datetime')

<time-ago datetime="{{ $datetime }}" {{ $attributes }}>{{ $slot ?? '' }}</time-ago>
