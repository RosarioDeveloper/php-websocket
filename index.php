<?php
namespace App;

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use App\Socket;

use App\BasicPubSub;

require __DIR__ . "vendor/autoload.php";

$server = new \Ratchet\App('localhost');
    $server->route('/pubsub', new BasicPubSub);
    $server->run();

/*$server = IoServer::factory(
  new HttpServer(
    new WsServer(
      new Socket()
    )
  ),
  7000
);
$server->run();*/
