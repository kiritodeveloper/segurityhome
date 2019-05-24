@extends('layouts.principal')

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

    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Por favor corrige los errores debajo:</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url("user/{$user->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

                <div class="col col-md-6">
                    <label for="name">Nombre Completo:</label>
                    <input type="text" required class="form-control" name="nombre_completo" value="{{$user->nombre_completo }}">
                </div>
                <div class="col col-md-6">
                    <label for="name">DIRECCION</label>
                    <input type="text" required class="form-control" name="direccion"  placeholder="direccion" value="{{ $user->direccion}}">
                </div>
                <div class="col col-md-6">
                    <label for="name">N° DE CUENTA</label>
                    <input type="text" class="form-control" name="nro_cuenta"  placeholder="N° DE CUENTA" value="{{ $user->nro_cuenta }}">
                </div>
                <div class="col col-md-6">
                    <label for="name">BANCO</label>
                    <input type="text" class="form-control" name="banco"  placeholder="BANCO" value="{{ $user->banco }}">
                </div>

                <div class="col col-md-3">
                    <label for="name">Nick:</label>
                    <input type="text" required class="form-control" name="name"  placeholder="Nick" value="{{ $user-> name}}">
                </div>
                <div class="col col-md-3">
                    <label for="name">CI</label>
                    <input type="text" required class="form-control" name="ci"  placeholder="CI" value="{{ $user->ci }}">
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
                    <input type="email" required class="form-control" name="email"  placeholder="admin@admin.com" value="{{ $user->email}}">
                </div>

                <div class="col col-md-6">
                    <label for="password">Contraseña:</label>
                    <input type="password" minlength="6" class="form-control" name="password"  value="{{$user->password}}">
                </div>
                <div class="col col-md-6">
                </br>
                     <button type="submit" class="btn btn-round btn-success">Actualizar usuario</button>
                </div>

    </form>
          </div>
        </div>
</div>

@endsection