<?php

namespace BlogBundle\Controller;

use ApiBundle\Services\SerializerService;
use ApiBundle\Services\ViewService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
    /**
     * @var SerializerService
     */
    protected $serializer;
    /**
     * @var ViewService
     */
    protected $view;

    /**
     * BaseController constructor.
     * @param SerializerService $serializer
     * @param ViewService $view
     */
    public function __construct(SerializerService $serializer, ViewService $view)
    {
        $this->serializer = $serializer;
        $this->view = $view;
    }
}