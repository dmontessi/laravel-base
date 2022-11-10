@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @guest
                        {{ __('You are not logged in!') }} <i class="bi bi-x-circle-fill"></i>
                    @else
                        {{ __('You are logged in!') }} <i class="bi bi-check-circle-fill"></i>
                    @endguest
                </div>
                <div class="card-footer">Laravel <span class="badge bg-primary">v{{ Illuminate\Foundation\Application::VERSION }}</span> + PHP <span class="badge bg-primary">v{{ PHP_VERSION }}</span> + Bootstrap <span class="badge bg-primary" id="bootstrap-version"></span></div>
            </div>
        </div>
    </div>
</div>
<script type="module">
    document.getElementById("bootstrap-version").innerHTML = 'v' + bootstrap.Tooltip.VERSION
</script>
@endsection
