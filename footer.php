<?php get_template_part("partials/footer"); ?>

<?php wp_footer(); ?>


<script>
    (function ($) {
        $(document).ready(function () {
            $('#fullpage-waltham').fullpage({
                easing: 'ease',
                navigation: true,
                navigationPosition: "left",
                responsiveWidth: 1024,
                normalScrollElements: $('#section-timeline'),
                scrollOverflow: true,
            });

            $('.prev').removeClass('slick-arrow');
            $('.next').removeClass('slick-arrow');
        });
    })(jQuery);
</script>

</body>
</html>