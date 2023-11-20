<?php

namespace App\Controllers;

use App\Models\ItemModel;
use Psr\Http\Message\RequestInterface;
use Slim\Http\Interfaces\ResponseInterface;
use Slim\Views\PhpRenderer;

class ItemController
{
    private ItemModel $modal;
    private PhpRenderer $renderer;

    public function __construct(ItemModel $modal, PhpRenderer $renderer)
    {
        $this->modal = $modal;
        $this->renderer = $renderer;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $data = $this->modal->getItems();
        return $this->renderer->render($response, 'index.php', ['todo_exercise' => $data]);
    }
}