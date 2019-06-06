@extends('layouts.principal')

@include('layouts.menu')
@include('layouts.nav')
@push("style")
<style>
            #video-container {
                position: relative;
            }
            
            #overlay {
                position: absolute;
                width: 320px;
                height: 240px;
                left: 0;
                top: 0;
                pointer-events: none;
                background-image: url('data:image/svg+xml...');
                background-position: top right, top left, bottom left, bottom right;
                background-repeat: no-repeat;
            }
            label{
                color:#000;
            }
            .avatar-pic {
            width: 150px;
            }

    </style>
@endpush
@section('content')
<section class="content">
    
<style type="text/css">
    .btn-bs-file{
    position:relative;
    }
    .btn-bs-file input[type="file"]{
        position: absolute;
        top: -9999999;
        filter: alpha(opacity=0);
        opacity: 0;
        width:0;
        height:0;
        outline: none;
        cursor: inherit;
    }
</style>
{!!Form::open(["method"=>'post', "route"=>'users.store'])!!}
<div class="card">
    <div class="card-body">
        <center>
            <h1>FORMULARIO DE REGISTRO DE USUARIOS</h1>
        </center>
        
        <br>

        <div class="row">
            <div class="col-sm-6">
              
                <center>
                      <label>IMAGEN PRECARGADA</label>
                    <div class="col col-md-6" >
                       <img id="img" src="{{{ asset('img/you/user.png') }}}" width="200px" height="200px" style="border-radius:50% ">
                    </div>
                </center>

                    <div class="container text-center">
                        <div class="row">
                            <hr style="margin-bottom:25px;" />
                            <div class="col-sm-12" >
                                <label class="btn-bs-file btn btn-light" >
                                    <i class="zmdi zmdi-cloud-upload zmdi-hc-fw"></i>
                                    <input type="file"  id="inp" />
                                </label>
                                <button type="button" id="abrir_modal" class="btn btn-light" data-toggle="modal" data-target=".bs-example-modal-sm" ><i class="zmdi zmdi-camera zmdi-hc-fw"></i></button>
                            </div>    
                        </div>
                    </div>

                <br>

                <br>
            </div>

            <div class="col-sm-6">
                <div class="input-group">
                    <h3>Informacion Vital</h3>
                </div>
                <div class="input-group">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="email del usuario" name="email">
                        <i class="form-group__bar"></i>
                    </div>
                    <span class="input-group-addon">@example.com</span>
                </div>
                 <div class="input-group">
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="************" name="password">
                        <i class="form-group__bar"></i>
                    </div>
                    <span class="input-group-addon">password</span>
                </div>
                <br>

                <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-account-calendar zmdi-hc-fw"></i></span>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="nombre completo" name="name">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-smartphone-android zmdi-hc-fw"></i></span>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="celular" name="celular">
                        <i class="form-group__bar"></i>
                    </div>
                   <span class="input-group-addon"><i class="zmdi zmdi-phone zmdi-hc-fw"></i></span>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="telefono" name="telefono">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-balance zmdi-hc-fw"></i></span>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="direccion del usuario" name="direccion">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="input-group">
                     <h3>Informacion Referencial</h3>
                </div>
               
                <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-accounts-alt zmdi-hc-fw"></i></span>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="contacto de referencia" name="contact_referencia">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i></span>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="parentesco con el usuario" name="parentesco">
                        <i class="form-group__bar"></i>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="zmdi zmdi-account-box-phone zmdi-hc-fw"></i></span>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="telefono de referencia" name="telf_ref">
                        <i class="form-group__bar"></i>
                    </div>
                </div>

            </div>
            <div class="input-group input-group-sm">
            </div>
                <canvas id="canvas" style="display: none;"></canvas>
                <textarea name="foto" id="b64"   style="visibility:hidden"></textarea>
            </div>
            <center>
                <button class="btn btn-light" type="submit">
                    REGISTRAR USUARIO
                </button>
            </center>
            
        </div>
        </div>
   
        <br>
        <br>


    </div>
</div>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
     <div class="modal-content">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <center><h4 class="modal-title" id="myModalLabel">TOMAR FOTO CLIENTE </h4></center>
                   </div>
                    <div class="modal-body">
                        <div class="col col-md-12" >
                            <select name="listaDeDispositivos" id="listaDeDispositivos" class="form-control"></select>
                        </div>

                        <div class="row">   
                        <div class="col-md-12"> 
                            <center>
                                <div id="video-container">
                                    <video width="250px" height="250px" muted="muted" id="video"></video>
                                </div>
                            </center>
                            <p id="estado"></p>
                        </div>
                     <div class="col col-md-12" >
                        <center>
                            <button type="button" id="boton" data-dismiss="modal" class="btn btn-round btn-success"><i class="fa fa-camera"></i> TOMAR FOTO</button>
                        </center>

                    </div> 
                    </div>             
                    </div>  
                </div>                                  
            </div>
          </div>
        </div>

<script src="{{asset('js/script.js')}}"></script>
<script>
        function readFile() {
      
          if (this.files && this.files[0]) {
            
            var FR= new FileReader();
            
            FR.addEventListener("load", function(e) {
              document.getElementById("img").src       = e.target.result;
              document.getElementById("b64").innerHTML = e.target.result;
            }); 
            
            FR.readAsDataURL( this.files[0] );
          }
        }
        
        document.getElementById("inp").addEventListener("change", readFile);
        $(document).ready(function(){
            $("#abrir_modal").click(function(){
                $("#boton").attr("disabled",false);
            });
        });
    </script>

</section>

@endsection