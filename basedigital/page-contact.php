<?php

    /*Template name: Fale Conosco */
    
    get_header();

?>

<main class="contact-main inner-main">

    <section class="contacts section_inner">
        
        <div class="wrap">

            <h2 class="title"><?php the_title(); ?></h2>

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
                                    <img src="<?php echo $value['icone_contato'];?>">
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

            <script type="text/javascript" id="jsFastForms" src="https://sfapi.formstack.io/FormEngine/Scripts/Main.js?d=RUZTrbciR-liPoiMn4MQJF8IYi0f7bwL9KtFGyEBjrKMTWApYWzkDwqoychIqIW4"></script>

            <?php // echo do_shortcode( '[contact-form-7 id="11" title="Contato"]' ); ?>
            
        </div>

        <style>

            #form1 input,
            #form1 select,
            #form1 textarea
            {

                width: 100% !important;
                height: 48px;
                background-color: #eeeeec;
                border: 0;
                font-family: 'gotham_bookregular';
                font-size: 14px;
                color: #8c8c8c;
                letter-spacing: 0.02em;                
            }

            #form1 select
            {
                appearance: menulist;
                -webkit-appearance: menulist;
            }

            #form1 textarea
            {
                height: 120px !important;
                line-height: 20px !important;
            }

            #form1 label
            {
                max-width: 400px  !important;
                font-size: 14px !important;
                width: 100%  !important;
                display: inline-block  !important;
                margin-bottom: 5px  !important;
                position: relative  !important;
                color: #8c8c8c !important;
                padding-left: 0 !important;
                font-family: 'gotham_bookregular' !important;
            }

            #form1 .ff-item-row
            {
                width: 100% !important;
                margin-right: 0 !important;
                margin-left: 0 !important;
                padding-right: 0 !important;
                padding-top: 0 !important;
                padding-left: 0 !important;
                margin-bottom: 15px !important;
            }

            #form1 .ff-item-row .ff-col-1,
            #form1 .ff-item-row .ff-col-2
            {
                position: relative;
                width: 100% !important;
                max-width: initial !important;
                min-width: initial !important;
            }
            .ff-submit-btn{margin: 0;}

            .ff-col-2.ff-field-col:not(.docsignWrapper)
            {
                display: block !important;
            }

            #Captcha620_Wrapper img{ width: 100% !important; margin-bottom: 10px !important;}

            span.ff-required-mark
            {
                color: #B89E84 !important;
            }
            .ff-load-img{margin: 0 auto !important;}
            .btnDiv{text-align: left !important;}

            .ff-footnote-label{text-align: right;}


            #form1 .btnDiv input[type=button].ff-btn-submit
            {
                background: #000;
                color: #fff;
                font-family: 'gotham_mediumregular';
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 0.08em;
                border-radius: 0;
                -webkit-appearance: none;
                margin-top: 10px;
            }

            #form1 .btnDiv input[type=button].ff-btn-submit:hover
            {
            }

            .ff-fileupload-drop-area
            {
                background-color: #eeeeec !important;
                border-radius: 0px !important;
                height: auto;
                text-align: left;
                width: 100%;
                padding: 10px;
                display: inline-block;
            }

            #form1 .ff-invalid-msg
            {
                width: 100%  !important;
                position: relative  !important;
            }

            .ff-ui-dialog
            {
                background-color: #eeeeec !important;
                border: 2px solid #398f14 !important;
                font-family: 'gotham_bookregular' !important;
                resize: none !important;
                border-radius: 0 !important;
                font-size: 12px;
            }

            .ff-ui-dialog-buttonset button
            {
                background: #000  !important;
                color: #fff  !important;
                font-family: 'gotham_mediumregular'  !important;
                font-size: 10px  !important;
                text-transform: uppercase  !important;
                letter-spacing: 0.08em  !important;
                border-radius: 0  !important;
                -webkit-appearance: none  !important;
                border: 0 !important;
                padding: 4px !important;
            }

        </style>

        
    </section>
    
</main>



<?php get_footer(); ?>
