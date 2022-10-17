@extends('layout.app')
@section('title')
    Contactez BLOGTK
@endsection
@section('content')
  
<div class="contact container mt-4">
  <h3 style="color:#211061">Contactez-nous</h3>
  <div class="row">
    <div style="height: 70%" class="col-lg-7 px-4 mt-3 rounded swiffy-slider slider-item-show2 slider-nav-outside slider-nav-dark slider-nav-sm slider-nav-visible slider-nav-page slider-item-snapstart slider-nav-autoplay slider-nav-autopause slider-item-ratio slider-item-ratio-contain slider-item-ratio-32x9 bg-white shadow-lg py-3 py-lg-4" data-slider-nav-autoplay-interval="2000">
        <div class="mt-1 slider-container justify-content-center">
            <h5 style="color: #211061" class="mb-4">Vous pouvez nous contacter via les canaux ci-dessous</h5>

                <div class="col-lg-7 justify-content-center">
                    <a style="text-decoration: none; color: #211061" href="httpss://wa.me/+24177187894"><i class="fa-brands fa-whatsapp mb-4" style="font-size: 16px; color: #211061"></i> Cliquez ici</a>
                </div>
                <div class="col-lg-7 justify-content-center">
                    <i class="fa-solid fa-envelope mb-4" style="font-size: 16px; color: #211061"></i><span> nzienguiakoumbou@gmail.com</span>
                </div>
                <div class="col-lg-7 justify-content-center">
                    <i class="fa-solid fa-phone mb-4" style="font-size: 16px; color: #211061"></i><span>  +241 77 18 78 94 / +241 62 10 28 05</span>
                </div>

        </div>
    </div>
    <div class="col-lg-5">
        <img style="margin-top: -3.3em" src="{{URL::to("/")}}/img/contact-center.png" width="350px" alt="">
    </div>
  </div>
</div>
@endsection
