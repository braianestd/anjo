<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> contact@gmail.com</p>
                <p><span class="fa fa-mobile"></span> (598) 9982-8665</p>
            </section>
        </section>

        <form action="enviar.php" method="post" class="form_contact">
            <h2>Envia un mensaje</h2>
            <div class="user_info">
                <label for="names">Nombres *</label>
                <input type="text" id="names" name="nombre" require="true">

                <label for="phone">Telefono / Celular</label>
                <input type="text" id="phone" name="telefono">

                <label for="email">Correo electronico *</label>
                <input type="text" id="email" name="correo" required="true">

                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje" name="mensaje" required="true"></textarea>

                <input type="button" value="Enviar Mensaje" id="btnSend">
            </div>
        </form>

    </section>

</body>
<?php
   include_once("rodape.php")
?>