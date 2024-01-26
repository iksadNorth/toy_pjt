<?php
namespace Toypjt\Model\Db;

use PDO;
use PDOException;

/**
 * 참고로 pdo를 사용하기 위해 별도의 드라이버를 설치해야 한다.
 * https://blog.naver.com/yexx/220179391498
 */
class Connection
{
    private $pdo = null;

    private $host = 'localhost';
    private $port = '3306';
    private $dbname = 'php_toy_pjt';
    private $charset = 'utf8';
    private $username = 'php_admin';
    private $db_pw = "q1w2e3r4";


    private function db_get_pdo()
    {
        $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->dbname;charset=$this->charset";
        $this->pdo = new PDO($dsn, $this->username, $this->db_pw);
    }

    private function deal_exception(callable $callable) {
        $this->db_get_pdo();
        try {
            $result = $callable();
            $this->pdo = null;
            return $result;
        } catch (PDOException $ex) {
            return false;
        } finally {
            $this->pdo = null;
        }
    }
    
    public function db_select($query, $param=array())
    {
        $func = function() use ($query, $param){
            $st = $this->pdo->prepare($query);
            $st->execute($param);
            $result = $st->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        };
        return $this->deal_exception($func);
    }
    
    public function db_insert($query, $param=array())
    {
        $func = function() use ($query, $param){
            $st = $this->pdo->prepare($query);
            $result = $st->execute($param);
            $last_id = $this->pdo->lastInsertId();
            if ($result) {
                return $last_id;
            } else {
                return false;
            }
        };
        return $this->deal_exception($func);
    }
    
    public function db_update_delete($query, $param=array())
    {
        $func = function() use ($query, $param){
            $st = $this->pdo->prepare($query);
            $result = $st->execute($param);
            return $result;
        };
        return $this->deal_exception($func);
    }
}
