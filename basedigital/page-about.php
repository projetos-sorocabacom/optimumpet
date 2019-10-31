<?php
    /*Template name: Sobre */
    get_header();
?>

<main class="about-main inner-main">

    <section class="about section_inner first_section">

        <div class="wrap">

            <h1 class="title"><?php the_title(); ?></h1>

            <span class="description">
                <?php echo get_field("descricao_sobre"); ?>
            </span>

            <figure class="figure_section">
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                <?php $image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true); ?>
                
                <img src="<?php echo $image[0]; ?>" alt="<?php echo $image_alt; ?>">
            </figure>
            
            <div class="description">
                <p>
                OPTIMUM™ assumiu um importante compromisso: o aproveitamento máximo do alimento. Com uma receita desenvolvida para garantir uma excelente biodisponibilidade nutricional, ajuda o animal a absorver melhor os nutrientes em cada refeição. Esse compromisso está por trás de nosso selo BIOAVAILABILITY: A garantia Optimum(™) de uma excelente absorção nutricional para que cães e gatos aproveitem o máximo do alimento e desfrutem de cada etapa do seu desenvolvimento com saúde e energia.
                </p>    
            </div>
        
        </div>

    </section>


    <section class="why section_inner second_section">

        <div class="wrap">
            <h2 class="title"><?php echo get_field("titulo_questao"); ?></h2>
            <div class="questions">
               
                <?php
                    $values = get_field('questoes');
                    $cont = 0;
                    if($values)
                    {
                        foreach($values as $value)
                        {
                            $cont++; 
                        ?>
                            
                            <div class="item-question">
                                <span class="number"><?php echo $cont; ?></span>
                                <h3 class="question"><?php echo  $value["questao"];?></h3>
                                <div class="text">
                                    <?php echo  $value["resposta"];?>
                                </div>
                            </div>
                            
                        <?php
                        }
                        
                    }
                    // var_dump($values);
                ?>
                
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
