<section class="header">
    <div class="row">
          <div class="col-lg-8 col-12">
          <div class="header_left_part">
              
              <div class="logo_div">
                <img src="{{asset('img')}}/logo.png" alt="logo" class="logo_img" height="" width="">
              </div>

              <div class="header_left_text">
                <h3>Health Education & Development Foundation</h3>
                <p>The Health Education & Development Foundation (HE&DF) is a statutory body with the responsibility of establishing and maintaining minimum standards of health education and recognition of primary medical qualifications in Bangladesh. It registers primary physicians to practice in Bangladesh in order to protect and promote the primary health and safety of the public by ensuring proper minimum standards in the practice of the primary health worker</p>   
              </div>
              
          </div>
          </div>
          <div class="col-lg-4 d-none d-lg-block">
            <div class="header_right_part">
              @isset($advertisingLogo)
              <img class="advertise-logo" src="{{ asset('img/advertisingLogo/'.$advertisingLogo->logo) }}" alt="advertising logo">
              @endisset
             
          </div>
        </div>

    </div>

  </section>