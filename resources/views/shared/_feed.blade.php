@if (count($feed_items))
    @foreach ($feed_items as $status)
        @include('statuses._status', ['user' => $status->user])
    @endforeach
@endif