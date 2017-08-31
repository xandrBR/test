<?php

/**
* Description of online
*
* @author Anton Faibyshev
* email: faibyshevao@gmail.com
* skype: zGrandy
* Специально для mmo-develop.ru
*/
error_reporting(0);

class online {

    private $config;
    private $delay;
    private $filename;
    private $maxonline;
    private $online;
    private $persent;
    private $rate;

    public function __construct() {
        // Данные для соединения с базой сервера
        $this->config['host'] = 'abstract.ru';
        $this->config['user'] = 'root';
        $this->config['password'] = 'fv123';
        $this->config['db'] = 'l2j';
        //Настройки
        $this->filename = 'cache.txt'; //имя файла, в который будет кешироваться онлайн. ВНИМАНИЕ !!! В нем будет хранится реальный онлайн
        $this->delay = 1; // Время обновления онлайна из базы . например для обновления раз в 5 минут необходимо установить значение 300
        $this->persent = false; //в выводить % от максимально онлайна, или же онлайн с накруткой. для % - true , для онлайна  false
        $this->maxonline = 10; // Максимальный онлайн, если выводить в %
        $this->rate = 12; // Коєфициєнт накрутки онлайна, если выводится онлайн
    }

    public function get_online() {
        $this->new_online();
        if ($this->persent) {
            $online = ($this->online / $this->maxonline) * 100;
            return round($online);
        } else {
            $online = $this->online  * $this->rate;
            return round($online);
        }
    }

    private function new_online() {
        $last_update = time() - filemtime($this->filename);
        if ($last_update > $this->delay) {
            $this->online = $this->refresh_online();
            $fp = fopen($this->filename, 'w');
            fwrite($fp, $this->online);
            fclose($fp);
            return true;
        } else {
            $fp = fopen($this->filename, "r");
            if ($fp) {
                $this->online = fgets($fp, 999);
            }
            fclose($fp);
            return true;
        }
    }

    private function refresh_online() {
        $conn = new mysqli($this->config['host'], $this->config['user'], $this->config['password'], $this->config['db']);
        $query = "SELECT  count(0) FROM `characters` WHERE `online`!=0";
        $result = $conn->query($query);
        if (!$result) {
            return false;
        }
        $rows = $result->fetch_assoc();
        $conn->close();
        $result->free();
        return $rows['count(0)'];
    }
}

$online = new online;
echo $online->get_online();
?>