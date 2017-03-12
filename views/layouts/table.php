<span id="table">
    <?php $id = 'id'; ?>
    <!--AJAX-->
        <script>
            $(document).ready(function () {
                <?php foreach ($resultDb as $tableItem): ?>
                $("#butrestore<?php echo $tableItem[$id] ?>").click(function () {
                    $('#table').load("http://new.elenachezelle.ru/pattern/taskmanager/restore/<?php echo $tableItem[$id] ?>");
                })
                $("#butdelete<?php echo $tableItem[$id] ?>").click(function () {
                    $('#table').load("http://new.elenachezelle.ru/pattern/taskmanager/delete/<?php echo $tableItem[$id] ?>");
                })
                $("#butdone<?php echo $tableItem[$id] ?>").click(function () {
                    $('#table').load("http://new.elenachezelle.ru/pattern/taskmanager/done/<?php echo $tableItem[$id] ?>");
                })
                $("#butup<?php echo $tableItem[$id] ?>").click(function () {
                    $('#table').load("http://new.elenachezelle.ru/pattern/taskmanager/up/<?php echo $tableItem[$id] ?>");
                })
                $("#butdown<?php echo $tableItem[$id] ?>").click(function () {
                    $('#table').load("http://new.elenachezelle.ru/pattern/taskmanager/down/<?php echo $tableItem[$id] ?>");
                })
                <?php endforeach; ?>
            });
        </script>
    <br>
    <table class="table table-striped table-bordered">

        <tr>
            <td width="120" class="success">Действия</td>
            <td width="160" class="success">Описание</td>
            <td width="20" class="success">Срок</td>
            <td width="70" class="success">Дата</a></td>
            <td width="50" class="success">Имя</a></td>
            <td width="20" class="success">№</a></td>
        </tr>

        <?php foreach ($resultDb as $tableItem): ?>
            <tr <?php if ($tableItem['isdone'] == true) echo "style='color:#cccccc'" ?>
                <?php if (isset($insert) && $insert['MAX(id)'] == $tableItem[$id]) echo "class='warning'" ?><?php $insert = false; ?>>
                <!--Для подсвечивания задействованной (при вставке новой транзакции)строки таблицы -->

                <td style="font-size: small">
                    <?php if ($tableItem['isdone'] == true): ?>

                        <span id="butrestore<?php echo $tableItem[$id] ?>"
                              onmouseover="this.style.color='green';this.style.cursor='pointer'"
                              onmouseout="this.style.color='#cccccc'"
                              style='font-size: x-large;color:#cccccc' class="glyphicon glyphicon-repeat"></span>
                        <span id="butdelete<?php echo $tableItem[$id] ?>"
                              onmouseover="this.style.color='darkred';this.style.cursor='pointer'"
                              onmouseout="this.style.color='#cccccc'"
                              style='font-size: x-large;color:#cccccc' class="glyphicon glyphicon-remove"></span>

                    <?php else : ?>

                        <span id="butdone<?php echo $tableItem[$id] ?>"
                              onmouseover="this.style.color='green';this.style.cursor='pointer'"
                              onmouseout="this.style.color='#cccccc'"
                              style='font-size: x-large;color:#cccccc' class="glyphicon glyphicon-ok"></span>


                        <span id="butup<?php echo $tableItem[$id] ?>"
                              onmouseover="this.style.color='black';this.style.cursor='pointer'"
                              onmouseout="this.style.color='#cccccc'"
                              style='font-size: x-large;color:#cccccc' class="glyphicon glyphicon-arrow-up"></span>


                        <span id="butdown<?php echo $tableItem[$id] ?>"
                              onmouseover="this.style.color='black';this.style.cursor='pointer'"
                              onmouseout="this.style.color='#cccccc'"
                              style='font-size: x-large;color:#cccccc' class="glyphicon glyphicon-arrow-down"></span>

                        <a href="http://new.elenachezelle.ru/pattern/taskmanager/change/<?php echo $tableItem[$id] ?>">
                        <span onmouseover="this.style.color='darkblue';this.style.cursor='pointer'"
                              onmouseout="this.style.color='#cccccc'" style="font-size: x-large; color:#cccccc;"
                              class="glyphicon glyphicon-refresh"></span></a>
                    <?php endif ?>

                </td>

                <?php if ($tableItem['isdone'] == true): ?>
                    <td style="font-size: small;text-decoration:line-through"><?php echo $tableItem['description'] ?></td>
                <?php else : ?>
                    <td style="font-size: small"><?php echo $tableItem['description'] ?></td>
                <?php endif ?>

                <td style="font-size: small"><?php echo $tableItem['complexity'] ?></td>
                <td style="font-size: smaller"><?php echo $tableItem['datecreate'] ?></td>
                <td style="font-size: small"><?php echo $tableItem['user'] ?></td>

                <td style="font-size: small" id="<?php echo $tableItem[$id] ?>">
                    <?php echo " " . $tableItem[$id] ?>
                </td>

            </tr>
        <?php endforeach; ?>


    </table>


    <!--Таблица в футере со сгруппированными по статьям расходами-->

    <br>
    </span>
