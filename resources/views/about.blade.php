
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
                            <h2>Sobre nosotros</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="{{ route('/') }}">
                                        <i class="ion-ios-home"></i>
                                        Inicio
                                    </a>
                                </li>
                                <li class="active">Nosotros</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 
        ================================================== 
            Company Description Section Start
        ================================================== -->
        <section class="company-description">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                        <img src="images/about/about-company.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">porque somos diferentes.</h3>
                            <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                                Explicales porque son diferentes.
                            </p>
                            <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                                Dales una razon para que elijan tus servicion.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- 
        ================================================== 
            Company Feature Section Start
        ================================================== -->
        <section class="about-feature clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                        <h2>
                        porque elegirnos
                        </h2>
                        <p>
                            desc porque elegirnos
                        </p>
                    </div>
                    <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        <h2 class="item_title">
                        que obtienes
                        </h2>
                        <p>
                            desc que optienes
                        </p>
                    </div>
                    <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                        <h2 class="item_title">
                        siente la energia
                        </h2>
                        <p>
                            desc siente la energia
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- 
        ================================================== 
            Team Section Start
        ================================================== -->
        <section id="team">
            <div class="container">
                <div class="row">
                    <h2 class="subtitle text-center">conoce al equipo</h2>
                    <div class="col-md-3">
                        <!--div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                            <div class="team-img">
                                <img src="images/team/team-1.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Don Ricci1</h3>
                            <p class="team_designation">CEO, Project Manager</p>
                            <p class="team_text">desc Don Ricci </p>
                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                                <a href=https://www.facebook.com/ target="_blank"><i class="ion-social-twitter-outline"></i></a>
                                <a href="https://cl.linkedin.com/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                                <a href="https://plus.google.com/?hl=es" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                            </p>
                        </div-->
                    </div>
                    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <div class="team-img">
                                <img src="images/team/team-2.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Don Ricci2</h3>
                            <p class="team_designation">CEO, Project Manager</p>
                            <p class="team_text">desc Don Ricci2</p>
                            <p class="social-icons">

                                <a href="https://www.facebook.com/" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>

                                <a href="https://twitter.com/" target="_blank"><i class="ion-social-twitter-outline"></i></a>

                                <a href="https://cl.linkedin.com/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>

                                <a href="https://plus.google.com/?hl=es" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                            <div class="team-img">
                                <img src="images/team/team-3.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Don Ricci3</h3>
                            <p class="team_designation">CEO, Project Manager</p>
                            <p class="team_text">desc Don Ricci3</p>
                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                                <a href="https://twitter.com/" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                                <a href="https://cl.linkedin.com/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                                <a href="https://plus.google.com/?hl=es" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!--div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                            <div class="team-img">
                                <img src="images/team/team-4.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Don Ricci4</h3>
                            <p class="team_designation">CEO, Project Manager</p>
                            <p class="team_text">desc Don Ricci4</p>
                            <p class="social-icons">
                                <a href="https://www.facebook.com/" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                                <a href="https://twitter.com/" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                                <a href="https://cl.linkedin.com/" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                                <a href="https://plus.google.com/?hl=es" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                            </p>
                        </div-->
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
                        <h2 class="subtitle text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">nuestros clientes</h2>
                        <p class="subtitle-des text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">desc nuestros clientes</p>
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
