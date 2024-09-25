<?php

namespace Controller;

use Form\TodoHandleRequest;
use Model\Entity\Todo;

class HomeController extends BaseController
{

    private TodoHandleRequest $todoHandleRequest; 
    private Todo $todo;

    public function __construct() {
        $this->todoHandleRequest = new TodoHandleRequest;
        $this->todo = new Todo;
    }


    public function index()
    {
        $this->todoHandleRequest->insertTodo();
        $this->render('formulaire/formulaire.html.php');
    }
}

