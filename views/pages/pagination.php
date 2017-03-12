<!--<script >
    $(document).ready(function(){

        $("#but1").click(function(){
            $('#par1').load("http://new.elenachezelle.ru/pattern/taskmanager/excel/<?php /*echo $nameExcel */?>/<?php /*echo PAGINATION_100 */?>");
        })

    });
</script>-->


<ul class="pagination">
    <li <?php if ($numberRecords==PAGINATION_10) echo 'class=active'; ?>>
        <a href="http://new.elenachezelle.ru/pattern/taskmanager/excel/<?php echo $nameExcel ?>/<?php echo PAGINATION_10 ?>"><?php echo PAGINATION_10 ?></a>
    </li>
    <li <?php if ($numberRecords==PAGINATION_100) echo 'class=active'; ?>>
        <a href="http://new.elenachezelle.ru/pattern/taskmanager/excel/<?php echo $nameExcel ?>/<?php echo PAGINATION_100 ?>"><?php echo PAGINATION_100 ?></a>
    </li>
    <li <?php if ($numberRecords==PAGINATION_200) echo 'class=active'; ?>>
        <a href="http://new.elenachezelle.ru/pattern/taskmanager/excel/<?php echo $nameExcel ?>/<?php echo PAGINATION_200 ?>"><?php echo PAGINATION_200 ?></a>
    </li>
    <li <?php if ($numberRecords==PAGINATION_500) echo 'class=active'; ?>>
        <a href="http://new.elenachezelle.ru/pattern/taskmanager/excel/<?php echo $nameExcel ?>/<?php echo PAGINATION_500 ?>"><?php echo PAGINATION_500 ?></a>
    </li>
    <li <?php if ($numberRecords==PAGINATION_1000) echo 'class=active'; ?>>
        <a href="http://new.elenachezelle.ru/pattern/taskmanager/excel/<?php echo $nameExcel ?>/<?php echo PAGINATION_1000 ?>"><?php echo PAGINATION_1000 ?></a>
    </li>
    <li <?php if ($numberRecords==PAGINATION_ALL) echo 'class=active'; ?>>
        <a href="http://new.elenachezelle.ru/pattern/taskmanager/excel/<?php echo $nameExcel ?>/<?php echo PAGINATION_ALL ?>"><?php echo count($ar) ?></a>
    </li>
</ul>
