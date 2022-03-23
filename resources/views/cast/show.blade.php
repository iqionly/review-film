@extends('layouts.master')

@section('title')
    Show Cast {{$cast->id}}
@endsection

@section('content')
    <h4>Nama: {{$cast->nama}}</h4>
    <p>Umur: {{$cast->umur}}</p>
    <p>Biodata: {{$cast->bio}}</p>
@endsection