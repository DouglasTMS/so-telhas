<?php

namespace Source\Models;

use Source\Core\CRUD;

class SellersWhatsApp extends CRUD
{
    protected static $entity = "sellers_whatsapp";

    public function updateUpdatedAt($sellerId): SellersWhatsApp
    {
        $this->id = $sellerId;
        $this->updated_at = date("Y-m-d H:i:s");
        $this->save("id = :id", "id={$sellerId}");
        return $this;
    }
}
