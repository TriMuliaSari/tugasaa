@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<div class="container">

  <a href="/friends/create" class="btn btn-outline-info"><i class="fas fa-plus"></i> Tambah Teman</a>

  <div class="row">

  @foreach ($friends as $friend)
  <div class="col-lg-3">
    <div class="card" style="width: 17rem;">
      <div class="card-body">
      <center> <h3>  <a href="/friends/{{ $friend['id']}}"class="card-title">{{ $friend['nama'] }}</a> </h3></center>
       <h3> <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_telp'] }}</h6> </h3>
        <p class="card-text">{{ $friend['alamat'] }}</p>
     <center> <a href="/friends/{{$friend['id']}}/edit" class="btn btn-outline-success">Edit Teman</a></center>
     <form action="/friends/{{$friend['id']}}" method="POST">
      @csrf
      @method('DELETE')
    <center>  <button class="btn btn-outline-darkr">Delete Teman</a> </center>
      </form>
  </div>
</div>

</div>
@endforeach
</div>
<div class="mt-3">
  {{ $friends->links('paginationcustom') }}

</div>
</div>
@endsection



