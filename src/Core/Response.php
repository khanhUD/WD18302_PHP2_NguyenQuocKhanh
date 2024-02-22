<?php

namespace App\core;

class Response
{
    protected $statusCode;
    protected $headers = [];
    protected $body;

    /**
     * @param string $body
     * @param int $statusCode
     */


    public function statusCode(int $code)
    {
        http_response_code($code);
    }

    /**
     * @param $data
     * @return $this
     */
    public function setJsonContent($data)
    {
        $this->setHeader('Content-Type', 'application/json');
        $this->body = json_encode($data);
        return $this;
    }

    /**
     * @return void
     */
    public function send(): void
    {
        // Set HTTP status code
        http_response_code($this->statusCode);

        // Set headers
        foreach ($this->headers as $name => $value) {
            header("$name: $value");
        }

        // Send body
        echo $this->body;
    }
    
    public function setHeader($name, $value)
    {
        $this->headers[$name] = $value;
        return $this;
    }
}