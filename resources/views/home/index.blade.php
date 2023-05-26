@extends('layouts.layouts')

@section('content')

<div class="main-body">
    <!-- Sidebar -->
    <aside class="sidebar-right">
        <div class="top-profile">
            <img src=" {{asset('img/profile-card/bg-pattern-card.svg')}}" alt="profile-top-img">
        </div>
        <div class="profile-photo">
            <img src=" {{asset('img/profile-card/bg-pattern-top.svg')}}" alt="profile-top-img">
        </div>
        <div class="profile-data">
            <div class="name">Dante Beltran</div>
            <div class="age">26</div>
            <div class="location">Buenos Aires, Argentina </div>
            <div class="tech">
            Tecnologias
            </div>
            <div class="hobbies">
            Pasiones
            </div>

            <div class="contact">
            Contact buttons
            </div>
        </div>

        
    </aside>

    <!-- Main -->
    <main class="sidebar-left">
        <p> CARDS SPACE </p> <br>
        <p> lorem ipsum </p> <br>
        <p> lorem ipsum </p> <br>
        <p> lorem ipsum </p> <br>
        <p> lorem ipsum </p> <br>
        <p> lorem ipsum </p> <br>
        <p> lorem ipsum </p> <br>
        <p> lorem ipsum </p> <br>
        <p> lorem ipsum </p> <br>
        <p> lorem ipsum </p> <br>
        <p> lorem ipsum </p> <br>
        <p> lorem ipsum </p> <br>
        <p> lorem ipsum </p> <br>
        <p> lorem ipsum </p> <br>
        <p> lorem ipsum </p> <br>
        <p> lorem ipsum </p> <br>

        
    </main>
</div>
    
@endsection