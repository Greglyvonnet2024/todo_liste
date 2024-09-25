<?php

namespace Controller;

abstract class BaseController
{

    public function render($fichier, array $array = [])
    {
        extract($array);

        include "./public/assets/header.html.php";
        include "views/$fichier";
        include "./public/assets/footer.html.php";
    }

    public function redirectToRoute(array $linkInfo){
        $controller = $linkInfo[0];
        $method = $linkInfo[1]?? null;
        $id = $linkInfo[2]?? null;
        redirection(addLink($controller, $method, $id));
    }
}
