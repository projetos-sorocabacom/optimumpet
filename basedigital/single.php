<?php
    if(wp_is_mobile()){
        get_template_part('partials/single-mobile');
    }else{
        get_template_part('partials/single-desktop');
    }
?>