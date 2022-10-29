@extends('layout.master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JoTrip</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
  <!-- new links------------------------------------------ -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet" />

  <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css" />
  <link rel="stylesheet" href="../css/animate.css" />

  <link rel="stylesheet" href="../css/owl.carousel.min.css" />
  <link rel="stylesheet" href="../css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="../css/magnific-popup.css" />

  <link rel="stylesheet" href="../css/aos.css" />

  <link rel="stylesheet" href="../css/ionicons.min.css" />

  <link rel="stylesheet" href="../css/bootstrap-datepicker.css" />
  <link rel="stylesheet" href="../css/jquery.timepicker.css" />

  <link rel="stylesheet" href="../css/flaticon.css" />
  <link rel="stylesheet" href="../css/icomoon.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <!-- new links------------------------------------------ -->
</head>
<style>
  small {
    color: red;
  }



  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
</style>


<body class="w-100">
  <!-- --------------------------------------------------- -->
<style>
    .nav-pills .nav-link.active{
        background-color:#efba6c;
    }
    a {
color:#efba6c;
    }
    .btn-primary{
        background-color: #efba6c;
    }
    .btn-primary:hover{
        background-color: #9d763b;
    }
</style>
  <!-- --------------------------------------------- -->
  <div id="test"></div>
  <!-- <div style="height: 2rem ;"></div> -->
  <div style="display: block; align-items: center" class="container mt-5 w-75 align-middle">
    <!-- Pills navs -->
    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active " id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
      </li>
    </ul>
    <!-- Pills navs -->

    <!-- Pills content -->
    <div class="tab-content">
      <!-- Sign in----------start-------------------- -->
      <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
        <form id="signForm">
          <div class="text-center mb-3 ">
            <p class="">Sign in</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="loginName" name="login_name" class="form-control" />
            <small></small>
            <label class="form-label " for="loginName">Email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="loginPassword" name="login_password" class="form-control" />
            <label class="form-label " for="loginPassword">Password</label>
          </div>

          <!-- 2 column grid layout -->
          <div class="row mb-4">
            <div class="col-md-6 d-flex justify-content-center">
              <!-- Checkbox -->
              <div class="form-check mb-3 mb-md-0"></div>
            </div>

            <div class="col-md-6 d-flex justify-content-center">
              <!-- Simple link -->
              <small id="err"></small>
            </div>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4 ">
            Sign in
          </button>
        </form>
      </div>
      <!-- Sign in----------end-------------------- -->
      <!-- Sign up----------start-------------------- -->

      <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
        <form id="regForm">
          <div class="text-center mb-3">
            <p class="">Sign up</p>
          </div>

          <!-- Name input -->

          <div class="form-outline mb-4">
            <input name="full_name" type="text" class="form-control" id="fullName" />
            <label class="form-label" for="fullName">Full Name <small></small></label>
          </div>

          <!-- Email input -->

          <div class="form-outline mb-4">
            <input type="text" id="registerEmail" name="register_email" class="form-control" />
            <label class="form-label" for="registerEmail">Email <small></small>
            </label>
          </div>
          <small id="taken"></small>

          <!-- address input -->
          <div class="form-outline mb-4">
            <input type="text" id="address" name="address" class="form-control" />
            <label class="form-label " for="address">address <small></small>
            </label>
          </div>
          <!-- phone input -->

          <div class="form-outline mb-4">
            <input type="number" id="telNum" name="tel_num" class="form-control" />
            <label class="form-label " for="telNum">Phone Number <small></small></label>
          </div>
          <div class="form-outline mb-4">
            <input type="date" id="dobReg" name="dob_reg" class="form-control" />
            <label class="form-label " for="dobReg">Birthday <small></small></label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="registerPassword" name="register_password" class="form-control" value="" />
            <label class="form-label " for="registerPassword">Password <small></small></label>
          </div>

          <!-- Repeat Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="registerRepeatPassword" name="register_repeat_password" class="form-control" value="" />
            <label class="form-label " for="registerRepeatPassword">Repeat password <small></small></label>
          </div>

          <!-- Checkbox -->


          <!-- Submit button -->
          <button type="submit" id="registerBtn" name="register_btn" class="btn btn-primary btn-block mb-3 ">
            Sign up
          </button>
        </form>
      </div>
      <!-- Sign up----------end-------------------- -->
    </div>
    <!-- Pills content -->
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
  <script src="./javascript/register.js"></script>
  <script src="./javascript/login.js"></script>
  <!-- script new -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
  <!-- script new -->

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
@endsection
</body>

</html>