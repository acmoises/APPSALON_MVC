<h1 class="nombre-pagina">Olvide mi Password</h1>
<p class="descripcion-pagina">Reestablece Tu Password Escribiendo tu Email</p>

<?php 
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <lable for="email">Email</lable>
        <input type="email" name="email" id="email" placeholder="Tu Email">
    </div>
    <input type="submit" value="Enviar Instrucciones" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea una </a>
</div>