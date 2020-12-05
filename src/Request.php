<?php


namespace Cheesecake\Http;


class Request
{

    public static function get()
    {

    }

    public static function post()
    {

    }

    public static function request()
    {

    }

    public static function cookie()
    {

    }

    /**
     * Returns the request method like GET, POST etc.
     *
     * @return string
     */
    public static function requestMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Returns the request URI.
     *
     * @return string
     */
    public static function requestUri()
    {
        return $_SERVER['REQUEST_URI'];
    }

}