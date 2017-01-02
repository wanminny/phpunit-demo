<?php
/**
 * Created by PhpStorm.
 * User: wanmin
 * Date: 17/1/2
 * Time: ÉÏÎç10:15
 */

namespace simple;

class DatabaseConnection
{

    /**
     * @var DatabaseConfigure
     */
    public $configure;

    /**
     * DatabaseConnection constructor.
     * @param DatabaseConfigure $configure
     */
    public function __construct(DatabaseConfigure $configure)
    {
        $this->configure = $configure;
    }

    /**
     * @return string
     */
    public function getDsn()
    {
        return sprintf("%s:%s@%s:%d",
                                $this->configure->getUsername(),
                                $this->configure->getPassword(),
                                $this->configure->getHost(),
                                $this->configure->getPort()
                               );
    }

}