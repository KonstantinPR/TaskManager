<?php
require_once(ROOT . "/components/DEFINE.php");

class ReportController
{

    /**
     *     Получить запись для ее дальнейшего изменения
     */

    public static function actionGet($id)
    {
        $resultDb = Table::getTableListId($id);
        require_once(ROOT . "/views/pages/change.php");
    }


    public static function actionInsert()
    {
        $insert = Report::insertIntoTable();
        $insert = Report::getMaxId();
        $resultDb = Table::getTableListLimit(PAGINATION_100, 1);
        $resultSumHoursDoing = Report::getHoursTasksDoing();
        $resultSumHoursDone = Report::getHoursTasksDone();
        $resultMinDateCreate = Report::getMinTaskDate();
        require_once(ROOT . "/views/pages/index.php");
    }


    public static function actionUpdate($id)
    {
        $resultDb = Report::updateTable($id);
        $resultDb = Table::getTableListLimit(PAGINATION_100, 0);
        $resultSumHoursDoing = Report::getHoursTasksDoing();
        $resultSumHoursDone = Report::getHoursTasksDone();
        $resultMinDateCreate = Report::getMinTaskDate();
        require_once(ROOT . "/views/pages/index.php");
    }


    public static function actionDone($id)
    {
        $isTaskDone = Report::doneTransaction($id);
        $resultDb = Table::getTableListLimit(PAGINATION_100, 1);
        require_once(ROOT . '/views/layouts/table.php');
    }


    public static function actionUp($id)
    {
        $up = Report::upTransaction($id);
        $resultDb = Table::getTableListLimit(PAGINATION_100, 1);
        $resultSumHoursDoing = Report::getHoursTasksDoing();
        $resultSumHoursDone = Report::getHoursTasksDone();
        $resultMinDateCreate = Report::getMinTaskDate();
        require_once(ROOT . '/views/layouts/table.php');

    }


    public static function actionDown($id)
    {
        $down = Report::downTransaction($id);
        $resultDb = Table::getTableListLimit(PAGINATION_100, 1);
        $resultSumHoursDoing = Report::getHoursTasksDoing();
        $resultSumHoursDone = Report::getHoursTasksDone();
        $resultMinDateCreate = Report::getMinTaskDate();
        require_once(ROOT . '/views/layouts/table.php');

    }

    public static function actionRestore($id)
    {
        $isTaskDone = Report::restoreTransaction($id);
        $resultDb = Table::getTableListLimit(PAGINATION_100, 1);
        $resultSumHoursDoing = Report::getHoursTasksDoing();
        $resultSumHoursDone = Report::getHoursTasksDone();
        $resultMinDateCreate = Report::getMinTaskDate();
        require_once(ROOT . '/views/layouts/table.php');

    }


    public static function actionDelete($id)
    {
        $isTaskDone = Report::deleteTransaction($id);
        $resultDb = Table::getTableListLimit(PAGINATION_100, 0);
        require_once(ROOT . '/views/layouts/table.php');
    }


}