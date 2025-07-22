<?php $this->layout("index"); ?>

<section class="row thanks">
    <div class="box thanks__box">
        <img src="<?= url("web/assets/img/obrigado.svg"); ?>" alt="Obrigado" title="Obrigado">

        <h1>Obrigado pelo Contato</h1>

        <p>Vamos entrar em contato o mais rápido possível :)</p>
    </div>
</section>

<?= $this->insert('inc/our-differentials'); ?>
<?= $this->insert('inc/answers'); ?>
<?= $this->insert('inc/feedback'); ?>
<?= $this->insert('inc/contact'); ?>