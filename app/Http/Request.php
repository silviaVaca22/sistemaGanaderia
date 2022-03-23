<?php

namespace App\Http;

class Request
{
    private $controller;
    private $method;

    public function setController($value)
    {
        if (empty($value[4])) {
            $this->controller = "home";
        } else {
            $this->controller = $value[4];
        }
    }

    public function getController()
    {
        $aux = strtolower($this->controller);
        $aux = ucfirst($aux);
        $aux = $aux . 'Controller';
        return $aux;
    }

    public function setMethod($value)
    {
        if (empty($value[5])) {
            $this->method = "index";
        } else {
            $this->method = $value[5];
        }
    }

    public function getMethod()
    {
        $aux = strtolower($this->method);
        return $aux;
    }

    public function __construct()
    {
        $segment = explode('/', $_SERVER['REQUEST_URI']);
        $this->setController($segment);
        $this->setMethod($segment);
    }

    public function send()
    {
        echo '<p>en el controllador [' . $this->getController() . '] llamar al methodo [' . $this->getMethod() . ']</p>';
    }
}
