'use strict';

require('./js/lib/polyfills');
require('./js/vendor/owl.carousel/owl.carousel');
require('./js/vendor/select2/select2');
require('./js/vendor/jquery.steps');
require('bootstrap');
require('croppie');

var StickyMenu = require('./js/stickymenu');
var listeners = require('./js/listeners'),
    menuLogo = listeners.menuLogo,
    menuPhoneBlock = listeners.menuPhoneBlock,
    buttonUp = listeners.buttonUp;

document.addEventListener('DOMContentLoaded', function () {

    $("#header-carousel").owlCarousel({
        autoPlay: true,
        loop: true,
        dots: true,
        items: 1
    });
    
    $("#reviews-carousel").owlCarousel({
        autoPlay: true,
        dots: true,
        loop: true,
        margin: 15,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            769: {
                items: 3
            }
        }
    });

    $('#mobile-modal').on('hidden.bs.modal', function () {
        var li = this.querySelectorAll('li.main-menu-item');
        for (var i = 0; i < li.length; ++i) {
            li[i].classList.remove('to-hide');
            li[i].classList.remove('modal-inspected');
        }
        var backArrow = document.getElementById('modal-back-arrow');
        backArrow.style.visibility = 'hidden';
    });

    require('./js/header');
    var widget = require('./js/widget');
    require('./js/window');
    require('./js/modal-menu');
    require('./js/assessment-form');

    var sMenu = document.getElementById('menu-container');
    if (sMenu) {
        var stickMenu = new StickyMenu(sMenu);
        stickMenu.subscribe(menuLogo);
        stickMenu.subscribe(menuPhoneBlock);
        stickMenu.subscribe(buttonUp);
        stickMenu.init();

        document.addEventListener('scroll', function () {
            stickMenu.updateHeaderMenuPos();
        });
    }

    var i = 0;
    var btns = document.querySelectorAll('.open-case-form-open');
    for (i = 0; i < btns.length; ++i ) {
        btns[i].addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (widget)
                widget.doOpenCaseToggle();
        })
    }

    btns = document.querySelectorAll('.chat-open');
    for (i = 0; i < btns.length; ++i ) {
        btns[i].addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (widget)
                widget.doChatToggle(e);
        })
    }
});

//css/scss-------------------------------------------
require('./scss/global.scss');
require('./scss/header.scss');
require('./scss/programms.scss');
require('./scss/academy.scss');
require('./scss/process.scss');
require('./scss/reviews.scss');
require('./scss/news.scss');
require('./scss/footer.scss');
require('./scss/assessment-form.scss');
require('./scss/posts-content.scss');

require('./scss/media-query.scss');

module.exports = {
    func: require('./js/functions')
};