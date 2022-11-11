@extends('layout.master')
@section('content')
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay bg-img">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-5" data-aos="fade-up">
            <h1 class="mb-3 text-white">Trips List</h1>
            <p>Community of curators & explorers on a journey of discovery and giving back
              Immerse yourself in different cultures and connect with like-minded people</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <style>
  .bg-img{
    background-image: url('https://images.unsplash.com/photo-1580204745408-9c18ddb64978?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
  
  }
  .bg-img::after{
position: absolute;
content: "";
top: 0;
left: 0;
right: 0;
bottom: 0;
z-index: 0;
width: 100%;
background: rgba(40, 40, 31, 0.257);
}
</style>
  <div class="site-section">

    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <div class="heading-39101 mb-5">
            <span class="backdrop text-center">Journey</span>
            <span class="subtitle-39191">Journey</span>
            <h3>Your Journey Starts Here</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
          <div class="listing-item">
            <div class="listing-image">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="listing-item-content">
              <a class="px-3 mb-3 category bg-primary" href="trip
              ">20JD/Person</a>
              <h2 class="mb-1"><a href="trip
                ">Rahayeb Desert Camp Experience</a></h2>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
          <div class="listing-item">
            <div class="listing-image">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="listing-item-content">
              <a class="px-3 mb-3 category bg-primary" href="trip
              ">20JD/Person</a>
              <h2 class="mb-1"><a href="trip
                ">Consectetur adipisicing</a></h2>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
          <div class="listing-item">
            <div class="listing-image">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="listing-item-content">
              <a class="px-3 mb-3 category bg-primary" href="trip
              ">20JD/Person</a>
              <h2 class="mb-1"><a href="trip
                ">Temporibus aperiam</a></h2>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
          <div class="listing-item">
            <div class="listing-image">
              <img src="images/img_4.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="listing-item-content">
              <a class="px-3 mb-3 category bg-primary" href="trip
              ">20JD/Person</a>
              <h2 class="mb-1"><a href="trip
                ">Expedita fugiat</a></h2>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
          <div class="listing-item">
            <div class="listing-image">
              <img src="images/img_5.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="listing-item-content">
              <a class="px-3 mb-3 category bg-primary" href="trip
              ">20JD/Person</a>
              <h2 class="mb-1"><a href="trip
                ">Consectetur adipisicing</a></h2>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
          <div class="listing-item">
            <div class="listing-image">
              <a href="trip
              "><img src="images/img_6.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="listing-item-content">
              <a class="px-3 mb-3 category bg-primary" href="trip
              ">20JD/Person</a>
              <h2 class="mb-1"><a href="trip
                ">Consectetur Amet</a></h2>
            </div>
          </div>
        </div>

      </div>
      <div class="col-12 mt-5 text-center">
        <span class="p-3">1</span>
        <a href="#" class="p-3">2</a>
        <a href="#" class="p-3">3</a>
        <a href="#" class="p-3">4</a>
      </div>
    </div>
  </div>

@endsection