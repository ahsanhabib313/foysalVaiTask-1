@extends('master')
@section('content')

{{--marque section--}}
    
   <section class="marque my-3">

            <div class="alert alert-success">
               <p class="alert-success font-weight-bold pb-1 m-0 pt-1 ">
                   <marquee  direction="forwards" >
                            @isset($notices)
                                @foreach ($notices as $notice)
                                    {{$notice->notice}}
                                @endforeach
                            @endisset
                    </marquee>
                </p>
            </div>

   </section>

{{--Carousel section--}}
<section class="carousel"> 
   
   <div class="row">
      <div class="col-lg-12">

        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                @isset($slidePhotos)
                    @php 
                        $firstIndex = true ;
                        $slideNum = 0;
                    @endphp
                    @foreach ($slidePhotos as $slidePhoto)
                           
                            <li data-target="#demo" data-slide-to="{{$slideNum}}" class=" {{$firstIndex == true ? 'active':''}}"></li>
                            @php 
                                    $firstIndex = false ;
                                    $slideNum += 1; 
                            @endphp

                    @endforeach
                @endisset
             
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
                @isset($slidePhotos)
                        @php $firstIndex = true ; @endphp
                        @foreach ($slidePhotos as $slidePhoto)
                            <div class="carousel-item {{$firstIndex == true ? 'active':''}}">
                                <img  src="{{asset('img/slider/'.$slidePhoto->photo)}}" alt="hedf slide image">
                            </div>
                            @php $firstIndex = false ; @endphp
                        @endforeach
                @endisset
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
      </div>
   </div>
</section>

    <section id="presentation " class="border-bottom">
        <div class="row">
            <div class="col-lg-8 " >
                <div class="my-3 p-3 bg-white rounded shadow-sm presentation-left-section">
                    <h1 class="pb-2 font-weight-bold border-bottom border-gray">Welcome to HE&DF </h1>
                    <p class="text-justify">
                        The Health Education & Development Foundation (HE&DF) is a statutory body with the responsibility of establishing and maintaining minimum standards of health education and recognition of primary medical qualifications in Bangladesh. It registers primary physicians to practice in Bangladesh in order to protect and promote the primary health and safety of the public by ensuring proper minimum standards in the practice of the primary health worker
                    </p>

                    <div class="row text-center my-5">
                       
                            @isset($employees)

                            @foreach ($employees as $employee)
                                <div class="col-6">
                                    <img class="employee-img rounded border shadow-lg mb-4 img-fluid" src="{{asset('img/employee/'.$employee->photo)}}">
                                    <h4 class="web-header font-weight-bold">{{$employee->name}}</h4>
                                    <p class="font-weight-bold">{{$employee->post}}</p>
                                    <p>Health Education & Development Foundation </p>
                                </div>
                            @endforeach
                            
                        @endisset
                      
                       
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="my-3 p-3 news-section " id="news-section">
                    <h5 class="recent-news border-bottom border-gray pb-2 mb-0 text-muted font-weight-bold">Recent News/Updates</h5>
                    <div class="news-scroll">
                        <div class="card news-card" >
                            <ul id="news-ticker">
                                @isset($recentNews)
                                    
                                @foreach ($recentNews as $recentNew)
                                    <li class="news-list ">
                                        <div class="news-feed">
                                            <div class="news-img">
                                                <img  src="../img/icons8-news.svg" width="32" height="32">
                                            </div>
                                            <div class="news-details">
                                                <p class="news-type text-muted">{{$recentNew->created_at}} - {{$recentNew->type}}</p>
                                                <a class="news-link" href="{{route('download.recentNews',$recentNew->file )}}">{{$recentNew->title}}</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                                @endisset
                                
                               
                            </ul>
                           
                        </div>
                       
                    </div>
                    <a class="all-update-news" href="#">All Updates</a>
                </div>

            </div>

        </div>

    </section>

    <section id="curriculum" class="p-4">
        <div class="row">
            <div class="col-12">
                <h5 class="m-1 curriculum-heading mb-3 font-weight-bold"> HE&DF Curriculums</h5>
            </div>
        </div>
        <div class="row">
            @isset($curriculums)
                 
                    @foreach ($curriculums as $curriculum)
                            <div class="col-lg-3">
                                <div class="card card-width  box-shadow border border bg-light my-2">
                                    <div class="card-body">
                                    <img class="card-img-top" src="../img/StackOfBooks.svg" alt="Card image cap" width="20" height="20">
                                    <h5 class="card-title mt-4 news-title ">{{$curriculum->title}}</h5>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between">
                                        <div><a href="{{route('download.curriculum',$curriculum->file )}}"><i class="fas fa-download"></i></a> </div>
                                        <div><a href="#">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
            @endisset   
           

           
        </div>
    </section>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script type="text/javascript">

        var interval;

        function startTicker()
        {

            $('.news-list:first').slideUp(function(){
                $(this).appendTo($('#news-ticker')).slideDown();
            })

        }

        function stopTicker(){

            clearInterval(interval)

        }

        $(document).ready(function(){

            interval = setInterval(startTicker, 2000);
            $('#news-ticker').hover(function(){
                    stopTicker()
            }, function(){
                interval = setInterval(startTicker, 2000);
            });
        })

        




 </script>