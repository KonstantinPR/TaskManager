<?php
require_once(ROOT . "/components/DEFINE.php");

class IndexController
{
    public function actionIndex()
    {

        $resultDb = Table::getTableListLimit(PAGINATION_100, 1);
        $resultSumHoursDoing = Report::getHoursTasksDoing();
        $resultSumHoursDone = Report::getHoursTasksDone();
        $resultMinDateCreate = Report::getMinTaskDate();

        require_once(ROOT . '/views/pages/index.php');
    }


    public function actionIndexall()
    {
        $resultDb = Table::getTableListLimit(PAGINATION_100, 0);
        $resultSumHoursDoing = Report::getHoursTasksDoing();
        $resultSumHoursDone = Report::getHoursTasksDone();
        $resultMinDateCreate = Report::getMinTaskDate();

        require_once(ROOT . '/views/pages/index.php');
    }
}
