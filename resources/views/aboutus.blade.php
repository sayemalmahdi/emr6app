<!DOCTYPE html>
<!-- saved from url=(0025)https://dev.sjemr.com.bd/ -->
<html lang="en" class="wf-poppins-n4-active wf-active"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="https://dev.sjemr.com.bd/img/favicon.png" type="image/x-icon" rel="icon">

    <link rel="stylesheet" href="./public/login/css/bootstrap.min.css"><link rel="stylesheet" href="./public/login/css/theme-login.css"><link rel="stylesheet" href="./public/login/css/theme.css"><link rel="stylesheet" href="./public/login/css/css" media="all"><link rel="stylesheet" href="./public/login/css/style.css"></head>

<body data-new-gr-c-s-check-loaded="14.1079.0" data-gr-ext-installed="">
    <div class="preloader" style="display: none;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle> </svg>
    </div>
    <section id="wrapper" class="login-register login-sidebar">
        <div id="bg-img" style="width: calc(100% - 410px);float: left;"><img src="./public/login/images/sjemr_wallpaper.png" style="width: 100%" alt=""></div>
        <div class="login-box card">
            <div class="card-body">
                
                <!-- <a href="javascript:void(0)" class="text-center db" style="margin:20px auto;"> -->

                <a href="{{ route('login') }}" class="text-center db" style="margin:20px auto;">

    <img src="./public/login/images/sjemrlogo.png" alt="Home" width="150px;"></a>

    @php
	  $setting=DB::table('site_setting')->first();
	@endphp


	<form>
                

	    <div style="display:none;">
	    	<input type="hidden" name="_method" value="POST">
	    		<input type="hidden" name="" autocomplete="off" value="">
	    </div>  


    	<div class="form-group">
	        <div class="input email required">
	        	<label>Company Name</label>
	        		<input type="" name="" class="form-control" placeholder="{{ $setting->company_name_en }}"  tabindex="1" >
	        </div> <br>
	        <div class="input email required">
	        	<label>Company Address</label>
	        		<input type="" name="" class="form-control" placeholder="{{ $setting->company_address }}"  tabindex="1" >
	        </div> <br>
	        <div class="input email required">
	        	<label>Email address</label>
	        		<input type="" name="" class="form-control" placeholder="{{ $setting->email }}"  tabindex="1" >
	        </div> <br>
	        <div class="input email required">
	        	<label>Phone One</label>
	        		<input type="" name="" class="form-control" placeholder="{{ $setting->phone_one }}"  tabindex="1" >
	        </div> <br>
	        <div class="input email required">
	        	<label>Phone Two</label>
	        		<input type="" name="" class="form-control" placeholder="{{ $setting->phone_two }}"  tabindex="1" >
	        </div> 
    	</div>


   
   


  
	    <!-- <button class="btn btn-success waves-effect waves-light m-r-10" tabindex="3" type="submit">Go To Login Page</button> -->

	</form>


		    <button class="btn btn-warning waves-effect waves-light m-r-10" tabindex="3" >
		    	<a href="{{ route('login') }}"><i class="fa fa-angle-right"></i>Go To Login Page</button>

    </form>
            </div>
        </div>
    </section>

    <footer class="footer-login">
        © 2022 All rights reserved <a href="https://emr.com.bd/" target="blank">emr.com.bd</a>
    </footer>

    <script src="./public/login/js/webfont.js.download" type="text/javascript" async=""></script><script src="./public/login/js/jquery.min.js.download"></script><script src="./public/login/js/popper.min.js.download"></script><script src="./public/login/js/bootstrap.min.js.download"></script><script src="./public/login/js/jquery.slimscroll.js.download"></script><script src="./public/login/js/sidebarmenu.js.download"></script><script src="./public/login/js/sticky-kit.min.js.download"></script><script src="./public/login/js/custom.min.js.download"></script>    <script>
        //set remember me checked if cookie exists
        $(document).ready(function () {
            if (document.cookie.indexOf('rememberMe') > -1) {
                $("#rememberMe").prop('checked', true)
            } else {
                $("#rememberMe").prop('checked', false);
            }
            var bgImg = '<img src="./public/login/images/sjemr_wallpaper.png" style="width: 100%" alt=""/>';
            $('#bg-img').html(bgImg);
        });
    </script>
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Poppins' ] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
        // ]]>
    </script>



</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>