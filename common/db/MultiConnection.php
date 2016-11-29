<?php

namespace common\db;

use Yii;
use yii\base\InvalidConfigException;
use yii\db\Connection;

class MultiConnection extends Connection
{
    public $dbs;
    private $selectedDb = null;
    //public $schema = null;
    
    public function init() {
        parent::init();
        echo "multiconnection init<br>\n";
        
        $dbs = (array)$this->dbs;
        
        if (empty($dbs)) {
            throw new InvalidConfigException('dbs beállítás nem lehet üres!');
        }
        
        foreach ($dbs as $db) {
            if (!(Yii::$app->get($db) instanceof Connection)) {
                throw new InvalidConfigException("$db nem adatbázis-kapcsolat komponens!");
            }
        }
    }
    
    /**
     * Establishes a DB connection.
     * It does nothing if a DB connection has already been established.
     * @throws Exception if connection fails
     */
    public function open()
    {
        Yii::info('opening multi connection', __METHOD__);
        echo "opening multi connection<br>\n";
                
        if ($this->pdo !== null) {
            return;
        }
        if ($this->selectedDb !== null) {
            return;
        }
        
        $dbs = (array)$this->dbs;
        foreach ($dbs as $dbComponent) {
            echo "trying: {$dbComponent}<br>\n";
            try {
                /* @var $db \yii\db\Connection  */
                $db = Yii::$app->get($dbComponent);
                echo "db comp:".($db?'yes':'no')."<br>\n";
                $db->open();
                echo "after open <br>\n";

                $this->dsn = $db->dsn;
                $this->setDriverName($db->getDriverName());
                $this->pdo = $db->pdo;
                $this->pdoClass = $db->pdoClass;
                //$this->schema = $db->schema;
                $this->username = $db->username;
                $this->password = $db->password;
                $this->attributes = $db->attributes;

                Yii::info('opening connection - '.$dbComponent, __METHOD__);
                $this->selectedDb = $db;
                return;
            } catch (\Exception $ex) {
                Yii::warning('Cant open db:'.$dbComponent, __METHOD__);
                echo 'Cant open db:'.$dbComponent. __METHOD__."<br>\n";
                echo 'msg='.$ex->getMessage()."<br>\n";
            }
        }
    }
    
    /**
     * @return Connection
     */
    public function getSelectedDb()
    {
        return $this->selectedDb;
    }
    
    public function getSchema() {
        if (!$this->selectedDb) {
            $this->open();
        }
        return $this->selectedDb->getSchema();
    }
}