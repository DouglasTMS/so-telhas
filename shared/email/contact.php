<?php $this->layout("_theme", ["title" => "Contato via Site"]); ?>

<h2>Recebemos um contato via site.</h2>

<ul style="border-bottom: 1px solid #999999; padding: 25px 0;">
    <li><b>Nome:</b> <?= $data->name; ?></li>
    <li><b>Telefone:</b> <a style="color: #FFFFFF;" href="<?= $whatsappLink; ?>" target="_blank" title="Enviar Mensagem"><?= $data->phone; ?></a></li>
</ul>