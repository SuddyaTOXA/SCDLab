jQuery(document).ready(function($) {
    function prevent() {
        $('.prevent, .btn-modal, a[href="#"]').on('click touch', function (event) {
            event.preventDefault();
        });
    }

    // for empty link
    prevent();

    // for burger menu
    $(function () {
        function burgerMenu() {
            $('.mobile-menu-toggle').toggleClass('active');
            $('.mobile-menu-wrap').toggleClass('showing');
            $('body').toggleClass('overflow show-menu');
        }

        $('.mobile-menu-toggle, .mobile-menu-overlay').on('click', function () {
            burgerMenu();
        });

        $(window).on('resize', function () {
            var windowWidth = $(window).width();
            if (windowWidth > 768 && $('.mobile-menu-toggle').hasClass('active')) {
                burgerMenu();
            }
        });
    });

    $(function () {
        if ($('#header .sub-menu').length) {
            $(window).on('load', function () {
                var links = $('#header .sub-menu a');

                links.each(function (i) {
                    var link = links.eq(i),
                        linkText = link.html();

                    link.html('<span><span>'+linkText+'</span></span>');

                });
            });
        }
    });

    // for blockquote
    $(function () {
        if ($('.blockquote-box .content').length) {
            $(window).on('load', function () {
                var box = $('.blockquote-box .content > :last-child');

                box.each(function (i) {
                    box.eq(i).append('<span class="quote-icon"></span>');
                });
            });
        }
    });


    //for input OTHER value
    $(function () {
       if ($('input[name="discovery-or-research[]"]').length || $('input[name="your-stakeholders[]"]').length) {
           $(window).on('load', function () {
               $('.your-stakeholders_other, .discovery-or-research_other').each(function (i) {
                   $(this).find('input[type="text"]').prop("disabled", true);
               })
           });

           $('input[name="discovery-or-research[]"], input[name="your-stakeholders[]"]').change(function() {
               if (this.checked && this.value.toLowerCase() === 'other') {

                   if (this.name === 'your-stakeholders[]') {
                       $('.your-stakeholders_other').addClass('show-input').find('input[type="text"]').prop("disabled", false);
                       setTimeout(function () {
                           $('#your-stakeholders_other').focus();
                       }, 350);
                   }

                   if (this.name === 'discovery-or-research[]') {
                       $('.discovery-or-research_other').addClass('show-input').find('input[type="text"]').prop("disabled", false);
                       setTimeout(function () {
                           $('#discovery-or-research_other').focus();
                       }, 350);
                   }

               } else if(this.value.toLowerCase() === 'other') {
                   if (this.name === 'your-stakeholders[]') {
                       $('.your-stakeholders_other').removeClass('show-input').find('input[type="text"]').prop("disabled", true).val('');
                   }

                   if (this.name === 'discovery-or-research[]') {
                       $('.discovery-or-research_other').removeClass('show-input').find('input[type="text"]').prop("disabled", true).val('');
                   }
               }
           });
       }
    });


    function simulateBGCover(images, boxClass) {
        images.each(function (i) {

            var img = $(this),
                box = img.closest(boxClass),
                natWidth = img.context.naturalWidth,
                natHeight = img.context.naturalHeight,
                width = box[0].clientWidth,
                height =box[0].clientHeight,
                factorW = natWidth / natHeight,
                factorH = natHeight / natWidth,
                newWidth = 0,
                newHeight = 0;


            if (width > height) {
                // console.log('WIDER !!!!');
                if (natWidth > natHeight) {
                    // console.log('wider image');

                    newWidth = factorW * height;
                    newHeight = height;

                    if (width > newWidth) {
                        // console.log(width + '   '+ newWidth);

                        newWidth = width;
                        newHeight = factorH * width;
                    }
                } else {
                    // console.log('higher image');
                    newWidth = width;
                    newHeight = factorH * width;

                    if (height > newHeight) {
                        newHeight = height;
                        newWidth = factorW * height;
                    }
                }
            } else {
                // console.log('HIGHER');
                if (natWidth > natHeight) {
                    // console.log('wider image');

                    newWidth = factorW * height;
                    newHeight = height;
                } else {
                    // console.log('higher image');

                    newWidth = width;
                    newHeight = factorH * width;
                }
            }

            img.css('width', newWidth);
            img.css('height', newHeight);
        });
    }

    $(function () {
        if ($('.centered-img img').length) {
            $(window).on('load lazyloaded resize', function () {
                setTimeout(function () {
                    simulateBGCover($('.centered-img img'), '.centered-img');
                },50);
            });
        }
    });

/*
    //for submenu
    $(function () {
        if ($('.mobile-menu .sub-menu').length) {

            $(window).on('load', function () {
                var links = $('.mobile-menu .menu-item-has-children > a');

                links.each(function (i) {
                    var link = links.eq(i),
                        linkText = link.html(),
                        icon = link.find('i');

                    if (!(icon.hasClass('fa-plus'))) {
                        link.html(linkText + '<i class="fas fa-plus"></i>')
                    }

                });
            });

            $('.mobile-menu .menu-item-has-children > a').on('click', function (e) {
                // e.stopPropagation();
                if (e.target !== this) {
                    e.preventDefault();

                    var icon = $(this).children('.fas');

                    if (icon.hasClass('fa-plus')) {
                        icon.removeClass('fa-plus').addClass('fa-minus');
                    } else {
                        icon.removeClass('fa-minus').addClass('fa-plus');
                    }

                    var box = $(this).closest('.menu-item-has-children'),
                        subMenu = box.children('.sub-menu');

                    box.toggleClass('show');
                    subMenu.slideToggle(350);
                }
            });
        }
    });
*/
});