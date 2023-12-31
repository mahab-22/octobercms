<?php namespace System\Traits;

use Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Response as BaseResponse;

/**
 * Response Maker Trait
 * Stores attributes the can be used to prepare a response from the server.
 *
 * @package october\system
 * @author Alexey Bobkov, Samuel Georges
 */
trait ResponseMaker
{
    /**
     * @var int Response status code
     */
    protected $statusCode = 200;

    /**
     * @var mixed Override the standard controller response.
     */
    protected $responseOverride = null;

    /**
     * @var Symfony\Component\HttpFoundation\ResponseHeaderBag
     */
    protected $responseHeaderBag = null;

    /**
     * Sets the status code for the current web response.
     * @param int $code Status code
     * @return void
     */
    public function setStatusCode($code)
    {
        $this->statusCode = (int) $code;
    }

     /**
     * Returns the status code for the current web response.
     * @return int Status code
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets the response for the current page request cycle, this value takes priority
     * over the standard response prepared by the controller.
     * @param mixed $response Response object or string
     * @return void
     */
    public function setResponse($response)
    {
        $this->responseOverride = $response;
    }

    /**
     * Set a header on the Response.
     *
     * @param  string  $key
     * @param  array|string  $values
     * @param  bool    $replace
     * @return void
     */
    public function setResponseHeader($key, $values, $replace = true)
    {
        if ($this->responseHeaderBag === null) {
            $this->responseHeaderBag = new ResponseHeaderBag;
        }

        $this->responseHeaderBag->set($key, $values, $replace);
    }

    /**
     * Add a cookie to the response.
     *
     * @param  \Symfony\Component\HttpFoundation\Cookie|mixed  $cookie
     * @return void
     */
    public function setResponseCookie($cookie)
    {
        if ($this->responseHeaderBag === null) {
            $this->responseHeaderBag = new ResponseHeaderBag;
        }

        if (is_string($cookie) && function_exists('cookie')) {
            $cookie = call_user_func_array('cookie', func_get_args());
        }

        $this->responseHeaderBag->setCookie($cookie);
    }

    /**
     * Get the header response bag
     * @return Symfony\Component\HttpFoundation\ResponseHeaderBag|null
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaderBag;
    }

    /**
     * Prepares a response that considers overrides and custom responses.
     * @param mixed $contents
     * @return mixed
     */
    public function makeResponse($contents)
    {
        if ($this->responseOverride !== null) {
            $contents = $this->responseOverride;
        }

        if (is_string($contents)) {
            $contents = Response::make($contents, $this->getStatusCode(), ['Content-Type' => 'text/html']);
        }

        if (
            ($responseHeaders = $this->getResponseHeaders()) &&
            $contents instanceof BaseResponse &&
            method_exists($contents, 'withHeaders')
        ) {
            $contents = $contents->{'withHeaders'}($responseHeaders);
        }

        return $contents;
    }
}
