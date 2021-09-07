<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Registre los pagos de sus servicios.</title>
</head>

<body>
    <div class="container">

        <div class="hero">
            <img src="assets/undraw_Mobile_payments_re_7udl.svg" alt="" class="img-fluid">
        </div>
        <div class="form">
            <form action="../controlador/controlador.php" method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Ingrese el nombre del servicio</label>
                    <input type="text" placeholder="accion" name="accion" value="1" hidden>
                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="fecha_pago" class="form-label">Ingrese la fecha de pago</label>
                    <input type="date" class="form-control" id="fecha_pago" name="fecha_pago" required>
                </div>
                <div class="mb-3">
                    <label for="monto_pago" class="form-label">Ingrese el monto que pago</label>
                    <input type="number" class="form-control" id="monto_pago" name="monto_pago" min="1" required>
                </div>
                <button class="btn btn-success" id="button" type="submit">Registrar</button>
                <button class="btn btn-danger" id="button2" onclick="volverIndex()">Cancelar</button>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>
<script src="js/app.js"></script>

</html>