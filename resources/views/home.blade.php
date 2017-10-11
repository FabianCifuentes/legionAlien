@extends('layout')

@section('content')
	
	 <!--
        ==================================================
        Slider Section Starts
        ================================================== -->
        <section id="hero-area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                            
                            <!-- Slider -->
                            <section class="cd-intro">
                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                                <span>SALUDO Y OFRECIMIENTO DE PRODUCTOS O SERVICIOS</span><br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">OFRECIMIENTO 1</b>
                                    <b>OFRECIMIENTO 2</b>
                                    <b>OFRECIMIENTO 3</b>
                                </span>
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                    breve descripcion de la empresa<br> presentar lo que van a ver en este sitio.
                                </h2>
                                <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works" >VER TRABAJOS</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->

            <!--
            ==================================================
            Slider Section Start
            ================================================== -->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                                <h2>
                                SOBRE NOSOTROS
                                </h2>
                                <p>
                                    Descripcion de la empresa.
                                </p>
                                <p>
                                    Descripcio de la empresa
                                </p>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                                <img src="images/about/about.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->

             <!--
            ==================================================
            Portfolio Section Start
            ===========================================-->
            <section id="works" class="works">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">ULTIMOS TRABAJOS</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            descripcvion de los ultimos trabajos realizados <br> descripcin de los ultimos trabajos realizados
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                <div class="img-wrapper">
                                    <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">ver imagen</a>
                                            <!--a target="_blank" href="single-portfolio.html">Detalles</a-->
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    imagen1
                                </a>
                                </h4>
                                <p>
                                    desc imagen1
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="img-wrapper">
                                    <img src="images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="images/portfolio/item-2.jpg">ver imagen</a>
                                            <!--a target="_blank" href="single-portfolio.html">Detalles</a-->
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    imagen2
                                </a>
                                </h4>
                                <p>
                                    desc imagen2
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="img-wrapper">
                                    <img src="images/portfolio/item-3.jpg" class="img-responsive" alt="" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="images/portfolio/item-3.jpg">ver imagen</a>
                                            <!--a target="_blank" href="single-portfolio.html">Detalles</a-->
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    imagen3
                                </a>
                                </h4>
                                <p>
                                    desc imagen3
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                                <div class="img-wrapper">
                                    <img src="images/portfolio/item-4.jpg" class="img-responsive" alt="" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="images/portfolio/item-4.jpg">ver imagen</a>
                                            <!--a target="_blank" href="single-portfolio.html">Detalles</a-->
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    imagen4
                                </a>
                                </h4>
                                <p>
                                    desc imagen4
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="img-wrapper">
                                    <img src="images/portfolio/item-5.jpg" class="img-responsive" alt="" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="images/portfolio/item-5.jpg">ver imagen</a>
                                            <!--a target="_blank" href="single-portfolio.html">Detalles</a-->
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    imagen5
                                </a>
                                </h4>
                                <p>
                                    desc imagen5
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                                <div class="img-wrapper">
                                    <img src="images/portfolio/item-6.jpg" class="img-responsive" alt="" >
                                    <div class="overlay">
                                        <div class="buttons" style="margin-top: -10px;margin-left: 25px;">
                                            <a rel="gallery" class="fancybox"  href="images/portfolio/item-6.jpg">ver imagen</a>
                                            <!--a target="_blank" href="single-portfolio.html">Detalles</a-->
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="#">
                                    imagen6
                                </a>
                                </h4>
                                <p>
                                    desc imagen6
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section> <!-- #works -->
            <!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
            <section id="feature">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">que podemos ofrecer</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            descripcion <br> descripcion
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-flask-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">cualidad1</h4>
                                    <p>decripcion cualidad1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-lightbulb-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">cualidad2.</h4>
                                    <p>decripcion cualidad2</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-lightbulb-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">cualidad3.</h4>
                                    <p>decripcion cualidad3</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-americanfootball-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">cualidad4</h4>
                                    <p>decripcion cualidad4</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-keypad-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">cualidad5</h4>
                                    <p>decripcion cualidad5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-barcode-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">cualidad6</h4>
                                    <p>decripcion cualidad6</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#feature -->
            
@stop
