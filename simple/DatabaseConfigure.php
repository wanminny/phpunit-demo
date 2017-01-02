<?php
/**
 * Created by PhpStorm.
 * User: wanmin
 * Date: 17/1/2
 * Time: ����10:18
 */

namespace simple;

class DatabaseConfigure
{

    /**
     * @var
     */
    public $host;

    /**
     * @var
     */
    public $port;

    /**
     * @var
     */
    public $username;

    /**
     * @var
     */
    public $password;

    /**
     * DatabaseConfigure constructor.
     * @param $host
     * @param $port
     * @param $username
     * @param $password
     */
    public function __construct($host, $port, $username, $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

//    /**
//     * @param mixed $port
//     * @return DatabaseConfigure
//     */
//    public function setPort($port)
//    {
//        $this->port = $port;
//        return $this;
//    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

//    /**
//     * @param mixed $username
//     * @return DatabaseConfigure
//     */
//    public function setUsername($username)
//    {
//        $this->username = $username;
//        return $this;
//    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

//    /**
//     * @param mixed $password
//     * @return DatabaseConfigure
//     */
//    public function setPassword($password)
//    {
//        $this->password = $password;
//        return $this;
//    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

//    /**
//     * @param mixed $host
//     * @return DatabaseConfigure
//     */
//    public function setHost($host)
//    {
//        $this->host = $host;
//        return $this;
//    }


}