@extends('layouts.app')

@section('title', '$group')

@section('content')

@foreach ($groups as $group)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/$group/{{ $group['id']}}"class="card-title">{{ $group['name'] }}</a>
    <p class="card-text">{{ $group['description'] }}</p>

    <a href="/$group/{{$group['id']}}/edit" class="card-link btn-warning">Edit group</a>
    <form action="/$group/{{$group['id']}}" method="POST">
      @csrf
      @method('DELETE')
    <button class="card-link btn-danger">Delete group</a>
    </form>
  </div>
</div>

@endforeach

<div>
{{$groups-> links() }}
</div>
@endsection


