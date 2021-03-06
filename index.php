<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }

            
            .centerText {
                text-align: center;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <?php

            session_start();

            $rutafunciones = 'funciones/';
            include $rutafunciones.'consultas.php';

            include 'target_links.php';
            
            if (isset($_POST['consultaEnviada'])) {

                $consultaEnviada = $_POST['consultaEnviada'];

                include $rutafunciones.'conectarbd.php';

                $inputUser = mysql_real_escape_string($_POST['nombreusuario']);
                $inputPass = mysql_real_escape_string($_POST['password']);

                include $rutafunciones.'cerrar_conexion.php';

            }       

        ?>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->


        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Control de Grantias</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!--<form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="Email">
                            <input class="span2" type="password" placeholder="Password">
                            <button type="submit" class="btn">Sign in</button>
                        </form>-->
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

    <div class="container">     
        <div id="variabletest">
 
            <?php 

                include 'variable_test.php';
                // unset($_SESSION['carritoCanasta']);

            ?>

        </div>
    </div>

<?php 

    // Si no sea enviado informacion se muestran las entradas       
    if (!$_POST['consultaEnviada'] == 1) {

?>

        <div class="container"> 

            <!-- Main hero unit for a primary marketing message or call to action -->
                <!-- <div class="container"> -->



    <!-- </div> --> <!-- /container -->

            <div class="hero-unit">
                
                <div class="centerText">
                    <h1>¡Bienvenido al Sistema!</h1>
                    <p>Teclaea tu nombre de usuario y contraseña para ingresar.</p>
                </div>
                <!-- <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p> -->

                <form class="form-signin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <h2 class="form-signin-heading">Entrar al sistema</h2>
                    <input type="text" class="input-block-level" placeholder="Nombreusuario" name="nombreusuario">
                    <input type="password" class="input-block-level" placeholder="Contraseña" name="password">
                    <input type="hidden" name="consultaEnviada" value="1">
                    <!--<label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                    </label>-->
                    <button class="btn btn-large btn-primary" type="submit">Ingresar</button>
              </form>


            </div>

            <!-- Example row of columns -->
               <!-- <div class="row">
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
               </div>
                <div class="span4">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div>
            </div> -->

            <hr>

            <footer>
                <p>&copy; Company 2013</p>
            </footer>

        </div> <!-- /container -->

<?php 

           
    } // Cierre de if 

    $err_mess = '<div class="container"><div class="hero-unit"><div class="contenedorBordes"> 
    <p>';

    $cierre_err_mess = '<a href="'.$target_link.'" title="intenta de nuevo" target="_self">intenta ingresar de nuevo</a></p>
    </div></div></div></body></html>';

    if ($consultaEnviada == "1") {
        // form submitted
        // check for username
        if (!isset($_POST['nombreusuario']) || trim($_POST['nombreusuario']) == "") {
            die ("$err_mess Debes teclar un nombre de usuario<br /> $cierre_err_mess");

        } 
        // check for password
        if (!isset($_POST['password']) || trim($_POST['password']) == "") {
            die ("$err_mess Debes teclar tu contraseña<br />Si la olvidaste contacta a el Area de sistemas<br /> $cierre_err_mess");
        }

                // connect and execute SQL query
//              $connection = mysql_connect("localhost", "root", "probell") or die ("No se puede conectar!");
//              mysql_select_db("egprobell");
                // assign to variables and escape

                
                // Consulta Nombre e ID de Tiendas
        $cols_arr = array("idUsuario",
                          "nombreusuario",
                          "nombre",
                          "apellidoPaterno",
                          "apellidoMaterno");        
        $num_cols = count($cols_arr);
        $join_tables = '0';
        $tables_arr = array("usuarios");
        $num_tables = count($tables_arr);
        $where_clause = "nombreUsuario = '$inputUser' AND password = MD5('$inputPass')";

        $result = select_gnrl_query($num_cols, $cols_arr, $join_tables, $num_tables, $tables_arr, $connect, $on_fields_arr, $where_clause, $order, $dir, $limit); 

//      $query = "SELECT iduser, nombre, idtusr, idarea, usa_sprv, usa_man, usa_sol, usa_conf FROM gnrl_usrs WHERE username = '$inputUser' AND pswd = MD5('$inputPass')";
//      $result = mysql_query($query, $connection) or die ("Error in query: $query. " . mysql_error());
        
        
        if (mysql_num_rows($result) == 1) {
            $datosUsuario=mysql_fetch_row($result);
        
            // if row exists
            // user/pass combination is correct
            // start a session
            session_start();
                        
                        
                        
            $_SESSION['adminLoggedUser'] = array("idUsuario"  => "'$datosUsuario[0]'", 
                                                 "nombreusuario"  => "'$datosUsuario[1]'", 
                                                 "nombreCompleto" => "'$datosUsuario[2]'");

            // redirect browser to protected resource
            header('Location: admintienda.php');
            exit;
        } else {
            // if row does not exist        
            // user/pass combination is wrong
            // redirect browser to error page
                die("$err_mess Tu contraseña o nombre de usuario<br />es incorrecto<br /> $cierre_err_mess");

        } // Cierre de Else
    } // Cierre de if admin 

?>



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
