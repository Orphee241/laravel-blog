@extends('layout.app')
@section('title')
    Contacter Digitarea
@endsection
@section('content')
  
<div class=" contact container ">
  <h2 style="color:#211061; font-weight:800;">Contactez-nous</h2>
  <div class="row">
    <div style="height: 70%" class="col-lg-12 px-4 mt-3 pb-4  pt-4 rounded  bg-white shadow-lg " data-slider-nav-autoplay-interval="2000">
        <div class="">
            <h5 style="color: #211061; font-weight:600" class="mb-4">Vous pouvez nous contacter via les canaux ci-dessous</h5>

                <div class="col-lg-12 ">
                    <a style="text-decoration: none; color: #211061" href="httpss://wa.me/+24177187894"><i class="fa-brands fa-whatsapp mb-4" style="font-size: 20px; color: #211061"></i><span style="font-size: 20px; color: #211061"></i> Whatsapp</a>
                </div>
                <div class="col-lg-12 ">
                    <i class="fa-solid fa-envelope mb-4" style="font-size: 20px; color: #211061"></i><span style="font-size: 20px; color: #211061;"> <a style="font-size: 20px; color: #211061; text-decoration:none" href="mailto:digitarea@gmail.com">Email</a></span>
                </div>
                <div class="col-lg-12 ">
                    <i class="fa-solid fa-phone mb-4" style="font-size: 20px; color: #211061"></i><span style="font-size: 20px; color: #211061"></i><span style="font-size: 20px; color: #211061"></i> <span style="font-size: 20px; color: #211061"><a style="text-decoration: none; color:#211061" href="tel:+24177187894">Téléphone</a></span>
                </div>

        </div>
    </div>
    <div class="logoContact col-lg-5">
        <img style="margin-top: -3.3em" src="{{asset('/img/contact-center.png')}}" width="350px" alt="">
    </div>
  </div>
</div>
<footer style="background-color: #13083b" class="container-fluid pt-2 contactFooter ">
    <div class="row">
      <div class="py-4 col-lg-12">
        <p class="text-center text-white">Copyright &copy; DIgitarea {{date("Y")}}</p>
        <p class="text-center text-white">Conception GONA</p>
      </div>
    </footer>
@endsection
