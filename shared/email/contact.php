<?php $v->layout("_theme", ["title" => "Contato via Site"]); ?>

<h2>Recebemos um contato via site.</h2>

<ul style="border-bottom: 1px solid #999999; padding: 25px 0;">
    <li><b>Nome:</b> <?= $data->fullName; ?></li>
    <li><b>CPF/CNPJ:</b> <?= $data->cpf_cnpj; ?></li>
    <li><b>E-mail:</b> <?= $data->email; ?></li>
    <li><b>Telefone:</b> <?= $data->phone; ?></li>
    <li><b>Tipo de atendimento:</b> <?= ($data->treatment == 1 ? "Presencial" : "Online"); ?></li>
    <li><b>Motivos:</b> <?= $data->motives; ?></li>
</ul>

<p><?= $data->description; ?></p>