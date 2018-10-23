<?php
/**
 * Created by PhpStorm.
 * User: wilder21
 * Date: 21/10/18
 * Time: 12:57
 */

namespace Model;

class Category
{
    private $id;
    private $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): Item
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}
