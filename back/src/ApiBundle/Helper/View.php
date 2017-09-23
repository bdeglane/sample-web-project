<?php

namespace ApiBundle\Helper;


class View
{
    /**
     * @var array|object
     */
    private $data;
    /**
     * @var array
     */
    private $errors;
    /**
     * @var int
     */
    private $status;

    /**
     * View constructor.
     * @param array $data
     * @param array $errors
     * @param int $status
     */
    public function __construct($data = [], $errors = [], $status = 0)
    {
        $this->data = $data;
        $this->errors = $errors;
        $this->status = $status;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array|object $data
     * @return View
     */
    public function setData($data): View
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     * @return View
     */
    public function setErrors(array $errors): View
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return View
     */
    public function setStatus(int $status): View
    {
        $this->status = $status;
        return $this;
    }
}