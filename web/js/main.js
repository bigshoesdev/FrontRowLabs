/*---------------------------
      Table of Contents
    --------------------
    
    01- Mobile Menu
    02- Sticky Navbar
    03- Module Search 
    04- Module Sidenav 
    05- Module Cart 
    06- Module popup Menu
    07- Scroll Top Button
    08- Equal Height Elements
    09- Set Background-img to section 
    10- Increase and Decrease Input Value
    11- Add active class to accordions
    12- Switch Between List view and Grid View
    13- Nav Split
    14- Progress bars
    15- Owl Carousel
    16- Popup Video
    17- CounterUp
    18- Pie Charts 
    19- Products Filtering and Sorting
    20- Range Slider
    21- Count Down Timer
    
 ----------------------------*/
$(function () {
    /*==========   Pre-Loader   ==========*/
    $('.spinner-container').fadeOut();
    $('.spinner-container').addClass('hide');
    $('#user-email1').hide();

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $("#user-phone").attr('type', 'number');
        $("#startupform-phone").attr('type', 'number');
    }

    var options = {
        title: '',
        message: 'Front Row Labs may serve cookies to analyze traffic to this site. Information about your use of this site is shared with Front Row Labs for that purpose.',
        delay: 600,
        expires: 1,
        link: '/privacypolicy',
        onAccept: function () {
            var myPreferences = $.fn.ihavecookies.cookie();
            console.log('Yay! The following preferences were saved...');
            console.log(myPreferences);
        },
        moreInfoLabel: 'See Details',
        acceptBtnLabel: 'Accept',

    }

    $('body').ihavecookies(options);

    if ($.fn.ihavecookies.preference('marketing') === true) {
        console.log('This should run because marketing is accepted.');
    }

    $('#ihavecookiesBtn').on('click', function() {
        $('body').ihavecookies(options, 'reinit');
    });

    // Global variables
    var $win = $(window);

    /*==========   Mobile Menu   ==========*/
    var $navToggler = $('.navbar-toggler');
    $navToggler.on('click', function () {
        $(this).toggleClass('actived');
    })
    $navToggler.on('click', function () {
        $('.navbar-collapse').toggleClass('menu-opened');
    });

    $("#user-subject").on('change', function() {
        if(!$("#user-subject").val()) {
            $("#user-subject").next('div.help-block').text('Select any subject in list');
        }else{
            $("#user-subject").next('div.help-block').text('');
            return false;
        }
    });

    $("#user-phone").on('change', function() {
        var phone = $("#user-phone").val();
        var newPhoneStr = '';
        for(var i = 0; i < phone.length; i++) {
            if (phone[i] >= '0' && phone[i] <= '9') {
                newPhoneStr = newPhoneStr + phone[i];
            }
        }

        $("#user-phone").val(newPhoneStr);
        if(newPhoneStr.length < 8 || newPhoneStr.length > 10 ) {
            $("#user-phone").next('div.help-block').text('Input only that contains 9-10 numbers');
        }else{
            $("#user-phone").next('div.help-block').text('');
        }
    });

    $("#startupform-phone").on('change', function() {
        var phone = $("#startupform-phone").val();
        var newPhoneStr = '';
        for(var i = 0; i < phone.length; i++) {
            if (phone[i] >= '0' && phone[i] <= '9') {
                newPhoneStr = newPhoneStr + phone[i];
            }
        }

        $("#startupform-phone").val(newPhoneStr);
        if(newPhoneStr.length < 8 || newPhoneStr.length > 10 ) {
            $("#startupform-phone").next('div.help-block').text('Input only that contains 9-10 numbers');
        }else{
            $("#startupform-phone").next('div.help-block').text('');
        }
    });

    $(".add-file-btn").on('click', function () {
        $("#user-image").click();
    });

    // Toggle dropdown Menu in Mobile
    $('.dropdown-menu [data-toggle=dropdown]').on('click', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).parent().siblings().removeClass("opened");
        $(this).parent().toggleClass("opened");
    });
    $('.dropdown-submenu [data-toggle=dropdown]').on('click', function (e) {
        $(this).next().toggleClass("show");
        $(this).parent().siblings().find('.dropdown-menu').removeClass('show');
    });

    /*==========   Sticky Navbar   ==========*/
    $win.on('scroll', function () {
        if ($win.width() >= 992) {
            var $navbar = $('.navbar');
            if ($win.scrollTop() > 80) {
                $navbar.addClass('fixed-navbar');
            } else {
                $navbar.removeClass('fixed-navbar');
            }
        }
    });
    /*==========  Module Search   ==========*/
    var $moduleBtnSearch = $('.module__btn-search'),
        $moduleSearchContainer = $('.module__search-container');
    // Show Module Search
    $moduleBtnSearch.on('click', function (e) {
        e.preventDefault();
        $moduleSearchContainer.toggleClass('active', 'inActive').removeClass('inActive');
    });
    // Close Module Search
    $('.close-search').on('click', function () {
        $moduleSearchContainer.removeClass('active').addClass('inActive');
    });

    /*==========  Module Sidenav   ==========*/
    var $moduleBtnSidenav = $('.module__btn-sidenav'),
        $moduleSidenavContainer = $('.module__sidenav-container')
    // Show Module Sidenav
    $moduleBtnSidenav.on('click', function (e) {
        e.preventDefault();
        $moduleSidenavContainer.toggleClass('active', 'inActive').removeClass('inActive');
    });
    // Close Module Sidenav
    $('.close-sidenav').on('click', function () {
        $moduleSidenavContainer.removeClass('active').addClass('inActive');
    });
    // Close Module Sidenav when clicking on an other place on the Document
    $(document).on('mouseup', function (e) {
        if (!$('.sidenav__menu').is(e.target) && !$moduleBtnSidenav.is(e.target) && $('.sidenav__menu').has(e.target).length === 0 && $moduleBtnSidenav.has(e.target).length === 0) {
            $moduleSidenavContainer.removeClass('active');
        }
    });

    /*==========  Module Cart   ==========*/
    var $moduleCartContainer = $('.module__cart-container');
    // show module cart
    $('.module__btn-cart').on('click', function (e) {
        e.preventDefault();
        $moduleCartContainer.toggleClass('active');
    });
    // Close Module Cart
    $('.close-cart').on('click', function () {
        $moduleCartContainer.removeClass('active');
    });
    $(document).on('mouseup', function (e) {
        if (!$moduleCartContainer.is(e.target) && !$('.module__btn-cart').is(e.target) && $moduleCartContainer.has(e.target).length === 0 && $moduleCartContainer.has(e.target).length === 0) {
            $moduleCartContainer.removeClass('active');
        }
    });

    /*==========  Module popup Menu   ==========*/
    var $modulePopupMenuContainer = $('.module__popupMenu-container');
    // show module popupMenu
    $('.module__btn-popupMenu').on('click', function (e) {
        e.preventDefault();
        $modulePopupMenuContainer.addClass('active')
    });
    // Close module popupMenu
    $('.close-popupMenu').on('click', function () {
        $modulePopupMenuContainer.removeClass('active')
    });

    /*==========   Scroll contact Button   ==========*/
    $("#scroll-contact").on("click", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 500);
    });

    /*==========   Scroll Learn More   ==========*/
    $(".learn__more").on("click", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 500);
    });


    /*==========   Scroll Top Button   ==========*/
    var $scrollTopBtn = $('#scrollTopBtn');
    // Show Scroll Top Button
    $win.on('scroll', function () {
        if ($(this).scrollTop() > 700) {
            $scrollTopBtn.addClass('actived');
        } else {
            $scrollTopBtn.removeClass('actived');
        }
    });
    // Animate Body after Clicking on Scroll Top Button
    $scrollTopBtn.on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });

    /*==========   Equal Height Elements   ==========*/
    var maxHeight = 0;
    $(".equal-height").each(function () {
        if ($(this).height() > maxHeight) {
            maxHeight = $(this).height();
        }
    });
    $(".equal-height").height(maxHeight);

    /*==========   Set Background-img to section   ==========*/
    $('.bg-img').each(function () {
        var imgSrc = $(this).children('img').attr('src');
        $(this).parent().css({
            'background-image': 'url(' + imgSrc + ')',
            'background-size': 'cover'
        });
        $(this).parent().addClass('bg-img');
        $(this).remove();
    });

    /*==========   Increase and Decrease Input Value   ==========*/
    // Increase Value
    $('.increase-qty').on('click', function () {
        var $qty = $(this).parent().find('.qty-input');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
        }
    });
    // Decrease Value
    $('.decrease-qty').on('click', function () {
        var $qty = $(this).parent().find('.qty-input');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal) && currentVal > 1) {
            $qty.val(currentVal - 1);
        }
    });

    /*==========   Add active class to accordions   ==========*/
    $('.accordion__item-header').on('click', function () {
        $(this).addClass('opened')
        $(this).parent().siblings().find('.accordion__item-header').removeClass('opened')
    })
    $('.accordion__item-title').on('click', function (e) {
        e.preventDefault()
    });

    /*==========   Switch Between List view and Grid View   ==========*/
    $('.filter-option-view a').on('click', function (e) {
        e.preventDefault()
        $(this).addClass('active').siblings().removeClass('active');
    })
    $('#listView').on('click', function (e) {
        $('.product-item').parent().addClass('list-view');
    });
    $('#gridView').on('click', function (e) {
        $('.product-item').parent().removeClass('list-view');
    });

    /*==========   Nav Split   ==========*/
    $('.nav-split li a').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('#' + $(this).data('scroll')).offset().top - 100
        }, 1000);
        $(this).parent().addClass('active').siblings().removeClass('active');
    });
    $win.on('scroll', function () {
        $('section').each(function () {
            if ($win.scrollTop() > $(this).offset().top - 100) {
                var sectionId = $(this).attr('id');
                $('.nav-split li a[data-scroll="' + sectionId + '"]').parent().addClass('active').siblings().removeClass('active');
            }
        });
    });


    /*==========   Progress bars  ==========*/
    if ($(".skills").length > 0) {
        $(window).on('scroll', function () {
            var skillsOffset = $(".skills").offset().top - 130,
                skillsHight = $(this).outerHeight(),
                winScrollTop = $(window).scrollTop();
            if (winScrollTop > skillsOffset - 1 && winScrollTop < skillsOffset + skillsHight - 1) {
                $('.progress-bar').each(function () {
                    $(this).width($(this).attr('aria-valuenow') + '%');
                });
                $('.progress__percentage').each(function () {
                    $(this).text($(this).parent('.progress-bar').attr('aria-valuenow') + '%')
                });
            }
        });
    }

    /*==========   Owl Carousel  ==========*/
    $('.carousel').each(function () {
        $(this).owlCarousel({
            nav: $(this).data('nav'),
            dots: $(this).data('dots'),
            loop: $(this).data('loop'),
            margin: $(this).data('space'),
            center: $(this).data('center'),
            dotsSpeed: $(this).data('speed'),
            autoplay: $(this).data('autoplay'),
            transitionStyle: $(this).data('transition'),
            animateOut: $(this).data('animate-out'),
            animateIn: $(this).data('animate-in'),
            autoplayTimeout: $(this).data('autoplay-timeout'),
            // autoplayTimeout: 15000,
            responsive: {
                0: {
                    items: 1,
                },
                400: {
                    items: $(this).data('slide-sm'),
                },
                700: {
                    items: $(this).data('slide-md'),
                },
                1000: {
                    items: $(this).data('slide'),
                }
            }
        });
    });


    /*==========  Popup Video  ==========*/
    $('.popup-video').magnificPopup({
        mainClass: 'mfp-fade',
        preloader: false,
        fixedContentPos: false,
        removalDelay: 0,
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: '//www.youtube.com/embed/%id%?autoplay=1'
                }
            },
            srcAction: 'iframe_src',
        }
    });

    /*==========   counterUp  ==========*/
    $('.counter').counterUp({
        delay: 10,
        time: 4000
    });

    /*==========   Pie Charts ==========*/
    $win.on('scroll', function () {
        var chartItem = $('.piechart-item'),
            scrollTop = $win.scrollTop(),
            windowHeight = $win.height(),
            ChartItemData = $('.piechart-item-data');
        if (ChartItemData.length) {
            var winScrollTop = scrollTop + windowHeight,
                skillScroll = chartItem.offset().top + chartItem.outerHeight();
            if (winScrollTop > skillScroll) {
                ChartItemData.each(function () {
                    $(this).easyPieChart({
                        duration: 1500,
                        animate: 5000,
                        enabled: true,
                        scaleColor: false,
                        trackColor: false,
                        size: $(this).attr('data-chart-size'),
                        lineCap: $(this).attr('data-chart-line'),
                        lineWidth: $(this).attr('data-chart-width'),
                        barColor: $(this).attr('data-chart-color'),
                        onStep: function (from, to, percent) {
                            $(this.el).find('.percent').text(Math.round(percent));
                        }
                    });
                });
            }
        }
    });

    /*==========   Products Filtering and Sorting  ==========*/
    $("#filtered-items-wrap").mixItUp();
    $(".projects-filter li a").on('click', function (e) {
        e.preventDefault();
    });
    $('#viewProjects').on('click', function (e) {
        e.preventDefault();
        $(this).fadeOut();
        $('.project-hidden > .project-item').fadeIn();
    })

    /*==========   Range Slider  ==========*/
    var $rangeSlider = $("#rangeSlider"),
        $rangeSliderResult = $("#rangeSliderResult");
    $rangeSlider.slider({
        range: true,
        min: 0,
        max: 300,
        values: [50, 200],
        slide: function (event, ui) {
            $rangeSliderResult.val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });
    $rangeSliderResult.val("$" + $rangeSlider.slider("values", 0) + " - $" + $rangeSlider.slider("values", 1));

    /*==========   Count Down Timer ==========*/
    $(".countdown").each(function () {
        var countingDate = $(this).data("count-date"),
            newDate = new Date(countingDate);
        $(this).countdown({
            until: newDate,
            format: "MMMM Do , h:mm:ss a"
        });
    });

});

