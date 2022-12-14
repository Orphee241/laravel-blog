<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">

    <title>@yield('titre')</title>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/0bfd42b2db.js" crossorigin="anonymous"></script>

    <!-- Fontfaces CSS-->
    <link href="{{URL::to('admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::to('admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
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
    <link href="{{URL::to('admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{URL::to('admin/css/theme.css')}}" rel="stylesheet" media="all">

    {{-- Fin Admin --}}

    {{--  Pages --}}
  <!-- Fontfaces CSS-->
    <link href="admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    
	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="{{URL::to('error404/css/font-awesome.min.css')}}" />

    <!-- Vendor CSS-->
    <link href="admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="admin/css/theme.css" rel="stylesheet" media="all">

    {{-- Material Design --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  

    {{-- Page 404 --}}
    <!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">

	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="{{URL::to('error404/css/font-awesome.min.css')}}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{URL::to('error404/css/style.css')}}" />

  {{-- Fin 404 --}}


    <!-- CSS only -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::to('css/style.css')}}">
    <script src="https://kit.fontawesome.com/0bfd42b2db.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::to('css/style.css')}}"> --}}
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="/path/to/tinymce.min.js"></script>

    {{-- tinymce --}}
    <script
    type="text/javascript"
    src='https://cdn.tiny.cloud/1/j1z3kgdpv9mhqkw7vwknuthcrg28mo5imhkh2jew7po5mu0s/tinymce/6/tinymce.min.js'
    referrerpolicy="origin">
  </script>
  
  <script type="text/javascript">
  tinymce.init({
    selector: '#myTextarea',
    mobile:{
        menubar: true
    },
    width: 600,
    height: 300,
    plugins: [
      'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
      'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
      'media', 'table', 'emoticons', 'template', 'help'
    ],
    toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
    },
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'
  });
  </script>
</head>
<body>

    <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Tableau de bord</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{URL::to('/admin/dashboard')}}">
                                        <i class="zmdi zmdi-home"></i>Accueil</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                        <li>
                            <a href="{{URL::to('/admin/users')}}">
                                <i class="zmdi zmdi-account-o"></i></i>Utilisateurs</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/admin/articles')}}">
                                <i style="transform:translateY(-3.2px); display:inline-block" class="bi bi-card-text"></i></i>Articles</a>
                        </li>
                        <li>
                        <a href="{{URL::to('/admin/tutos')}}">
                            <i class="fas fa-chart-bar"></i>Tutos</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/admin/categories')}}">
                                <i style="transform:translateY(-3.2px); display:inline-block" class="bi bi-card-list"></i></i>Cat??gories</a>
                        </li>
                            <a href="{{URL::to('/admin/stats')}}">
                            <i class="fas fa-chart-bar"></i>Statistiques</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header> 
    <!-- END HEADER MOBILE-->
    
    <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Tableau de bord</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{URL::to('/admin/dashboard')}}">
                                        <i class="fa-solid fa-house"></i>Accueil</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{URL::to('/admin/users')}}">
                                <i class="zmdi zmdi-account-o"></i></i>Utilisateurs</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/admin/articles')}}">
                                <i style="transform:translateY(-3.2px); display:inline-block" class="bi bi-card-text"></i></i>Articles</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/admin/tutos')}}">
                                <i class="fa-solid fa-file-video"></i>Tutos</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/admin/formations')}}">
                                <i class="fa-solid fa-file-video"></i>Formations</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/admin/categories')}}">
                                <i style="transform:translateY(-3.2px); display:inline-block" class="bi bi-card-list"></i></i>Cat??gories</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/admin/stats')}}">
                                <i class="fas fa-chart-bar"></i>Statistiques</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>  
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Rechercher" />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="noti-wrap">
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-comment-more"></i>
                                    <span class="quantity">1</span>
                                    <div class="mess-dropdown js-dropdown">
                                        <div class="mess__title">
                                            <p>You have 2 news message</p>
                                        </div>
                                        <div class="mess__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                            </div>
                                            <div class="content">
                                                <h6>Michelle Moreno</h6>
                                                <p>Have sent a photo</p>
                                                <span class="time">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class="mess__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                            </div>
                                            <div class="content">
                                                <h6>Diane Myers</h6>
                                                <p>You are now connected on message</p>
                                                <span class="time">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class="mess__footer">
                                            <a href="#">View all messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-email"></i>
                                    <span class="quantity">1</span>
                                    <div class="email-dropdown js-dropdown">
                                        <div class="email__title">
                                            <p>You have 3 New Emails</p>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, 3 min ago</span>
                                            </div>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, Yesterday</span>
                                            </div>
                                        </div>
                                        <div class="email__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                            </div>
                                            <div class="content">
                                                <p>Meeting about new dashboard...</p>
                                                <span>Cynthia Harvey, April 12,,2018</span>
                                            </div>
                                        </div>
                                        <div class="email__footer">
                                            <a href="#">See all emails</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <span class="quantity">3</span>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">GONA</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">GONA</a>
                                                </h5>
                                                <span class="email">gona@gmail.com</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Cpmpte</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"></i>Param??tres</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="#">
                                                <i class="zmdi zmdi-power"></i>D??connexion</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->
        <!--END HEADER DESKTOP-->

        
        <!-- END PAGE CONTAINER-->
    </div>
 
  <div>
    {{--Debut contenu--}}
      @yield('adminContent')
    {{--Fin contenu--}}
  </div>

  {{-- ADMIN --}}
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- Jquery JS-->
    <script src="{{URL::to('admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{URL::to('admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{URL::to('admin/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{URL::to('admin/vendor/wow/wow.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{URL::to('admin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{URL::to('admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{URL::to('admin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{URL::to('admin/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{URL::to('admin/js/main.js')}}"></script>
    {{-- END ADMIN --}}

    

</body>


