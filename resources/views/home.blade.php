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
   </div>
</section>

    <section id="presentation">
        <div class="row">
            <div class="col-md-8 " >
                <div class="my-3 p-3 bg-white rounded left-section">
                    <h1 class="pb-2 font-weight-bold border-bottom border-gray">Welcome to HE&DF </h1>
                    <p class="text-justify">
                        The Health Education & Development Foundation(HE&DF) is a statutory body with the responsibility
                        of establishing and maintaining high standards of medical education and recognition
                        of medical qualifications in Bangladesh. It registers doctors to practice in Bangladesh,
                        in order to protect and promote the health and safety of the public by ensuring
                        proper standards in the practice of medicine.
                    </p>

                    <div class="row text-center">
                        <div class="col">
                            <img class="rounded-circle border shadow-lg mb-4" src="https://www.bmdc.org.bd/cis/web/img/photo_president.png" alt width="140" height="140">
                            <h4 class="web-header font-weight-bold">Prof. Mohammad Sahidullah</h4>
                            <p class="font-weight-bold">President</p>
                            <p>Health Education & Development Foundation </p>
                        </div>
                        <div class="col">
                            <img class="rounded-circle border shadow-lg mb-4" src="https://www.bmdc.org.bd/cis/web/img/photo_president.png" alt width="140" height="140">
                            <h4 class="web-header font-weight-bold">Prof. Mohammad Sahidullah</h4>
                            <p class="font-weight-bold">President</p>
                            <p>Health Education & Development Foundation </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>

        </div>

    </section>



@endsection