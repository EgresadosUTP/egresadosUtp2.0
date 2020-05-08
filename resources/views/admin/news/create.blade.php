@extends('layouts.admin.layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Crear una nueva Noticia</h1>
    <p class="mb-4"> Los campos que encontrarás a continuación son requeridos. Para guardar la noticia, haz click en el botón "Publicar"
        En el campo "Resumen" agrega un pequeño párrafo que le dé una idea a tus lectores de qué se tratará la nueva Noticia.
    </p>

    <!-- Area Chart -->
    <div class="card shadow mb-10">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Creación de una nueva Noticia</h6>
        </div>

        <div>

            <div class="card-body">


                <form action="" method="POST">
                    <div class="col form-group">
                        <label for="pillInput">Título</label>
                        <input type="text" class="form-control input-pill" id="dni" placeholder="El poder de las palabras... ">
                    </div>

                    <div class="col form-group">
                        <label for="pillInput">Resumen</label>
                        <input type="text" class="form-control input-pill" id="dni" placeholder="Pequeño texto resumen de la noticia ">
                    </div>



                    <div class="col form-group">
                        <label for="pillInput">Contenido</label>
                        <input type="text" class="form-control input-pill" id="primerNombre" placeholder="Etiam justo augue, tristique non ipsum eu, eleifend pulvinar ipsum. Mauris bibendum nibh ut augue rhoncus, vel suscipit leo ornare. Vivamus ut est quis nunc dictum tempus id quis nunc.
                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum dapibus nulla finibus diam faucibus mollis.

">
                    </div>
                    <div class="col form-group">
                        <label for="pillInput">Media</label>
                        <input type="text" class="form-control input-pill" id="primerApellido" placeholder="img.png">
                    </div>

                    <small id="emailHelp" class="form-text text-muted">Revisa cuidadosamente la informacion antes de enviar.</small>
                    <div align="center">
                        <button type="submit" class="btn btn-primary input-pill text-center">Publicar</button>
                    </div>
                </form>

            </div>


        </div>
    </div>




</div>
<!-- end main content -->

@endsection