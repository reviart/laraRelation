@foreach($tampung as $key)
  <h1>{{ $key->title }} <small>posted by {{ $key->owner->name }}</small></h1>
  <p>{{ $key->body }}</p><hr>
@endforeach
