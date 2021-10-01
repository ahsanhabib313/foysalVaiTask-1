<section class="footer mt-5">
    <div class="row">

        <div class="col-lg-3">

          <div class="footer-first-col">
            <p><img class="rounded-circle" src="{{asset('img/logo.png')}}" width="50" height="50"></p>
             <h6 >Health Education and Development Foundation</h6>
             <p class ="d-block mb-3 text-muted">@c 2020-2021</p>
             <p class ="d-block mb-3 text-muted">Copyright © 2009 - 2020 Health Education and Development Foundation (HE&DF</p>
             <p class ="d-block mb-3 text-muted"><span>Developed by</span> - Sheikh Ahsan Habib. IIT, University Of Dhaka.</p>
          </div>

        </div>
        <div class="col-lg-2">
             <div class="footer-second-col">
               <h6>Resources</h6>
               <ul>
                 <li><a href="#">Welcome to HEDF</a></li>
                 <li><a href="#">Contact</a></li>
                 <li><a href="#">Find Registered Doctor</a></li>
                 <li><a href="#">Accessibility</a></li>
                 <li><a href="#">Terms of Use</a></li>
                 <li><a href="#">Privacy Policy</a></li>
                 <li><a href="#">Site Map</a></li>
                 <li><a href="#">Use Links</a></li>
                 <li><a href="#">Webmail Login</a></li>
               </ul>

          </div>
        </div>
        <div class="col-lg-4">
          <div class="footer-third-col">
              <h6>Receiving Hours</h6>
              <p class ="d-block mb-3 text-muted">Sunday - Thursday, 9.00 AM to 6.00 PM</p>

              @isset($officeLocation)
                    <p><iframe src="{{$officeLocation->office_location}}"   height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
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