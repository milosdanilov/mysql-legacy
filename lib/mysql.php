<?php
/**
 * Created by PhpStorm.
 * User: danilov
 * Date: 4.6.16.
 * Time: 11.12
 */

/**
 * @param $server
 * @param $username
 * @param $password
 * @param bool $new_link
 * @param int $client_flags
 * @return \Danilov\Legacy\MySQL
 */
function mysql_connect($server, $username, $password, $new_link = false, $client_flags = 0)
{
    return new \Danilov\Legacy\MySQL($server, $username, $password, $new_link, $client_flags);
}