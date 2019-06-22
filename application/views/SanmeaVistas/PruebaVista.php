<!doctype html>
<!--Se abre el documento con un DOCTYPE -->

<html lang="es">
<!-- Inicio pagina y defino lenguaje -->

    <head>
    <!--Inicio Cabecera de pagina-->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Requerido los Siguientes meta tags -->

        <link href="<?= base_url('css/bootstrap.min.css') ?>"   rel="stylesheet" media="screen">
        <link href="<?= base_url('css/bootstrap.css') ?>"       rel="stylesheet" type="text/css">
        <link href="<?= base_url('css/Article-List.css') ?>"    rel="stylesheet" >
        <link href="<?= base_url('css/bootstrap-responsive.css') ?>"   rel="stylesheet" media="screen">
        <link href="<?= base_url('css/bootstrap-responsive.min.css') ?>"   rel="stylesheet" media="screen">
        <link href="<?= base_url('css/bootstrap-grid.min.css') ?>"    rel="stylesheet" >
        <link href="<?= base_url('css/estilos.css') ?>"    rel="stylesheet" >

        <!--Se inserta la relacion del documento, tipo de dato y su ubicacion (puede ser una ubicacion logica local o un link de una pagina)  -->

        <title>SANMEA</title>
        <!--Se inserta el titulo de la pagina-->

    </head>
    <!--Finalizo Cabecera de Pagina-->

<body>

    <div class="container-fluid">

        <form action="downloadSancionCuad" class="main-form needs-validation" method="get" novalidate>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" id="firstname" class="form-control is-invalid">
                    <div class="invalid-feedback">Looks good!</div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" id="lastname" class="form-control">
                    <small class="form-text text-muted">
                        This should be your last name.
                    </small>
                </div>
            </div>
        </div>

        </div>


        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
            <div class="invalid-feedback">Please enter a valid username.</div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="form-check">
            <input type="checkbox" id="accept-terms" class="form-check-input">
            <label for="accept-terms" class="form-check-label">Accept Terms &amp; Conditions</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

   <script src="<?= base_url('js/jquery-3.3.1.slim.min.js') ?>" ></script>
    <script src="<?= base_url('js/popper.min.js') ?>" ""></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>" ""></script>

    <script>
        var form = document.querySelector('.needs-validation');
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        })
    </script>

    </div>
    
</body>

</html>