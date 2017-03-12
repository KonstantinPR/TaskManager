<?php

class Report
{
    public static function insertIntoTable()
    {
        if (isset($_POST ['description'])) {

            $datecreate = date("Y-m-d H:i:s");
            $user = $_COOKIE['name'];
            $description = $_POST['description'];
            $_POST['complexity'] == '' ? $complexity = 1 : $complexity = $_POST['complexity'];
            $isdone = false;
            $datedone = '';
            $up = 0;

            $db = Db::getConnection();
            $db->query("INSERT INTO list_tasks VALUES ('','$datecreate','$user', '$description', '$complexity', '$isdone', '$up', '$datedone') ");
        }
        return $db;

    }


    public static function getMaxId()
    {
        $db = Db::getConnection();
        $insert = $db->query("SELECT MAX(id) FROM list_tasks");
        $insert->setFetchMode(PDO::FETCH_ASSOC);
        return $insert->fetch();
    }


    public static function getHoursTasksDoing()
    {
        $db = Db::getConnection();
        $hoursTaskDoing = $db->query("SELECT SUM(complexity) FROM list_tasks WHERE isdone=0");
        $hoursTaskDoing->setFetchMode(PDO::FETCH_ASSOC);
        return $hoursTaskDoing->fetch();
    }


    public static function getHoursTasksDone()
    {
        $db = Db::getConnection();
        $hoursTaskDone = $db->query("SELECT SUM(complexity) FROM list_tasks WHERE isdone=1");
        $hoursTaskDone->setFetchMode(PDO::FETCH_ASSOC);
        return $hoursTaskDone->fetch();
    }


    public static function getMinTaskDate()
    {
        $db = Db::getConnection();
        $minTaskDate = $db->query("SELECT MIN(datecreate) FROM list_tasks WHERE isdone=1");
        $minTaskDate->setFetchMode(PDO::FETCH_ASSOC);
        return $minTaskDate->fetch();
    }


    public static function updateTable($id)
    {
        if (isset($_POST ['description'])) {

            $user = 'Костя';
            $description = $_POST['description'];
            $complexity = $_POST['complexity'];

            $db = Db::getConnection();
            $db->query("UPDATE list_tasks SET user='$user', description='$description', complexity='$complexity' WHERE id='$id'");

            unset ($_POST);
            return $update = true;
        }
        return $update = false;
    }


    public static function  doneTransaction($id)
    {
        $db = Db::getConnection();
        $isTaskDone = $db->query("UPDATE list_tasks SET isdone=true, datedone=NOW() WHERE id='$id'");
        return $isTaskDone;
    }


    public static function upTransaction($id)
    {

        $db = Db::getConnection();
        $up = $db->query("SELECT MAX(up) FROM list_tasks");
        $up->setFetchMode(PDO::FETCH_ASSOC);
        $maxUp = $up->fetch();
        $maxUp = $maxUp['MAX(up)'] + 1;
        $db->query("UPDATE list_tasks SET up='$maxUp' WHERE id='$id'");
        return $maxUp;
    }

    public static function downTransaction($id)
    {

        $db = Db::getConnection();
        $up = $db->query("SELECT MIN(up) FROM list_tasks");
        $up->setFetchMode(PDO::FETCH_ASSOC);
        $maxUp = $up->fetch();
        $maxUp = $maxUp['MIN(up)'] - 1;
        $db->query("UPDATE list_tasks SET up='$maxUp' WHERE id='$id'");
        return $maxUp;
    }

    public static function  restoreTransaction($id)
    {
        $db = Db::getConnection();
        $isTaskDone = $db->query("UPDATE list_tasks SET isdone=false WHERE id='$id'");
        return $isTaskDone;
    }


    public static function deleteTransaction($id)
    {
        $db = Db::getConnection();
        $result = $db->query("DELETE FROM list_tasks WHERE id='$id'");
        return $result;
    }


    // Заменяем нижнее подчеркивание пробелом у переданного значения
    public static function clearUnderscore($itemValue)
    {
        $itemValue = str_replace("_", " ", $itemValue);
        return $itemValue;
    }

}