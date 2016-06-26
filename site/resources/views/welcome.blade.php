@extends('layouts.app')

@section('content')
<div class="row no-select">
    
    <div class="col-md-12">
        <div class="jumbotron">
            <h1> <i class="fa fa-medkit"></i> Consultorios online!</h1>
            <h4>
                Red de consultorios médicos y profesionales online.
            </h4>
            <div class="spacer"></div>
            @if (Auth::guest())
                <h5>Todavía no estás registrado?</h5>
                <a href="{{ url('/register') }}" class="btn btn-primary"><i class="fa fa-pencil"></i> Regístrate!</a>
            @endif
        </div>
    </div>
    
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-6">
                <div class="pub-box wow rubberBand">
                    <div class="text-right">
                        <h4 style="margin: 0;">TODOS TUS PROFESIONALES</h4>
                        <h1 style="margin-top: -8px;">EN UN SOLO LUGAR</h1>
                    </div>
                    <img class="img-responsive center-block" src="/img/welcome/doctor1.png" style="width: 256px;" />
                    <div class="spacer"></div>  
                    <p class="text-center">
                        Sea cual sea tu necesidad, encontrá al mejor profesional indicado para vos!
                    </p>
                </div>
            </div>
            
            <div class="col-md-6">
                <div style="padding: 12px; font-size: 120%;">
                    
                    <div class="spacer-md"></div>
                    
                    <div class="wow fadeIn">
                        <p>Nuestra red cuenta con miles de profesionales ansiosos por recibirte!</p>
                        <p>Encuentra al profesional más adecuado para vos en tu región y contáctalo o simplemente pide un turno de manera online!</p>
                    </div>
                    
                    <div class="spacer-md"></div>
                    <a href="#" class="btn btn-lg btn-default btn-pub wow bounceInRight">BUSCAR PROFESIONAL</a>
                    <div class="spacer-md"></div>
                    
                    <div class="wow fadeIn">
                        <p>Contamos con profesionales en muchas áreas:</p>
                        <ul class="fa fa-ul" style="line-height: 150%;">
                            <li><i class="fa fa-li fa-stethoscope"></i> Odontología</li>
                            <li><i class="fa fa-li fa-stethoscope"></i> Psicología</li>
                            <li><i class="fa fa-li fa-stethoscope"></i> Pediatría</li>
                            <li><i class="fa fa-li fa-stethoscope"></i> Cardiología</li>
                            <li><i class="fa fa-li fa-stethoscope"></i> Emergencias</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div style="padding: 12px; font-size: 120%;">
                    
                    <div class="spacer-md"></div>
                    
                    <div class="wow fadeIn">
                        <p>Nuestra red cuenta con miles de profesionales ansiosos por recibirte!</p>
                        <p>Encuentra al profesional más adecuado para vos en tu región y contáctalo o simplemente pide un turno de manera online!</p>
                    </div>
                    
                    <div class="spacer-md"></div>
                    <a href="#" class="btn btn-lg btn-default btn-pub-red wow bounceInRight">BUSCAR PROFESIONAL</a>
                    <div class="spacer-md"></div>
                    
                    <div class="wow fadeIn">
                        <p>Contamos con profesionales en muchas áreas:</p>
                        <ul class="fa fa-ul" style="line-height: 150%;">
                            <li><i class="fa fa-li fa-stethoscope"></i> Odontología</li>
                            <li><i class="fa fa-li fa-stethoscope"></i> Psicología</li>
                            <li><i class="fa fa-li fa-stethoscope"></i> Pediatría</li>
                            <li><i class="fa fa-li fa-stethoscope"></i> Cardiología</li>
                            <li><i class="fa fa-li fa-stethoscope"></i> Emergencias</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="pub-box red wow rubberBand">
                    <div class="text-left">
                        <h4 style="margin: 0;">TODOS TUS PROFESIONALES</h4>
                        <h1 style="margin-top: -8px;">EN UN SOLO LUGAR</h1>
                    </div>
                    <img class="img-responsive center-block" src="/img/welcome/doctor2.png" style="width: 256px;" />
                    <div class="spacer"></div>  
                    <p class="text-center">
                        Sea cual sea tu necesidad, encontrá al mejor profesional indicado para vos!
                    </p>
                </div>
            </div>
        </div>
        
    </div>
</div><!--!index-content-->
@endsection
