<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        www.eBuy.in (Home)

    </title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom.css CSS Providing File -->
    <link href="Home_Page_Custom.css" rel="stylesheet">

    <link href="../CSS/Buttons.css" rel="stylesheet">

    <!-- Dynamics.js JavaScript Providing File -->
    <!-- <script src="../JAVASCRIPT/Dynamics.js"></script> -->

</head>

<body>

    <main>
        <!-- 
        <header class="p-3 bg-transparent text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                    <img src="Logo/Copy of eBuy (1).png" alt="eBuy Logo" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none" width="5%">

                    <div class="col-1"></div>

                    <ul class=" nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ">

                        <li><a href="# " class="nav-link px-2 text-white ">Home</a></li>

                        <li><a href="# " class="nav-link px-2 text-white ">Mens</a></li>

                        <li><a href="# " class="nav-link px-2 text-white ">Womens</a></li>

                        <li><a href="# " class="nav-link px-2 text-white ">Profile</a></li>

                        <li><a href="# " class="nav-link px-2 text-white ">About</a></li>

                    </ul>

                    <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 ">
                        <input type="search " class="form-control form-control-dark " placeholder="Search... " aria-label="Search ">
                    </form> -->

        <!-- <div style="text-align: center;
                    vertical-align: middle;
                    color: white;">
            <a href="#" class="nav-link">
                <img src="Icons/shopping-bag.png" width="16px" height="16px" style="filter: invert(100%);" />
                <br> Bag
            </a>
        </div>

        <div class="text-end ">
            <button type="button " class="btn btn-outline-light me-2 ">Log Out</button>
        </div> -->


        <!-- 
        </div>
        </div>
        </header> -->




        <div class="container">

            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

                <a href="Home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <!--  -->
                    <span id="logo_name" class="fs-4">eBuy</span>
                    <!-- <use xlink:href="#eBuy" /> -->
                </a>

                <ul id="ul-nav-link" class="nav nav-pills">

                    <li class="nav-item"><a href="Home.php" id="active_link" class="nav-link active" aria-current="page">Home</a></li>

                    &nbsp; &nbsp;

                    <li class="nav-item"><a href="mens.html" class="nav-link">Men</a></li>

                    &nbsp; &nbsp;

                    <li class="nav-item"><a href="womens.html" class="nav-link">Women</a></li>

                    &nbsp; &nbsp;

                    <li class="nav-item"><a href="login.php" id="Sign_Out_btn" class="nav-link">Sign Out</a></li>

                    &nbsp; &nbsp;

                    <li class="nav-item"><a href="Account & Side Bar Setting.html" id="My_Acc_btn" class="nav-link">My Account</a></li>

                    &nbsp; &nbsp;

                    <li class="nav-item">

                        <a href="Bag.html" class="nav-link">

                            <img src="../ICONS/shopping-bag.png" width="16px" height="16px" />

                            <span>
                                <br>
                                Bag
                            </span>
                        </a>
                    </li>

                </ul>

            </header>

        </div>
        <br>
        <br>
        <br>
        <div class="container" id="img_align">
            <div class="row">

                <div class="col-4" id="men_card">
                    <a href="../Project Part 02/mens.html" class="text-dark text-decoration-none">
                        <h1>
                            Mens Wear
                        </h1>
                    </a>
                </div>

                <div class="col-2"></div>

                <div class="col-4" id="women_card">
                    <a href="../Project Part 02/womens.html" class="text-dark text-decoration-none">
                        <h1>
                            Womens Wear
                        </h1>
                    </a>
                </div>
            </div>
        </div>


    </main>

</body>

</html>