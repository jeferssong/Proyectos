<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Progreso</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="stylo.css">

    </head>
    <body>
        <!-- Responsive navbar-->
       
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-lg-5">
    <a href="#" class="navbar-brand"><span class="text-primary">Search</span> with Agro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="cultivos.php">Cultivos</a></li>
                <li class="nav-item"><a class="nav-link" href="iniciarSe.php">Iniciar Sesion</a></li>
                <li class="nav-item"><a class="nav-link" href="">Nosotros</a></li>
            </ul>
        </div>
    </div>
</nav>

    
    <div class="cont">
        <h1>Registro de Cultivos</h1>
        <form id="cultivoForm">
            <label for="cultivo">Tipo de Cultivo:</label>
            <input type="text" id="cultivo" name="cultivo">
            <label for="fecha-siembra">Fecha de Siembra:</label>
            <input type="date" id="fecha-siembra" name="fecha-siembra">
            <label for="fecha-cosecha">Fecha de Cosecha:</label>
            <input type="date" id="fecha-cosecha" name="fecha-cosecha">
            <label for="rendimiento">Rendimiento:</label>
            <input type="text" id="rendimiento" name="rendimiento">
            <button type="submit">Agregar Cultivo</button>
        </form>

        <h2>Historial de Cultivos</h2>
        <table id="cultivoTable">
            <tr>
                <th>Tipo de Cultivo</th>
                <th>Fecha de Siembra</th>
                <th>Fecha de Cosecha</th>
                <th>Rendimiento</th>
            </tr>
        </table>

        <h2>Estadísticas</h2>
        <div id="statistics" class="statistics">
            <!-- Aquí se mostrarían dinámicamente las estadísticas -->
        </div>
    </div>
    <footer class="py-5 bg-dark">
        <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Search for Agro 2024</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="scripto.js"></script>
</body>
</html>
