<?php include_once 'includes/templates/header-section.php'; ?>

        <section class="seccion contenedor">
            <h2>Registro de Usuarios</h2>
            <form id="registro" class="registro" action="mail.php" method="post">
                <div id="datos_usuario" class="registro caja clearfix">
                    <div class="campo">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
                    </div>
                    <div class="campo">
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido">
                    </div>
                    <div class="campo">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Tu Email">
                    </div>
                    <div class="campo">
                        <label for="consulta">Ingresa tu consulta aca:</label>
                        <textarea name="consulta" rows="8" cols="127"></textarea>

                    </div>
                    <div id="error"></div>

                </div> <!--#datos_usuario -->
                <div class="box-footer">
                    <input type="hidden" name="registro" value="nuevo">
                    <button type="submit" class="button center" id="btnRegistro">Enviar</button>
                </div>


            </form>
        </section>

    <?php include_once 'includes/templates/footer.php'; ?>
