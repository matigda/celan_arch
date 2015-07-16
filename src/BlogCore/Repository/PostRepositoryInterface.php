<?php

namespace BlogCore\Repository;

use BlogCore\Entity\Post;

interface PostRepositoryInterface
{
    public function save(Post $post);
    public function delete(Post $post);
    public function find($id);
    public function update(Post $post);
    public function findLatestPosts($amount);
    public function findOneBy(array $requirements);
}