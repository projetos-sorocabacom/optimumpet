<?php

    /*Template name: Fale Conosco */
    
    get_header();

?>

<main class="contact-main inner-main">

    <section class="contacts section_inner">
        
        <div class="wrap">

            <h1 class="title"><?php the_title(); ?></h1>

            <span class="description">
                <?php echo get_field("descricao_da_pagina_fale"); ?>   
            </span>
            
            <div class="list_contact">
               
                <?php
                    $values = get_field('contato_fale');
                    $cont = 0;
                    if($values)
                    {
                        foreach($values as $value)
                        {
                            $cont++; 
                        ?>
                            <?php // echo  $value["questao"];?>
                            
                            
                            <div class="item">
                                <figure class="icon">
                                    <img src="<?php echo $value['icone_contato']['url'];?>" alt="<?php echo $value['icone_contato']['alt'];?>">
                                </figure>
                                <h3><?php echo $value['titulo_contato'];?></h3>
                                <div class="text">
                                    <?php echo $value['conteudo_contato'];?>
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
    
    <section class="contact-form section_inner">
        <div class="wrap">
            <h3>Fale com a gente</h3>
            <p class="description">
                Preencha todos os campos abaixo. 
            </p>

            <?php echo do_shortcode( '[contact-form-7 id="11" title="Contato"]' ); ?>
            
        </div>
        
    </section>
    
</main>



<?php get_footer(); ?>
