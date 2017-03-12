<?php

class Table
{

    public static function cicleTable($result, array $resultDb)
    {
        $i = 0;
        while ($row = $result->fetch()) {
            $resultDb[$i]['id'] = $row['id'];
            $resultDb[$i]['datecreate'] = $row['datecreate'];
            $resultDb[$i]['user'] = $row['user'];
            $resultDb[$i]['description'] = $row['description'];
            $resultDb[$i]['complexity'] = $row['complexity'];
            $resultDb[$i]['up'] = $row['up'];
            $resultDb[$i]['datedone'] = $row['datedone'];
            $resultDb[$i]['isdone'] = $row['isdone'];
            $i++;
        }
        return $resultDb;
    }

// Вывести таблицу задач, те что выполнены - убрать вниз
    public static function getTableListLimit($limit, $underground)
    {

        $limit == 0 ?
            $limitValue = 'SELECT * FROM list_tasks ORDER BY isdone ASC, up DESC, id DESC, isdone, datecreate DESC' :
            $limitValue = 'SELECT * FROM list_tasks WHERE isdone=0 ORDER BY isdone ASC, up DESC, id DESC, isdone, datecreate DESC LIMIT ' . $limit;
        $underground == 0 ?
            $limitValue = 'SELECT * FROM list_tasks ORDER BY isdone ASC, up DESC, id DESC, datecreate DESC' :
            $limitValue = 'SELECT * FROM list_tasks WHERE isdone=0 ORDER BY isdone ASC, up DESC, id DESC, datecreate DESC LIMIT ' . $limit;
        $db = Db::getConnection();
        $resultDb = array();
        $result = $db->query("$limitValue");
        $resultDb = self::cicleTable($result, $resultDb);
        return $resultDb;
    }


    public static function getTableListId($id)
    {
        $db = Db::getConnection();
        $resultDb = array();
        $result = $db->query("SELECT * FROM list_tasks WHERE id='$id' ORDER BY id DESC");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $resultDb = $result->fetch();
        return $resultDb;
    }


}