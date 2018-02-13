<?php
    require_once "../src/app_api/config/connection.php";
    require_once "../src/app_api/modules/methods/tech.php";

    $id = $_GET["x"];
    $salt = $_GET["y"];

    $obj = new Methods();
    $resp = $obj->checkAcount('tech',$id, $salt);

    if ($resp['active'] == '1') {
        header('Location: /');
    }
?>

<!DOCTYPE html>
<html lang="en-US" data-ng-app="beetApp" data-ng-cloak>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Categories - BEET</title>
    <meta name="description" content="Spiral HTML5 premium template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="../css/sweetalert2.css" type="text/css" media="all">
</head>

<body class="page login" data-ng-controller="categoriesController">

<div class="logo animated fadeIn" style="margin-top: 20px !important;">
    <a href="index.html">
        <img src="../images/logo-black.png"/>
    </a>

</div>

<div class="content" style="margin: 0px auto 10px auto !important;">
    <div class="road-map">
        <div class="road-line"></div>
        <div class="road-flex">
            <p class="step-circle-disable" style="margin-top: 30px; margin-bottom: 20px;">
                1
            </p>
            <p class="step-1">
                Register your Basic Data
            </p>
        </div>
        <div class="road-flex">
            <p class="step-circle" style="margin-top: 30px; margin-bottom: 20px;">
                2
            </p>
            <p class="step-1">
                Select Category
            </p>
        </div>
        <div class="road-flex">
            <p class="step-circle-disable" style="margin-top: 30px; margin-bottom: 20px;">
                3
            </p>
            <p class="step-1">
                Upload Documents
            </p>
        </div>
    </div>
</div>

