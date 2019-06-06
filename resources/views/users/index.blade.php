@extends('layouts.principal')


@include('layouts.menu')
@include('layouts.nav')
@section('content')

<section class="content">
    <header class="content__title">
        <div class="actions">
                <a href="{{route("users.create")}}" class="actions__item zmdi zmdi-account-add"></a>
            </div>
    </header>
    
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">lista de usuarios del sistema</h4>
            <h6 class="card-subtitle">lista de usuarios y opciones </h6>

            <div class="table-responsive">
              @if ($users->isNotEmpty())
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>direccion</th>
                            <th>celular</th>
                            <th>telefono</th>
                            <th>email</th>
                            <th>opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->direccion}}</td>
                            <td>{{$user->celular}}</td>
                            <td>{{$user->telefono}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                              <a href="" class="col-4 app-shortcuts__item"><i class="zmdi zmdi-eye"></i> </a>
                              <a href=""  class="col-4 app-shortcuts__item"><i class="zmdi zmdi-edit"></i></a>
                              <a href="" class="col-4 app-shortcuts__item"><i class="zmdi zmdi-face"></i> </a>
                              <a href="" class="col-4 app-shortcuts__item"><i class="zmdi zmdi-github-alt"></i></a>
                              <a href="" class="col-4 app-shortcuts__item"> <i class="zmdi zmdi-car-taxi"></i></a>
                              <a href=""  class="col-4 app-shortcuts__item"><i class="zmdi zmdi-smartphone-ring"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@else
<p>No hay usuarios registrados.</p>
@endif
    <footer class="footer hidden-xs-down">
        <p>© Super Admin Responsive. All rights reserved.</p>

        <ul class="nav footer__nav">
            <a class="nav-link" href="">Homepage</a>

            <a class="nav-link" href="">Company</a>

            <a class="nav-link" href="">Support</a>

            <a class="nav-link" href="">News</a>

            <a class="nav-link" href="">Contacts</a>
        </ul>
    </footer>
</section>
@endsection