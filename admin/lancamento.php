<?php
   //verifica auth;
   include_once './helpers/verifica-auth.php';


    // buscar projetos
    require 'config/bootstrap.php';
    use Repositories\LancamentoRepository;
    $lancamento = LancamentoRepository::getAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!-- HEADER -->
    <?php include_once 'modulos-admin/header/index.php'; ?>
    <!-- HEADER -->

</head>
<body>

    <!-- LOADING -->
    <?php include_once 'modulos-admin/loading/index.php'; ?>
    <!-- LOADING -->

    <!-- NAVEGAÇÃO -->
    <?php include_once 'modulos-admin/navegacao/index.php'; ?>
    <!-- NAVEGAÇÃO -->


    <!-- CONTENT -->
    <main id="content-pagina">
        <h5 id="titulo-content-pagina" class="fw-semibold"><?php echo $tituloContentPagina ?></h5>

        <!-- módulo content página -->
        <?php include_once 'modulos-admin/contents/lancamento/index.php';?>
        <!-- módulo content página -->
    </main>
    <!-- CONTENT -->

    
    <!-- MODAL AVISOS -->
     <?php include_once "modulos-admin/modal-aviso/index.php"; ?>
    <!-- MODAL AVISOS -->

    <!-- MODAL ADD LANÇAMENTO -->
    <?php include_once "modulos-admin/contents/lancamento/modais/add-lancamento/index.php"; ?>
    <!-- MODAL ADD LANÇAMENTO -->

    <!-- MODAL EDITAR LANÇAMENTO -->
    <?php include_once "modulos-admin/contents/lancamento/modais/edit-lancamento/index.php"; ?>
    <!-- MODAL EDITAR LANÇAMENTO -->


    <!--BOOTSTRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        
</body>
</html>