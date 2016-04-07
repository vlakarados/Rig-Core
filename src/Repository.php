<?php

namespace Rig;

abstract class Repository implements \Rig\RepositoryRequirement
{
    protected $pdo;

    protected $scheme;
    protected $primaryKey;



    public function __construct()
    {
        //$this->pdo = $pdo; /*\PDO $pdo*/
        if (!$this->scheme or !is_array($this->scheme) or !count($this->scheme)) {
            throw new \Rig\RepositoryException('Repository '.__CLASS__.' scheme is not set up correctly');
        }
    }

    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }


    public function executeRawQuery($sql)
    {
        return $queryResult = $this->pdo->query($sql);
    }


    public function hasField($field)
    {
        return in_array($field, $this->fields);
    }
}
