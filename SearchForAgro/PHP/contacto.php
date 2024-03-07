<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contacto.css">
    
</head>
<body>
  <header>
    <h1>Agro Market</h1> <span><img src="icono.jpg" alt=""  width="90px"> </span>

    <a href="inicarSe.html">iniciar sesion</a>
</header>

<nav>
        <a href="indexpro.html">Inicio</a>
        <a href="progreso.html">Plagas</a>
        <a href="cultivo.html">Cultivos</a>
        <a href="contacto.html">Contacto</a>
        

</nav>
<div class="fondo" >
    <div class="contact_form">

        <div class="formulario">      
          <h1>Agro Market</h1>
            <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>
    
    
              <form action="submeter-formulario.php" method="post">       
    
                
                    <p>
                      <label for="nombre" class="colocar_nombre">Nombre
                        <span class="obligatorio">*</span>
                      </label>
                        <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                    </p>
                  
                    <p>
                      <label for="email" class="colocar_email">Email
                        <span class="obligatorio">*</span>
                      </label>
                        <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                    </p>
                
                    <p>
                      <label for="telefone" class="colocar_telefono">Teléfono
                      </label>
                        <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
                    </p>    
                  
                    <p>
                      <label for="asunto" class="colocar_asunto">Asunto
                        <span class="obligatorio">*</span>
                      </label>
                        <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
                    </p>    
                  
                    <p>
                      <label for="mensaje" class="colocar_mensaje">Mensaje
                        <span class="obligatorio">*</span>
                      </label>                     
                                        <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                                    </p>                    
                  
                    <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>
    
                    <p class="aviso">
                      <span class="obligatorio"> * </span> <strong>los campos son obligatorios.</strong>
                    </p>          
                
              </form>
        </div>  
      </div>
    </div>
    <footer>
      <p>&copy; 2023 Todos los derechos reservados.</p>
  </footer>
    </body>
    </html>
</body>
</html>