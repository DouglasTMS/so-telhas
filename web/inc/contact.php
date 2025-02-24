<section class="row contact">
    <div class="box contact__box">
        <header class="contact__box__header">
            <img width="60" height="60" src="<?= url("web/assets/img/icon/gift.svg"); ?>" alt="Contato" title="Contato">
            <h1>Entre em Contato Conosco</h1>
            <p>Tire suas dúvidas e faça um orçamento entrando em contato:</p>
        </header>

        <?php if ($contact_phone) : ?>

            <main class="contact__box__main">
                <p>Ligue agora</p>
                <?php foreach ($contact_phone as $resultsellers_contact_phone) : ?>
                    <a class="contact__box__main__phone callFromSite" href="tel:0<?= str_replace(["(", ")", " ", "-"], "", $resultsellers_contact_phone->phone); ?>" title="Ligue para a Só Telhas" target="_blank"><?= substr($resultsellers_contact_phone->phone, 0, -10); ?> <b><?= substr($resultsellers_contact_phone->phone, -10); ?></b></a>
                    <a class="contact__box__main__whatsapp api-whatsapp-conversion" href="https://api.whatsapp.com/send/?phone=<?= whatsapp($resultsellers_contact_phone->phone); ?>&text=Olá! Eu estava no site e gostaria de tirar algumas dúvidas." title="Fale com a Só Telhas" target="_blank"><?= substr($resultsellers_contact_phone->phone, 0, -10); ?> <b class="api-whatsapp-conversion"><?= substr($resultsellers_contact_phone->phone, -10); ?></b></a>
                <?php endforeach; ?>
            </main>
        <?php endif; ?>
    </div>
</section>