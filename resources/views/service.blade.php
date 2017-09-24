
@extends('layout')

@section('content')
	
	<!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Servicios</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="{{ route('/') }}">
                                        <i class="ion-ios-home"></i>
                                        Inicio
                                    </a>
                                </li>
                                <li class="active">Servicios</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>   
        </section><!--/#Page header-->


        <!-- 
        ================================================== 
            Service Page Section  Start
        ================================================== -->
        <section id="service-page" class="pages service-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">lo que nos gusta hacer</h2>
                            
                            <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">desc lo que nos gusta hacer</p>
                            <div class="row service-parts">
                                <div class="col-md-6">
                                    <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                                        <i class="ion-ios-paper-outline"></i>
                                        <h4>cualidad1</h4>
                                        <p>desc cualidad1</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="800ms">
                                        <i class="ion-ios-pint-outline"></i>
                                        <h4>cualidad2</h4>
                                        <p>desc cualidad2</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1s">
                                        <i class="ion-ios-paper-outline"></i>
                                        <h4>cualidad3</h4>
                                        <p>desc cualidad3</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1.1s">
                                        <i class="ion-ios-paper-outline"></i>
                                        <h4>cualidad4</h4>
                                        <p>desc cualidad4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <img class="img-responsive" src="images/team.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- 
        ================================================== 
            Works Section Start
        ================================================== -->
        <section class="works service-page">
            <div class="container">
                <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">algunos de nuestros trabajos</h2>
                    <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
                        desc algunos de nuestros trabajos <br> desc algunos de nuestros trabajos
                    </p>
                <div class="row">
                    <div class="col-sm-3">
                         <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">ver imagen</a>        
                                        <a target="_blank" href="">detalle</a>
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

                    <div class="col-sm-3">
                        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-2.jpg" class="img-responsive" alt="this is a title" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-2.jpg">ver imagen</a>        
                                        <a target="_blank" href="">Detalle</a>
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

                    <div class="col-sm-3">
                        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-3.jpg" class="img-responsive" alt="" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-3.jpg">ver imagen</a>        
                                        <a target="_blank" href="">Detalle</a>
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

                    <div class="col-sm-3">
                        <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                            <div class="img-wrapper">
                                <img src="images/portfolio/item-4.jpg" class="img-responsive" alt="" >
                                <div class="overlay">
                                    <div class="buttons">
                                        <a rel="gallery" class="fancybox" href="images/portfolio/item-4.jpg">ver imagen</a>        
                                        <a target="_blank" href="">Detalle</a>
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

                   

                </div>
            </div>
        </section>
        <!-- 
        ================================================== 
            Clients Section Start
        ================================================== -->
        <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">nuestros cleintes.</h2>
                        <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">desc nuestros clientes</p>
                        <div id="clients-logo" class="owl-carousel">
                            <div>
                                <img src="images/clients/logo-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-5.jpg" alt="">
                            </div>
                             <div>
                                <img src="images/clients/logo-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@stop
