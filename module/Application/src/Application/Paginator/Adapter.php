<?php

namespace Application\Paginator;

use Zend\Paginator\Adapter\AdapterInterface;

class Adapter implements AdapterInterface
{
    protected $repository;

    /**
     * Construct
     *
     * @param \Doctrine\ORM\EntityRepository $repository Repository class
     */
    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    /**
     * Returns an collection of items for a page.
     *
     * @param int $offset           Page offset
     * @param int $itemCountPerPage Number of items per page
     *
     * @return array
     */
    public function getItems($offset, $itemCountPerPage)
    {
        return $this->repository->getItems($offset, $itemCountPerPage);
    }

    /**
     * Count results
     *
     * @return int
     */
    public function count()
    {
        return $this->repository->count();
    }

}