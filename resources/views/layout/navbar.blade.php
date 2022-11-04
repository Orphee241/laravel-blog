
<!-- Header -->
<nav style="background-color: #13083b; color: #13083b" class="fixed-top navbar navbar-expand-lg">
    <div class="container-fluid">
      <a style="color: #ffc011; padding-left: 1em"  class=" navbar-brand fw-bold" href="/">Digitarea</a>
      <button class="rounded navbar-toggler justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-light justify-content-center"></span>
      </button>
      {{-- <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"
        aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
        <div class="animated-icon1"><span></span><span></span><span></span></div>
      </button> --}}
      <div class="collapse navbar-collapse mx" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  active" aria-current="page" href="{{URL::to("/")}}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{URL::to("/articles")}}">Tutos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{URL::to("/formations")}}">Formations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{URL::to("/categories")}}">Catégories</a>
          </li>
          @if(session("uzer"))
            <li class="nav-item">
              <a class="nav-link " href="{{URL::to("/logout")}}">Déconnexion</a>
            </li>   
          @else
            <li class="nav-item">
              <a class="nav-link " href="{{URL::to("/login")}}">Se connecter</a>
            </li>
          @endif  
          <li class="nav-item">
            <a class="nav-link " href="{{URL::to("/signup")}}">S'inscrire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{URL::to("/about")}}">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{URL::to("/contact")}}">Contact</a>
          </li>
        </ul>
        <ul style="margin-left: 25%" class="navbar-nav">
          <li style="" class="nav-item">
            <a class="nav-link text-white" href=""></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

