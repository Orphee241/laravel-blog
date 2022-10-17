<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{URL::to('admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL:to('admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{URL::to('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{URL::to('admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{URL::to('admin/css/theme.css')}}" rel="stylesheet" media="all">

    {{-- Fin Admin --}}

    {{--  Pages --}}
  <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
  

    {{-- Page 404 --}}
    <!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">

	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="{{URL::to('error404/css/font-awesome.min.css')}}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{URL::to('error404/css/style.css')}}" />

  {{-- Fin 404 --}}


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/0bfd42b2db.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::to('/css/style.css')}}">
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="/path/to/tinymce.min.js"></script>
</head>
<body>
<!-- Header -->
<nav style="background-color:rgb(9, 33, 62)" class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a style="color: #ffc011" class="navbar-brand fw-bold" href="/">BLOG'Tk <i style="" class=" bi bi-code"></i></a>
      <button class="navbar-toggler justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-light justify-content-center"></span>
      </button>
      <div class="collapse navbar-collapse mx-5" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white active" aria-current="page" href="{{URL::to("/")}}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{URL::to("/articles")}}">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{URL::to("/categories")}}">Catégories</a>
          </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{URL::to("/login")}}">Se connecter</a>
            </li>  
          <li class="nav-item">
            <a class="nav-link text-white" href="{{URL::to("/signup")}}">S'inscrire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{URL::to("/about")}}">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{URL::to("/contact")}}">Contact</a>
          </li>
        </ul>
        <ul style="margin-left: 25%" class="navbar-nav">>
          <li style="" class="nav-item">
            <a class="nav-link text-white" href="{{URL::to("/add-article")}}">Ajouter un produit</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="">

    {{--Debut contenu--}}
        @yield('content')
    {{--Fin contenu--}}

</div>
{{-- <footer style="background-color: #070316;  overflow-x:hidden">
  <div class="row pt-3 "  class="foot">
    <div style="color: rgb(202, 205, 255)" class="col-lg-6 text-center">
      <p>Copyright &copy; BLOGTK 2022.</p>
    </div>
    <div style="color: rgb(202, 205, 255)" class="col-lg-6 text-center">
      <p>Create by GONA</p>
    </div>
  </div>
</footer> --}}
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>

