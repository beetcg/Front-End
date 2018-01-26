<!DOCTYPE html>
<html lang="en-US" data-ng-app="beetApp">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Login | BEET</title>
    <meta name="description" content="Spiral HTML5 premium template">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C300%2C700%7CRaleway%3A400%2C200%2C600%2C700&amp;ver=4.2.6"
          type="text/css" media="all">
    <link rel="stylesheet" href="rs-plugin/css/settings.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/icons/icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/core-icons/core_style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/scripts.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/ionicons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
</head>

<body class="page login" data-ng-controller="LoginController">

<div class="logo">
    <a href="index">
        <img src="../images/logo-black.png" />
    </a>
</div>

<div class="content content2" >
    <form class="login-form animated fadeIn" data-ng-show="login" id="form_login_tech">
        <h3 class="form-title font-green">Sign In To Technician</h3>
        <!--<div class="alert alert-danger display-hide" ng-show="false">-->
            <!--<button class="close" data-close="alert"></button>-->
            <!--<span> Enter any username and password. </span>-->
        <!--</div>-->
        <div class="form-group">
            <input class="form-control form-control-solid placeholder-no-fix" type="text" placeholder="Email" name="email" id="email_tech" />
            <div class="invalid-feedback">
                The EMAIL is invalid
            </div>
        </div>
        <div class="form-group">
            <input class="form-control form-control-solid placeholder-no-fix" type="password" placeholder="Password" name="pass" id="pass_tech" />
            <div class="invalid-feedback">
                The PASSWORD is invalid
                <ul>
                    <li>at least 8 characters</li>
                    <li>must contain at least 1 uppercase letter, 1 lowercase letter, and 1 number</li>
                    <li>Can contain special characters</li>
                </ul>
            </div>
        </div>
        <div class="rows">
            <div class="col-sm-12 col-md-6">
                <label class="rememberme check mt-checkbox mt-checkbox-outline">
                    <input type="checkbox" name="remember" value="1" />Remember
                    <span></span>
                </label>
            </div>
            <div class="col-sm-12 col-md-6">
                <a href="javascript:;" id="forget-password" class="forget-password" data-ng-click="selectOption(2)">Forgot Password?</a>
            </div>
        </div>
        <div align="center">
            <button type="submit" id="sub-btn" class="btn btn-login uppercase">
                <span id="sub">Sign In</span>
            </button>
        </div>
    </form>

    <form class="forget-form animated fadeIn" data-ng-show="forgot" data-ng-cloak id="recovery_form_tech">
        <h3 class="font-green" data-ng-cloak>Forget Password ?</h3>
        <p class="forgot-text" data-ng-cloak> Enter your e-mail address below to reset your password. </p>
        <div class="form-group" style="margin-bottom: 2rem" data-ng-cloak >
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" id="emailRT" />
            <div class="invalid-feedback">
                The EMAIL is invalid
            </div>
        </div>
        <div class="rows" data-ng-cloak>
            <div class="col-sm-12 col-md-6">
                <a href="javascript:;" class="back-btn btn-submit" data-ng-click="selectOption(1)">
                    <i class="ion-ios-undo"></i>
                    Back
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <button id="rec-btn" class="btn btn-success btn-submit uppercase pull-right">
                    <span id="rsub">SEND EMAIL</span>
                </button>
            </div>
        </div>
    </form>
</div>

<div class="row full-width footer"> BEET ©2017.  <a href="#"><span class="terms">Terms and Conditions</span></a> | <a href="#"><span class="terms">Privacy Policy</span></a></div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<!-- 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
        integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="../js/angular/angular.min.js"></script>
<script type="text/javascript" src="../js/angular/app.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/prettify.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/portfolio-init.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script src="./../src/app_api/modules/technician/controller.js"></script>

</body>
</html>