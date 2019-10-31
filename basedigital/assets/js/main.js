(function () {
    'use strict';

    var main = {
            init: function () {
                home.init();
                products.init();
                about.init();
                tracking.init();

                $(".select-custom").on("click", "p", function () {
                    $(this).closest(".select-custom").toggleClass("active");
                });

                $(".select-custom").on("click", "li", function () {
                    $(this).closest(".select-custom").removeClass("active");
                });

                $("body").on("click", "#menu-menu-mobile > li.menu-item-has-children", function () {
                    $(this).children(".sub-menu").toggleClass("active");
                    $(this).toggleClass("active");
                });
                
                if(location.host !== 'stage.optimumpet.com.br' || location.host !== 'optimumpet.com.br'){
                    var menus = document.querySelector('#menu-item-748,#menu-item-698');
                    menus.classList.add('show');
                }
            },

            mobile_check: function () {
                var check = false;
                (function (a) {
                    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) {
                        check = true;
                    }
                })(navigator.userAgent || navigator.vendor || window.opera);
                return check;
            }
        },
        home = {
            init: function () {
                var elPaginateScroll = document.querySelectorAll(".paginate-scroll")[0];
                var elPaginateScrollStep = document.querySelectorAll(".paginate-scroll .active")[0];
                var elHeader = document.querySelectorAll(".header-main")[0];
                var elContent = document.querySelectorAll(".container-fullpage")[0];

                $('#fullpage').fullpage({
                    easing: 'ease',
                    scrollOverflow: true,
                    onLeave: function (index, nextIndex, direction) {
                        elContent.classList.remove("active");

                        //Control effect info products
                        if (direction === "down") {

                            if (nextIndex === 2) {

                                ga('send', 'pageview', '/nutricaocompleta-home', dispositivo )

                            } else if (nextIndex === 3) {

                                ga('send', 'pageview', '/embasamentocientifico-home', dispositivo )

                                document.querySelectorAll(".info-product.step-2 .image")[0].className += " fadeOutUp delay-animation animated";
                                document.querySelectorAll(".info-product.step-3 .image")[0].className += " fadeInUp animated";

                                document.querySelectorAll(".info-product.step-2 .title")[0].className += " fadeOutUp delay-animation animated";
                                document.querySelectorAll(".info-product.step-3 .title")[0].className += " fadeInUp animated";

                                document.querySelectorAll(".info-product.step-2 .description")[0].className += " fadeOutUp delay-animation animated";
                                document.querySelectorAll(".info-product.step-3 .description")[0].className += " fadeInUp animated";

                                document.querySelectorAll(".info-product.step-2 .selo")[0].className += " fadeOutUp delay-animation animated";
                                document.querySelectorAll(".info-product.step-3 .selo")[0].className += " fadeInUp animated";

                                setTimeout(function () {
                                    document.querySelectorAll(".info-product.step-2 .image")[0].className = "image";
                                    document.querySelectorAll(".info-product.step-3 .image")[0].className = "image active";

                                    document.querySelectorAll(".info-product.step-2 .title")[0].className = "title";
                                    document.querySelectorAll(".info-product.step-3 .title")[0].className = "title active";

                                    document.querySelectorAll(".info-product.step-2 .description")[0].className = "description";
                                    document.querySelectorAll(".info-product.step-3 .description")[0].className = "description active";

                                    document.querySelectorAll(".info-product.step-2 .selo")[0].className = "selo";
                                    document.querySelectorAll(".info-product.step-3 .selo")[0].className = "selo active";
                                }, 700);
                            } else if (nextIndex === 4) {

                                ga('send', 'pageview', '/satisfacaogarantida-home', dispositivo )

                                document.querySelectorAll(".info-product.step-3 .image")[0].className += " fadeOutUp delay-animation animated";
                                document.querySelectorAll(".info-product.step-4 .image")[0].className += " fadeInUp animated";

                                document.querySelectorAll(".info-product.step-3 .title")[0].className += " fadeOutUp delay-animation animated";
                                document.querySelectorAll(".info-product.step-4 .title")[0].className += " fadeInUp animated";

                                document.querySelectorAll(".info-product.step-3 .description")[0].className += " fadeOutUp delay-animation animated";
                                document.querySelectorAll(".info-product.step-4 .description")[0].className += " fadeInUp animated";

                                document.querySelectorAll(".info-product.step-3 .selo")[0].className += " fadeOutUp delay-animation animated";
                                document.querySelectorAll(".info-product.step-4 .selo")[0].className += " fadeInUp animated";

                                setTimeout(function () {
                                    document.querySelectorAll(".info-product.step-3 .image")[0].className = "image";
                                    document.querySelectorAll(".info-product.step-4 .image")[0].className = "image active";

                                    document.querySelectorAll(".info-product.step-3 .title")[0].className = "title";
                                    document.querySelectorAll(".info-product.step-4 .title")[0].className = "title active";

                                    document.querySelectorAll(".info-product.step-3 .description")[0].className = "description";
                                    document.querySelectorAll(".info-product.step-4 .description")[0].className = "description active";

                                    document.querySelectorAll(".info-product.step-3 .selo")[0].className = "selo";
                                    document.querySelectorAll(".info-product.step-4 .selo")[0].className = "selo active";
                                }, 700);
                            }
                        }

                        if (direction === "up") {
                            if (nextIndex === 3) {
                                document.querySelectorAll(".info-product.step-4 .image")[0].className += " fadeOutDown delay-animation animated";
                                document.querySelectorAll(".info-product.step-3 .image")[0].className += " fadeInDown animated";

                                document.querySelectorAll(".info-product.step-4 .title")[0].className += " fadeOutDown delay-animation animated";
                                document.querySelectorAll(".info-product.step-3 .title")[0].className += " fadeInDown animated";

                                document.querySelectorAll(".info-product.step-4 .description")[0].className += " fadeOutDown delay-animation animated";
                                document.querySelectorAll(".info-product.step-3 .description")[0].className += " fadeInDown animated";

                                document.querySelectorAll(".info-product.step-4 .selo")[0].className += " fadeOutDown delay-animation animated";
                                document.querySelectorAll(".info-product.step-3 .selo")[0].className += " fadeInDown animated";

                                setTimeout(function () {
                                    document.querySelectorAll(".info-product.step-4 .image")[0].className = "image";
                                    document.querySelectorAll(".info-product.step-3 .image")[0].className = "image active";

                                    document.querySelectorAll(".info-product.step-4 .title")[0].className = "title";
                                    document.querySelectorAll(".info-product.step-3 .title")[0].className = "title active";

                                    document.querySelectorAll(".info-product.step-4 .description")[0].className = "description";
                                    document.querySelectorAll(".info-product.step-3 .description")[0].className = "description active";

                                    document.querySelectorAll(".info-product.step-4 .selo")[0].className = "selo";
                                    document.querySelectorAll(".info-product.step-3 .selo")[0].className = "selo active";
                                }, 700);
                            } else if (nextIndex === 2) {
                                document.querySelectorAll(".info-product.step-3 .image")[0].className += " fadeOutDown delay-animation animated";
                                document.querySelectorAll(".info-product.step-2 .image")[0].className += " fadeInDown animated";

                                document.querySelectorAll(".info-product.step-3 .title")[0].className += " fadeOutDown delay-animation animated";
                                document.querySelectorAll(".info-product.step-2 .title")[0].className += " fadeInDown animated";

                                document.querySelectorAll(".info-product.step-3 .description")[0].className += " fadeOutDown delay-animation animated";
                                document.querySelectorAll(".info-product.step-2 .description")[0].className += " fadeInDown animated";

                                document.querySelectorAll(".info-product.step-3 .selo")[0].className += " fadeOutDown delay-animation animated";
                                document.querySelectorAll(".info-product.step-2 .selo")[0].className += " fadeInDown animated";
                                setTimeout(function () {
                                    document.querySelectorAll(".info-product.step-3 .image")[0].className = "image";
                                    document.querySelectorAll(".info-product.step-2 .image")[0].className = "image active";

                                    document.querySelectorAll(".info-product.step-3 .title")[0].className = "title";
                                    document.querySelectorAll(".info-product.step-2 .title")[0].className = "title active";

                                    document.querySelectorAll(".info-product.step-3 .description")[0].className = "description";
                                    document.querySelectorAll(".info-product.step-2 .description")[0].className = "description active";

                                    document.querySelectorAll(".info-product.step-3 .selo")[0].className = "selo";
                                    document.querySelectorAll(".info-product.step-2 .selo")[0].className = "selo active";
                                }, 700);
                            }
                        }

                        //Control header
                        /*
                        if (nextIndex >= 2) {
                            elHeader.className += " active";
                        } else {
                            elHeader.classList.remove("active");
                        }
                        */

                        //Control navigation section
                        elPaginateScroll.classList.remove("active");
                        if (nextIndex >= 2 && nextIndex <= 4) {
                            elPaginateScrollStep.classList.remove("step-1", "step-2", "step-3");

                            elContent.className += " active";

                            elPaginateScroll.className += " active";
                        } else {
                            elPaginateScroll.classList.remove("active");
                        }

                        if (nextIndex === 1) {
                            if (direction === "up") {
                                elContent.classList.remove("position-top", "active");
                            }
                        } else if (nextIndex === 2) {
                            if (direction === "up") {
                                elContent.className += " position-bottom";
                            }
                            elPaginateScrollStep.className += " step-1";
                        } else if (nextIndex === 3) {
                            elPaginateScrollStep.className += " step-2";
                        } else if (nextIndex === 4) {
                            elPaginateScrollStep.className += " step-3";
                            if (direction === "down") {
                                elContent.className += " position-top";
                            }
                        } else if (nextIndex === 5) {
                            if (direction === "down") {
                                elContent.classList.remove("position-bottom", "active");
                            }
                        }
                    },
                });

                $(".slider-home").slick({
                    infinite: true,
                    arrows: false,
                    dots: false,
                    autoplay: false,
                    speed: 700,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });

                //ticking machine
                var percentTime, progressTime;
                var tick;
                var time = 1;
                var progressBarIndex = 0;

                $('.progressBarContainer .progressBar').each(function (index) {
                    var progress = "<div class='inProgress inProgress" + index + "'><svg class='progress' style='position:absolute;' width='40' height='40' viewBox='0 0 40 40'><circle class='progress__value progressCircle progress" + index + "' cx='20' cy='20' r='10' fill='none' stroke='#ffffff' stroke-width='2'></circle></svg></div>";
                    $(this).html(progress);
                });

                function startProgressbar() {
                    resetProgressbar();
                    percentTime = 0;
                    progressTime = 128;
                    tick = setInterval(interval, 10);
                }

                function interval() {
                    if (($('.slider-home .slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
                        progressBarIndex = $('.slider-home .slick-track div[aria-hidden="false"]').data("slickIndex");
                        startProgressbar();
                    } else {

                        percentTime += 1 / (time + 5);

                        progressTime += 1 / (time + 8);

                        $('.inProgress' + progressBarIndex).css({
                            width: percentTime + "%"
                        });

                        $('.inProgress' + progressBarIndex).parent().addClass("active");

                        $('.progress' + progressBarIndex).attr({'style': 'stroke-dashoffset:' + parseInt(progressTime) + ';'});

                        if (percentTime >= 100) {
                            $('.slider-home').slick('slickNext');
                            progressBarIndex++;
                            if (progressBarIndex > 2) {
                                progressBarIndex = 0;
                            }
                            startProgressbar();
                        }
                    }
                }

                function resetProgressbar() {
                    $(".progressBar").removeClass("active");

                    $(".inProgress").parent().removeClass("active");

                    $('.inProgress').css({
                        width: 0 + '%'
                    });

                    $('.progressCircle').attr('style', 'stroke-dashoffset: 194;');

                    clearInterval(tick);

                }
                

                startProgressbar();
                // End ticking machine

                $('.progressBarContainer div span').click(function () {
                    clearInterval(tick);

                    var goToThisIndex = $(this).data("slickIndex");
                    $('.slider-home').slick('slickGoTo', goToThisIndex, false);

                    startProgressbar();
                });
            }
        },
        products = {
            init: function () {
                $("body").on("click", ".go-next", function (event) {
                    event.preventDefault();

                    $("html, body").animate({
                        scrollTop: $('.info-buy').offset().top - 100
                    }, 750);
                });

                $("body").on("click", ".goToSextion", function (event) {
                    event.preventDefault();

                    var section = $(this).data('section');

                    $("html, body").animate({
                        scrollTop: $('.'+section).offset().top - 100
                    }, 750);
                });


                $(".header-product").on("click", ".go-to-section-mobile", function () {
                    $(this).closest(".nav").removeClass("active");

                    $("html, body").animate({
                        scrollTop: $('#' + $(this).data("section")).offset().top - 100
                    }, 750);
                });

                $(".tipo-alimento").on("click", "input[type='radio']", function () {
                    window.history.pushState("object or string", "Title", $(this).data("url"));

                    if ($(this).val() === "11" || $(this).val() === "17") {
                        $(".select-custom.secos").addClass("show");
                        $(".select-custom.umidos").removeClass("show");
                    } else {
                        $(".select-custom.umidos").addClass("show");
                        $(".select-custom.secos").removeClass("show");
                    }

                    $(this).closest(".select-custom").children(".selected").text($(this).next().text());

                    $.ajax({
                        url: ajaxurl,
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            action: "filter_post",
                            id: $(this).val()
                        },
                        beforeSend: function () {
                            $(".box-loader").show();
                            $(".box-product").hide();
                        },
                        success: function (response) {

                            $(".title-section").text(response.title_section);

                            $(".box-loader").hide();
                            $(".box-product").show();

                            $(".list-products").html("");
                            var template = "";
                            $.each(response.resultado, function (index, value) {
                                template += '<li>';
                                template += '<a href="' + value.url + '">';
                                template += '    <img src="' + value.imagem + '" alt="">';
                                template += '</a>';
                                template += '<a href="' + value.url + '" class="title-product">';
                                template += ' <h3>' + value.titulo + '</h3>';
                                template += '</a>';
                                template += '<a href="' + value.url + '" class="btn-dark white">CONHEÇA</a>';
                                template += '<a href="#" class="btn-dark buy" data-cobasi="' + value.link_cobasi + '" data-petlove="' + value.link_petlove + '" data-petz="' + value.link_petz + '">Comprar</a>';
                                template += '</li>';
                            });

                            $(".list-products").append(template);

                        },
                        error: function (response) {
                            console.error(response);
                        }
                    });
                });

                $(".idade-animal").on("click", "input[type='radio']", function () {
                    window.history.pushState("object or string", "Title", $(this).data("url"));
                    $(this).closest(".select-custom").children(".selected").text($(this).next().text());

                    $.ajax({
                        url: ajaxurl,
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            action: "filter_post",
                            id: $(this).val()
                        },
                        beforeSend: function () {
                            $(".box-loader").show();
                            $(".box-product").hide();
                        },
                        success: function (response) {

                            $(".title-section").text(response.title_section);

                            $(".box-loader").hide();
                            $(".box-product").show();

                            $(".list-products").html("");
                            var template = "";
                            $.each(response.resultado, function (index, value) {
                                template += '<li>';
                                template += '<a href="' + value.url + '">';
                                template += '    <img src="' + value.imagem + '" alt="">';
                                template += '</a>';
                                template += '<a href="' + value.url + '" class="title-product">';
                                template += ' <h3>' + value.titulo + '</h3>';
                                template += '</a>';
                                template += '<a href="' + value.url + '" class="btn-dark white">CONHEÇA</a>';
                                template += '<a href="#" class="btn-dark buy" data-cobasi="' + value.link_cobasi + '" data-petlove="' + value.link_petlove + '" data-petz="' + value.link_petz + '">Comprar</a>';
                                template += '</li>';
                            });

                            $(".list-products").append(template);

                        },
                        error: function (response) {
                            console.error(response);
                        }
                    });
                });

                var SPMaskBehavior = function (val) {
                        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                    },
                    spOptions = {
                        onKeyPress: function (val, e, field, options) {
                            field.mask(SPMaskBehavior.apply({}, arguments), options);
                        }
                    };

                $('input[type="tel"]').mask(SPMaskBehavior, spOptions);

                if (main.mobile_check()) {
                    $(".footer-main").on("click", "h3", function () {
                        $(this).toggleClass("active");
                        $(this).next().toggleClass("active");
                    });
                }

                $("body").on("click", ".close", function (event) {
                    event.preventDefault();
                    $(this).parent().toggleClass("active");
                });

                $("body").on("click", ".composicao", function () {
                    event.preventDefault();
                    $(".modal-niveis-garantia").toggleClass("active");
                    ga('send', 'pageview', '/tabela-níveis-de-garantia');
                });

                $("body").on("click", ".buy", function (event) {
                    event.preventDefault();

                    $(".modal-stores .cobasi").attr("href", $(this).data("cobasi"));
                    $(".modal-stores .petlove").attr("href", $(this).data("petlove"));
                    $(".modal-stores .petz").attr("href", $(this).data("petz"));
                    $(".modal-stores .cobasi, .modal-stores .petlove, .modal-stores .petz").data("label", $(this).data("produto"));

                    $(".modal-stores").toggleClass("active");
                });

                var actualSection;
                var pageview1='0',pageview2='0',pageview3='0';

                $('.detail-product').fullpage({
                    easing: 'ease',
                    scrollOverflow: true,
                    afterLoad: function (anchorLink, index) {
                        actualSection = index;
                    },
                    onLeave: function (index, nextIndex, direction) {
                        console.log(nextIndex);
                        if (nextIndex > 2) {
                            $(".container-detail-product").addClass("left-container");
                        } else {
                            $(".container-detail-product").removeClass("left-container");
                        }

                        $(".header-product a").removeClass("active");

                        //Control effect info products
                        if (direction === "down") {
                            if (nextIndex === 2) {
                                                                
                                if(pageview1==='0'){
                                    ga( 'send', 'pageview', page+'beneficio', dispositivo );
                                    pageview1='1';
                                }

                                document.querySelectorAll(".box-1-left")[0].className += " fadeOutUp delay-animation animated";
                                document.querySelectorAll(".box-1-right")[0].className += " fadeOutUp delay-animation animated";

                                document.querySelectorAll(".box-2-left")[0].className += " fadeInUp delay-animation animated";
                                document.querySelectorAll(".box-2-right")[0].className += " fadeInUp delay-animation animated";

                                $(".header-product a.beneficios").addClass("active");
                                $(".btn-dark").addClass("active-button");

                                setTimeout(function () {
                                    document.querySelectorAll(".box-1-left")[0].className = "box-1-left";
                                    document.querySelectorAll(".box-1-right")[0].className = "box-1-right";

                                    document.querySelectorAll(".box-2-left")[0].className = "box-2-left active";
                                    document.querySelectorAll(".box-2-right")[0].className = "box-2-right active";
                                }, 700);
                            } else if (nextIndex === 3) {
                                
                                if(pageview2==='0'){
                                    ga( 'send', 'pageview', page+'ingredientes', dispositivo )
                                    pageview2='1';
                                }

                                document.querySelectorAll(".box-2-left")[0].className += " fadeOutLeft delay-animation animated";
                                document.querySelectorAll(".box-2-right")[0].className += " fadeOutLeft delay-animation animated";

                                document.querySelectorAll(".box-3-right")[0].className += " fadeInRight delay-animation animated";

                                $(".header-product a.ingredientes").addClass("active");

                                setTimeout(function () {
                                    document.querySelectorAll(".box-2-left")[0].className = "box-2-left";
                                    document.querySelectorAll(".box-2-right")[0].className = "box-2-right";

                                    document.querySelectorAll(".box-3-right")[0].className = "box-3-right active";
                                }, 700);
                            } else if (nextIndex === 4) {
                                                                
                                if(pageview3==='0'){
                                    ga( 'send', 'pageview', page+'quantidade', dispositivo )
                                    pageview3='1';
                                }

                                document.querySelectorAll(".box-3-right")[0].className += " fadeOutUp delay-animation animated";
                                document.querySelectorAll(".box-4-right")[0].className += " fadeInUp delay-animation animated";

                                document.querySelectorAll(".image-1")[0].className += " fadeOutUp delay-animation animated";
                                document.querySelectorAll(".image-2")[0].className += " fadeInUp delay-animation animated";

                                $(".header-product a.quantidade").addClass("active");

                                setTimeout(function () {
                                    document.querySelectorAll(".box-3-right")[0].className = "box-3-right";
                                    document.querySelectorAll(".box-4-right")[0].className = "box-4-right active";

                                    document.querySelectorAll(".image-1")[0].className = "image-1";
                                    document.querySelectorAll(".image-2")[0].className = "image-2 active";
                                }, 700);
                            } else {
                                $(".container-detail-product").addClass("top");
                                $(".header-product").addClass("active");
                            }
                        }

                        //Control effect info products
                        if (direction === "up") {
                            if (nextIndex === 1) {
                                document.querySelectorAll(".box-1-left")[0].className += " fadeInDown delay-animation animated";
                                document.querySelectorAll(".box-1-right")[0].className += " fadeInDown delay-animation animated";

                                document.querySelectorAll(".box-2-left")[0].className += " fadeOutDown delay-animation animated";
                                document.querySelectorAll(".box-2-right")[0].className += " fadeOutDown delay-animation animated";

                                $(".btn-dark").removeClass("active-button");

                                setTimeout(function () {
                                    document.querySelectorAll(".box-1-left")[0].className = "box-1-left active";
                                    document.querySelectorAll(".box-1-right")[0].className = "box-1-right active";

                                    document.querySelectorAll(".box-2-left")[0].className = "box-2-left";
                                    document.querySelectorAll(".box-2-right")[0].className = "box-2-right";
                                }, 700);
                            } else if (nextIndex === 2) {
                                document.querySelectorAll(".box-2-left")[0].className += " fadeInLeft delay-animation animated";
                                document.querySelectorAll(".box-2-right")[0].className += " fadeInLeft delay-animation animated";

                                document.querySelectorAll(".box-3-right")[0].className += " fadeOutRight delay-animation animated";

                                $(".header-product a.beneficios").addClass("active");
                                setTimeout(function () {
                                    document.querySelectorAll(".box-2-left")[0].className = "box-2-left active";
                                    document.querySelectorAll(".box-2-right")[0].className = "box-2-right active";

                                    document.querySelectorAll(".box-3-right")[0].className = "box-3-right";
                                }, 700);
                            } else if (nextIndex === 3) {
                                document.querySelectorAll(".box-3-right")[0].className += " fadeInDown delay-animation animated";
                                document.querySelectorAll(".box-4-right")[0].className += " fadeOutDown delay-animation animated";

                                document.querySelectorAll(".image-1")[0].className += " fadeInDown delay-animation animated";
                                document.querySelectorAll(".image-2")[0].className += " fadeOutDown delay-animation animated";

                                $(".header-product a.ingredientes").addClass("active");
                                setTimeout(function () {
                                    document.querySelectorAll(".box-3-right")[0].className = "box-3-right active";
                                    document.querySelectorAll(".box-4-right")[0].className = "box-4-right";

                                    document.querySelectorAll(".image-1")[0].className = "image-1 active";
                                    document.querySelectorAll(".image-2")[0].className = "image-2";
                                }, 700);
                            } else {
                                $(".container-detail-product").removeClass("top");
                                $(".header-product").removeClass("active");
                                $(".header-product a.quantidade").addClass("active");
                            }
                        }
                    }
                });

                $("body").on("click", ".go-to-section", function (event) {
                    event.preventDefault();
                    var goToSection = $(this).data('index');

                    console.log("Atual: " + actualSection);
                    console.log("GoTo: " + goToSection);

                    // $.fn.fullpage.moveSectionDown();
                    // $.fn.fullpage.moveSectionUp();

                    var diferenca;
                    if ((goToSection - actualSection) > 0) {
                        diferenca = goToSection - actualSection;
                        console.log(diferenca);
                        $(".header-product a.beneficios").addClass("active");
                        $(".btn-dark").addClass("active-button");

                        if (diferenca === 1) {
                            $.fn.fullpage.moveSectionDown();
                        } else {
                            if (actualSection === 1 && goToSection === 3) {
                                $(".container-detail-product").addClass("left-container");
                                $.fn.fullpage.moveTo(3);

                                document.querySelectorAll(".box-1-left")[0].className += " fadeOutUp delay-animation animated";
                                document.querySelectorAll(".box-1-right")[0].className += " fadeOutUp delay-animation animated";

                                document.querySelectorAll(".box-2-left")[0].style.display = "none";
                                document.querySelectorAll(".box-2-right")[0].style.display = "none";

                                document.querySelectorAll(".box-3-right")[0].className += " fadeInRight delay-animation animated";

                                setTimeout(function () {
                                    document.querySelectorAll(".box-1-left")[0].className = "box-1-left";
                                    document.querySelectorAll(".box-1-right")[0].className = "box-1-right";

                                    document.querySelectorAll(".box-2-left")[0].removeAttribute("style");
                                    document.querySelectorAll(".box-2-right")[0].removeAttribute("style");

                                    document.querySelectorAll(".box-3-right")[0].className = "box-3-right active";
                                }, 700);
                            } else if (actualSection === 1 && goToSection === 4) {
                                $(".container-detail-product").addClass("left-container");
                                $.fn.fullpage.moveTo(4);

                                document.querySelectorAll(".box-1-left")[0].className += " fadeOutUp delay-animation animated";
                                document.querySelectorAll(".box-1-right")[0].className += " fadeOutUp delay-animation animated";

                                document.querySelectorAll(".box-2-left")[0].style.display = "none";
                                document.querySelectorAll(".box-2-right")[0].style.display = "none";

                                document.querySelectorAll(".box-3-right")[0].style.display = "none";

                                setTimeout(function () {
                                    document.querySelectorAll(".box-1-left")[0].className = "box-1-left";
                                    document.querySelectorAll(".box-1-right")[0].className = "box-1-right";

                                    document.querySelectorAll(".box-2-left")[0].removeAttribute("style");
                                    document.querySelectorAll(".box-2-right")[0].removeAttribute("style");

                                    document.querySelectorAll(".box-3-right")[0].removeAttribute("style");
                                }, 700);
                            } else if (actualSection === 2 && goToSection === 4) {
                                $.fn.fullpage.moveTo(4);

                                document.querySelectorAll(".box-2-left")[0].className += " fadeOutLeft delay-animation animated";
                                document.querySelectorAll(".box-2-right")[0].className += " fadeOutLeft delay-animation animated";

                                document.querySelectorAll(".box-3-right")[0].style.display = "none";

                                setTimeout(function () {

                                    document.querySelectorAll(".box-2-left")[0].className = "box-2-left";
                                    document.querySelectorAll(".box-2-right")[0].className = "box-2-right";

                                    document.querySelectorAll(".box-3-right")[0].removeAttribute("style");
                                }, 700);
                            }
                        }
                    } else if ((goToSection - actualSection) < 0) {
                        console.log("Up");
                        diferenca = actualSection - goToSection;
                        console.log(diferenca);
                        $(".header-product a.beneficios").addClass("active");
                        $(".btn-dark").addClass("active-button");

                        if (diferenca === 1) {
                            $.fn.fullpage.moveSectionUp();
                        } else {
                            if (actualSection === 4 && goToSection === 2) {
                                $.fn.fullpage.moveTo(2);

                                document.querySelectorAll(".box-4-right")[0].className += " fadeOutDown delay-animation animated";

                                document.querySelectorAll(".box-3-right")[0].style.display = "none";

                                document.querySelectorAll(".image-1")[0].className += " fadeInDown delay-animation animated";
                                document.querySelectorAll(".image-2")[0].className += " fadeOutDown delay-animation animated";

                                setTimeout(function () {

                                    document.querySelectorAll(".box-4-right")[0].className = "box-4-right";

                                    document.querySelectorAll(".image-1")[0].className = "image-1 active";
                                    document.querySelectorAll(".image-2")[0].className = "image-2";

                                    document.querySelectorAll(".box-3-right")[0].removeAttribute("style");
                                }, 700);
                            }
                        }
                    }
                });

                var totalSlider = $(".lista-beneficios .item").length;

                $(".navigation .total").text("1/" + totalSlider);

                $(".navigation").on("click", ".slick-prev", function () {
                    $(".lista-beneficios").slick("slickPrev");
                });

                $(".navigation").on("click", ".slick-next", function () {
                    $(".lista-beneficios").slick("slickNext");
                });

                $(".lista-beneficios").on('afterChange', function (event, slick, currentSlide, nextSlide) {
                    $(".navigation .total").text((currentSlide + 1) + "/" + totalSlider);
                });

                $(".lista-beneficios").slick({
                    infinite: true,
                    arrows: false,
                    autoplay: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });

                $(".header-product").on("click", "h4", function () {
                    $(this).toggleClass("active");
                    $(".header-product .nav").toggleClass("active");
                });
            }
        },
        about = {
            init: function () {

                var figSection = $(".figure_section");

                if (figSection.length) {

                    var thisPos = figSection.position().top;
                    var thisHeight = figSection.outerHeight() / 2;

                    var childPos = figSection.offset();
                    var parentPos = figSection.parent().offset();
                    var childOffset = {
                        top: childPos.top - parentPos.top,
                        left: childPos.left - parentPos.left
                    }

                    $(".first_section").append("<div class='bg_section'></div>")

                    $(".bg_section").css({top: childOffset.top + thisHeight + 'px'});
                }
            }
        },
        tracking = {
            init: function () {
                if(page=="-"){
                    page = "home";
                }
                $("body").on("click", ".section_inner.contact-form .wpcf7-submit", function () {
                    ga('send', 'event', 'enviar', 'formulario', 'fale-conosco' );
                });
                $(".sub-caes").on("click", "a", function(event) {
                    ga('send', 'event',  'tudo-sobre-caes', slug($(this).text(), {lower: true}),  "fixo "+page+" "+dispositivo )
                });

                $(".sub-gatos").on("click", "a", function(event) {
                    ga('send', 'event', 'tudo-sobre-gatos', slug($(this).text(), {lower: true}), "fixo "+page+" "+dispositivo )
                });

                $("body").on("click", "[data-action]", function(event){
                    var action = $(this).data("action");
                    var category = $(this).data("category");
                    var label = $(this).data("label");
                    var value = $(this).data("value");
                    console.log("action "+action);
                    console.log("category "+category);
                    console.log("label "+label);
                    console.log("value "+value);

                    if(label != "" || label != "undefined"){
                        if(label==page){
                            ga('send', 'event', category, action, page+"-"+dispositivo )
                        }else{
                            ga('send', 'event', category, action, label+"-"+page+"-"+dispositivo )
                        }
                    }else if(value != "" || value != "undefined"){
                        if(value==page){
                            ga('send', 'event', category, action, +page+"-"+dispositivo )
                        }else{
                            ga('send', 'event', category, action, value+"-"+page+"-"+dispositivo )
                        }
                    }else{
                        ga('send', 'event', category, action, page+"-"+dispositivo )
                    }
                });

                $("body").on("click", "[data-action-dicas]", function(event){

                    var action = $(this).data("action-dicas");
                    var info = $(this).data("info");
                    var label = $(this).data("label");

                    if(label !== ""){
                        ga('send', 'event', action, info, label);
                    }else{
                        ga('send', 'event', action, info);
                    }
                });

                $(".footer-main").on("click", "a", function(event){
                    ga('send', 'event', 'rodape', slug($(this).text(), {lower: true}), "fixo "+page+"-"+dispositivo )
                });

                $("a[href='http://www.waltham.com']").on("click", function(event){
                    ga('send', 'event', 'acesse', 'link',  'conheca-waltham' )
                });

                $(".list_contact .text").on("click", "a", function(event){
                    ga('send', 'event', 'endereco', slug($(this).text(), {lower: true}), page+"-"+dispositivo )
                });
            }
        };
    main.init();
}());

