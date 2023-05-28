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
            <div class="age">19</div>
            <div class="location">Buenos Aires, Argentina </div>
            <div class="dropdown career">
                <div class="dropdown-toggle" onclick="toggleDropdown(this)">
                    Carrera
                    <img src=" {{asset('img/arrows/corner-right-down.svg')}}" alt="arrow">
                </div>
                <div class="dropdown-menu" id="dropdownMenu">
                    <div class="dropdown-item" onclick="selectOption(this,1)">UTN blabla </div>
                    <div class="dropdown-item" onclick="selectOption(this,2)">SECUNDARIO blabla </div>
                </div>
            </div>
            <div class="dropdown tech">
                    <div class="dropdown-toggle" onclick="toggleDropdown(this)">
                        Tecnologias
                        <img src=" {{asset('img/arrows/corner-right-down.svg')}}" alt="arrow">
                    </div>
                    <div class="dropdown-menu" id="dropdownMenu">
                        <div class="dropdown-item" onclick="selectOption(this,1)">C# </div>
                        <div class="dropdown-item" onclick="selectOption(this,2)">PHP </div>
                    </div>
            </div>
            <div class="dropdown hobbies">
                <div class="dropdown-toggle" onclick="toggleDropdown(this)">
                    Hobbies
                    <img src=" {{asset('img/arrows/corner-right-down.svg')}}" alt="arrow">
                </div>
                <div class="dropdown-menu" id="dropdownMenu">
                    <div class="dropdown-item" onclick="selectOption(this,1)">Chess </div>
                    <div class="dropdown-item" onclick="selectOption(this,2)">Futbol </div>
                </div>
            </div>

            <div class="contact">
            Contact buttons
            </div>
        </div>
        <!-- aside Scripts -->
        <script src="{{ asset('js/dropdown.js') }}"></script> 
        
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