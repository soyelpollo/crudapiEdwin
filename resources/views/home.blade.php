@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div-->
    </div>
</div>
<body>
<div class="container">
    <br>
    @yield('contenido')
    <div class="d-flex justify-content-center mt-5">
        <img class="img-fluid" src="https://img.freepik.com/vector-premium/vector-plantilla-diseno-logotipo-escuela_67715-547.jpg">
    </div>
</div>
</body>
@endsection
