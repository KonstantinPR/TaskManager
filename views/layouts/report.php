<span class="glyphicon glyphicon-star-empty"></span> <span class="text-danger">Не выполнены в очереди:
<b><?php echo $resultSumHoursDoing['SUM(complexity)'] ?></b> ч. или
<b><?php echo round($resultSumHoursDoing['SUM(complexity)'] / 8) ?></b> рабочих дней<br></span>

<span class="glyphicon glyphicon-star"></span>
<span class="text-success">Уже выполнено с <?php echo $resultMinDateCreate['MIN(datecreate)'] ?>:
<b><?php echo $resultSumHoursDone['SUM(complexity)'] ?></b> ч. или
<b><?php echo round($resultSumHoursDone['SUM(complexity)'] / 8) ?></b> рабочих дней<br></span>

<span class="glyphicon glyphicon-flash"></span> Среднее выполнение с <?php echo $resultMinDateCreate['MIN(datecreate)'] ?>:
<b><?php echo round($resultSumHoursDone['SUM(complexity)'] / (intval(abs(date('yyyy-mm-dd') - $resultMinDateCreate['MIN(datecreate)'])) / 864000)) ?></b> ч./день<br><br>

<span class="glyphicon glyphicon-zoom-in"></span> <a href="http://new.elenachezelle.ru/pattern/taskmanager/indexall">Показать все задачи</a>

