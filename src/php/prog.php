<?php
// index.php
// ubicacion JSON online y local
define('JSON', 'src/json/materia.json');
function pagina($p, $n)
{
    // leer JSON validamos si el fichero online e accesible y si no abrimos el json local
    $data = @file_get_contents(JSON);
    $items = json_decode($data, true);
    $items = $items["herramienta"];
    //lista de items a recorrer

    foreach ($items as $i) {
        if ($i["name"] == $n) {
            $i = $i["html"];
            $next = $p + 1;
            $back = $p - 1;

            if ($next > count($i)) {
                $next = 1;
            }
            if ($back < 1) {
                $back = count($i);
            }


            echo "<p class='pagination'>Página " . $p . " de " . $n . "</p>";
            echo "<div class='btn-next'>";
            echo "<a href='cont.php?var1=" . $back . "&var2=" . $n . "'>atras</a>";
            echo "<a href='cont.php?var1=" . $next . "&var2=" . $n . "'>siguiente</a>";
            echo "</div>";
            echo ' <script>  $(".' . $n . '").css("display", "block"); </script>';

            $cont = $i["p" . $p];
            echo $cont["cont"];
        } else {
        }
    }
}

function lista()
{
    // leer JSON validamos si el fichero online e accesible y si no abrimos el json local
    $data = @file_get_contents(JSON);
    $items = json_decode($data, true);
    $items = $items["herramienta"];
    //lista de items a recorrer

    foreach ($items as $i) {

        $pagina = $i["html"];
        echo "<a class=first href='cont.php?var1=1&var2=" . $i["name"] . "'>" . $i["name"] . "</a>";

        echo "<div class='" . $i["name"] . " lista'>";
        foreach ($pagina as $pag) {
            echo "<a class='asd' href='cont.php?var1=" . $pag["id"] . "&var2=" . $i["name"] . "'>" . $pag["name"] . "</a><br>";
        }
        echo "</div>";
    }
}


function none()
{
    // leer JSON validamos si el fichero online e accesible y si no abrimos el json local
    $data = @file_get_contents(JSON);
    $items = json_decode($data, true);
    $items = $items["herramienta"];
    //lista de items a recorrer
    foreach ($items as $i) {
        $pagina = $i["html"];
        echo ' <style>    .' . $i["name"] . '{        display: none;    }</style>';
    }
}
