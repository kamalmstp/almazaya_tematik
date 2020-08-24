<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Al-Qur'an Tematik Almazaya Islamic School</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo1.png">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php base_url()?>assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>    

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="header__cart">
                        <ul>
                            <li><img src="<?php base_url()?>assets/img/logo1.png" alt="" style="height: 50px;"></li>
                            <li><h4>Al-Qur'an Tematik Almazaya Islamic School</h4></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">            
            <div class="row">                
                <div class="categories__slider owl-carousel">
                    <?php foreach($file as $row) { ?>
                    <div class="col-lg-3">
                        <a href="<?=base_url('uploads/pdf/'.$row["file_name"])?>">
                            <img src="<?=base_url('uploads/image/'.$row["image"])?>" alt=""></a>                       
                    </div>
                    <?php } ?>
                </div>                
            </div>            
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Js Plugins -->
    <script src="<?php base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php base_url()?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php base_url()?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php base_url()?>assets/js/jquery.slicknav.js"></script>
    <script src="<?php base_url()?>assets/js/mixitup.min.js"></script>
    <script src="<?php base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php base_url()?>assets/js/main.js"></script>



</body>

</html>