function validate(){
    var that = $("form#contact-form"),
    email = that.find('#user-email').val(),
    phone = that.find('#user-phone').val(),
    first_name = that.find('#user-first_name').val(),
    last_name = that.find('#user-last_name').val(),
    message = that.find('#user-message').val(),
    subject = that.find('#user-subject').val();

    if(first_name == ''){
        that.find('#user-first_name').next('div.help-block').html('Enter valid first name');
        return false;
    }

    if(last_name == ''){
        that.find('#user-last_name').next('div.help-block').html('Enter valid first name');
        return false;
    }

    if(!IsEmail(email)){
        that.find('#user-email').next('div.help-block').html('Email is not a valid email address.');
        return false;
    }

    if(!IsPhone(phone)){
        that.find('#user-phone').next('div.help-block').html('Phone is not a valid phone number.');
        return false;
    }

    if(subject == ''){
        that.find('#user-subject').next('div.help-block').text('Select any subject in list.');
        return false;
    }

    if(message == ''){
        that.find('#user-message').next('div.help-block').text('Enter message');
        return false;
    }

    return true;
    
}

function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}
function IsPhone(phone)
{
  var phonenoregex = /^\d{9,10}$/;
  if(!phonenoregex.test(phone)){
    return false;
  }else{
    return true;
  }
}

