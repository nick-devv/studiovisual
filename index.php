<?php
/*
* Template Name: Página inicial
*/
?>

<?php include('head.php'); ?>

<body>

<?php include('header.php'); ?>

<main>

    <section class="banner carousel">
        <ul class="images">
            <?php foreach (CFS()->get('banner') as $key => $banner) { ?>

                <li>
                    <a href="<?php echo $banner['link']; ?>" class="active">
                        <img src="<?php echo $banner['imagem']; ?>" alt="">
                    </a>
                </li>

            <?php } ?>
        </ul>
        <ul class="dots">
        </ul>
    </section>

    <section class="cep">
        <div class="container">
            <h2>
                Consulte seu endereço
            </h2>
            <form action="" class="api">
                <input type="text" id="cep" name="cep" placeholder="Insire o cep" onkeypress="$(this).mask('00.000-000')">
            </form>
            <div class="resultado">
                <p></p>
            </div>
        </div>
    </section>

    <section class="carousel" id="carrousel">
        <div class="container">
            <ul>

                <?php foreach (CFS()->get('carousel') as $key => $carousel) { ?>

                    <li>
                        <a href="<?php echo $carousel['link']; ?>">
                            <div class="wrap-images">
                                <img src="<?php echo $carousel['imagem']; ?>" alt="">
                            </div>
                            <?php echo $carousel['texto']; ?>
                        </a>
                    </li>

                <?php } ?>

            </ul>

            <div class="arrows">
                <div class="arrow left"><a href="javascript:void(0)" class="btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/arrow-white.png" alt=""></a></div>
                <div class="arrow right"><a href="javascript:void(0)" class="btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/arrow-white.png" alt=""></a></div>
            </div>
        </div>
    </section>

    <section class="wrap-text">
        <div class="container">
            <div class="wrap-img">
                <img src="<?php echo $text['img_text'] = CFS()->get('img_text'); ?>" alt="">
            </div>
            <div class="text">
                <?php echo $text['text_text'] = CFS()->get('text_text'); ?>
            </div>
        </div>
    </section>

    <section class="wrap-accordion">
        <div class="container">
            <div class="accordion">
                <?php foreach (CFS()->get('accordion') as $key => $accordion) { ?>
                    <div class="accordion-item">
                        <a href="javascript:void(0)" class="accordion-button">
                            <?php echo $accordion['titulo']; ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/arrow-white-2.png" alt="">
                        </a>
                        <div class="accordion-body">
                            <a href="javascript:void(0)" class="arrow">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/arrow-grey.png" alt="" />
                            </a>

                            <h6>
                                <?php echo $accordion['subtitulo']; ?>
                            </h6>

                            <div class="divide">
                                <img src="<?php echo $accordion['imagem']; ?>" alt="">
                                <?php echo $accordion['texto']; ?>
                            </div>

                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </section>

    <section class="wrap-form">
        <div class="container">
            <form action="envio.php" method="POST">
                <label>
                    <input required type="text" name="nome" id="nome">
                    <p>
                        <strong>
                            *Nome:
                        </strong>
                        Informe seu nome
                    </p>
                </label>

                <label>
                    <input required type="email" name="email" id="email">
                    <p>
                        <strong>
                            *E-mail:
                        </strong>
                        Informe seu e-mail
                    </p>
                </label>

                <label>
                    <input required type="tel" name="telefone" id="telefone" onkeypress="$(this).mask('(00) 90000-0000')">
                    <p>
                        <strong>
                            *Telefone:
                        </strong>
                        (00) 00000-0000
                    </p>
                </label>

                <label>
                    <textarea required name="msg" id="msg" cols="30" rows="10"></textarea>
                    <p>
                        <strong>
                            *Mensagem:
                        </strong>
                        Escreva aqui
                    </p>
                </label>

                <button class="btn" type="submit">
                    ENVIAR
                </button>
            </form>
        </div>
        <div class="retangulo"></div>
    </section>

</main>

<?php include('footer.php'); ?>

</body>

<?php include('scripts.php'); ?>
