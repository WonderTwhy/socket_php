<?php

namespace app\models;


class Asterisk_ami
{
    public $ini = array();

    function __construct ()
    {
        $this->ini["con"] = false;
        $this->ini["host"] = "192.168.65.137";
        $this->ini["port"] = "5038";
        $this->ini["lastActionID"] = 0;
        $this->ini["lastRead"] = array ();
        $this->ini["sleep_time"]=1.5;
        $this->ini["login"] = "hello";
        $this->ini["password"] = "world";
    }

    function __destruct()
    {
        unset ($this->ini);
    }

    public function connect()
    {
        $this->ini["con"] = fsockopen($this->ini["host"], $this->ini["port"],$a,$b,10);
        if ($this->ini["con"])
        {
            stream_set_timeout($this->ini["con"], 0, 400000);
        }
    }

    public function disconnect()
    {
        if ($this->ini["con"])
        {
            fclose($this->ini["con"]);
        }
    }

    public function write($a)
    {
        $this->ini["lastActionID"] = rand (10000000000000000,99999999900000000);
        fwrite($this->ini["con"], "ActionID: ".$this->ini["lastActionID"]."\r\n$a\r\n\r\n");
        $this->sleepi();
        return $this->ini["lastActionID"];
    }

    public function sleepi ()
    {
        sleep($this->ini["sleep_time"]);
    }

    public function read()
    {
        $mm = array();
        $b = array();
        $k = 0;
        $s = "";
        $this->sleepi();
        do
        {
            $s.= fread($this->ini["con"],1024);
            sleep(0.005);
            $mmm=socket_get_status($this->ini["con"]);
        }   while ($mmm['unread_bytes']);
        $mm = explode ("\r\n",$s);
        $this->ini["lastRead"] = array();
        for ($i=0;$i<count($mm);$i++)
        {
            if ($mm[$i]=="")
            {
                $k++;
            }
            $m = explode(":",$mm[$i]);
            if (isset($m[1]))
            {
                $this->ini["lastRead"][$k][trim($m[0])] = trim($m[1]);
            }
        }
        unset ($b);
        unset ($k);
        unset ($mm);
        unset ($mm);
        unset ($mmm);
        unset ($i);
        unset ($s);
        return $this->ini["lastRead"];
    }

    public function init()
    {
    return $this->write("Action: Login\r\nUsername: ".$this->ini["login"]."\r\nSecret: ".$this->ini["login"]."\r\n\r\n");
    }
}

