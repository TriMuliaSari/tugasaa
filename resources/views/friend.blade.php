@extends('layouts.app')

@section('title', 'Urutan')

@section('content')
@foreach($friends as $friend)
        <h1>Nama - {{$friend['nama']}}</h1>
        <h3>No Tlp - {{$friend['no_tlp']}}</h3>
        <h3>Alamat - {{$friend['alamat']}}</h3>
@endforeach
        {{ $friends->links() }}

@endsection