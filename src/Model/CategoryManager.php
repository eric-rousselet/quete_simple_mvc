<?php
namespace Model;
use Model\Category;

class CategoryManager extends AbstractManager
{
    const TABLE = 'category';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function insert(Category $category): int
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`name`) VALUES (:name)");
        $statement->bindValue('name', $category->getName(), \PDO::PARAM_STR);
        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
}