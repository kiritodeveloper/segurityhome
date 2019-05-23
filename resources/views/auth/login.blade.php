@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <center>
                    <div class="card-header">{{ __('Login') }}</div>
                </center>
                <div class="login__block__body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="email"  name="email" class="form-control text-center" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control text-center" name="password" placeholder="Password">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn--icon login__block__btn">

                                   <i class="zmdi zmdi-long-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
