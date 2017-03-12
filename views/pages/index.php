<?php
if (!isset($_COOKIE['pass']) || !isset($_COOKIE['name']) || $_COOKIE['pass'] != "17934862/-") {
    header('Location: http://new.elenachezelle.ru/pattern/taskmanager/auth');
} ?>

<?php include_once(ROOT . '/components/DEFINE.php') ?>
<?php include_once(ROOT . '/views/layouts/header.php'); ?>


<div class="container">
    <!--Вывод формы для ввода информации об задаче-->
    <?php require_once(ROOT . '/views/layouts/form.php'); ?>

    <!--Таблица с задачами-->
    <span class="form-group col-lg-12 col-md-12 col-xs-12">
    <?php require_once(ROOT . '/views/layouts/table.php'); ?>
    </span>

    <!--Таблица со статистикой-->
    <span class="form-group col-lg-12 col-md-12 col-xs-12">
    <?php require_once(ROOT . '/views/layouts/report.php'); ?>
    </span>


</div>


<?php include_once(ROOT . '/views/layouts/footer.php') ?>


