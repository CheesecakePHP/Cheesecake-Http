<?php


namespace Cheesecake\Http;

/**
 * Send http header and stuff
 *
 * @package Cheesecake\Http
 * @author Christian Meyer <ak56Lk@gmx.net>
 * @version 1.0
 * @since 0.1
 */
class Response
{

    public const HTTP_STATUS_200_OK = 'HTTP/1.1 200 OK';
    public const HTTP_STATUS_400_BAD_REQUEST = 'HTTP/1.1 400 Bad Request';
    public const HTTP_STATUS_401_UNAUTHORIZED = 'HTTP/1.1 401 Unauthorized';
    public const HTTP_STATUS_402_PAYMENT_REQUIRED = 'HTTP/1.1 402 Payment Required';
    public const HTTP_STATUS_403_FORBIDDEN = 'HTTP/1.1 403 Forbidden';
    public const HTTP_STATUS_404_NOT_FOUND = 'HTTP/1.1 404 Not Found';
    public const HTTP_STATUS_500_INTERNAL_SERVER_ERROR = 'HTTP/1.1 500 Internal Server Error';

    public const HPPT_CONTENT_TYPE_JSON = 'Content-Type: application/json';

    /**
     * Sends a http header
     *
     * @param string $header
     * @param array $options (optional)
     *
     * @author Christian Meyer <ak56Lk@gmx.net>
     * @version 1.0
     * @since 0.1
     */
    public static function sendHeader(string $header, array $options = [])
    {
        header($header);
    }

}