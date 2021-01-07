<?php

abstract class Collection implements CollectionInterface
{
  protected $repo, $entity;
  public $collection;
  private $position = 0;

  public function __construct(RepositoryInterface $repo, $id = null, $field = 'id')
  {
    $this->position = 0;
    $this->repo = $repo;
    $this->setEntity();
    if (!empty($id)) {
      $this->collection = $this->repo->find($this->entity, $id, $field);
    } else {
      $this->collection = $this->repo->all($this->entity);
    }
  }
  public function shortDescription()
  {
    if (strlen($this->current()->details) < 510) {
      return strip_tags($this->current()->details);
    }
    return strip_tags(
      substr(
        $this->current()->details,
        0,
        strpos($this->current()->details, ' ', 500)
      )
    ) . '...';
  }

  public function current()
  {
    // var_dump(__METHOD__);
    return $this->collection[$this->position];
  }
  public function key()
  {
    // var_dump(__METHOD__);
    return $this->position;
  }
  public function next()
  {
    // var_dump(__METHOD__);
    $this->position += 1;
  }
  public function rewind()
  {
    // var_dump(__METHOD__);
    $this->position = 0;
  }
  public function valid()
  {
    // var_dump(__METHOD__);
    return isset($this->collection[$this->position]);
  }
  public function count()
  {
    return count($this->collection);
  }
  abstract protected function setEntity();
}
