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


            <header>
                <img src="src/img/ico.png" alt="">
                <nav>
                    <ul>
                        <li>
                            <a id="lista">Lista</a>
                        </li>
                        <li>
                            <a href="cont.php">Notas</a>
                        </li>
                        <li>
                            <a href="formulario.php">Contacto</a>
                        </li>
                        <li>
                            <a href="index.html">Inicio</a>
                        </li>
                    </ul>
                </nav>

            </header>

            <div class="all">

                <div class="content centrar-full">
                    <div class="c-cont">
                        <div class="hero-section">
                            <div class="sec-form " id="formula">
                                <div class=" formulario">
                                    <div class="titulo centrar-full">
                                        <h1>¡HABLEMOS!</h1>
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

</body>

</html>