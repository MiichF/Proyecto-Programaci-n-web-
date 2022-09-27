<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Proyecto1 pagina estatica</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/estilos.css" rel="stylesheet">
</head>

<header>
        <h1 id="title">Contacto</h1>
    </header>

    <form id="survey-form" action="/contacto-recibe-form" method="POST">
        @csrf
        <label id="name-label" for="name">Nombre</label><br>
        <input id="name" type="text"  name="nombre" value = {{$nombre}}><br>

        <label id="email-label" for="email">Correo</label><br>
        <input id="email" type="text" name="correo" value= {{$correo}}><br>
        

        <p>Mensaje</p><br>
        <textarea id="suggestions" name="mensaje" placeholder="Escribe tu mensaje"></textarea>
        
        <input id="submit" type="submit" value="Submit">

        @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    <br>
                @endforeach
            </ul>
        </div>
        @endif
    </form>

</body>
</html>