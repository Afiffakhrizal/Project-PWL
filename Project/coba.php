<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="beranda.css">
    <title>Beranda</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="header-left">
                <img class="logo" src="sourcepitc/LogoNav.png">
                <form id="form" role="search">
                    <input type="search" id="query" name="q" placeholder="Search..."
                        aria-label="Search through site content">
                    <button>
                        <svg viewBox="0 0 1024 1024">
                            <path class="path1" q="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140
                        .706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.
                        529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.
                        455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z">
                            </path>
                        </svg>
                    </button>
                </form>
            </div>
            <!-- Tambahkan ikon menu dibawah -->
            <span class="fa fa-bars menu-icon"></span>

            <div class="header-right">
                <a href="#">Katagori</a>
                <a href="#">
                    <img class="Logo-keranjang" src="sourcepitc/keranjang.png" alt="keranjang">
                </a>
                <a href="#">
                    <img class="Logo-chat" src="sourcepitc/chat.png" alt="chat">
                </a>
                <a href="#" class="login">
                    <img class="Logo-user" src="sourcepitc/User.png" alt="chat">
                </a>
            </div>
        </div>
    </header>

    <div class="top-wrapper">

        <div class="container">
            <div class="banner">
                <h1>What's New?!</h1>
            </div>
            <div class="wrapper">
                <div class="wrapper-holder">
                    <div id="slide-1"></div>
                    <div id="slide-2"></div>
                    <div id="slide-3"></div>
                    <div id="slide-4"></div>
                </div>
                <div class="button-holder">
                    <a href="#slide-1" class="button"></a>
                    <a href="#slide-2" class="button"></a>
                    <a href="#slide-3" class="button"></a>
                    <a href="#slide-4" class="button"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="rekomend-item">
        <h1>Trending Brand and Collab</h1>
        <div class="list-item">

            <div class="box1">
                <div class="pitc-1">
                    <a href="#"><img src="sourcepitc/INNO-logo-removebg-preview (1).png" alt=""></a>
                    <br>
                </div>
                <div class="judul-1">
                    <a href="#">INNO64</a>
                </div>
            </div>

            <div class="box2">
                <div class="pitc-2">
                    <a href="#"><img src="sourcepitc/hot-wheels4951-removebg-preview.png" alt=""></a>
                    <br>
                </div>
                <div class="judul-2">
                    <a href="#">HotWheels</a>
                </div>
            </div>

            <div class="box3">
                <div class="pitc-3">
                    <a href="#"><img src="sourcepitc/Screenshot_2024-05-19_194935-removebg-preview.png" alt=""></a>
                    <br>
                </div>
                <div class="judul-3">
                    <a href="#">Mini GT</a>
                </div>
            </div>

            <div class="box4">
                <div class="pitc-4">
                    <a href="#"><img src="sourcepitc/1650010622_90447.jpg" alt=""></a>
                    <br>
                </div>
                <div class="judul-4">
                    <a href="#">Mini GT x KAIDO</a>
                </div>
            </div>

            <div class="box5">
                <div class="pitc-5">
                    <a href="#"><img src="sourcepitc/poprace.png" alt=""></a>
                    <br>
                </div>
                <div class="judul-5">
                    <a href="#">Pop Race</a>
                </div>
            </div>

        </div>
    </div>

    <div class="items">
        <div class="card-item-">

            <div class="greedy">
                <a href="" class="greedy-pitc"><img src="sourcepitc/greedy.jpg" alt=""></a>
                <h1>Nissan Skyline GT-R (R34)
                    <br> Kaido Works GReddy V1
                </h1>
            </div>

            <div class="f40">
                <a href="" class="f40-pitc"><img src="sourcepitc/f40.jpeg" alt=""></a>
                <h1>INNO64 LBWK [F40]
                    <br>TOKYO AUTO SALON 2023
                </h1>
            </div>


            <div class="greedy">
                <a href="" class="greedy-pitc"><img src="sourcepitc/greedy.jpg" alt=""></a>
                <h1>Nissan Skyline GT-R (R34)
                    <br> Kaido Works GReddy V1
                </h1>
            </div>


            <div class="greedy">
                <a href="" class="greedy-pitc"><img src="sourcepitc/greedy.jpg" alt=""></a>
                <h1>
                    INNO64 LBWK [F40]
                    <br>TOKYO AUTO SALON 2023
                </h1>
            </div>


        </div>
    </div>


</body>

</html>