function closeAllSelect(elmnt) {
    /* A function that will close all select boxes in the document,
    except the current select box: */
    var x, y, i, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    for (i = 0; i < y.length; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < x.length; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}

function startupUp(id) {
    $.ajax({
        url: '/contest/startup-status-up',
        data: {id: id},
        dataType: 'text',
        type: 'POST',
        success:function (data) {
            if (data) {
                updatePjax();
            }
        }
    });
}
function startupDown(id) {
    $.ajax({
        url: '/contest/startup-status-down',
        data: {id: id},
        dataType: 'text',
        type: 'POST',
        success:function (data) {
            updatePjax();
        }
    });
}

/**
 * Send email to user by sturtup id
 * @param id
 */
function sendMail(startupId)
{
    $.ajax({
        url: '/contest/send-mail/?id=' + startupId,
        datatype: 'json',
        processData: false,
        contentType: false,
        success: function(data) {
            console.log(data);
           alert(data.message);
        }
    });
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);

$(document).on('click', 'a.startup_up', function(event) {
    event.preventDefault();
    event.stopPropagation();
    startupUp($(this).data('id'));
});

$(document).on('click', "a.startup_down", function(event){
    event.preventDefault();
    event.stopPropagation();
    startupDown($(this).data('id'));
});

$(document).on('click', "a.send_mail", function(event){
    event.preventDefault();
    event.stopPropagation();
    openMailModal($(this).data('user-id'));
});

$(document).on('click', "a.add_comment", function(event){
    event.preventDefault();
    event.stopPropagation();
    var startupId = $(this).data('startup-id');
    openCommentModal(startupId);
});

openNoteModal = function (startupId) {
    var url = '/contest/note?id='+startupId;
    openReportToURL(url);
};

openCommentModal = function (startupId) {
    var url = '/comments/index?startupId='+startupId;
    openReportToURL(url);
};

openMailModal = function (userId) {
    var url = '/user/create-mail?id=' + userId;
    openReportToURL(url);
};

openReportToURL = function (URL) {
    $('#comment-modal').modal().find('#comment-modal-body').load(URL);
};


$("a.view_more_attachments").click(function(event){
    event.preventDefault();
    var names=$(this).data('src-names'),
        web_names = $(this).data('web-names'),
        basepath = $(this).data('basepath'),
        names = names.split(','),
        w_names = web_names.split(','),
        views_n = '';
    if(names.length){
        for(var i=0;i<names.length;i++){
            views_n+= '<a href="'+basepath+'uploads/'+w_names[i]+'" target="_blank">'+names[i]+'</p>';
        }
    }else{
        views_n+='<p>No more attachments</p>';
    }

    a_modal = $('#attachments-modal');
    a_modal.find('.modal-body').html(views_n);
    a_modal.modal({
        backdrop: 'static',
        keyboard: false
    });
});

$(".close-modal").click(function(){
    var id= $(this).attr('id');
    modal_ele = $('#'+id+'-modal');
    modal_ele.modal('hide');
});

$(document).on('click', '.clickable-row', function (e) {
    openNoteModal(this.id);
});

$(document).on('click', '#import_file', function (e) {
    $('#file').click();
});

$(document).on('change', '#file', function (e) {
    var $input = $("#file");
    var fd = new FormData;
    fd.append('csvFile', $input.prop('files')[0]);

    $.ajax({
        url: '/contest/import',
        data: fd,
        type: 'post',
        datatype: 'json',
        processData: false,
        contentType: false,
        success: function(data) {
            if (data) {
                updatePjax();
            }
        }
    });
});

$(document).on('click', '.user-remove', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var pjaxId = '#' + $(this).data('pjax-id');

    if (confirm("Are you sure you want to remove this user?")) {
        $.ajax({
            url: '/user/delete?id=' + id,
            type: 'post',
            datatype: 'json',
            processData: false,
            contentType: false,
            success: function (data) {
                if (data) {
                    $.pjax.reload(pjaxId);
                }
            }
        });
    }
});

