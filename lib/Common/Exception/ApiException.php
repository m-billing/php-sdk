<?php

namespace Mbilling\Common\Exception;


class ApiException extends \Exception
{
    /** @var string */
    protected $responseBody;

    /** @var string[] */
    protected $responseHeaders;

    /**
     * Constructor
     *
     * @param string $message Error message
     * @param int $code HTTP status code
     * @param string[] $responseHeaders HTTP header
     * @param mixed $responseBody HTTP body
     */
    public function __construct($message = "", $code = 0, $responseHeaders = array(), $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * @return string[]
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * @return string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }
}