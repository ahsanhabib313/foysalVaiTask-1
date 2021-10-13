<section class="footer mt-5">
    <div class="row">

        <div class="col-lg-3">

          <div class="footer-first-col">
            <p><img class="rounded-circle" src="{{asset('img/logo.png')}}" width="50" height="50"></p>
             <h6 >Health Education and Development Foundation</h6>
             <p class ="d-block mb-3 text-muted">@c 2020-2021 <br>Copyright © 2009 - 2020<br> Health Education and Development Foundation (HE&DF) <br>Developed by - Sheikh Ahsan Habib.
              Email: ahsanhabib313@gmail.com.<br>IIT, University Of Dhaka.</p>
          </div>

        </div>
        <div class="col-lg-2">
             <div class="footer-second-col">
               <h6>Important Links</h6> 
               <ul>
                 <li><a href="{{route('home')}}">Welcome to HEDF</a></li>
                 <li><a href="{{route('contact')}}" target="_blank">Contact</a></li>
                 <li><a href="{{route('search.registered.member')}}" target="_blank">Find Registered Rural Physicians</a></li>
                 <li><a class="bangla-font" href="https://mohfw.portal.gov.bd/" target="_blank">স্বাস্থ্য ও পরিবার কল্যান মন্ত্রণালয় </a></li>
                 <li><a  class="bangla-font" href="https://www.dghs.gov.bd/index.php/bd/?option=com_content&view=article&id=1454" target="_blank">স্বাস্থ্য অধিদপ্তর  </a></li>
                 <li><a  class="bangla-font" href="https://www.who.int/" target="_blank">বিশ্ব স্বাস্থ্য সংস্থা</a></li>
                
               </ul>

          </div>
        </div>
        <div class="col-lg-4">
          <div class="footer-third-col">
              <h6>Receiving Hours</h6>
              <p class ="d-block mb-3 text-muted">Sunday - Thursday, 9.00 AM to 6.00 PM</p>

              @isset($officeLocation)
             
                   {!!   html_entity_decode($officeLocation->office_location); !!}
                
              @endisset
             
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-fourth-col">
            <h6>Mailing Address</h6>
            @isset($address)

                  <p class ="d-block mb-3 text-muted">{{$address->address}}</p>
                  <p class ="d-block mb-3 text-muted">Telephone: +{{$address->telephone}}</p>
                  <p class ="d-block mb-3 text-muted">FAX: +{{$address->fax}}</p>
                  <p class ="d-block mb-3 text-muted">E-mail:{{$address->email}}</p>
                 
            @endisset
                 
          </div>
        </div>

    </div>

</section>