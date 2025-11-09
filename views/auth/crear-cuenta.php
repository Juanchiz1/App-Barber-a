<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<form class="formulario" method="POST" action="/crear">

<div class="campo">
<label for="nombre">Nombre</label>
<input 
    type="text"
    id="nombre"
    placeholder="Tu Nombre"
    name="nombre">
</div>

<div class="campo">
<label for="apellido">Apellido</label>
<input 
    type="text"
    id="apellido"
    placeholder="Tu Apellido"
    name="apellido">
</div>

<div class="campo">
<label for="telefono">Teléfono</label>
<input 
    type="tel"
    id="telefono"
    placeholder="Tu Telefono"
    name="telefono">
</div>

<div class="campo">
<label for="email">Email</label>
<input 
    type="email"
    id="email"
    placeholder="Tu Email"
    name="email">
</div>

<div class="campo">
<label for="password">Password</label>
<input 
    type="password"
    id="password"
    placeholder="Tu Password"
    name="password">
</div>

<input type="submit" value="Crear Cuenta" class="boton">

</form>

 <div class="acciones">
        <a href="/">Inicia Sesión</a>
        <a href="/olvide">¿Olvidaste tu password?</a>
    </div>