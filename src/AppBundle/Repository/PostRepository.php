<?php

namespace AppBundle\Repository;

use BlogCore\Entity\Post;
use BlogCore\Repository\PostRepositoryInterface;
use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository implements PostRepositoryInterface
{
    public function save(Post $post)
    {
        $em = $this->getEntityManager();
        $em->persist($post);
        $em->flush();
    }

    public function delete(Post $post)
    {
        $em = $this->getEntityManager();
        $em->remove($post);
        $em->flush();
    }

    public function update(Post $post)
    {
    }

    public function findLatestPosts($amount)
    {
        return $this->findBy(array(), array('created' => 'ASC'), $amount);
    }
}