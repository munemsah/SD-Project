@extends('website.layouts.default')

@section('content')

        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <marquee class="text-warning"><h4>Welcome to our Diagnostic Center</h4></marquee>
                            <br>
                            <h2 class="mb-5">The trusted and Friendly medical Care</h2>                            <!-- Signup form-->
                            <form>
                                <div class="input-group input-group-lg">
                                    <button class="btn btn-primary" id="button-submit" type="button">Learn More</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
   

        <section class="features-icons bg-light text-center">
        <h2>Our Services</h2>
        <p class="lead mb-0">We are committed to provide affordable services, without any compromise on the quality of service – so that you are able to remain happy.</p>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-lamp m-auto text-primary"></i></div>
                            <h3>Imaging</h3>
                            <p class="lead mb-0">Alfa Diagnostic Centre Ltd. is an advanced Centre providing the diagnostic imaging services in an elevated ambience, completed by service and report efficiency.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-file-medical m-auto text-primary"></i></div>
                            <h3>Pathology</h3>
                            <p class="lead mb-0">Our Pathology division offers a comprehensive range of laboratory tests for diagnosis, management and prevention of a wide variety of diseases.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-telephone m-auto text-primary"></i></div>
                            <h3>Online Help</h3>
                            <p class="lead mb-0">We have talent, experienced, reputed and dynamic doctors in our team working in a growing practice, they help you in Online</p>
                        </div>
                    </div>
                </div>
            </div>
    <br> <br>
<div class="container">
	<div class="row">
	<div class="col-lg-4 col-md-4 col-12">
	<div class="card">
  <img class="card-img-top" src="{{ asset('images/111.jpg')}}" alt="Card image">
  		<div class="card-body">
        <a href="#" class="btn btn-secondary btn-block text-uppercase ">Call For Appointment</a>
  			</div>
		</div>
	</div>

<div class="col-lg-4 col-md-4 col-12">
	<div class="card">
  <img class="card-img-top" src="{{ asset('images/112.jpg')}}" alt="Card image">
  		<div class="card-body">
        <a href="#" class="btn btn-secondary btn-block text-uppercase ">Find Doctor</a>
  		</div>
	</div>
</div>

		<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
			  <img class="card-img-top" src="{{ asset('images/113.jpg')}}" alt="Card image">
				<div class="card-body">
          <a href="{{ URL::to('/servicelist') }}" class="btn btn-secondary btn-block text-uppercase ">Test and Service Charge</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-1.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2 class="text-primary">OUR LATEST TECHNOLOGY</h2>
                        <p class="lead mb-0">At Popular Diagnostic Centre Ltd. We have been actively revamping our technologies with the most modern one since the first day of our journey. All the aged machineries are being regularly replaced with the latest one. Technical team members are maintaining the machineries actively so that these can provide the best outcome.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-2.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2 class="text-primary">Our Doctors</h2>
                        <p class="lead mb-0">We have talent, experienced, reputed and dynamic doctors in our team working in a growing practice. All the doctors are whole heartedly waiting to help out the patients with majestic treatments. Our doctors are supported by practice nurses, management and clerical staff all providing high quality care to our patients.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-3.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2 class="text-primary">Our Tech Support Team</h2>
                        <p class="lead mb-0" >We have talent, experienced, reputed and dynamic doctors in our team working in a growing practice. All the doctors are whole heartedly waiting to help out the patients with majestic treatments. Our doctors are supported by practice nurses, management and clerical staff all providing high quality care to our patients.</p>
                    </div>
                </div>
            </div>
        </section>


        
        <!-- Call to Action-->

        <section cclass="testimonials text-center bg-light">
            <div class="container p-0">
  <div class="card-deck">
    <div class="card ">
      <div class="card-body text-center">
	  <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg>
				
				<h2 class="text-danger"> 2555</h2>
				<h4> Success Simle</h4>
      </div>
    </div>
    <div class="card ">
      <div class="card-body text-center">
	  <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-droplet-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
  <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
</svg>
				
				<h2 class="text-danger"> 3555</h2>
				<h4> Happy Donor</h4>
      </div>
    </div>
    <div class="card ">
      <div class="card-body text-center">
	  <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-emoji-smile" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
  <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>
				
				<h2 class="text-danger"> 1900</h2>
				<h4> Happy Recipient</h4>
      </div>
    </div>
	
    <div class="card ">
      <div class="card-body text-center">	
        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-award" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
</svg>		
				<h2 class="text-danger"> 955</h2>
				<h4> Total Awards</h4>
      </div>


    </div>  
  </div>
</div>

</section>
        



        @stop