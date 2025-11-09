<h1 class="nombre-pagina">Olvidé Password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu email a continuación</p>

<form class="formulario" method="POST" action="/olvide">

    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            placeholder="Tu Email"
            name="email">
    </div>

    <input type="submit" value="Enviar Instrucciones" class="boton">

    <div class="acciones">
        <a href="/">Inicia Sesión</a>
        <a href="/crear-cuenta">Crear una cuenta</a>
    </div>