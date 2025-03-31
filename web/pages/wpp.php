<?php $this->layout("index"); ?>


<div class="wpp">
    <ul>
        <?php if ($sellers_whatsapp): ?>

            <?php foreach ($sellers_whatsapp as $result): ?>

                <li>
                    <p class="name"><?= $result->name; ?></p>
                    <p class="phone"><?= $result->phone; ?></p>
                    <span class="whatsapp-sellers-status-change-<?= $result->id; ?>" data-id="<?= $result->id; ?>" data-status="<?= $result->status; ?>">
                        <i class="<?= ($result->status == 1 ? "active" : ""); ?>"></i>
                    </span>
                </li>

            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>