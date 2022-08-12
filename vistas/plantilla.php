<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php echo COMPANY ?> </title>
    <?php include "./vistas/inc/link.php"; ?>
</head>

<body>
    <?php 

    $peticionAjax =false;
    include_once "./controladores/vistasControlador.php"; 
    $IV = new vistasControlador();
    $vistas = $IV -> obtener_vistas_controlador();

    if($vistas == "login" || $vistas == "404"){
        require_once "./vistas/contenidos/".$vistas."-view.php";
    } else{

    ?>
    <!-- Main container -->
    <main class="full-box main-container">
        <!-- Nav lateral -->
        <?php
        include "./vistas/inc/navLateral.php";
        ?>
        <!-- Page content -->
        <section class="full-box page-content">
            <?php 
                include "./vistas/inc/navBar.php";
                include $vistas;
            ?>

            <!-- Page header -->
            <!-- <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fab fa-dashcube fa-fw"></i> &nbsp; DASHBOARD
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum rerum animi natus beatae ex. Culpa blanditiis tempore amet alias placeat, obcaecati quaerat ullam, sunt est, odio aut veniam ratione.
                </p>
            </div> -->



        </section>
    </main>
    <?php
        /*Cierre de else*/
        }
    include "./vistas/inc/script.php";
    ?>

</body>

</html>