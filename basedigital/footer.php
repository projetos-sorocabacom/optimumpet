<?php get_template_part("partials/footer"); ?>

<?php wp_footer(); ?>

<script>
    (function ($) {
        $(document).ready(function () {
            // Video Waltham config
            const videoElement = (vid) => {
                if (vid) {
                    setTimeout(function () {
                        vid.pause();
                        vid.currentTime = 0;
                        vid.play();
                    }, 300)
                }
            };

            // Waltham fullpage configs
            $('#fullpage-waltham').fullpage({
                easing: 'ease',
                navigation: true,
                navigationPosition: "left",
                responsiveWidth: 1024,
                normalScrollElements: [$('#section-timeline'), $('#section-slider')],
                scrollOverflow: true,
                onLeave() {
                    const videoEL = document.querySelector('.map-bg video');
                    videoElement(videoEL);
                }
            });

            // Waltaham slide configs
            $('.prev').removeClass('slick-arrow');
            $('.next').removeClass('slick-arrow');

            if ($('#fullpage-waltham').length) {
                $(document).foundation();
            }
        });
    })(jQuery);
</script>

</body>
</html>