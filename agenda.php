<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php include_once __DIR__ . '/modulos/header/index.php'; ?>

</head>
<body>
    

    <!-- CONTATO -->
    <?php include_once __DIR__ . '/modulos/contato/index.php'; ?>
    <!-- CONTATO -->

    <!-- FOOTER -->
    <?php include_once __DIR__ . '/modulos/footer/index.php'; ?>
    <!-- FOOTER -->


    <!--BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   
    <!--ANIMATION SCROLL-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init()</script>
    
    <!--JS GLOBAL-->
    <script src="<?= $base_url ?>assets/js/app.js"></script>
</body>
</html>