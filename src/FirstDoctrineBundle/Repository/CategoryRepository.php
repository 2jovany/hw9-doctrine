<?php

namespace FirstDoctrineBundle\Repository;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends \Doctrine\ORM\EntityRepository
{
	/**
	 * @param $tagValue
	 * @return Post[]
	 */
	public function findByTagValue($tagValue)
	{
		$qb = $this->createQueryBuilder('p');
		$or = $qb->expr()->orX();
		$or->add('p.title = :foo');
		$or->add('p.title = :foo');


		return $qb
			->join('p.tags', 't')
			->where($qb->expr()->like('t.value', ':value'))
			->andWhere($qb->expr())
			->setParameter(':value', "%{$tagValue}")
			->getQuery()
			->execute()
		;
	}

	public function findByPartialTitle($title)
	{
		return $this->createQueryBuilder('p')
			->where('p.title LIKE :title')
			->setParameter(':title', '%$title%')
			->setMaxResults(10)
			->orderBy('p.id')
			->getQuery()
			->getResult()
		;
	}
}
