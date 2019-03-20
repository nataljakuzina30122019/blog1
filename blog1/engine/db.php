<?php
namespace TestProject\Engine;

class Db extends \PDO
{
    public function _construct()
    {
     $aDriverOptions[\PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES UTF8';
     parent::_construct('mysql:host=' .Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';',Config::DB_USR,Config::DB_PWD,$aDriverOptions);
     $this->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
}
}

     