@extends('layouts.layouts')
@section('navbar')
    <form action="{{ route('home.adminPanel')}}" method="post" id="adminPanel">
        @csrf
        <input type="hidden" value=true name="logged" id="logged">
        <button type="submit" class="navbar-button">Admin Panel</button>
    </form>
@endsection

@section('content')

<div class="main-body">
    <!-- Sidebar -->
    <aside class="sidebar-left">
        
        
    </aside>

    <main class="sidebar-right">
        @foreach ($projects as $key=>$project)
        <div class="card-container">
            <div class="card">
                <div class="title">{{$project->name}} </div>
                <div class="framework">{{$project->framework}} </div>
            </div>
        </div>
        @endforeach



    </main>
</div>
@endsection