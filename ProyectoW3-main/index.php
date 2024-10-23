<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Ticket X Press</title>
</head>
<body>
<?php include 'componentes/Navbar.php'; ?> 
<?php
// Verificamos si estamos en la página principal o si no hay parámetro 'page' en la URL
if (!isset($_GET['page']) || $_GET['page'] == '') {
    include 'componentes/Header.php'; // Solo incluir el Header en la página principal
}
?>

<?php
// Contenido dinámico de la página
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'evento':
            include './componentes/PAG/Evento.php'; // Ruta corregida
            break;
        case 'atencion':
            include './componentes/PAG/Atencion.php';
            break;
        case 'pedidos':
            include './componentes/PAG/Pedidos.php';
            break;
        case 'vender':
            include './componentes/PAG/Vender.php';
            break;
        case 'faq':
            include './componentes/PAG/Faq.php';
            break;
        case 'log':
            include './componentes/PAG/Log.php';
            break;
        default:
            include './componentes/PAG/Main.php'; // Si la página no existe, mostrar la página principal
            break;
    }
} else {
    // Si no hay ningún parámetro en la URL, mostrar el contenido de Main.php
    include './componentes/PAG/Main.php'; // Ruta corregida
}
?>
<?php include 'componentes/Footer.php'; ?> <!-- Incluyendo el Footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
