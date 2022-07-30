<!DOCTYPE html>
<html lang="en">

<?php
    require_once '../config/conexion.php';

    $query = 'select * from productos';
    $resultado = mysqli_query($conexion, $query);

    $querytrainer = 'select * from online_trainers';
    $resultrainer = mysqli_query($conexion, $querytrainer);

    include "head.php";
?>

<script src="../public/js/slider.js"></script>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <?php
        include "nav.php";
    ?>

    <!-- HOME -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

            <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-md-10 mx-auto col-12">
                            <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300">BECOME AN ELITE ATHLETE</h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">BE THE KING OF YOUR PROGRESS</h1>

                                    <a href="#feature" class="btn btn-custom bg-color1 mt-3" data-aos="fade-up" data-aos-delay="600">Get started</a>

                                    <a href="#product" class="btn btn-custom bg-color1 mt-3" data-aos="fade-up" data-aos-delay="600">SHOP NOW</a>

                            </div>
                        </div>

                    </div>
            </div>
    </section>

    <!-- MEMBERSHIP -->
    <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">New to the community?</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Become a pro member today to get full acces before anyone else!</h6>

                    <p data-aos="fade-up" data-aos-delay="200">The pro members will have acces to the  <a rel="nofollow" href="https://www.thenx.com" target="_parent">EXB Products</a> before anyone else. The membership is only $2 USD monthly.</p>

                    <a href="#" class="btn btn-custom bg-color1 mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#membershipForm">Become a pro member today!</a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                    <div class="about-working-hours">
                        <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Get unlimited access!</h2>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">High quality products</strong>

                                <p data-aos="fade-up" data-aos-delay="800">Validated by the PROFECO and FDA.</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Get the body of your dreams.</strong>

                                <p data-aos="fade-up" data-aos-delay="800">With the best trainers totally online!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<!-- PRODUCTS -->
<section class="py-5" id="product">

    <div class="col-lg-12 col-12 text-center mb-5">
        <h6 data-aos="fade-up">Get the body of your dreams.</h6>
        <h2 data-aos="fade-up" data-aos-delay="200">Our products</h2>
    </div>
    
    <div class="container d-flex swiper theSwiper pb-4">
        <ul class="swiper-wrapper">
            <?php foreach($resultado as $row){ ?>
            <li class="swiper-slide card" data-aos="fade-up" data-aos-delay="400">
                <img src="../public/images/products/<?php echo $row['foto'] ?>" class="card-img-top" alt="Product" height="200px">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row['nombre'] ?></h4>
                        <p class="mintext card-text mt-3 mb-4"><?php echo $row['descripcion'] ?></p>
                        <span class="product-price">$<?php echo $row['precio'] ?></span>
                        <a href="#" class="btn btn-custom bordered1 float-right">BUY NOW!</a>
                    </div>
            </li>
            <?php } ?>
        </ul>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="container mt-4 text-center">
        <a href="../cms/prodform.php" class="btn btn-custom bg-color2 btn-lg">SEE ALL</a>
    </div>

</section>

    <!-- TRAINERS -->
    <section class="about" id="about">
                            <div class="mb-5 ml-5 pt-5 px-5 col-lg-5">
                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="300">Hello, we are Excali-Bars</h2>

                                <h3 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="300">Trainers</h3>

                                <p class="text-white" data-aos="fade-up" data-aos-delay="400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam cumque vel dolor voluptatem eum ab delectus minus veniam illo architecto libero nesciunt quidem at impedit sed optio nulla, quae laudantium!</p>

                            </div>

                <div class="container d-flex swiper theSwiper pb-4">
                <ul class="swiper-wrapper">
                <?php foreach($resultrainer as $row){ ?>
                    <li class="swiper-slide card" data-aos="fade-up" data-aos-delay="400">
                        <img src="../public/images/team/<?php echo $row['foto'] ?>" class="card-img-top" alt="Product" height="200px">
                            <div class="card-body">
                                <h3><?php echo $row['nombre'] ?></h3>
                                <span><?php echo $row['email'] ?></span>
                                <p><a href="#" class="fa fa-instagram"><?php echo $row['instagram'] ?></a></p>
                                <p><a href="#" class="fa fa-youtube-play"><?php echo $row['youtube_channel'] ?></a></p>
                    </li>
                    <?php } ?>
                </ul>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="container mt-4 text-center">
                <a href="../cms/trainerform.php" class="btn btn-custom bg-color1 btn-lg mb-5">SEE ALL</a>
            </div>
    </section>

        <!-- CONTACT -->
        <section class="contact section" id="contact">
            <div class="container">
                <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                        <form action="#" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            <input type="text" class="form-control" name="cf-name" placeholder="Name">

                            <input type="email" class="form-control" name="cf-email" placeholder="Email">

                            <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                        </form>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i>Universidad Politécnica de Durango - State of Durango, Mexico</p>
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24326.07731927977!2d-104.57016297229656!3d24.029283302143366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bb0afe49269e1%3A0x43644f8b73e439ad!2sUniversidad%20Polit%C3%A9cnica%20de%20Durango!5e0!3m2!1ses!2smx!4v1655392504508!5m2!1ses!2smx" width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


    <?php
    include "footer.php";
    ?>


    <!-- Modal Pro Member-->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">

            <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

            <div class="modal-body">
            <form action="email_send.php" method="POST" class="membership-form webform">
                <input type="email" class="form-control" name="suscribe" placeholder="email@gmail.com">
                <button type="submit" class="form-control" id="submit-button" name="submit">Suscribe now!</button>
            </form>
            </div>
            </div>
        </div>
    </div>

    <?php
    include "js.php";
    ?>
</body>

<!-- SWIPER JS -->
<script src="../public/js/swiper-bundle.min.js"></script>
<script src="../public/js/swiper.js"></script>

</html>