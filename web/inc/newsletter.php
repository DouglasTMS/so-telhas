<section class="row newsletter">
    <div class="box newsletter__box">

        <header class="newsletter__box__header">
            <img width="60px" height="60px" src="<?= url("web/assets/img/icon/gift.svg"); ?>" alt="Newsletter" title="Newsletter">
            <h1>Gostaria de receber nossas novidades e promoções?</h1>
            <p>Cadastre seu e-mail em nossa newsletter e fique por dentro das novidades e promoções.</p>
        </header>

        <footer class="newsletter__box__footer">
            <form action="<?= url("ajax"); ?>" method="POST" name="newsletter" class="newsletter__form">
                <label>
                    <input type="text" autocomplete="off" name="email" placeholder="Qual seu e-mail?">
                </label>

                <label>
                    <input type="text" autocomplete="off" name="name" placeholder="Qual seu primeiro nome?">
                    <input type="submit" name="register" value="Cadastrar">
                </label>
            </form>
        </footer>
    </div>
</section>