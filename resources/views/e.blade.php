@foreach ($submits as $submit)
    <p>{{ $submit->name }} booked {{ $submit->sport }} on {{ $submit->date }} at {{ $submit->time }}</p>
@endforeach
