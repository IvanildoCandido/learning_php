<?php

class User
{
    private $id;
    private $name;
    private $email;

    public function getId()
    {
        return $this->id;
    }
    public function setId($value)
    {
        $this->id = trim($value);
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($value)
    {
        $this->name = ucwords(trim($value));
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($value)
    {
        $this->email = strtolower(trim($value));
    }
}

interface UserDAO
{
    public function add(User $user);
    public function findAll();
    public function findById($id);
    public function update(User $user);
    public function delete($id);
}
