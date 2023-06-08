@extends('layouts.layouts')

@section('content')
<!-- DEBE HABER UN MODAL QUE APAREZCA AL CLICKEAR MI FOTO, EN LA QUE APAREZCA UN MENU DE LOGIN-->

@if(session('success'))
    <div class="alert alert-success">
        <strong>{{ session('success') }}</strong>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-error">
        <strong>{{ session('error') }}</strong>
    </div>
@endif


<div class="main-body">
    <!-- Sidebar -->
    <aside class="sidebar-left">
        <div class="top-profile">
            <img src=" {{asset('img/profile-card/bg-pattern-card.svg')}}" alt="profile-top-img">
            
        </div>
        <div class="profile-photo">
            <!--<img src=" {{asset('img/profile-card/bg-pattern-top.svg')}}" alt="profile-top-img">-->
            <img src=" {{asset('img/profile-card/profile-photo.jpg')}}" alt="profile-photo">
        </div>
        <div class="profile-data">
            <div class="name">Dante Beltrán</div>
            <div class="age">19</div>
            <div class="location">Buenos Aires, Argentina </div>
            <div class="dropdown career">
                <div class="dropdown-toggle" onclick="toggleDropdown(this)">
                    Estudios
                    <img src=" {{asset('img/arrows/chevron-down.svg')}}" class="unrotated" alt="arrow">
                </div>
                <div class="dropdown-menu hidden" id="dropdownMenu">
                    <div class="dropdown-item" onclick="selectOption(this,1)">UTN-FRGP Tecnicatura Universitaria en Programación </div>
                    <div class="dropdown-item" onclick="selectOption(this,2)">UTN-BA Machine Learning con Python </div>
                </div>
            </div>
            <div class="dropdown tech">
                    <div class="dropdown-toggle" onclick="toggleDropdown(this)">
                        Tecnologias
                        <img src=" {{asset('img/arrows/chevron-down.svg')}}" class="unrotated" alt="arrow">
                    </div>
                    <div class="dropdown-menu hidden" id="dropdownMenu">
                        <div class="dropdown-item" onclick="selectOption(this,1)">C# </div>
                        <div class="dropdown-item" onclick="selectOption(this,2)">C++ </div>
                        <div class="dropdown-item" onclick="selectOption(this,3)">PHP </div>
                        <div class="dropdown-item" onclick="selectOption(this,4)">HTML </div>
                        <div class="dropdown-item" onclick="selectOption(this,5)">CSS </div>
                        <div class="dropdown-item loginLock1" onclick="selectOption(this,6)">JS </div>
                        <div class="dropdown-item" onclick="selectOption(this,7)">SQL </div>
                    </div>
            </div>
            <div class="dropdown hobbies">
                <div class="dropdown-toggle" onclick="toggleDropdown(this)">
                    Hobbies
                    <img src=" {{asset('img/arrows/chevron-down.svg')}}" class="unrotated" alt="arrow">
                </div>
                <div class="dropdown-menu hidden" id="dropdownMenu">
                    <div class="dropdown-item" onclick="selectOption(this,1)">Ajedrez </div>
                    <div class="dropdown-item" onclick="selectOption(this,2)">Futbol </div>
                    <div class="dropdown-item" onclick="selectOption(this,2)">Basquet </div>
                </div>
            </div>

            <div class="contact">
                <div class="loginLock2">Contact me </div>
                <a target="_blank" href="https://www.linkedin.com/in/dante-beltran-bb9626216/"> 
                    <img src=" {{asset('img/contact-button/linkedin.svg')}}">
                </a>
                <a target="_blank" href="mailto:dantebelnan@gmail.com"> 
                    <img src=" {{asset('img/contact-button/mail.svg')}}">
                </a>
                <a target="_blank" href="tel:+541123738883"> 
                    <img src=" {{asset('img/contact-button/smartphone.svg')}}">
                </a>
            </div>
        </div>
        <!-- aside Scripts -->
        <script src="{{ asset('js/dropdown.js') }}"></script>
        <script src="{{ asset('js/openLogin.js') }}"></script>  
        
    </aside>

    <!-- Main -->
    <main class="sidebar-right">
        <div class="card-container">
            <div class="card">

            </div>
        </div>
        <div class="card-container">
            <div class="card">

            </div>
        </div>
        <div class="card-container">
            <div class="card">

            </div>
        </div>
        <div class="card-container">
            <div class="card">

            </div>
        </div>


    </main>
</div>
<div class="login hdn">

    <div class="login-header">
        <img src=" {{asset('img/login/close.svg')}}" class="closeButton">
    </div>
    <div class="login-body">
        <form method="POST" action="{{ route('home.login') }}">
            @csrf
            <div class="mail-container img-login">
                <img src=" {{asset('img/login/user.svg')}}">
                <input type="email" id="email" name="email" placeholder="User / Email" required autofocus>
            </div>
            <div class="pwd-container img-login">
                <img src=" {{asset('img/login/lock.svg')}}">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="btn-container">
                <input type="submit" value="Iniciar sesión">
            </div>
        </form>
    </div>
    <div class="login-footer">
        This is a login form for an admin view
    </div>
</div>
    

@endsection