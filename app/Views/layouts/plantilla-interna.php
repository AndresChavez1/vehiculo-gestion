<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body class="w3-theme">

    <!-- Carga el menu a esta plantilla-->
    <?php echo $this->include('layouts/menu-interno'); ?>

    <?php echo $this->renderSection('content') ?>

    
    
    <footer class="w3-container w3-theme">

    </footer>


    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
    <?php echo $this->renderSection('JS'); ?>
</body>
</html>