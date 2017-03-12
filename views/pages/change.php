<?php include_once(ROOT . '/views/layouts/header.php') ?>

    <body>

<div class="container">

    <br>

    <form action="http://new.elenachezelle.ru/pattern/taskmanager/update/<?php echo $resultDb['id'] ?>" role="form" method="post">
        <div class="form-group col-lg-12 col-md-12">
            <input name="complexity" type="text" class="form-control" id="summ"
                   placeholder="Время на выполнение" value="<?php echo $resultDb['complexity'] ?>">
        </div>
        <div class="form-group col-lg-12 col-md-12">
            <textarea autofocus name="description" type="text" class="form-control" id="description"
                      placeholder="Описание задачи"><?php echo $resultDb['description'] ?></textarea>
        </div>
    <span style="width: 120px" class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-2">
    <button type="submit" class="btn btn-success">Изменить</button>
    </span>


    </form>

    <div class="form-group col-lg-12 col-md-12">

        <br>
        <table class="table table-striped table-bordered">
            <tr>
                <td class="success">Описание</td>
                <td width="20" class="success">Сложность</td>
                <td width="100"  class="success">Дата</a></td>
                <td width="100" class="success">Имя</a></td>
                <td width="20" class="success">№</a></td>
            </tr>
            <?php $id = 'id'; ?>
            <tr>
                <td><?php echo $resultDb['description'] ?></td>
                <td><?php echo $resultDb['complexity'] ?></td>
                <td><?php echo $resultDb['datecreate'] ?></td>
                <td><?php echo $resultDb['user'] ?></td>
                <td id="<?php echo $resultDb[$id] ?>"><?php echo " " . $resultDb[$id] ?></td>
            </tr>
        </table>
        <br>

    </div>
    <br>

</div>


<?php include_once(ROOT . '/views/layouts/footer.php') ?>