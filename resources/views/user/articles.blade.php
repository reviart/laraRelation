

@foreach($tampung as $key)
  {{ $key->owner->name }} <br>
  {{ $key->title }}<br>
  {{ $key->body }}<br>
@endforeach
