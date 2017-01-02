<?php
/**
 * Created by PhpStorm.
 * User: wanmin
 * Date: 17/1/2
 * Time: ÉÏÎç10:52
 */

namespace tests;
//
//include_once "simple/DatabaseConnection.php";
//include_once "simple/DatabaseConfigure.php";
use simple\DatabaseConnection;
use simple\DatabaseConfigure;

class DatabaseConnectionTest extends \PHPUnit_Framework_TestCase
{

    /**
     *  µ¥Ôª²âÊÔ;
     */
    public function testDi()
    {
        $configure = new DatabaseConfigure("127.0.0.1",4000,"root","root");
        $connection = new DatabaseConnection($configure);
        $this->assertEquals("root:root@127.0.0.1:4000",$connection->getDsn());
    }


}
