@extends('admin')
@section('title','Contáctanos')
@section('styles')
<link rel="stylesheet" href="css/contacto.css">
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
@endsection

@section('contenido')


<div class=" container-form p-5">
    <div class="info-form">
        <h2>Contáctanos</h2>

        <div class="template-demo">
            <button type="button" class="btn btn-social-icon-text btn-facebook"><i
                    class="fab fa-facebook-f"></i>Facebook</button>
            <button type="button" class="btn btn-social-icon-text btn-youtube"><i
                    class="fab fa-youtube"></i>Youtube</button>
            <button type="button" class="btn btn-social-icon-text btn-twitter"><i
                    class="fab fa-twitter"></i>Twitter</button>
            <button type="button" class="btn btn-social-icon-text btn-linkedin"><i
                    class="fab fa-linkedin-in"></i>Linkedin</button>
            <button type="button" class="btn btn-social-icon-text btn-google"><i
                    class="fab fa-google"></i>Google</button>

        </div>
        <div class="template-demo pt-5">
            <a href="#"><i class="fa fa-phone"></i> 175-678-576</a>
            <a href="#"><i class="fa fa-envelope"></i> contact@movie.com</a>
            <a href="#"><i class="fa fa-map-marked"></i> Oregon,United States</a>


        </div>

    </div>
    <form action="#" autocomplete="off">
        <input type="text" name="nombre" placeholder="Tu Nombre" class="campo">
        <input type="emal" name="email" placeholder="Tu Email" class="campo">
        <textarea name="mensaje" placeholder="Tu Mensaje..."></textarea>
        <input type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar">
    </form>
</div>
@endsection
@section('scripts')

@endsection