$(document).on('click', '.user-contracted-btn', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var pjaxId = '#' + $(this).data('pjax-id');
    if (confirm("Are you sure you want change user contracted status?")) {
        $.ajax({
            url: '/user/make-contracted?id=' + id,
            type: 'post',
            datatype: 'json',
            processData: false,
            contentType: false,
            success: function (data) {
                if (data) {
                    $.pjax.reload(pjaxId);
                }
            }
        });
    }
});

$(document).on('click', '#send-mail', function(e) {
    e.preventDefault();
    e.stopPropagation();

    let form = $('#send-mail-form');
    let url = form.attr("action");
    let method = form.attr("method");
    var formData = new FormData(form[0]);

    $.ajax({
        url: url,
        data: formData,
        dataType: 'json',
        processData: false,
        contentType: false,
        type: method,
        success: function(data) {
            if (data) {
                $('#error-alert').hide();
                $('#success-alert').show();
                $('#msg-subject').val('');
                $('#msg-text').val('');
            } else {
                $('#success-alert').hide();
                $('#error-alert').show();
            }
        }
    });
    return false;
});
$(document).on('click', '#export_file', function (e) {
    e.preventDefault();
    let downloadPage = window.open('/contest/export', '_blank');
    window.focus();
});

function updatePjax() {
    $.pjax.defaults = {timeout:3650};
    $.pjax.reload('#pjax-startup-applied').done(function (res) {
        $.pjax.reload('#pjax-startup-screening').done(function (res) {
            $.pjax.reload('#pjax-startup-interview').done(function (res) {
                $.pjax.reload('#pjax-startup-selected').done(function (res) {
                    $.pjax.reload('#pjax-startup-declined')
                });
            });
        });
    });
}