var elMenuHamburuger = document.getElementById("iconMenuMobile");
var elSubMenuCaes = document.querySelectorAll(".nav-mobile")[0];
var header = {
    hamburguerMenu: function () {
        elMenuHamburuger.className.indexOf("open") === -1 ? elMenuHamburuger.className = "open" : elMenuHamburuger.classList.remove("open");
        elSubMenuCaes.className.indexOf("open") === -1 ? elSubMenuCaes.className += " open" : elSubMenuCaes.classList.remove("open");
    }
};

$(window).load(function(){
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        masonry: {
            columnWidth: ".grid-sizer",
            horizontalOrder: true,
        }
    });

    $("body").on("click", ".filtro .label", function(){
        var itensFiltro = [];
        $(this).find('.checkbox').toggleClass("active");
        $(".filtro .label .active").each(function(index, el){
            itensFiltro.push("."+$(el).data('value'));
        });

        console.log(itensFiltro);

        $grid.isotope({ filter: itensFiltro.toString() })
    });

    $("body").on("click", ".clean-filter", function(){
        $(".filtro .checkbox").removeClass('active');
        $grid.isotope({ filter: '*' })
    });

    $(".filtro p").on('click', function(event){
        event.preventDefault();
        $('.filtro p').toggleClass("active");
        $('.label').toggleClass("inactive");
    });

    $grid.imagesLoaded().progress( function() {
        $grid.isotope('layout');
    });
});
