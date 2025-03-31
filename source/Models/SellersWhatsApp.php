<?php

namespace Source\Models;

use Source\Core\CRUD;

class SellersWhatsApp extends CRUD
{
    protected static $entity = "sellers_whatsapp";

    /**
     * updateUpdatedAt
     *
     * @param  mixed $sellerId
     * @return SellersWhatsApp
     */
    public function updateUpdatedAt($sellerId): SellersWhatsApp
    {
        $this->id = $sellerId;
        $this->updated_at = date("Y-m-d H:i:s");
        $this->save("id = :id", "id={$sellerId}");
        return $this;
    }


    /**
     * updateSellerStatus
     *
     * Atualiza o status do WhatsApp do vendedor como ativo ou desativo.
     * 
     * @param  mixed $sellerId
     * @param  mixed $sellerStatus
     * @return SellersWhatsApp
     */
    public function updateSellerStatus(int $sellerId, int $sellerStatus): SellersWhatsApp
    {
        $this->id = $sellerId;
        $this->status = $sellerStatus;
        $this->save("id = :id", "id={$sellerId}");
        return $this;
    }
}
