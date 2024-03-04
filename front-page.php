<?php get_header(); ?>

<main>
    <!-- Sessão hero -->
    <section class="hero relative bg-green-600">
        <img class="w-full h-full object-cover mix-blend-overlay absolute left-1/2 -translate-x-1/2 top-0" src="<?php echo $themeurl; ?>/assets/webp/aceda-hero-image.webp" alt="Feira comercial." width="1366" height="911">
        <div class="container flex flex-col justify-center pb-48 pt-64 sm:pt-32 sm:pb-10 relative text-white">
            <h1 class="text-6xl pb-2">Conheça a ACEDA</h1>
            <h3 class="font-medium">Associação Comercial e <br class="lg:hidden">Empresarial do Distrito Anhanguera</h3>
            <p class="font-light text-xl max-w-[630px] mt-10 mb-14">
                Somos uma associação fomentadora de investimentos, recursos e pessoas para o Distrito Anhanguera e região.
            </p>
            <a href="" class="btn main">Colabore conosco</a>
        </div>
    </section>

    <!-- Associe-se -->
    <section>
        <div class="container flex justify-between items-center gap-16 py-10">
            <img class="w-1/2 lg:hidden" loading="lazy" src="<?php echo $themeurl; ?>/assets/webp/image-aceda-s2.webp" alt="Círculo concêntrico dividido horizontalmente e com as cores da Aceda. Na parte superior, temos a imagem de perto de uma mulher branca sorrindo para a câmera. Na parte inferior, foto de um comércio com uma mulher negra sorrindo ao fundo." width="600" height="600">
            <div class="right w-full">
                <h2>A ACEDA é a sua Associação Comercial</h2>
                <p class="pt-4">Tenha acesso a benefícios exclusivos com os nossos parceiros e associados, divulgação em nossas redes sociais, além de assessoria comercial e empresarial para você ou seu negócio.</p>
                <ul class="list-image-[url(../assets/checkmark-icon.svg)] mt-6 mb-10 space-y-2">
                    <li>
                        Monitoramento Colaborativo
                    </li>
                    <li>
                        Marketing Digital

                    </li>
                    <li>
                        Benefícios com nossos Parceiros
                    </li>
                    <li>
                        Cursos e Treinamentos
                    </li>
                </ul>
                <div class="buttons flex flex-wrap gap-4 sm:justify-center">

                    <a href="" class="btn yellow-blue">Associe-se</a>
                    <a href="" class="btn link">Conheça os benefícios</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Voluntarie-se -->
    <section class="min-lg:py-20">
        <div class="container rounded-2xl relative overflow-hidden text-white px-8 lg:py-4 items-center h-fit flex">
            <img class="w-full h-full object-cover absolute left-1/2 -translate-x-1/2 top-0" src="<?php echo $themeurl; ?>/assets/webp/bg-pattern-blue.webp" alt="Background pattern aceda azul" loading="lazy" width="1920" height="1080">
            <img class="relative lg:hidden w-2/6 p-10 pb-0" src="<?php echo $themeurl; ?>/assets/webp/voluntariado-aceda.webp" alt="Imagem de menina sorrindo com um casaco." loading="lazy" width="480" height="600">
            <div class="relative md:py-6">
                <h2>
                    Seja um voluntário ACEDA
                </h2>
                <p class="text-lg max-w-[548px] pt-6 pb-12 sm:pb-4">Somos uma Associação Comercial sem fins lucrativos. Todo nosso trabalho é realizado por voluntários e parceiros <br><br>Faça você também parte da ACEDA!</p>
                <div class="buttons flex flex-wrap gap-4 sm:justify-center">
                    <a href="https://www.atados.com.br/ong/aceda/vagas" class="btn yellow-blue">Seja um voluntário ACEDA!</a>
                    <a href="https://www.atados.com.br/ong/aceda/vagas" class="btn link white">Conheça nossos voluntários!</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Blog -->
    <section>
        <div class="container py-10">
            <h2 class="text-center">Confira nossos contaúdos</h2>

            <div class="swiper swiper-posts py-10">

                <div class="swiper-wrapper">

                    <?php

                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 8,
                    );

                    // cria uma query
                    $query = new WP_Query($args);

                    // Verifica se existem posts
                    if ($query->have_posts()) :
                        // Inicia o loop
                        while ($query->have_posts()) : $query->the_post();
                    ?>

                            <div class="swiper-slide w-fit">
                                <div class="post-card border overflow-hidden max-w-[332px] border-blue-600 mx-auto group">
                                    <a href="<?php the_permalink(); ?>" class="">
                                        <?php
                                        if (has_post_thumbnail()) {
                                        ?>
                                            <img loading="lazy" class="w-full h-48 object-cover group-hover:scale-105" src="<?php the_post_thumbnail_url(); ?>" alt="Featured Post Image" width="332" height="193">
                                        <?php
                                        }
                                        if (!has_post_thumbnail()) {
                                        ?>

                                            <img loading="lazy" class="w-full h-48 object-contain bg-blue-300 bg-opacity-30 px-10 group-hover:scale-105" src="<?php echo $themeurl; ?>/assets/webp/post-thumbnail-fallback.webp" alt="Featured Post Image" width="332" height="193">
                                        <?php
                                        } ?>

                                        <div class="bg-white p-4 pb-2.5">
                                            <div class="*:line-clamp-3 space-y-4">
                                                <h3 class="text-blue-600"><?php the_title(); ?></h3>
                                                <?php the_excerpt(); ?>
                                            </div>
                                            <div class="flex justify-between items-end pt-8">
                                                <div class="shrink-0 w-16 h-0.5 bg-yellow mb-0.5"></div>
                                                <span class="btn py-2 px-4 yellow-blue">Ler mais</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo 'Não há posts disponíveis.';
                    endif;
                    ?>

                </div>

                <div class="swiper-pagination swiper-pagination-posts"></div>

            </div>
        </div>
    </section>

    <!-- Cursos -->
    <section>
        <div class="container py-10">
            <h2 class="text-center">Confira nossos cursos</h2>

            <div class="swiper swiper-cursos py-10">

                <div class="swiper-wrapper">

                    <?php

                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 8,
                    );

                    // cria uma query
                    $query = new WP_Query($args);

                    // Verifica se existem posts
                    if ($query->have_posts()) :
                        // Inicia o loop
                        while ($query->have_posts()) : $query->the_post();
                    ?>

                            <div class="swiper-slide w-fit">
                                <div class="post-card border overflow-hidden max-w-[332px] border-blue-600 mx-auto group">
                                    <a href="<?php the_permalink(); ?>" class="">
                                        <?php
                                        if (has_post_thumbnail()) {
                                        ?>
                                            <img loading="lazy" class="w-full h-48 object-cover group-hover:scale-105" src="<?php the_post_thumbnail_url(); ?>" alt="Featured Post Image" width="332" height="193">
                                        <?php
                                        }
                                        if (!has_post_thumbnail()) {
                                        ?>

                                            <img loading="lazy" class="w-full h-48 object-contain bg-blue-300 bg-opacity-30 px-10 group-hover:scale-105" src="<?php echo $themeurl; ?>/assets/webp/post-thumbnail-fallback.webp" alt="Featured Post Image" width="332" height="193">
                                        <?php
                                        } ?>

                                        <div class="bg-white p-4 pb-2.5">
                                            <div class="*:line-clamp-3 space-y-4">
                                                <h3 class="text-blue-600"><?php the_title(); ?></h3>
                                            </div>
                                            <div class="flex justify-between items-end pt-8">
                                                <div class="shrink-0 w-16 h-0.5 bg-yellow mb-0.5"></div>
                                                <span class="btn py-2 px-4 yellow-blue">Inscreva-se</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo 'Não há posts disponíveis.';
                    endif;
                    ?>

                </div>

                <div class="swiper-pagination swiper-pagination-cursos"></div>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>