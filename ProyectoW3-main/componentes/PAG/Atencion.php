<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./componentes/CSS/atencion.css">
</head>
<body> 
    <div class="recovery-text">
        <h2>Recuperación de entradas</h2>
        <p>
            Las entradas adquiridas en SuperTicket.bo están a tu disposición en el Área Privada de la web, a la que puedes acceder con el correo de compra y la clave que has configurado; si nunca lo has hecho, es el número del Documento de Identificación (DNI, NIF, pasaporte, etc.) que indicaste al realizar la compra.
            Puedes también recuperarlas aquí mismo haciendo clic en el siguiente botón.
        </p>
        <!-- Botón de recuperar entrada/ticket -->
        <a href="index.php?page=log" class="btn-recuperar">RECUPERAR ENTRADA/TICKET</a>
        <h2>Atencion al Cliente</h2>
        <p>
        Es probable que tus dudas se resuelvan consultando bien la información sobre el evento que hay en la web, 
        bien en la sección de Preguntas Frecuentes que encontrarás en el menú superior/inferior. 
        </p> 
        <p>
        Si no encuentras tus entradas, revisa lo que hemos contado arriba acerca de la recuperación de las mismas.
        </p> 
        <p>
            Si aun así, necesitas consultarnos cualquier otra cosa, rellena el formulario o escríbenos directamente a 
            <a href="mailto:compras@ticketxpress.bo" class="email">compras@ticketxpress.bo</a>.
        </p>
        <p>
        ¡Te responderemos enseguida!    
        </p> 
        <p> 
        Muchas gracias.
        </p> 

    <!-- Texto cursivo y centrado -->
    <h2 class="text-center obligatorio-text"><em>Todos los campos son obligatorios</em></h2>

    <!-- Formulario de contacto -->
    <form class="text-center contact-form">
        <!-- Campo: Nombres y Apellidos -->
        <div class="form-group mb-3">
            <input type="text" class="form-control" placeholder="Nombres y Apellidos" required>
        </div>
        <!-- Campo: Email -->
        <div class="form-group mb-3">
            <input type="email" class="form-control" placeholder="Email" required>
        </div>
        <!-- Campo: Seleccione un Evento -->
        <div class="form-group mb-3">
            <select class="form-control" required>
                <option value="">Seleccione un Evento</option>
                <option value="evento1">Kudai Revive</option>
                <option value="evento2">Bronco</option>
                <option value="evento3">Siempre Mayas</option>
                <option value="evento3">Hagamos historia Luis Vega</option>
                <option value="evento3">Te amo pero no te soporto</option>
                <option value="evento3">Bolivar vs Aurora</option>
            </select>
        </div>
        <!-- Campo: Escriba su mensaje -->
        <div class="form-group mb-3">
            <textarea class="form-control" rows="4" placeholder="Escriba su mensaje" required></textarea>
        </div>
        <!-- Código CAPTCHA -->
        <div class="form-group mb-3">
            <!-- Añadimos la clase 'captcha-img' a la imagen -->
            <img src="./componentes/Captcha/generar_captcha.php?" alt="CAPTCHA" class="captcha-img mb-3">
            <input type="text" class="form-control" name="captcha" placeholder="Ingrese el código CAPTCHA" required>
        </div>
        <!-- Botones: Refrescar y Enviar -->
        <div class="form-group mb-3 text-center">
            <button type="button" class="btn btn-comprar" id="refreshCaptcha">Refrescar</button>
            <button type="submit" class="btn btn-comprar">Enviar</button>
        </div>
        <!-- Mensaje de enviado -->
        <p class="text-center enviado-text" style="display: none;">¡Mensaje enviado correctamente!</p>
    </form>
    </div>
    <script>
        document.getElementById('refreshCaptcha').addEventListener('click', function() {
            // Seleccionamos la imagen usando la clase 'captcha-img'
            const captchaImage = document.querySelector('.captcha-img');
            // Añadimos un timestamp para evitar que el navegador cachee la imagen
            captchaImage.src = './componentes/Captcha/generar_captcha.php?' + Date.now();
        });
    </script>
</body>
</html>
