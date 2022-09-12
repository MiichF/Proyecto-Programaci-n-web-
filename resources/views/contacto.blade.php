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

<body>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form action="/contacto-recibe-form" method ="POST">
                            @csrf   
                            <div class="form-group">
                                    <label> Nombre</label><br>
                                    <input type="text" class="form-control p-4" placeholder="Nombre" name="nombre" value =  {{ $nombre }}>
                                    @error('nombre')
                                        <i>{{ $message }}</i> 
                                    @enderror                              
                                </div>
                                <div class="form-group">
                                <label> Correo</label><br>
                                    <input type="text" class="form-control p-4" placeholder="Correo Electronico"  nome="correo" value = {{ $correo }}>
                                    @error('correo')
                                        <i>{{ $message }}</i> 
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label> Mensaje</label><br>
                                    <textarea name="mensaje" class="form-control p-4" id ="mensaje"  cols ="30" rows= "10">
                                            
                                </textarea>
                                @error('mensaje')
                                        <i>{{ $message }}</i> 
                                    @enderror
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    
</body>

</html>