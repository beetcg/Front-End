<?php
    session_start();
        $status = false;

        if (!$_SESSION == []) {
            $status = true;
        } else {
            if ( $_COOKIE['email'] != null) {
                $_SESSION['fname'] = $_COOKIE['fname'];
                $_SESSION['lname'] = $_COOKIE['lname'];
                $_SESSION['email'] = $_COOKIE['email'];
                $_SESSION['type'] = $_COOKIE['type'];
                $status = true;
            } else {
                $status=false;
            }
        }
?>

<nav id="navmenu" class="navbar navbar-expand-lg navbar-light fixed-top" >
    <a class="navbar-brand" href="index">
        <img id="main_logo" src="images/logo.png" alt="Spiral">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">How it works <span class="sr-only"></span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">Join Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">News & Events <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>

        </ul>
        <div class="">
            <ul class="navbar-nav mr-auto" align="center">
                <li class="nav-item"> <!-- Icon Basket -->
                    <a class="nav-link" href="#">
                        <i class="icon-basket" style="font-size: 20px !important;"></i>
                    </a>
                </li>
                <?php if (!$status) { ?>
                    <li class="nav-item dropdown"> <!-- SIGN UP --> 
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SIGN UP
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated bounceIn dropdown-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./signup-technician">Technician</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="./signup-client">Client</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"> <!-- SIGN IN -->
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SIGN IN
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated bounceIn dropdown-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./login-technician">Technician</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="./login-client">Client</a>
                            <!--<a class="dropdown-item" href="#">Something else here</a>-->
                        </div>
                    </li>
                <?php } else {?>
                    <li class="nav-item"> <!-- Icon Basket -->
                        <a class="nav-link" href="#">DASHBOARD</a>
                    </li>
                    <li class="nav-item"> <!-- Icon Basket -->
                        <a class="nav-link" href="./signout">SIGN OUT</a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>
