<?php

namespace BlogBundle\Services;


use BlogBundle\Entity\Post;
use Doctrine\ORM\EntityManager;

class PostService
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * PostService constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function get()
    {
    }

    public function getAll()
    {
    }

    public function create(Post $post)
    {
    }

    public function update(Post $post)
    {
    }

    public function remove(Post $post)
    {
    }
}