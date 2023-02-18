<?php
namespace lib;

use PDO;
use PDOException;

require_once 'config.php';

class connect
{

    function __construct()
    {
        global $text;
        $this->lang = $text;
        $this->DB_HOST = __DB_HOST__;
        $this->DB_USER = __DB_USER__;
        $this->DB_PASS = __DB_PASS__;
        $this->DB_NAME = __DB_NAME__;

        $this->pdo = new PDO("mysql:host=$this->DB_HOST;dbname=$this->DB_NAME;charset=utf8", $this->DB_USER, $this->DB_PASS);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
    }

    // With prepared statements 
    function new_query($sql, $values = NULL)
    {
        try {
            $send = $this->pdo->prepare($sql);
            $send->execute($values);
        } catch (PDOException $e) {
            $erro = $e->getMessage();
            echo '<pre>';
            echo $sql . '<hr>' . $erro;
        }
    }

    function new_return_result($sql, $values = NULL)
    {
        try {
            $send = $this->pdo->prepare($sql);
            $send->execute($values);
            while ($res = $send->fetch(PDO::FETCH_ASSOC)) {
                foreach ($res as $name => $v) {
                    return $v;
                }
            }
        } catch (PDOException $e) {
            $erro = $e->getMessage();
            echo '<pre>';
            echo $sql . '<hr>' . $erro;
        }
    }

    function new_return_array_result($sql, $values = NULL)
    {
        try {
            $send = $this->pdo->prepare($sql);
            $send->execute($values);
            $a = array();
            while ($res = $send->fetch(PDO::FETCH_ASSOC)) {
                foreach ($res as $name => $v) {
                    $a[$name] = $v;
                }
            }
            return $a;
        } catch (PDOException $e) {
            $erro = $e->getMessage();
            echo '<pre>';
            echo $sql . '<hr>' . $erro;
        }
    }

    function new_return_array($sql, $values = NULL)
    {
        try {
            $send = $this->pdo->prepare($sql);
            $send->execute($values);
            $a = array();
            $i = 0;
            while ($res = $send->fetch(PDO::FETCH_ASSOC)) {
                foreach ($res as $name => $v) {
                    $a[$i][$name] = $v;
                }
                $i++;
            }
            return $a;
        } catch (PDOException $e) {
            $erro = $e->getMessage();
            echo '<pre>';
            echo $sql . '<hr>' . $erro;
        }
    }

    function objectToArray($object)
    {
        if (count($object) > 1) {
            $arr = array();
            for ($i = 0; $i < count($object); $i++) {
                $arr[] = get_object_vars($object[$i]);
            }
            return $arr;
        } else {
            return get_object_vars($object);
        }
    }

    function validateDate($date, $format = 'Y-m-d H:i:s')
    {
        $d = \DateTime::createFromFormat($format, $date);
        if ($d && $d->format($format) === $date) {
            return $d;
        } else {
            return 400;
        }
    }

}