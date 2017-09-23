<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Post;

class DefaultController extends BaseController
{
    public function indexAction()
    {

        $post = new Post();
        $post->setTitle('test');
        $post->setArticle('test');
        $post->setCreatedAt(new \DateTime());
        $post->setUpdatedAt(new \DateTime());

        $json = $this->serializer->jsonSerialize($post);
        $object = $this->serializer->jsonDeserialize($json, Post::class);

        $view = $this->view->build();
        $view->setData($post);
        $view->setStatus($this->view->getHttpCode()::SUCCESS);

        $jsonView = $this->serializer->jsonSerialize($view);

        return $this->render('BlogBundle:Default:index.html.twig', ['json' => $json, 'object' => $object, 'view' => $view, 'jsonView' => $jsonView]);
    }
}
