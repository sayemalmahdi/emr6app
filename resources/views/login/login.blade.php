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
                
                <a href="javascript:void(0)" class="text-center db" style="margin:20px auto;">
    <img src="./public/login/images/sjemrlogo.png" alt="Home" width="150px;"></a>

    
<form method="POST" action="{{ route('login') }}">
                        @csrf


    <div style="display:none;"><input type="hidden" name="_method" value="POST"><input type="hidden" name="_csrfToken" autocomplete="off" value="7e80810e9453b3bdfa48cdbcbbb8251b1dcacc903c939dbcc803990076f8a48773dc1ab2297126ecd07e53c49ee88ec5fcb1175ac5cbcdd6447de154ef2bf3fb"></div>    <div class="form-group">
        <div class="input email required"><label for="email">Email</label><input type="email" name="email" class="form-control" placeholder="Username" autofocus="autofocus" tabindex="1" required="required" maxlength="50" id="email"></div>    </div>
    <div class="form-group">
        <div class="input password required"><label for="password">Password</label><input type="password" name="password" class="form-control" placeholder="Password" tabindex="2" required="required" id="password"></div>    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="checkbox checkbox-success">
                    <input type="hidden" name="rememberMe" value="0"><input type="checkbox" name="rememberMe" value="1" id="rememberMe">                    <label for="rememberMe">Remember Me</label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <a href="https://dev.sjemr.com.bd/users/forgot-password">Forgot Password?</a>            </div>
        </div>    
    </div>


    <div class="row m-b-20">
        <div class="col-md-6">
            <a href="https://dev.sjemr.com.bd/patients/login">Sign-in as Patient</a>            
        </div>
        
    </div>
    <button class="btn btn-success waves-effect waves-light m-r-10" tabindex="3" type="submit">Login</button></form>
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