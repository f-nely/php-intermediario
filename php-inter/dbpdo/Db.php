<?php

use PDO;
class Db extends PDO
{
    public function __construct($sgdb, $host, $db, $user, $password, $persistent = true)
    {
        $options = [
            PDO::ATTR_PERSISTENT => $persistent,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $dsn = sprintf('%s:host=%s;dbname=%s;charser=utf8', $sgdb, $host, $db);
        parent::__construct($dsn, $user, $password, $options);
    }

    public function select($sql, array $where = [], $all = true, $fetchMode = PDO::FETCH_OBJ)
    {
        $sth = $this->prepare($sql);

        $this->bindValue($sth, $where);

        $sth->execute();

        if ($all) {
            return $sth->fetchAll($fetchMode);
        }

        return $sth->fetch($fetchMode);
    }
}