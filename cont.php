<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrCodes | Notas</title>
    <link rel="shortcut icon" href="src/img/ico.png" type="image/x-icon">

    <link rel="stylesheet" href="src/css/bulma.min.css">
    <link rel="stylesheet" href="src/css/reset.css">
    <link rel="stylesheet" href="src/css/fonts.css">
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="stylesheet" href="src/css/LearnLaravel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>


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

            <div class="burger">
                <a class="x-burger">Cerrar[x]</a>
                <?php
                if ("" != "") {
                    echo "<a> sin lista</a>";
                } else {
                    lista();
                }
                ?>
            </div>
            <section class="content-section">
                <?php
                if ($p == "") {
                ?>
                    <div class="no-option">
                        <h1>Elije una de las opciones del menú.</h1>

                        <a href="https://francobg1.github.io/in/">Enlace a la página anterior</a>

                    </div>

                <?php
                } else {
                    pagina($p, $n);
                }
                ?>
            </section>




        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.burger').slideUp();
            $("body").on('click', ".burger .x-burger", function() {
                $(".burger").slideUp();
            });

            $("body").on('click', "#lista", function() {
                var burger = $(".burger");
                if (burger.css("display") == "none") {
                    burger.slideDown();
                } else {
                    burger.slideUp();
                }
            });



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

            $(".all").click(function() {
                if ($('html').width() < 767) {
                    if ($(".naveg").width() > 0) {
                        $(".naveg").animate({
                            width: '0%',
                            opacity: '1'
                        }, "slow");
                        $(".content").animate({
                            width: '100%',
                            opacity: '1'
                        }, "slow");
                    } else {
                        $(".naveg").animate({
                            width: '40%',
                            opacity: '1'
                        }, "fast");
                        $(".content").animate({
                            width: '60%',
                            opacity: '1'
                        }, "fast");
                    }
                    /*  */
                } else {
                    if ($(".naveg").width() > 0) {
                        $(".naveg").animate({
                            width: '0%',
                            opacity: '1'
                        }, "slow");
                        $(".content").animate({
                            width: '100%',
                            opacity: '1'
                        }, "slow");
                    } else {
                        $(".naveg").animate({
                            width: '20%',
                            opacity: '1'
                        }, "fast");
                        $(".content").animate({
                            width: '95%',
                            opacity: '1'
                        }, "fast");
                    }
                }
            });

            /*  */

        });
    </script>

</body>

</html>