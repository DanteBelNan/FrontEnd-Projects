@extends('layouts.layouts')
@section('navbar')
    <form action="{{ route('home.adminPanel')}}" method="post" id="adminPanel">
        @csrf
        <input type="hidden" value=true name="logged" id="logged">
        <button type="submit" class="navbar-button">Admin Panel</button>
    </form>
@endsection

@section('content')

@endsection