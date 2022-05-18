@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<a href="/groups/create" class="btn btn-info"><i class="fas fa-plus"></i> Tambah Group</a>
<div class="row">
    
  
@foreach ($groups as $group)
<div class="col-lg-3">
  
<div class="card" style="width: 17rem;">
  <div class="card-body">
<center> <h3>  <a href="/groups/{{ $group['id']}}"class="card-title">{{ $group['name'] }}</a> </h3> </center>
   <p class="card-text">{{ $group['description'] }}</p>
  <hr>
 <center><a href="{{url('groups/createmember/'. $group['id'])}}" class="btn btn-info">Tambah Anggota</a></center>

@foreach ($group->member_groups as $friend)
@if ($friend->status == 1)
  <li class="mt-2"> {{$friend->friends->nama}} | <a href="{{url('groups/deletemember/'. $friend->id)}}" class="btn btn-dark">hapus</a></li>  
@endif
@endforeach
@php
    $jumlah = $group->member_groups->where('status', 1)->count();
    $jumlah_keluar = $group->member_groups->where('status', 2)->count();
@endphp <br>
<p>Anggota : {{$jumlah}} anggota
  <br>
  Anggota Keluar : {{$jumlah_keluar}} anggota</p>




  <hr>
   <center> <a href="/groups/{{$group['id']}}/edit" class="btn btn-success">Edit Group</a> </center>
    <form action="/groups/{{$group['id']}}" method="POST">
      @csrf
      @method('DELETE')
   <center><button class="btn btn-dark">Delete Group</a></center>
    </form>
  </div>
</div>
</div>
@endforeach
</div>

<div class="mt-3">
  {{ $groups->links('paginationcustom') }}

</div>
@endsection



