<header >
  <div class="other-sites">
    <div class="container text-end py-1">
      <span class="me-5">
        DC POWER VISA
      </span>
      <span>
        ADDICTIONAL DC SITES
      </span>
    </div>
  </div>
  <div class="container">
    <nav class="d-flex">  
      <div class="logo me-5">
        <a href="{{route('home')}}">
        <img class="py-3" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="" />
        </a>
      </div>    
      <ul class="d-flex w-100 align-items-center justify-content-between m-0">
        <li class="">
          <a href="">CHARACTERS</a>
        </li>
        <li class="@if (Request::route()->getName() == 'comics') active @endif">
          <a href="{{route('comics')}}">COMICS</a>
        </li>
        <li class="">
          <a href="">MOVIES</a>
        </li>
        <li class="">
          <a href="">TV</a>
        </li>
        <li class="">
          <a href="">GAMES</a>
        </li>
        <li class="">
          <a href="">COLLECTIBLES</a>
        </li>
        <li class="">
          <a href="">VIDEOS</a>
        </li>
        <li class="">
          <a href="">FANS</a>
        </li>
        <li class="">
          <a href="">NEWS</a>
        </li>
        <li class="">
          <a href="">SHOP</a>
        </li>
      </ul>
      <div class="d-flex align-items-center ms-5" >
        <input placeholder="Search" type="search" name="search" id="search">
      </div>
    </nav>
  </div>
  <div class="jumbotron">
    <div class="container">

      <div class="banner text-white fw-semibold" >
        <span>CURRENT SERIES</span>
      </div>
    </div>
  </div>
  </header>