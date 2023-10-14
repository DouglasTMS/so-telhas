<?php

namespace Source\Models;

use Source\Core\CRUD;

class Newsletter extends CRUD
{

    protected static $entity = "newsletter";

    public function setData(string $name, string $email): Newsletter
    {
        $this->name = $name;
        $this->email = $email;

        return $this;
    }

    public function checkEmail(string $email): bool
    {
        $email = $this->get("WHERE email = :email", "email={$email}");

        if (!empty($email)) {
            return true;
        }

        return false;
    }
}
