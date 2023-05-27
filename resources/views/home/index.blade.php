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
            <div class="career">
                <div class="dropdown">
                    <div class="dropwodn-toggle" onclick="toggleDropdown(this)">Carrera </div>
                    <div class="dropdown-menu" id="dropdownMenu">
                        <div class="dropdown-item" onclick="selectOption(this,1)">opt1 </div>
                        <div class="dropdown-item" onclick="selectOption(this,2)">opt1 </div>
                    </div>
                </div>
            </div>
            <div class="tech">
                <div class="dropdown">
                    <div class="dropwodn-toggle" onclick="toggleDropdown(this)"> Tecnologias </div>
                    <div class="dropdown-menu" id="dropdownMenu">
                        <div class="dropdown-item" onclick="selectOption(this,1)">opt1 </div>
                        <div class="dropdown-item" onclick="selectOption(this,2)">opt1 </div>
                    </div>
                </div>
           
            </div>
            <div class="hobbies">
            Pasiones
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