<section class="row lead">
    <div class="box lead__box">
        <h1>Solicite um Orçamento sem Comprimisso</h1>

        <form action="<?= url("ajax"); ?>" method="POST" class="lead__form">
            <label>
                <input type="text" autocomplete="off" name="name" placeholder="Qual seu nome?">
            </label>

            <label>
                <input type="text" class="phone_mask" autocomplete="off" name="phone" placeholder="Qual seu telefone?">
            </label>

            <label>
                <input type="text" autocomplete="off" name="email" placeholder="Qual seu e-mail?">
            </label>

            <input type="submit" name="send" value="Solicitar Orçamento">
        </form>
    </div>
</section>