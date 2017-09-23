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

        $json = $this->jsonSerialize($post);
        $object = $this->jsonDeserialize($json, Post::class);

        return $this->render('BlogBundle:Default:index.html.twig', ['json' => $json, 'object' => $object]);
    }
}
