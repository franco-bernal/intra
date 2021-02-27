<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrCodes | Contacto</title>
    <link rel="shortcut icon" href="src/img/ico.png" type="image/x-icon">

    <link rel="stylesheet" href="src/css/bulma.min.css">
    <link rel="stylesheet" href="src/css/reset.css">
    <link rel="stylesheet" href="src/css/fonts.css">
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="stylesheet" href="src/css/LearnLaravel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="jqueryui/style.css">

    <script>
        $(function() {
            $("#draggable").draggable();
        });
    </script>
    <?php include 'src/php/prog.php'; ?>
    <?php
    if (isset($_GET["var1"])) {
        $p = $_GET["var1"];
        $n = $_GET["var2"];
    } else {
        $p = "";
        $n = "";
    }

    none();
    ?>

</head>

<body class="scrol">


    <div class="hero">
        <div class="hero-body">

            <div class="nave">
                <div class="columns is-gapless  is-multiline">
                    <div class="column logo centrar-full is-2-fullhd is-2-desktop  is-2-tablet  is-12-mobile ">
                        <a id="mostrar">
                            <h1>FrCodes</h1>

                        </a>
                    </div>
                    <div class="column is-3-fullhd is-1-desktop  is-1-tablet  is-12-mobile  is-hidden-mobile">
                    </div>
                    <div class="column n-m centrar-full is-1-fullhd is-2-desktop  is-2-tablet  is-12-mobile">
                        <a href="pruebas/">menu</a>
                    </div>
                    <div class="column n-m centrar-full is-1-fullhd is-2-desktop  is-2-tablet  is-12-mobile ">
                        <a href="index.html">Home</a>
                    </div>
                    <div class="column n-m centrar-full is-1-fullhd is-2-desktop  is-2-tablet  is-12-mobile ">
                        <a href="cont.php">Notas</a>
                    </div>
                    <div class="column n-m centrar-full is-1-fullhd is-2-desktop  is-2-tablet  is-12-mobile ">
                        <a href="pruebas/robot/index.html">Pruebas</a>
                    </div>
                </div>

            </div>

            <div class="all">
                <div class="naveg">
                    <div class="naveg-cont">
                        <?php
                        if ("" != "") {
                            echo "<a> sin lista</a>";
                        } else {
                            lista();
                        }
                        ?>

                    </div>
                </div>
                <div class="content centrar-full">
                    <div class="c-cont">
                        <div class="hero-section">
                            <div class="sec-form " id="formula">
                                <div class=" formulario">
                                    <div class="titulo centrar-full">
                                        <h1>Contacto</h1>
                                    </div>
                                    <div class="cuerpo-form ">
                                        <form method="POST" action="correo.php" name="enviar" class="formulario-contacto" id="limpiar-form">
                                            <label for="">Nombre*</label>
                                            <input type="text" name="nombre" id="nombre-form" maxlength="50" required="true">
                                            <label for="">Email*</label>
                                            <input type="email" name="email" maxlength="60" required>
                                            <label for="">Teléfono*</label>
                                            <input type="number" name="telefono" minlength="8" maxlength="15" required="true">
                                            <label for="">Mensaje</label>
                                            <br>
                                            <textarea class="estilotextarea" name="observaciones" maxlength="200">
                                            </textarea>
                                            <button class="button form-boton " type="submit" name="enviar">ENVIAR
                                            </button>


                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".n-m").hide("fast");
            if ($('html').width() > 767) {
                $(".n-m").show("fast");
            }
            $(window).resize(function() {
                if ($('html').width() > 767) {
                    $(".n-m").show("fast");
                } else {
                    $(".n-m").hide("fast");

                }
            });


            $("#mostrar").click(function() {
                $(".n-m").toggle("fast");
            });
            $(".naveg").animate({
                width: '0%',
                opacity: '1'
            }, "slow");
            $(".content").animate({
                width: '100%',
                opacity: '1'
            }, "slow");
            /*  */


        });
    </script>
    <!--MODAL -->

    <div class="container" id="app">
        <div class="modal modal_true">
            <div class="modal-background"></div>
            <div class="modal-content ">
                <h1 style="color:white;  text-align: center;" class="center ">Información enviada, lo contactaremos a la
                    brevedad.</h1>
            </div>
            <button class="modal-close"></button>
        </div>
    </div>



    <div class="container" id="app">
        <div class="modal modal_false">
            <div class="modal-background"></div>
            <div class="modal-content">
                <h1 style="color:white;" class="centrar-texto">No se pudo enviar, intentelo nuevamente.</h1>
            </div>
            <button class="modal-close"></button>
        </div>
    </div>

    <div class="container" id="app">
        <div class="modal modal_error">
            <div class="modal-background"></div>
            <div class="modal-content ">
                <h1 style="color:white;" class="centrar-texto ">Error</h1>
            </div>
            <button class="modal-close"></button>
        </div>
    </div>

    <!--MODAL -->
    <script src="src/js/SinRedire.js"></script>
    <script src="src/js/modal.js"></script>
    <img id="draggable" src="src/img/pngegg (2).png" alt="">

</body>

</html>