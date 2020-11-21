<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <title>Agregar Nuevo Estreno</title>
        <script defer src="{{ asset('js/validations.js') }}"></script>
    </head>
    <body>
        <header>
            <h2>Create post</h2>
        </header>
        <nav>
            <ul>
            <li><a href="/">Home</a></li>
            <li><a href="newpost">New Movie</a></li>
            </ul>
        </nav>    
        <section>   
            @if ($errors->any())
                <div class="errores">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="formulario">
                <form id="nueva_pelicula" name="agregar_pelicula" method="post" action="{{URL::to('/')}}/newpost" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div id="input_titulo" class="formulario">            
                        <label for="titulo">Titulo:</label><br>
                        <input type="text" id="titulo" name="title" value="" required><br>
                    </div>
                    <div id="input_descripcion" class="formulario">            
                        <label for="descripcion">Descripcion:</label><br>
                        <textarea id="descripcion" name="description" required></textarea> <br>
                    </div>
                    <div id="input_archivo" class="formulario">            
                        <label for="caratula">Caratula:</label>
                        <input type="file" id="caratula" name="cover_name" required><br>
                    </div>
                    <div id="submit_agregar" class="formulario">            
                        <input onclick="validar()" id="enviar" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>
