<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <link rel="stylesheet" href="view/css/materialize.min.css">
        <link rel="stylesheet" href="view/css/ingresar.css">

    </head>
    <body>

        <nav class="teal lighten-2">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Bienvenido</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li> 
                        <a href="#login" class="waves-effect waves-light modal-trigger">
                            <i class="large material-icons right">perm_identity
                            </i>INGRESAR
                        </a>
                    </li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li> 
                        <a href="#login" class="waves-effect waves-light btn modal-trigger">
                            <i class="large material-icons right">perm_identity
                            </i>INGRESAR

                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="modal" id="login">
            <div class="modal-content">
                <div class="card bordered z-depth-2">
                    <div class="card-header">
                        <i class="material-icons medium white-text">perm_contact_calendar</i>
                    </div>
                    <div class="card-content">
                        <form action="noseque.php" method="get">
                            <div class="input-field col s12">
                                <input id="username" type="text" class="validate" pattern="\S{3,}" required title="minimo 3 caracteres">
                                <label for="username">Usuario</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate" pattern="\S{4,}" required title="minimo 4 caracteres">
                                <label for="password">Password</label>
                            </div>
                            <input type="checkbox" class="filled-in" id="filled-in-box"/>
                            <label for="filled-in-box">Recordar contraseña</label>
                            <button type="submit" id="mulai_login" name="mulai_login" class="btn  right waves-effect waves-light white-text">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>

        <script src="view/js/jquery-3.1.0.min.js"></script>
        <script src="view/js/materialize.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.modal-trigger').leanModal();
            });


        </script>
    </body>
</html>
