@extends('layout')

@section('content')

<section class="moduler wrapper_404">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >Opps!</h1>
                            <h2 class="wow fadeInUp animated" data-wow-delay=".6s">Tienes algunos problemas?</h2>
                            <p class="wow fadeInUp animated" data-wow-delay=".9s">La pagina que estas buscando fue removida, borrada o quizas nunca existio.</p>
                            <a href="{{ route('/')}}" class="btn btn-dafault btn-home wow fadeInUp animated" data-wow-delay="1.1s">Ir a inicio</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

@stop