@extends('layouts.appAdmin')

@section('head')
<title>clientes</title>

@endsection

@section('content')
<h2 class="mb-4">Clientes</h2>

<div class="container px-4 py-5" id="featured-3">
  <h2 class="pb-2 border-bottom text-center">Usuarios Como Clientes</h2>


    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ($clientes as $striper)
          <div class="col">
            <div class="card shadow-sm">
              <img class="card-img-top" src="{{asset($striper->foto)}}" alt="Card image cap">
              <div class="card-body">
                <h3 >{{$striper->nombre}}</h3>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <br>
                    <form action="" id="mostrar" style="">
                      {!! csrf_field() !!}
                        <input type="text" class="form-control d-none" name="id" id="id" value="{{$striper->id}}" aria-describedby="helpId" placeholder="">     
                     <button type="button" class="btn btn-info" id="btnDetalle" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
                          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
                        </svg>
                        Ver
                      </button> 
                    </a>
                    </form>
                    &nbsp;
                    <div style="">
                      <form method="POST" action="{{Route('eliminarAdmin', ['id'=> $striper->id])}}" class="formulario-eliminar">
                        @csrf
                        <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                          <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                          </svg> Eliminar</button>
                    
                      </form>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
                        <!-- Modal -->
                        <div class="modal fade" id="detalle" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Detalle</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
          
                                  <div class="row g-3">
                                      <div class="text-center">
                                       <img src=" " name="originalFoto" id="img" class="rounded-circle mx-auto d-block" style="width: 250px; height: 200px;" alt="...">
                                      </div>
                                      <div class="col-md-6">
                                          <label for="name"  class="col-form-label text-md-end">{{ __('Nombres') }}</label>
                                          <input id="name" style="border: 1px solid black;" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" autofocus>
          
                                          @error('name')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
          
                                      
                                      <div class="col-md-6">
                                          <label for="apePat" class="col-form-label text-md-end">{{ __('Apellido Paterno') }}</label>
                                         <input id="apePat" style="border: 1px solid black;" type="text" class="form-control @error('apePat') is-invalid @enderror" name="apePat" value="" required autocomplete="apePat" autofocus>
          
                                          @error('apePat')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                      <div class="col-md-6">
                                          <label for="apeMat" class=" col-form-label text-md-end">{{ __('Apellido Materno') }}</label>
                                         <input id="apeMat" style="border: 1px solid black;" type="text" class="form-control @error('apeMat') is-invalid @enderror" name="apeMat" value="" required autocomplete="apeMat" autofocus>
          
                                          @error('apeMat')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                      <div class="col-6">
                                          <label for="email" class="col-form-label text-md-end">{{ __('Correo Electronico') }}</label>
                                          <input id="email" style="border: 1px solid black;" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" autofocus disabled>
          
                                          @error('email')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                  </div>
                                 
                                      <div class="col-6">
                                          <label for="fechaNa" class="">{{ __('Fecha de Nacimiento') }}</label>
                                          <input id="fechaNa" style="width: 150px" type="date" class="form-control @error('fechaNa') is-invalid @enderror" name="fechaNa" value="" required autocomplete="fechaNa" autofocus>
          
                                          @error('fechaNa')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
          
                                  </div>
          <br>
          
                                  <div class="row mb-3">
                                      <label for="apodo" class="col-md-4 col-form-label text-md-end">{{ __('Apodo de Usuario') }}</label>
          
                                      <div class="col-md-6">
                                          <input id="apodo" style="border: 1px solid black;" type="text" class="form-control @error('apodo') is-invalid @enderror" name="apodo" value="" required autocomplete="apodo">
          
                                          @error('apodo')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
      
                                  <div class="row mb-3">
      
                                      <label for="genero" class="col-md-4 col-form-label text-md-end">{{ __('Genero') }}</label>
                                      <div class="col-md-6">
                                        <input style="border: 1px solid black;" type="text" name="genero" id="genero">
                                      </div>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{'js/acceptados.js'}}" defer></script> 
@endsection