<div class="container-fluid animated fadeIn" style="margin-bottom: 50px">
    <form class="categories-contain" id="form_confirm" enctype="multipart/form-data">
        <div class="box1">
            <div class="categories-box1">
                <div class="title-cat">
                    <h2 class="title-cat-text">Categories </h2>
                    <small class="description-small">Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa</small>
                </div>
                <div class="rows">
                    <div class="col-sm-12 col-md-4">
                        <div class="category" data-ng-click="selectOption(1)">
                            <i class="ion-laptop"></i>
                            <p>Computer Support</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="category" data-ng-click="selectOption(2)">
                            <i class="ion-ios-home-outline"></i>
                            <p>Smart Home</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="category" data-ng-click="selectOption(3)">
                            <i class="ion-ios-monitor-outline"></i>
                            <p>Television</p>
                        </div>
                    </div>
                </div>
                <div class="rows">
                    <div class="col-sm-12 col-md-4">
                        <div class="category" data-ng-click="selectOption(4)">
                            <i class="ion-ios-videocam-outline"></i>
                            <p>Audio & Video</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="category" data-ng-click="selectOption(5)">
                            <i class="ion-android-wifi"></i>
                            <p>Wifi & Network</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="category" data-ng-click="selectOption(6)">
                            <i class="ion-bug"></i>
                            <p>Malware / Virus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box3">
            <div class="categories-box3 animated fadeIn" data-ng-show="computer">
                <div>
                    <h2 class="title-cat">Computer Support</h2>
                    <div style="margin-top: 40px; margin-bottom: 40px">
                        <div class="rows" style="margin-bottom: 30px">
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Computer Repair and Help</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="1" id="1"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Computer Tune Up</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="2" id="2"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Data Back-Up or Transfer</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="3" id="3"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">New Computer Setup</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="4" id="4"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rows" style="margin-bottom: 30px">
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Software Install or Uninstall</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="5" id="5"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Printer Setup</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="6" id="6"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">OS (Operating System) Install or Re-Install</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="7" id="7"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="categories-box3 animated fadeIn" data-ng-show="smart">
                <div>
                    <h2 class="title-cat">Smart Home</h2>
                    <div style="margin-top: 40px; margin-bottom: 40px">
                        <div class="rows" style="margin-bottom: 30px">
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Smart Security Cam Installation</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="8" id="8"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Smart Hub Installation or Setup</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="9" id="9"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Smart Device Hook-Up</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="10" id="10"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Smart Thermostat Installation</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="11" id="11"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rows" style="margin-bottom: 30px">
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Video Doorbell Installation</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="12" id="12"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="categories-box3 animated fadeIn" data-ng-show="television">
                <div>
                    <h2 class="title-cat">Television</h2>
                    <div style="margin-top: 40px; margin-bottom: 40px">
                        <div class="rows" style="margin-bottom: 30px">
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Tv Wall Mount Installation</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="13" id="13"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Tv Dismount or Remount</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="14" id="14"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Cable Tv Service</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="15" id="15"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="categories-box3 animated fadeIn" data-ng-show="audio">
                <div>
                    <h2 class="title-cat">Audio & Video</h2>
                    <div style="margin-top: 40px; margin-bottom: 40px">
                        <div class="rows" style="margin-bottom: 30px">
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Home Theater Hook-Up and Setup</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="16" id="16"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Surround Sound System Setup</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="17" id="17"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Tv and Home Theater Support</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="18" id="18"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Streaming Video Device Setup and Support</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="19" id="19"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="categories-box3 animated fadeIn" data-ng-show="wifi">
                <div data-ng-show="wifi">
                    <h2 class="title-cat">Wifi & Network</h2>
                    <div style="margin-top: 40px; margin-bottom: 40px">
                        <div class="rows" style="margin-bottom: 30px">
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Wifi and Network Connectivity Support</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="20" id="20"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">New Wifi Connection Setup</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="21" id="21"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Wifi Signal Extension</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="22" id="22"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Internet Service Installation</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="23" id="23"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="categories-box3 animated fadeIn" data-ng-show="malware">
                <div>
                    <h2 class="title-cat">Malware / Virus</h2>
                    <div style="margin-top: 40px; margin-bottom: 40px">
                        <div class="rows" style="margin-bottom: 30px">
                            <div class="col-sm-12 col-md-6 col-lg-3">
                                <div class="rows">
                                    <div class="col-9">
                                        <span class="option">Virus Removal and Cleanup</span>
                                    </div>
                                    <div class="col-3">
                                        <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                               style="vertical-align: middle">
                                            <input type="checkbox" name="subcat[]" value="24" id="24"/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content" style="margin: 0px auto 10px auto !important;">
                <div class="road-map">
                    <div class="road-line"></div>
                    <div class="road-flex">
                        <p class="step-circle-disable" style="margin-top: 30px; margin-bottom: 20px;">
                            1
                        </p>
                        <p class="step-1">
                            Register your Basic Data
                        </p>
                    </div>
                    <div class="road-flex">
                        <p class="step-circle-disable" style="margin-top: 30px; margin-bottom: 20px;">
                            2
                        </p>
                        <p class="step-1">
                            Select Category
                        </p>
                    </div>
                    <div class="road-flex">
                        <p class="step-circle" style="margin-top: 30px; margin-bottom: 20px;">
                            3
                        </p>
                        <p class="step-1">
                            Upload Documents
                        </p>
                    </div>
                </div>
            </div>
            <div class="categories-box1" style="margin-top: 30px;">
                <div class="title-cat">
                    <h2 class="title-cat-text">Documents </h2>
                    <small class="description-small">We need some important documents to complete your subscription</small>
                </div>
                <div class="rows">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="types">
                            <p>1. Passport</p>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" style="height: 38px !important;" readonly>
                            <label class="input-group-btn">
                                <span class="btn btn-beet">
                                    <i class="fa fa-upload"></i> <input type="file" name="passport" id="passport" style="display: none;" multiple>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="rows">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="types">
                            <p>2. Criminal Record</p>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" style="height: 38px !important;" readonly>
                            <label class="input-group-btn">
                                <span class="btn btn-beet">
                                    <i class="fa fa-upload"></i> <input type="file" name="criminal_record" id="criminal_record" style="display: none;" multiple>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="rows">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="types">
                            <p>3. ID</p>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" style="height: 38px !important;" readonly>
                            <label class="input-group-btn">
                                <span class="btn btn-beet">
                                    <i class="fa fa-upload"></i> <input type="file" name="id_card" id="id_card" style="display: none;" multiple>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="rows">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="types">
                            <p>4. Bank Account Information</p>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" style="height: 38px !important;" readonly>
                            <label class="input-group-btn">
                                <span class="btn btn-beet">
                                    <i class="fa fa-upload"></i> <input type="file" name="bank_account" id="bank_account" style="display: none;" multiple>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
            <input type="hidden" id="salt" name="salt" value="<?php echo $salt ?>">

            <div align="center">
                <button type="submit" id="sub-btn" class="btn btn-login text-uppercase">
                    <span id="sub">Send</span>
                </button>
            </div>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
        integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="../js/angular/angular.min.js"></script>
<script type="text/javascript" src="../js/angular/app.js"></script>
<script type="text/javascript" src="../js/fileinput.js"></script>
<script type="text/javascript" src="js/stickymenu.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/prettify.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/portfolio-init.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="../js/sweetalert2.min.js"></script>
<script type="text/javascript" src="../js/alerts.js"></script>
<script src="./../src/app_api/modules/technician/controller.js"></script>

</body>
</html>