<?php
if (isset($_COOKIE['pass']) && $_COOKIE['pass'] == "17934862/-" && isset($_COOKIE['name'])) {
    header('Location: http://new.elenachezelle.ru/pattern/taskmanager/index');
}
if (isset($_POST['pass']) && $_POST['pass'] == '17934862/-' && $_POST['name'] != '') {
    setcookie('pass', $_POST['pass'], time() + 60 * 60 * 24 * 365);
    setcookie('name', $_POST['name'], time() + 60 * 60 * 24 * 365);
    header('Location: http://new.elenachezelle.ru/pattern/taskmanager/index');
} else if ((isset($_POST['pass'])) && ($_POST['pass'] != '17934862/-')) {
    $wrong1 = 'Не может быть пустым!';
    if ((isset($_POST['name'])) && ($_POST['pass'] == '')) {
        $wrong2 = 'НЕПРАВИЛЬНО!!! Пробуем еще!';
    }
} else
    $wrong1 = 'Имя';
$wrong2 = 'Пароль';


?>


<?php include_once(ROOT . '/views/layouts/header.php') ?>


<div class="container">
    <br><br>

    <div class="row">
        <div class="col-xs-2 col-md-3"></div>
        <div class="col-xs-8 col-md-6 collapse in" id="toggleSample2">
            <form name="htmlpattern" method="post" class="form-horizontal"
                  action="http://new.elenachezelle.ru/pattern/taskmanager/auth">

                <div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12">
                    <input class="form-control" placeholder="<?php echo $wrong1 ?>" type="text" name="name" value="">
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12">
                    <input class="form-control" placeholder="<?php echo $wrong2 ?>" type="text" name="pass" value="">
                </div>

                <div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12">
                    <input class="btn btn-info" placeholder="Сохранить" type="submit" name="save" value="Войти">
                </div>


            </form>
        </div>
    </div>
</div>
<br><br>


<!--   <div class="footer">
       <p>&copy; KonstantinPR 2016</p>
   </div>-->

</div> <!-- /container -->

<!-- Bootstrap core JavaScript
================================================== -->

<?php include_once(ROOT . '/views/layouts/footer.php') ?>

