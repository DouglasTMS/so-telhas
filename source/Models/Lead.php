<?php

namespace Source\Models;

use Source\Core\CRUD;

class Lead extends CRUD
{

    protected static $entity = "leads";

    public function setData(string $name, string $phone, string $email = null): Lead
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;

        return $this;
    }
}
