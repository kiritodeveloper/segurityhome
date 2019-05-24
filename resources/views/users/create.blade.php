@extends('layouts.principal')


@section('before-style')
  
@endsection
@section('menu')
    @include('menus.primary')
@endsection

@section('bar_top')
    @include('navs.principal')
@endsection

@section('content')
<div class="col-md-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            {!!Form::open(["method"=>'post', "route"=>'user.store'])!!}

                <div class="col col-md-6">
                    <label for="name">Nombre Completo:</label>
                    <input type="text" required class="form-control" name="nombre_completo" placeholder="Nombre Completo" value="{{ old('name') }}">
                </div>
                <div class="col col-md-6">
                    <label for="name">DIRECCION</label>
                    <input type="text" required class="form-control" name="direccion"  placeholder="direccion" value="{{ old('name') }}">
                </div>
                <div class="col col-md-6">
                    <label for="name">N° DE CUENTA</label>
                    <input type="text" class="form-control" name="nro_cuenta"  placeholder="N° DE CUENTA" value="{{ old('name') }}">
                </div>
                <div class="col col-md-6">
                    <label for="name">BANCO</label>
                    <input type="text" class="form-control" name="banco"  placeholder="BANCO" value="{{ old('name') }}">
                </div>

                <div class="col col-md-3">
                    <label for="name">Nick:</label>
                    <input type="text" required class="form-control" name="name"  placeholder="Nick" value="{{ old('name') }}">
                </div>
                <div class="col col-md-3">
                    <label for="name">CI</label>
                    <input type="text" required class="form-control" name="ci"  placeholder="CI" value="{{ old('name') }}">
                </div>
                <div class="col col-md-6">
                    <label>ROL DENTRO SISTEMA</label>
                    <select name="rol" required class="form-control" id="rol_id">
                          @foreach($roles as $rol)
                          <option value="{{$rol->id}}">{{$rol->name}}</option>
                          @endforeach
                    </select>
                </div>
                <div class="col col-md-6">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" required class="form-control" name="email"  placeholder="admin@admin.com" value="{{ old('email') }}">
                </div>

                <div class="col col-md-6">
                    <label for="password">Contraseña:</label>
                    <input type="password" minlength="6" class="form-control" name="password"  placeholder="Mayor a 6 caracteres">
                </div>
                <div class="col col-md-6">
                </br>
                     <button type="submit" class="btn btn-round btn-success">Crear usuario</button>
                </div>

               
            {!!Form::close()!!}
        </div>
        </div>
    </div>
@endsection