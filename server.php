<?php
/**
 * Created by PhpStorm.
 * User: oleg
 * Date: 7/9/14
 * Time: 7:10 PM
 */
namespace Frp;

class Server
{

    /**
     * @param string $query
     * @return string
     */
    public function sendResponse($query)
    {
        return json_encode([$query]);
    }
}
$server = new Server();
$query = $_GET['q'];
sleep(1);
echo $server->sendResponse($query);