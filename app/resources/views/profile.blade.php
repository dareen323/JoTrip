@extends('layout.master')
@section('content')
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<!------ Include the above in your HEAD tag ---------->

<center> 
<div class="container  m-1 p-3">
	<div class="m-2">
		<div  >
              <div class="">
                    {{-- <img class="card-img-top" src="https://picsum.photos/200/150/?random"> --}}
                    <div class="card-block">
                        <figure class="profile">
                            <img src="https://picsum.photos/200/150/?random" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">User Name</h4>
                        <div class="meta">
                            <a>Email@gmail.com</a>
                        </div>
                        <div class="card-text mb-2">
                           Amman-Jordan
                        </div>
                    </div>
                     <!--<div class="card-footer">
                        <small>Last updated 3 mins ago</small>
                        <button class="btn btn-secondary float-right btn-sm">show</button>
                    </div>-->
                    
                    <div class="card-footer tab-card-header ">
                      <ul class="nav  card-header-tabs nav-pills nav-justified " id="myTab" role="tablist">
                        <li class="nav-item ">
                             <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true"><span class=" badge fw-bolder" style="font-size:1rem">Personal information</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false"><span class=" badge fw-bolder" style="font-size:1rem">Booking history</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false"><span class=" badge fw-bolder" style="font-size:1rem">My Blogs</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="Four" aria-selected="false"><span class=" badge fw-bolder" style="font-size:1rem">My Wallet</span></a>
                        </li>
                      </ul>
                    </div>
                    
                <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active p-3 " id="one" role="tabpanel" aria-labelledby="one-tab">
                        <div class="col-md-10">
                            <div class="card m-3">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name:</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                    Kenneth Valdez
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Email:</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                    fip@jukmuh.al
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Phone:</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                    (239) 816-9029
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile:</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                    (320) 380-4539
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Address:</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                    Bay Area, San Francisco, CA
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-12">
                                    <a href="#" class="btn btn-primary">Edit Profile</a>              
                                </div>
                                </div>
                              </div>
                            </div>
                        </div>
                     </div>
                      <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                        <div class="row">
                        <div class="card col-md-4 mx-1" >
                            {{-- <img src="https://picsum.photos/200/150/?random" class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                              <h5 class="card-title">TRIP title</h5>
                              <p class="card-text">DATE: </p>
                              <p class="card-text">CITY: </p>

                              <a href="#" class="btn btn-primary">Invoice</a>
                            </div>
                        
                         </div>   
                         <div class="card col-md-4" >
                          {{-- <img src="https://picsum.photos/200/150/?random" class="card-img-top" alt="..."> --}}
                          <div class="card-body">
                            <h5 class="card-title">TRIP title</h5>
                            <p class="card-text">DATE: </p>
                            <p class="card-text">CITY: </p>

                            <a href="#" class="btn btn-primary">Invoice</a>
                          </div>
                       </div>   
                      </div>
                      </div>
                      
                      <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                        <div class="card col-md-4" >
                            {{-- <img src="https://picsum.photos/200/150/?random" class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                              <h5 class="card-title">BLOG title</h5>
                              <p class="card-text">Publish Date:</p>
                              <p class="card-text">City:</p>
                              <a href="#" class="btn btn-primary">More details</a>
                            </div>
                          </div>         
                      </div>
                      <div class="tab-pane fade p-3" id="four" role="tabpanel" aria-labelledby="Four-tab">
                        <h5 class="card-title">Tab Card Four</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary"></a>              
                      </div>
                    </div>
                </div>
            </div>
	</div>
</div>
</center>
<style>


/* .card {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
} */

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    /* padding: 1em; */
    /* border: none; */
    /* border-top: 1px solid rgba(34, 36, 38, .1); */
    /* box-shadow: none; */
}

.card-img-top {
    display: block;
    width: 100%;
    height: auto;
}

.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
}

/* .card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    background-color: aquamarine;
    border-top: 1px solid rgba(27, 23, 23, 0.05) !important;
    background: #fff;
} */

.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}

.profile {
    /* position: absolute; */
    /* top: -12px; */
    padding: 2%;
    display: inline-block;
    overflow: hidden;
    box-sizing: border-box;
    width: 30%;
    height: 30%;
    margin: 0;
    border: 1px solid #fff;
    border-radius: 50%;
}

.profile-avatar {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.profile-inline {
    position: relative;
    top: 0;
    display: inline-block;
}

.profile-inline ~ .card-title {
    display: inline-block;
    margin-left: 4px;
    vertical-align: top;
}

.text-bold {
    font-weight: 700;
}

.meta {
    font-size: 1em;
    color: rgba(0, 0, 0, .4);
}

.meta a {
    text-decoration: none;
    color: rgba(0, 0, 0, .4);
}

.meta a:hover {
    color: rgba(0, 0, 0, .87);
}

/* Tabs Card */
.tab-card {
  border:1px solid #eee;
}

.tab-card-header {
  background:none;
}
/* Default mode */
.tab-card-header > .nav-tabs {
  border: none;
  margin: 0px;
}
.tab-card-header > .nav-tabs > li {
  margin-right: 2px;
}
.tab-card-header > .nav-tabs > li > a {
  border: 0;
  border-bottom:2px solid transparent;
  margin-right: 0;
  /* color: #737373; */
  padding: 2px 15px;
}

.tab-card-header > .nav-tabs > li > a.show {
    /* border-bottom:2px solid #007bff; */
    /* color: #007bff; */
}
.tab-card-header > .nav-tabs > li > a:hover {
    /* color: #373430; */
}

.tab-card-header > .tab-content {
  padding-bottom: 0;
}
@media screen and (max-width: 400px) {
  .btn{
/* width: 14rem; */
font-size: .5rem;
  }
 
}
</style>
@endsection