$(document).on('submit', '#contact-form', function(e){
    e.preventDefault();
    var formData = new FormData(this);
    if(validate()) {
        $.LoadingOverlay("show");
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                $.LoadingOverlay("hide");
                if (response.status){
                    Swal.fire({
                        icon: 'success',
                        title:  response.message,
                        showConfirmButton: true,
                        timer: 15000
                    })
                    document.getElementById("contact-form").reset();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.message,
                        showConfirmButton: true,
                        timer: 15000
                    })
                }
            },
            error: function (response) {
                $.LoadingOverlay("hide");
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Sorry we are unable to process your request.',
                    showConfirmButton: true,
                    timer: 15000
                })
            },
        });
    }
});

function validateAcceptance(){
    var that = $("form#acceptance-form"),
        phone = that.find('#startupform-phone').val();

    if(!IsPhone(phone)){
        $('html, body').animate({
            scrollTop: $('#startupform-phone').offset().top
        }, 200);
        that.find('#startupform-phone').next('div.help-block').html('Phone is not a valid phone number.');
        return false;
    }

    return true;
}


$(document).on('submit', '#acceptance-form', function(e){
    e.preventDefault();

    if(!validateAcceptance()) {
        return;
    }

    var formData = new FormData(this);
    $.LoadingOverlay("show");
    $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            $.LoadingOverlay("hide");
            if (response.status){
                Swal.fire({
                    icon: 'success',
                    title:  response.message,
                    showConfirmButton: true,
                    timer: 15000
                })
                document.getElementById("acceptance-form").reset();
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: response.message,
                    showConfirmButton: true,
                    timer: 15000
                })
            }
        },
        error: function (response) {
            $.LoadingOverlay("hide");
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Sorry we are unable to process your request.',
                showConfirmButton: true,
                timer: 15000
            })
        },
    });
});

$(document).on('change', '#select_file', function (e) {
    let form = $('#upload_form');
    let formData = new FormData(form[0]);
    let messageBlock = $('#upload_file_message');

    $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.status){
                openNoteModal(form.data('startup-id'));
            } else {
                messageBlock.html(('<div class="alert alert-danger">' + response.message + '</div>'));
                messageBlock.show();
            }
            setTimeout(function(){
                messageBlock.html('');
                messageBlock.hide();
            }, 3000);
        },
        error: function (response) {
            messageBlock.html('<div class="alert alert-danger">Sorry we are unable to process your request.</div>');
            setTimeout(function(){
                messageBlock.html('');
                messageBlock.hide();
            }, 3000);
        },
    });
});