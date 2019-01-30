@extends('layouts/structure') 
@section('page-title') Home
@endsection
 
@section('page-content')
<h1 class="text-center">Proximos Eventos</h1>

<div class="container">
    <div class="row">
        @for ($i = 0; $i  < 10; $i++) 
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card bg-light">
                    <div class="card-header">
                        <h4 class="card-title">Evento {{$i+1}}</h4>
                        <h6>{{$i+1}} de Março de 2019</h6>
                    </div>
    
                    <div class="card-body">
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie, sem vitae tempor pharetra, sem nulla
                            malesuada lacus, et ultricies nisl eros nec metus. Vivamus euismod erat ex, quis pellentesque.
                        </p>
                    </div>
    
                    <div class="card-footer">
                        <a href="#" class="card-link">Verificar</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>

<div class="container">
    <h1 class="text-center">Seus Repertorios</h1>
    <div class="row">
        @for ($i = 0; $i< 10; $i++) 
        <div class="col-sm-12 col-md-3 col-lg-3">
            <div class="card bg-light">
                <div class="card-header">
                    <h4 class="card-title">Repertorio{{$i+1}}</h4>
                </div>
                <div class="card-body">
                    <img src="" alt="EVENT LOGO" class="img-fluid">
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie, sem vitae tempor pharetra, sem nulla
                        malesuada lacus, et ultricies nisl eros nec metus. Vivamus euismod erat ex, quis pellentesque.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Verificar</a>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>





















@endsection