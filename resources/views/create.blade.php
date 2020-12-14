@extends('layout')

@section('content')



<div  class="container" >

    <div class="col-6 textouno">


        <form method="post" action="/firmas">
            @csrf

            @if ($errors->any())
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif

            <div class="form-group">
            <label for="exampleInputname1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter name" name="name" value="{{old('name')}}">
            <small id="emailHelp" class="form-text text-muted">Nombre obligatorio.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="email" value="{{old('email')}}">
                <small id="emailHelp" class="form-text text-muted">Correo electrónico obligatorio.</small>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check" >
                <label class="form-check-label" for="exampleCheck1" >A favor de salvar los tigres.</label>
                <small id="emailHelp" class="form-text text-muted">Valida todos los campos.</small>
            </div>
            <button type="submit" class="btn btn-secondary">Enviar</button>



            </form>

        </div>


        <div class ="col-6 texto">
            <div class="col-10 contenidodefirmas">
                <div class="margen">
                    <div class="col-12 firmas">


                    @if (count($vari) == 0)

                        <h2 class="firmas red"> Aún no hay firmas, sé el primero en dejarnos una firma;</h2>

                    @else

                        <h2 class="firmas red"> Gente que ya ha firmado;</h2>

                    @endif

                        <br/>



                    <ol>

                        @foreach ($vari as $var)
                        <div class="col-3"> <li > {{$var->name}}. </li> </div>
                        <div class="col-1"> | </div>
                        <div class="col-3"> {{$var->email}}. </div>
                        <div class="col-1"> | </div>
                        <div class="col-4"> {{$var->created_at}}. </div>
                        <br/>
                        <br/>

                        @endforeach

                    </ol>



        </div>
    </div>

    @endsection
