<?php

namespace ApiBundle\Services;


use ApiBundle\Helper\View;

class ViewService
{
    /**
     * @var HttpCodeService
     */
    private $httpCodeService;

    /**
     * ViewService constructor.
     * @param HttpCodeService $httpCodeService
     */
    public function __construct(HttpCodeService $httpCodeService)
    {
        $this->httpCodeService = $httpCodeService;
    }

    public function getHttpCode(): HttpCodeService
    {
        return $this->httpCodeService;
    }

    /**
     * @return View
     */
    public function build()
    {
        return new View();
    }
}