<?php get_template_part("partials/footer"); ?>

<?php wp_footer(); ?>


<script>
    (function ($) {
        $(document).ready(function () {

            // Video Waltham config
            const videoElement = (vid) => {
                if (typeof vid != null) {
                    setTimeout(function () {
                        vid.currentTime = 0;
                        vid.play();
                    }, 100)
                }
            };

            $('#fullpage-waltham').fullpage({
                easing: 'ease',
                navigation: true,
                navigationPosition: "left",
                responsiveWidth: 1024,
                normalScrollElements: $('#section-timeline'),
                scrollOverflow: true,
                onLeave() {
                    const videoEL = document.querySelector('.vid');
                    const video_mob = document.querySelector('.vid-mobile');

                    videoElement(videoEL);
                    videoElement(video_mob);
                }
            });

            // Waltaham slide configs
            $('.prev').removeClass('slick-arrow');
            $('.next').removeClass('slick-arrow');

            // Vide plugin config

        });
    })(jQuery);
</script>

</body>
</html>