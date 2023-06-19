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
        <form action="{{ route('projects.create')}}" method="get" id="adminPanel">
            @csrf
            <input type="hidden" value=true name="logged" id="logged">
            <button type="submit" class="navbar-button">Create Site</button>
        </form>
        
    </aside>

    <main class="sidebar-right">
        @foreach ($projects as $key=>$project)
        <div class="card-container">
            <div class="card">
                <div class="title">{{$project->name}} </div>
                <div class="framework">{{$project->framework}} </div>
                <form action="{{ route('projects.edit', ['id' => $project->id])}}" method="get" id="adminPanel">
                    @csrf
                    <input type="hidden" value=true name="logged" id="logged">
                    <button type="submit" class="navbar-button">Edit Site</button>
                </form>
                <form action="{{ route('projects.delete', ['id' => $project->id])}}" method="get" id="adminPanel">
                    @csrf
                    <input type="hidden" value=true name="logged" id="logged">
                    <button type="submit" class="navbar-button">Delete Site</button>
                </form>
            </div>
        </div>
        @endforeach



    </main>
</div>
@endsection