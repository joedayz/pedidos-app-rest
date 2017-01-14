<?php

/**
 * Punto de entrada para los controladores
 */
interface Controller
{
    function getAction($request);

    function postAction($request);

    function putAction($request);

    function deleteAction($request);

}