<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;

class Controller {
    private $container;

    public function __construct ($container ) {
        $this->container = $container;
    }

    public function render (ResponseInterface $response, $file, $args = []) {
        $this->container->view->render($response, $file, $args);
    }

    public function flash ($msg, $type = 'success') {
        $this->container->flash->addMessage($type, $msg);
    }
}