@extends('master')
@section('content')

{{--marque section--}}
    
   <section class="marque">

            <div class="alert alert-success">
               <p class="alert-success font-weight-bold pb-1 m-0 pt-2 "><marquee  direction="left">Welcome to your Official website of Health Education and Development Foundation</marquee></p>
            </div>

   </section>

{{--Carousel section--}}
<section class="carousel"> 
   
   <div class="row">
      <div class="col-md-12">
         
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
          {{--   <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol> --}}
            <div class="carousel-inner">
              <div class="carousel-item active">
               <img src="../img/carousel.png" class="d-block w-100" alt="carousel Image">
              </div>
              <div class="carousel-item">
               <img src="../img/carousel.png" class="d-block w-100" alt="carousel Image">
              </div>
              <div class="carousel-item">
               <img src="../img/carousel.png" class="d-block w-100" alt="carousel Image">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </div>
</section>
{{----}}



@endsection