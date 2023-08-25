<?php

namespace Source\Models;

use Source\Core\CRUD;

class Lead extends CRUD
{

    protected static $entity = "leads";

    public function setData(
        string $fullName,
        string $cpfCnpj,
        string $email,
        string $phone,
        string $motiveOne,
        string $motiveTwo,
        string $motiveThree,
        string $description,
        string $treatment
    ): Lead {
        $this->full_name = $fullName;
        $this->cpf_cnpj = $cpfCnpj;
        $this->email = $email;
        $this->phone = $phone;
        $this->motive_one = $motiveOne;
        $this->motive_two = $motiveTwo;
        $this->motive_three = $motiveThree;
        $this->description = $description;
        $this->treatment = $treatment;

        return $this;
    }
}
