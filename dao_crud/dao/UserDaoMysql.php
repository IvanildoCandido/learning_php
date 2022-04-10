<?php
require_once '../models/User.php';

class UserDaoMysql implements UserDAO
{
    private $dao;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }
    public function add(User $user)
    {
        $sql = $this->pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $sql->bindValue(":name", $user->getName());
        $sql->bindValue(":email", $user->getEmail());
        $sql->execute();

        $user->setId($this->pdo->lastInsertId());

        return $user;
    }
    public function findAll()
    {
        $list = [];
        $sql = $this->pdo->query("SELECT * FROM users");
        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll();
            foreach ($data as $item) {
                $user = new User();
                $user->setId($item['id']);
                $user->setName($item['name']);
                $user->setEmail($item['email']);
                $list[] = $user;
            }
        }
        return $list;
    }
    public function findById($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM users WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();
            $user = new User();
            $user->setId($data['id']);
            $user->setName($data['name']);
            $user->setEmail($data['email']);

            return $user;
        } else {
            return false;
        }
    }
    public function findByEmail($email)
    {
        $sql = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();
            $user = new User();
            $user->setId($data['id']);
            $user->setName($data['name']);
            $user->setEmail($data['email']);

            return $user;
        } else {
            return false;
        }
    }
    public function update(User $user)
    {
        $sql = $this->pdo->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
        $sql->bindValue(':name', $user->getName());
        $sql->bindValue(':email', $user->getEmail());
        $sql->bindValue(':id', $user->getId());
        $sql->execute();

        return true;
    }
    public function delete($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM users WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
}
