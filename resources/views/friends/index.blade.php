@extends('layouts.app')

@section('title', 'Urutan')

@section('content')
@foreach($friends as $friend)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/friends/{{ $friend['id']}}"class="card-title">{{ $friend['nama'] }}</a>
    <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_telp'] }}</h6>
    <p class="card-text">{{ $friend['alamat'] }}</p>
    <a href="/friends/{{$friend['id']}}/edit" class="card-link btn-warning">Edit Teman</a>
    <form action="/friends/{{$friend['id']}}" method="POST">
      @csrf
      @method('DELETE')
    <button class="card-link btn-danger">Delete Teman</a>
    </form>
  </div>
        <h1>Nama - </h1>
        <h3>No Tlp - </h3>
        <h3>Alamat - </h3>
@endforeach
<div>
        {{ $friends->links() }}
</div>
@endsection