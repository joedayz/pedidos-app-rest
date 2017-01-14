<?php

/**
 * Representa una petición HTTP proveniente del cliente Android
 */
class Request
{
    public $url_elements;
    public $verb;

    public function __construct()
    {
        // Obtener verbo HTTP
        $this->verb = $_SERVER['REQUEST_METHOD'];

        // ¿No viene ruta definida en la URL?
        if (!isset($_GET['PATH_INFO'])) {
            return false;
        }

        // ¿Qué segmentos trae la URL?
        $this->url_elements = explode('/', $_GET['PATH_INFO']);

        return true;
    }

}