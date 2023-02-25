<?php

namespace App\Repository;

use App\Entity\Tag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tag|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tag|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tag[]    findAll()
 * @method Tag[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TagRespository extends ServiceEntityRepository {

    function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Tag::class);
    }

    function findByTag(string $tag): ?Tag {
        return $this->findOneBy(['tag' => $tag]);
    }

    function findByArticleIdAndTag(int $articleId, string $tag): ?Tag {
        return $this->findOneBy(['article' => $articleId, 'tag' => $tag]);
    }
}
