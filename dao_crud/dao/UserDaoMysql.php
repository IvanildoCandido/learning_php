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
    { }
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
    { }
    public function update(User $user)
    { }
    public function delete($id)
    { }
}
