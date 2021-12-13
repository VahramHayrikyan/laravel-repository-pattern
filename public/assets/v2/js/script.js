$(window).ready(function() {
  'use strict';

  //header

  var body = $('body');
  var header = $('.page-header');
  var headerHeight = header.innerHeight();
  var main = $('.main');
  var promo = $('.promo');
  var screenHeight = $(window).height();

  var widthScroll;

  main.css('marginTop', headerHeight);

  if (promo.length > 0) {
    promo.css('minHeight', screenHeight - headerHeight);
  }

  var windowSize = function() {

    widthScroll = window.innerWidth - document.documentElement.clientWidth;

    headerHeight = header.innerHeight();
    main.css('marginTop', headerHeight);

    screenHeight = $(window).height();

    if (promo.length > 0) {
      promo.css('minHeight', screenHeight - headerHeight);
    }

    if (promoBigSlider.length > 0) {

      promoBigSlide = $('.promo__big-slide');
      promoBigSlideHeight = screenHeight - headerHeight - 175 -15;

      promoBigSlide.css('minHeight', promoBigSlideHeight);
    }


    if ($(window).width() >= (992 - widthScroll)) {
      mainNav.css({
        'display': '',
      });
    }





    if ($(window).width() < (992 - widthScroll) && !isUserBlockToggleHandler) {
      userBlockToggle.on('click', userBlockToggleHandler);
    } else if ($(window).width() >= (992 - widthScroll) && isUserBlockToggleHandler) {
      userBlockToggle.off('click', userBlockToggleHandler);
      userBlock.css({
        'display': '',
      });
    } else if ($(window).width() >= (992 - widthScroll)) {
      userBlock.css({
        'display': '',
      });
    }


    if ($(window).width() < (992 - widthScroll) && !isСartBlockToggleHandler) {
      cartBlockToggle.on('click', cartBlockToggleHandler);
    } else if ($(window).width() >= (992 - widthScroll) && isСartBlockToggleHandler) {
      cartBlockToggle.off('click', cartBlockToggleHandler);
      cartBlock.css({
        'display': '',
      });
    } else if ($(window).width() >= (992 - widthScroll)) {
      cartBlock.css({
        'display': '',
      });
    }

    if ($(window).width() > (720 - widthScroll)) {
      $('.page-footer-nav-block-items').css({
        'display': '',
      });
    }

    if ($(window).width() < (1200 - widthScroll) && $('.promo__top-games-item--active').length > 0) {
      $('.promo__top-games-item--active').removeClass('promo__top-games-item--active');
      hidePromoTopGamesBlock();
    }

    if (messagesItems.length > 0) {
      messagesHeight = messages.outerHeight();
    }

    if (articlesItems.length > 0) {
      initializingArticlesItemsSlider();
    }
    if (troveItems.length > 0) {
      initializingTroveItemsSlider();
    }
    if (storeHeaderFiltersItems.length > 0) {
      initializingStoreHeaderFiltersItems();
    }
    if (giveawaysSinglePromoContentItems.length > 0) {
      initializingGiveawaysSinglePromoContentItems();
    }

    if (accordion.length > 0) {
      $('.accordion-item--opened').each(function() {
        var accordionItemBody = $(this).find('.accordion-item-body');
        var accordionItemBodyInnerWrap = accordionItemBody.find('.accordion-item-body-inner-wrapper');
        accordionItemBody.css({
          height: accordionItemBodyInnerWrap.outerHeight(),
        });
      });
    }
  };

  var windowScroll = function() {
    if ($(".page-header").length > 0 && $("main").children("div").length > 1) {
      var currentScroll = $(window).scrollTop();
      // var fixedScroll = $("main").children("div:nth-child(2)").offset().top;
      var fixedScroll = 200;
      if (currentScroll >= fixedScroll && !(header.hasClass("page-header--fixed"))) {
        header.addClass("page-header--fixed");
        //header.fadeOut(0);
        //header.fadeIn(500);
      } else if (currentScroll < fixedScroll && header.hasClass("page-header--fixed")) {
        //header.fadeOut(0);
        setTimeout(function() {
          header.removeClass("page-header--fixed");
          //header.fadeIn(0);
        }, 0);
      }
    }
  };


  /////// articles-items /////////

  var articlesItems = $('.articles-items');
  var isArticlesItemsSlider;

  var initializingArticlesItemsSlider = function() {
    if ($(window).width() < (768 - widthScroll) && !isArticlesItemsSlider) {
      isArticlesItemsSlider = true;
      articlesItems.addClass('owl-carousel');
      articlesItems.owlCarousel({
        items: 1,
        loop: true,
        smartSpeed: 1000,
      });
    } else if ($(window).width() >= (768 - widthScroll) && isArticlesItemsSlider) {
      isArticlesItemsSlider = false;
      articlesItems.trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
      articlesItems.find('.owl-stage-outer').children().unwrap();
    }
  };

  ///// end articles-items ///////


  /////// trove-items /////////

  var troveItems = $('.trove-items');
  var isTroveItemsSlider;

  var initializingTroveItemsSlider = function() {
    if ($(window).width() < (768 - widthScroll) && !isTroveItemsSlider) {
      isTroveItemsSlider = true;
      troveItems.addClass('owl-carousel');
      troveItems.owlCarousel({
        items: 1,
        loop: true,
        smartSpeed: 1000,
      });
    } else if ($(window).width() >= (768 - widthScroll) && isTroveItemsSlider) {
      isTroveItemsSlider = false;
      troveItems.trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
      troveItems.find('.owl-stage-outer').children().unwrap();
    }
  };

  ///// end trove-slider ///////


  ////////////// messages //////////////

  var messagesItems = $('.page-header__messages-items');

  if (messagesItems.length > 0) {
    var messagesWrapper = $('.page-header__messages-wrapper');
    var messages = $('.page-header__messages');
    var messagesToggle = $('.page-header__nav-func-messages-toggle');
    var messagesHeight;

    messagesItems.owlCarousel({
      loop: false,
      smartSpeed: 1000,
      responsive: {
        0: {
          items: 1,
        },
        650: {
          items: 2,
        },
        1150: {
          items: 3,
        },
        1420: {
          items: 4,
        },
        1700: {
          items: 5,
        }
      }
    });

    var messagesShow = function() {
      messagesToggle.addClass('page-header__nav-func-messages-toggle--opened');
      messagesWrapper.css({
        'height': messagesHeight
      });
      setTimeout(function() {
        body.on('click', messagesHide);
      }, 0);
    };

    var messagesHide = function() {
      messagesToggle.removeClass('page-header__nav-func-messages-toggle--opened');
      messagesWrapper.css({
        'height': ''
      });
      body.off('click', messagesHide);
    };

    messagesToggle.on('click', function() {
      if (messagesToggle.hasClass('page-header__nav-func-messages-toggle--opened')) {
        messagesHide();
      } else {
        messagesShow();
      }
    });

    messages.on('click', function(e) {
      e.stopPropagation();
    });
  }

  //////////// end messages ////////////


  /////// notifications /////////

  var notificationsWrapper = $('.page-header__notifications-wrapper');
  var notifications = $('.page-header__notifications');
  var notificationsBtnClose = $('.page-header__notifications-btn-close');
  var notificationsItems = $('.page-header__notifications-items');
  var notificationsToggle = $('.page-header__nav-func-notifications-toggle');
  var notificationsMarkRead = $('.page-header__notifications-item-footer-mark-read');
  var notificationsHeight;

  var notificationsShow = function() {
    notificationsWrapper.addClass('page-header__notifications-wrapper--opened');
    body.css({
      'overflow': 'hidden',
      'padding-right': widthScroll
    });
    header.css({
      'padding-right': widthScroll
    });
    notificationsBtnClose.on('click', notificationsHide);
    setTimeout(function() {
      body.on('click', notificationsHide);
    }, 0);
  };

  var notificationsHide = function() {
    notificationsWrapper.removeClass('page-header__notifications-wrapper--opened');
    setTimeout(function() {
      body.css({
        'overflow': '',
        'padding-right': ''
      });
      header.css({
        'padding-right': ''
      });
    }, 500);
    notificationsBtnClose.off('click', notificationsHide);
    body.off('click', notificationsHide);
  };

  notificationsToggle.on('click', function(e) {
    if ($('.page-header__nav-func-notifications-toggle-num').val() != 0) {
      e.preventDefault();
    }
    if (notificationsWrapper.hasClass('page-header__notifications-wrapper--opened')) {
      notificationsHide();
    } else {
      notificationsShow();
    }
  });

  notifications.on('click', function(e) {
    e.stopPropagation();
  });

  notificationsMarkRead.on('click', function() {
    $(this).toggleClass('page-header__notifications-item-footer-mark-read--readed');
  });

  ///// end notifications ///////


  ////////////// podcast //////////////

  var podcast = $('.page-header__podcast-wrapper');
  var podcastToggle = $('.page-header__info-podcast-toggle');
  var podcastBtnClose = $('.page-header__podcast-btn-close');

  var showPodcast = function() {
    podcastToggle.addClass('page-header__info-podcast-toggle--opened')
    podcast.slideDown(500);
  };

  var hidePodcast = function() {
    podcastToggle.removeClass('page-header__info-podcast-toggle--opened');
    podcast.slideUp(500);
  };

  var togglePodcastHandler = function(e) {
    if (podcastToggle.hasClass('page-header__info-podcast-toggle--opened')) {
      hidePodcast();
    } else {
      showPodcast();
    }
  };

  podcastToggle.on('click', togglePodcastHandler);

  podcastBtnClose.on('click', hidePodcast);

  podcast.on('click', function(e) {
    e.stopPropagation();
  });

  //////////// end podcast ////////////

  /////// podcast selection /////////

  var podcastsWrapper = $('.page-header__podcasts-selection-wrapper');
  var podcasts = $('.page-header__podcasts-selection');
  var podcastsBtnClose = $('.page-header__podcasts-selection-btn-close');
  var podcastsItems = $('.page-header__podcasts-selection-items');
  var podcastsToggle = $('.page-header__podcast-other');
  var podcastsHeight;

  var podcastsShow = function() {
    podcastsWrapper.addClass('page-header__podcasts-selection-wrapper--opened');
    body.css({
      'overflow': 'hidden',
      'padding-right': widthScroll
    });
    header.css({
      'padding-right': widthScroll
    });
    podcastsBtnClose.on('click', podcastsHide);
    setTimeout(function() {
      body.on('click', podcastsHide);
    }, 0);
  };

  var podcastsHide = function() {
    podcastsWrapper.removeClass('page-header__podcasts-selection-wrapper--opened');
    setTimeout(function() {
      body.css({
        'overflow': '',
        'padding-right': ''
      });
      header.css({
        'padding-right': ''
      });
    }, 500);
    podcastsBtnClose.off('click', podcastsHide);
    body.off('click', podcastsHide);
  };

  podcastsToggle.on('click', function() {
    if (podcastsWrapper.hasClass('page-header__podcasts-selection-wrapper--opened')) {
      podcastsHide();
    } else {
      podcastsShow();
    }
  });

  podcasts.on('click', function(e) {
    e.stopPropagation();
  });


  ///// end podcast selection ///////


  //////////// main-nav ////////////////

    var mainNavToggle = $('.page-header__nav-menu-toggle');
    var mainNav = $('.page-header__nav-menu');

    var showMainNav = function() {
      mainNavToggle.addClass('page-header__nav-menu-toggle--opened');
      body.css({
        'overflow': 'hidden',
        'padding-right': widthScroll
      });
      header.css({
        'padding-right': widthScroll
      });
      mainNav.fadeIn(500);
      setTimeout(function() {
        body.on('click', hideMainNav);
      }, 0);
    };

    var hideMainNav = function() {
      mainNav.fadeOut(500);
      mainNavToggle.removeClass('page-header__nav-menu-toggle--opened');
      setTimeout(function() {
        body.css({
          'overflow': '',
          'padding-right': ''
        });
        header.css({
          'padding-right': ''
        });
      }, 500);
      body.off('click', hideMainNav);
    };

    var toggleNavMenuHandler = function(e) {
      if (mainNavToggle.hasClass('page-header__nav-menu-toggle--opened')) {
        hideMainNav();
      } else {
        showMainNav();
      }
    };

    mainNavToggle.on('click', toggleNavMenuHandler);

    mainNav.on('click', function(e) {
      // e.stopPropagation();
    });

  ////////// end main-nav //////////////


  ////////////// socials //////////////

    var socialToggle = $('.page-header__nav-menu-social-toggle');
    var social = $('.page-header__nav-menu-social');
    var socialItems = $('.page-header__nav-menu-social-items');
    var socialItemsBlock = $('.page-header__nav-menu-social-items-wrapper');

    var socialItemsWidth;

    var socialItemsHide = function() {
      socialToggle.removeClass('page-header__nav-menu-social-toggle--opened');
      if(header.hasClass('page-header--fixed') && $(window).width() < (1200 - widthScroll)) {
        socialItemsBlock.slideUp(500);
      } else {
        socialItemsBlock.css({
          'width': '',
        });
      }
    };

    var socialItemsShow = function() {
      if(header.hasClass('page-header--fixed') && $(window).width() < (1200 - widthScroll)) {
        socialItemsBlock.slideDown(500);
      } else {
        socialItemsWidth = socialItems.outerWidth();
        socialItemsBlock.css({
          width: socialItemsWidth,
        });
      }
      socialToggle.addClass('page-header__nav-menu-social-toggle--opened');
    };

    social.hover(socialItemsShow, socialItemsHide);

  //////////// end socials ////////////


  ////////////// user-block /////////////

  var userBlockToggle = $('.page-header__nav-func-user-block-toggle');
  var userBlock = $('.page-header__nav-func-user-block');
  var toCloseUserBlock = false;
  var isUserBlockToggleHandler = false;

  var hideUserBlock = function() {
    if (toCloseUserBlock) {
      toCloseUserBlock = false;
      userBlockToggle.removeClass('page-header__nav-func-user-block-toggle--opened');
      userBlock.slideUp(500);
      body.off('click', hideUserBlock);
    }
  };

  var showUserBlock = function() {
    toCloseUserBlock = true;
    userBlockToggle.addClass('page-header__nav-func-user-block-toggle--opened');
    userBlock.slideDown(500);
    setTimeout(function() {
      body.on('click', hideUserBlock);
    }, 0);
  };

  var userBlockToggleHandler = function() {
    if (userBlockToggle.hasClass('page-header__nav-func-user-block-toggle--opened')) {
      hideUserBlock();
    } else {
      showUserBlock();
    }
  };

  /////////// end user-block ////////////


  ////////////// user-nav /////////////

  var userNavToggle = $('.page-header__nav-func-user.account-toggle');
  var userNav = $('.page-header__nav-func-user-nav.account-nav');
  var userNavItems = $('.page-header__nav-func-user-nav-items.account-items');

  var hideUserNav = function() {
    userNav.removeClass('page-header__nav-func-user-nav--opened');
    body.off('click', hideUserNav);
  };

  var showUserNav = function() {
    userNav.addClass('page-header__nav-func-user-nav--opened');
    setTimeout(function() {
      body.on('click', hideUserNav);
    }, 0);
  };

  var userNavToggleHandler = function(e) {
    e.stopPropagation();
    e.preventDefault();
    if (userNav.hasClass('page-header__nav-func-user-nav--opened')) {
      hideUserNav();
    } else {
      showUserNav();
    }
  };

  userNavToggle.on('click', userNavToggleHandler);

  /////////// end user-nav ////////////

  ////////////// points-nav /////////////

  var pointsNavToggle = $('.page-header__nav-func-user.points-toggle');
  var pointsNav = $('.page-header__nav-func-user-nav.points-nav');
  var pointsNavItems = $('.page-header__nav-func-user-nav-items.points-items');

  var hidePointsNav = function() {
    pointsNav.removeClass('page-header__nav-func-user-nav--opened');
    body.off('click', hidePointsNav);
  };

  var showPointsNav = function() {
    pointsNav.addClass('page-header__nav-func-user-nav--opened');
    setTimeout(function() {
      body.on('click', hidePointsNav);
    }, 0);
  };

  var pointsNavToggleHandler = function(e) {
    e.stopPropagation();
    e.preventDefault();
    if (pointsNav.hasClass('page-header__nav-func-user-nav--opened')) {
      hidePointsNav();
    } else {
      showPointsNav();
    }
  };

  pointsNavToggle.on('click', pointsNavToggleHandler);

  /////////// end points-nav ////////////

  ////////////// friends-online-nav /////////////

  var friendsNavToggle = $('.page-header__nav-func-user.friends-toggle');
  var friendsNav = $('.page-header__nav-func-user-nav.friends-nav');
  var friendsNavItems = $('.page-header__nav-func-user-nav-items.friends-items');

  var hideFriendsNav = function() {
    friendsNav.removeClass('page-header__nav-func-user-nav--opened');
    body.off('click', hideFriendsNav);
  };

  var showFriendsNav = function() {
    friendsNav.addClass('page-header__nav-func-user-nav--opened');
    setTimeout(function() {
      body.on('click', hideFriendsNav);
    }, 0);
  };

  var friendsNavToggleHandler = function(e) {
    e.stopPropagation();
    e.preventDefault();
    if (friendsNav.hasClass('page-header__nav-func-user-nav--opened')) {
      hideFriendsNav();
    } else {
      showFriendsNav();
    }
  };

  friendsNavToggle.on('click', friendsNavToggleHandler);

  /////////// end points-nav ////////////


  ////////////// cart-block /////////////

  var cartBlockToggle = $('.page-header__nav-func-cart-block-toggle');
  var cartBlock = $('.page-header__nav-func-cart-block');
  var toCloseСartBlock = false;
  var isСartBlockToggleHandler = false;

  var hideСartBlock = function() {
    if (toCloseСartBlock) {
      toCloseСartBlock = false;
      cartBlockToggle.removeClass('page-header__nav-func-cart-block-toggle--opened');
      cartBlock.slideUp(500);
      body.off('click', hideСartBlock);
    }
  };

  var showСartBlock = function() {
    cartBlockToggle.addClass('page-header__nav-func-cart-block-toggle--opened');
    cartBlock.slideDown(500);
    setTimeout(function() {
      body.on('click', hideСartBlock);
      toCloseСartBlock = true;
    }, 0);
  };

  var cartBlockToggleHandler = function() {
    if (cartBlockToggle.hasClass('page-header__nav-func-cart-block-toggle--opened')) {
      hideСartBlock();
    } else {
      showСartBlock();
    }
  };

  /////////// end cart-block ////////////


  ////////////// currency /////////////

  /*
  var currency = $('.page-header__nav-func-currency-current');
  var currencyItem = $('.page-header__nav-func-currency-item');

  var handlerCurrencyItem = function(e) {
    if($(window).width() < (992 - widthScroll)) {
      e.stopPropagation();
    }
    if (!$(this).hasClass('page-header__nav-func-currency-item--current')) {
      $('.page-header__nav-func-currency-item--current').removeClass('page-header__nav-func-currency-item--current');
      $(this).addClass('page-header__nav-func-currency-item--current');
      currency.text($(this).text());
    }
  };

  currencyItem.on('click', handlerCurrencyItem);
  */

  /////////// end currency ////////////


  ////////////// search //////////////

  var searchToggle = $('.page-header__nav-func-search-toggle');
  var searchForm = $('.page-header__nav-func-search-form-wrapper');

  var hideSearchForm = function() {
    // clear the input
    $('#uniSearch').val('');
    if ($(window).width() > (991 - widthScroll)) {
      searchToggle.removeClass('page-header__nav-func-search-toggle--opened');
      searchForm.css({
        'width': '',
        'opacity': '',
      });
      searchToggle.css({
        'width': '',
      });
      setTimeout(function() {
        searchToggle.css({
          'opacity': 1,
        });
      }, 300);
    } else {
      searchToggle.removeClass('page-header__nav-func-search-toggle--opened');
        searchForm.slideUp(500);

    }

    body.off('click', hideSearchForm);
  };

  var showSearchForm = function() {
    if ($(window).width() > (991 - widthScroll)) {
      searchToggle.addClass('page-header__nav-func-search-toggle--opened');
      searchForm.css({
        'width': '250px',
        'opacity': 1,
      });
      searchToggle.css({
        'width': 0,
        'opacity': 0,
      });
    } else {
      searchToggle.addClass('page-header__nav-func-search-toggle--opened');
        searchForm.slideDown(500);
    }

    $('#uniSearch').focus();

    // setTimeout(function() {
    //   body.on('click', hideSearchForm);
    // }, 0);

  };

  var searchToggleHandler = function() {
    if (searchToggle.hasClass('page-header__nav-func-search-toggle--opened')) {
     hideSearchForm();
    } else {
      showSearchForm();
   }
  };

  searchToggle.on('click', searchToggleHandler);

  searchForm.on('click', function(e) {
    e.stopPropagation();
  });


  //////////// end search ////////////


  // //////////// dropdown //////////////
  //
  // var dropdownToggle = $('.dropdown-toggle');
  //
  // var showDropdown = function(dropdown) {
  //   var dropdownMenu = dropdown.find('.dropdown-menu');
  //
  //   dropdown.addClass('dropdown--open');
  //   dropdownMenu.slideDown(500);
  // };
  //
  // var hideDropdown = function() {
  //   var dropdown = $('.dropdown--open');
  //   var dropdownMenu = dropdown.find('.dropdown-menu');
  //
  //   dropdownMenu.slideUp(500);
  //   dropdown.removeClass('dropdown--open');
  // };
  //
  // var clickCloseDropdownDocument = function() {
  //   $('body').off('click', clickCloseDropdownDocument);
  //   hideDropdown();
  // };
  //
  // var toggleDropdownHandler = function(e) {
  //   var dropdownOpen = $('.dropdown--open');
  //   var currentDropdown = $(e.currentTarget).parent();
  //
  //   e.preventDefault();
  //   e.stopPropagation();
  //
  //   if (dropdownOpen.length > 0 && currentDropdown.hasClass('dropdown--open')) {
  //     $('body').off('click', clickCloseDropdownDocument);
  //     hideDropdown();
  //   } else if (dropdownOpen.length > 0) {
  //     hideDropdown();
  //     showDropdown(currentDropdown);
  //   } else {
  //     showDropdown(currentDropdown);
  //     $('body').on('click', clickCloseDropdownDocument);
  //   }
  // };
  //
  // $('.dropdown-toggle').on('click', toggleDropdownHandler);
  //
  // $('.dropdown-menu').on('click', function(e) {
  //   e.stopPropagation();
  // });
  //
  // ////////// end dropdown ////////////


  //////////// dropdown-menu-lists //////////////

  if ($(window).width() < (992 - widthScroll)) {
    var dropdownListsTitle = $('.dropdown-menu-lists-title');

    dropdownListsTitle.on('click', function() {
      $(this).siblings('.dropdown-menu-lists-items').slideToggle(500);
    });
  }

  ////////// end dropdown-menu-lists ////////////


  //////////// page-footer-nav-block //////////////

  var pageFooterNavBlockTitle = $('.page-footer-nav-block-title');

  pageFooterNavBlockTitle.on('click', function() {
    if ($(window).width() <= (720 - widthScroll)) {
      $(this).siblings('.page-footer-nav-block-items').slideToggle(500);
    }
  });

  ////////// end page-footer-nav-block ////////////


  /////// promo-small-slider /////////

  var promoSmallSlider = $('.promo__small-slider-wrapper');
  // if (promoSmallSlider.length > 0) {
    promoSmallSlider.owlCarousel({
      loop: true,
      autoplay: false,
      autoplayTimeout: 3000,
      smartSpeed: 2000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
        },
        620: {
          items: 2,
        },
        900: {
          items: 3,
        },
        1200: {
          items: 4,
        },
        1500: {
          items: 5,
        },
        1700: {
          items: 6,
        },
        2100: {
          items: 7,
        },
        2400: {
          items: 8,
        },
        2800: {
          items: 9,
        },
        3100: {
          items: 10,
        },
        3400: {
          items: 11,
        }
      }
    });

    var promoSmallSliderHeightHoverBlock = 0;

    $('.promo__small-slide-hover-wrapper').each(function() {
      if($(this).outerHeight() > promoSmallSliderHeightHoverBlock) {
        promoSmallSliderHeightHoverBlock = $(this).outerHeight();
      }
    });

    var promoSmallSliderHeightStage = promoSmallSliderHeightHoverBlock + $('.promo__small-slide').outerHeight();

    $('.promo__small-slider.owl-carousel .owl-stage-outer').css({
      'minHeight': promoSmallSliderHeightStage,
    });

    $('.promo__small-slide').hover(
      function() {

          promoSmallSlider.find('div.owl-stage-outer').css('overflow','unset')
          if ($(window).width() >= (900 - widthScroll)) {
          var that = this;
          setTimeout(function(){
            var rect = $(that)[0].getBoundingClientRect();
            var marginToMove = rect.left-270;
            if (marginToMove < 0) {
              $(that).find('.promo__small-slide-hover').css('margin-left', (marginToMove * -1) + 'px' );
            }
            var marginToMoveR = rect.right+270-window.innerWidth;
            if (marginToMoveR > 0) {
              $(that).find('.promo__small-slide-hover').css('margin-right', (marginToMoveR) + 'px' );
            }
          }, 1000);
          var rect = $(this)[0].getBoundingClientRect();
          var marginToMove = rect.left-270;
          if (marginToMove < 0) {
            $(this).find('.promo__small-slide-hover').css('margin-left', (marginToMove * -1) + 'px' );
          }

          promoSmallSliderHeightHoverBlock = $(this).find('.promo__small-slide-hover-wrapper').outerHeight();
          var promoSmallSliderHover = $(this).find('.promo__small-slide-hover-wrapper');
          promoSmallSliderHover.css({
            'height': '0',
            'display': 'block',
            'position': 'absolute',
            'top': '101%',
            'left': '50%',
          });
          setTimeout(function() {
            promoSmallSliderHover.css({
              'height': promoSmallSliderHeightHoverBlock,
            });
          }, 0);
        }
        if (window.owlHeight) {
          $('.owl-stage-outer').css('min-height', window.owlHeight);
        }
      },
      function() {
          promoSmallSlider.find('div.owl-stage-outer').css('overflow','hidden')
          $(this).find('.promo__small-slide-hover').css('margin-left', '' );
        $(this).find('.promo__small-slide-hover').css('margin-right', '' );
        if ($(window).width() >= (900 - widthScroll)) {
          var promoSmallSliderHover = $(this).find('.promo__small-slide-hover-wrapper');
          promoSmallSliderHover.css({
            'height': '0',
          });
          setTimeout(function() {
            promoSmallSliderHover.css({
              'display': '',
              'height': '',
            });
          }, 200);
        }
        if (!window.owlHeight) {
          window.owlHeight = $('.owl-stage-outer').css('min-height');
        }
        $('.owl-stage-outer').css('min-height', '');
      }
    );

    $('.promo__small-slider-wrapper').hover(
      function() {
        $('.promo__small-slider-wrapper').css('z-index', '600');
      },
      function() {
        setTimeout(function() {
          $('.promo__small-slider-wrapper').css('z-index', '');
        }, 200);
      }
    );

    /*

    $('.promo__small-slide-img').on('click', function(e) {
      if ($(window).width() >= (900 - widthScroll)) {
        e.preventDefault();
      }
    });
    */
  // }

  ///// end promo-small-slider ///////


  /////// promo-big-slider /////////

  var promoBigSlider = $('.promo__big-slider');

  if (promoBigSlider.length > 0) {

    var promoBigSlide = $('.promo__big-slide');
    var promoBigSlideHeight = screenHeight - headerHeight - $('.promo__small-slider-wrapper').innerHeight() -15;

    promoBigSlide.css('minHeight', promoBigSlideHeight);

    promoBigSlider.owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      smartSpeed: 1000,
    });
  }

  ///// end promo-big-slider ///////


  /////// giveaways-slider /////////

  var giveawaysSlider = $('.giveaways-slider');

  if (giveawaysSlider.length > 0) {
    giveawaysSlider.owlCarousel({
      loop: false,
      slideBy: 'page',
      responsive: {
        0: {
          items: 1,
          nav: false,
        },
        480: {
          items: 1,
          nav: false,
        },
        768: {
          items: 2,
          nav: true,
        },
        1200: {
          items: 3,
          nav: true,
        },
        1500: {
          items: 4,
          nav: true,
        }
      }
    });
  }

  ///// end giveaways-slider ///////


  /////// promo-top-games /////////

  if ($('.promo__top-games').length > 0) {

    var promoTopGamesItem = $('.promo__top-games-item');

    var showPromoTopGamesBlock = function(elem) {
      var promoTopGamesBlockClass = elem.data('target');
      $(promoTopGamesBlockClass).addClass('promo__top-games-block--opened');
      $(promoTopGamesBlockClass).fadeIn(500);
      promoBigSlider.css({
        'opacity': 0
      });
    };

    var hidePromoTopGamesBlock = function() {
      $('.promo__top-games-block--opened').fadeOut(500);
      promoBigSlider.css({
        'opacity': 1
      });
      setTimeout(function() {
        $('.promo__top-games-block--opened').removeClass('promo__top-games-block--opened');
      }, 0);
    };

    promoTopGamesItem.on('click', function(e) {
      if ($(window).width() >= (1200 - widthScroll)) {
        e.preventDefault();
        var promoTopGamesItemActive = $('.promo__top-games-item--active');
        var currentPromoTopGamesItem = $(this);

        if (promoTopGamesItemActive.length > 0) {
          if (currentPromoTopGamesItem.hasClass('promo__top-games-item--active')) {
            currentPromoTopGamesItem.removeClass('promo__top-games-item--active');
            hidePromoTopGamesBlock();
          } else {
            promoTopGamesItemActive.removeClass('promo__top-games-item--active');
            hidePromoTopGamesBlock();
            setTimeout(function() {
              currentPromoTopGamesItem.addClass('promo__top-games-item--active');
              showPromoTopGamesBlock(currentPromoTopGamesItem);
            }, 0);
          }
        } else {
          currentPromoTopGamesItem.addClass('promo__top-games-item--active');
          showPromoTopGamesBlock(currentPromoTopGamesItem);
        }
      }
    });

    //Staff pics on hover click
      /*promoTopGamesItem.on('mouseenter', function (e) {
          if ($(window).width() >= (1200 - widthScroll)) {
              e.preventDefault();
              var promoTopGamesItemActive = $('.promo__top-games-item--active');
              var currentPromoTopGamesItem = $(this);
              if (!currentPromoTopGamesItem.hasClass('promo__top-games-item--active')) {
                  promoTopGamesItemActive.removeClass('promo__top-games-item--active');
                  hidePromoTopGamesBlock();
                  setTimeout(function () {
                      currentPromoTopGamesItem.addClass('promo__top-games-item--active');
                      showPromoTopGamesBlock(currentPromoTopGamesItem);
                  }, 0);
              }
          }
      });*/
      $('.promo-inner-wrapper').on('mouseleave', function () {
          $('.promo__top-games-item--active').removeClass('promo__top-games-item--active');
          hidePromoTopGamesBlock();
      });
  // End Staff pics on hover click

  }

  ///// end promo-top-games ///////


  /////// store-header-filters-items /////////

  var storeHeaderFiltersItems = $('.store-header-filters-items');
  var isStoreHeaderFiltersItems;

  var initializingStoreHeaderFiltersItems = function() {
    if ($(window).width() < (1500 - widthScroll) && !isStoreHeaderFiltersItems) {
      isStoreHeaderFiltersItems = true;
      storeHeaderFiltersItems.addClass('owl-carousel');
      storeHeaderFiltersItems.owlCarousel({
        smartSpeed: 700,
        responsive: {
          0: {
            items: 3,
          },
          430: {
            items: 4,
          },
          530: {
            items: 5,
          },
          620: {
            items: 6,
          },
          700: {
            items: 7,
          },
          768: {
            items: 3,
          },
          992: {
            items: 6,
          },
          1200: {
            items: 8,
          },
          1320: {
            items: 9,
          }
        }
      });
    } else if ($(window).width() >= (1500 - widthScroll) && isStoreHeaderFiltersItems) {
      isStoreHeaderFiltersItems = false;
      storeHeaderFiltersItems.trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
      storeHeaderFiltersItems.find('.owl-stage-outer').children().unwrap();
    }
  };

  ///// end store-header-filters-items ///////


  //////////// settings-filters ////////////////

    var settingsFiltersToggle = $('.settings-filters-blocks-toggle');
    var settingsFiltersHideBlock = $('.settings-filters-hide-block');
    var settingsFiltersWrapper = $('.settings-filters-blocks-wrapper');
    var settingsFilters = $('.settings-filters-blocks');
    var settingsFiltersWrapperHeight;

    var settingsFiltersShow = function() {
      settingsFiltersToggle.addClass('settings-filters-blocks-toggle--opened');
      settingsFiltersWrapperHeight = settingsFiltersWrapper.outerHeight();

      settingsFiltersHideBlock.css({
        height: settingsFiltersWrapperHeight
      });
      setTimeout(function() {
        $('body').on('click', settingsFiltersHide);
      }, 0);
      setTimeout(function() {
        settingsFiltersHideBlock.css({
          height: 'auto'
        });
      }, 500);
    };

    var settingsFiltersHide = function() {
      settingsFiltersToggle.removeClass('settings-filters-blocks-toggle--opened');
      settingsFiltersHideBlock.css({
        height: settingsFiltersWrapperHeight
      });
      setTimeout(function() {
        settingsFiltersHideBlock.css({
          height: ''
        });
      }, 0);
      $('body').off('click', settingsFiltersHide);
    };

    var settingsFiltersToggleHandler = function(e) {
      if (settingsFiltersToggle.hasClass('settings-filters-blocks-toggle--opened')) {
        settingsFiltersHide();
      } else {
        settingsFiltersShow();
      }
    };

    settingsFiltersToggle.on('click', settingsFiltersToggleHandler);

  ////////// end settings-filters //////////////



  //////////// settings-filters-block-items //////////////

  var settingsFiltersBlock = $('.settings-filters-block');

  var settingsFiltersBlockShow = function(itemsBlock) {
    var itemsWrapper = itemsBlock.find('.settings-filters-block-items-wrapper');
    var items = itemsWrapper.find('.settings-filters-block-items');
    var itemsHeight = items.outerHeight();

    itemsBlock.addClass('settings-filters-block--opened');

    itemsWrapper.css({
      height: itemsHeight
    });

    if ($('.is-scrollable').length) {
      setTimeout(function(){ new PerfectScrollbar('.is-scrollable');}, 1000);
    }

    setTimeout(function() {
      $('body').on('click', null, this, settingsFiltersBlockHide);
    }, 0);
  };

  var settingsFiltersBlockHide = function(event) {
    if ($(event.target).hasClass('settings-filters-block-item')) {
      return;
    }
    var itemsBlock = $('.settings-filters-block--opened');
    var itemsWrapper = itemsBlock.find('.settings-filters-block-items-wrapper');

    itemsBlock.removeClass('settings-filters-block--opened');
    itemsWrapper.css({
      height: ''
    });

    $('body').off('click', settingsFiltersBlockHide);
  };

  var settingsFiltersBlockHandler = function(e) {
    e.stopPropagation();

    var settingsFiltersBlockOpen = $('.settings-filters-block--opened');
    var settingsFiltersBlockCurrent = $(e.currentTarget);

    if (settingsFiltersBlockOpen.length > 0 && settingsFiltersBlockCurrent.hasClass('settings-filters-block--opened')) {
      settingsFiltersBlockHide(e);
    } else if (settingsFiltersBlockOpen.length > 0) {
      settingsFiltersBlockHide(e);
      settingsFiltersBlockShow(settingsFiltersBlockCurrent);
    } else {
      settingsFiltersBlockShow(settingsFiltersBlockCurrent);
    }
  };

  settingsFiltersBlock.on('click', settingsFiltersBlockHandler);

  ////////// end settings-filters-block-items ////////////

  /////////// product-promo-gallery-slider ////////////

  var productPromoGallerySlider = $('.product-promo-gallery-slider');

  if (productPromoGallerySlider.length > 0) {
    productPromoGallerySlider.lightSlider({
    gallery:true,
    item:1,
    thumbItem:4,
    slideMargin: 0,
    speed:500,
    loop:true,
    onSliderLoad: function() {
      productPromoGallerySlider.removeClass('cS-hidden');
    },
    onBeforeSlide: function() {
      if (window.youtubeIframe) {
        window.youtubeIframe.pauseVideo();
      }
    },
    responsive: [
      {
        breakpoint:1200,
        settings: {
          thumbItem:3,
        }
      },
      {
        breakpoint:992,
        settings: {
          thumbItem:4,
        }
      },
      {
        breakpoint: 600,
        settings: {
          thumbItem:3,
        }
      },
      {
        breakpoint: 400,
        settings: {
          thumbItem:2,
        }
      },
    ],
    });
  }

  /////////// end product-promo-gallery-slider ////////////


  /////// product-review /////////

  var reviewRatingItem = $('.reviews-leave-form-footer-rating-item');

  if (reviewRatingItem.length > 0) {

    reviewRatingItem.on('click', function() {
      $(this).addClass('reviews-leave-form-footer-rating-item--active');
      $(this).prevAll().addClass('reviews-leave-form-footer-rating-item--active');
      $(this).nextAll().removeClass('reviews-leave-form-footer-rating-item--active');
    });

  }

  ///// end product-review ///////


  /////// giveaways-page-promo-slider /////////

  var giveawaysPagePromoSlider = $('.giveaways-page-promo-slider');

  if (giveawaysPagePromoSlider.length > 0) {

    giveawaysPagePromoSlider.owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      autoplay: true,
      autoplayTimeout: 7000,
      smartSpeed: 1000,
    });
  }

  ///// end giveaways-page-promo-slider ///////


  /////// accordion /////////

  var accordion = $('.accordion');

  if (accordion.length > 0) {

    var accordionItemTitle = $('.accordion-item-title');

    var accordionItemBodyShow = function(accordionItem) {
      var accordionItemBody = accordionItem.find('.accordion-item-body');
      var accordionItemBodyInnerWrap = accordionItemBody.find('.accordion-item-body-inner-wrapper');

      accordionItem.addClass('accordion-item--opened');
      accordionItemBody.css({
        height: accordionItemBodyInnerWrap.outerHeight(),
      });
    };

    var accordionItemBodyHide = function(accordionItem) {
      var accordionItemBody = accordionItem.find('.accordion-item-body');

      accordionItem.removeClass('accordion-item--opened');
      accordionItemBody.css({
        height: '',
      });
    };

    var accordionHandler = function(e) {
      var currentAccordionItem = $(this).parent();
      if (currentAccordionItem.hasClass('accordion-item--opened')) {
        accordionItemBodyHide(currentAccordionItem);
      } else {
        accordionItemBodyShow(currentAccordionItem);
      }
    };

    accordionItemTitle.on('click', accordionHandler);

  }

  ///// end accordion ///////





  /////// giveaways-single-promo-content-items /////////

  var giveawaysSinglePromoContentItems = $('.giveaways-single-promo-content-items');
  var isGiveawaysSinglePromoContentItems = false;

  var initializingGiveawaysSinglePromoContentItems = function() {
    if ($(window).width() < (1500 - widthScroll) && !isGiveawaysSinglePromoContentItems) {
      isGiveawaysSinglePromoContentItems = true;
      giveawaysSinglePromoContentItems.addClass('owl-carousel');
      giveawaysSinglePromoContentItems.owlCarousel({
        loop: true,
        smartSpeed: 1000,
        responsive: {
          0: {
            items: 2,
          },
          450: {
            items: 3,
          },
          600: {
            items: 4,
          },
          1200: {
            items: 3,
          },
          1320: {
            items: 4,
          }
        }
      });
    } else if ($(window).width() >= (1500 - widthScroll) && isGiveawaysSinglePromoContentItems) {
      isGiveawaysSinglePromoContentItems = false;
      giveawaysSinglePromoContentItems.trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
      giveawaysSinglePromoContentItems.find('.owl-stage-outer').children().unwrap();
    }
  };

  ///// end giveaways-single-promo-content-items ///////


  /////////// giveaways-single-sponsored-content-slider ////////////

  var giveawaysSingleSponsoredContentSlider = $('.giveaways-single-sponsored-content-slider');

  if (giveawaysSingleSponsoredContentSlider.length > 0) {
    giveawaysSingleSponsoredContentSlider.lightSlider({
      gallery:true,
      item:1,
      thumbItem:4,
      slideMargin: 0,
      speed:500,
      loop:true,
      onSliderLoad: function() {
        giveawaysSingleSponsoredContentSlider.removeClass('cS-hidden');
      },
      responsive: [
      {
        breakpoint:1200,
        settings: {
          thumbItem:4,
        }
      },
      {
        breakpoint: 650,
        settings: {
          thumbItem:3,
        }
      },
      {
        breakpoint: 480,
        settings: {
          thumbItem:2,
        }
      },
      ],
    });
  }

  /////////// end giveaways-single-sponsored-content-slider ////////////

  /////// arcades-promo-content-items /////////

  var arcadesPromoContentItems = $('.arcades-promo-content-items');

  if (arcadesPromoContentItems.length > 0) {
    arcadesPromoContentItems.owlCarousel({
      loop: true,
      nav: true,
      autoplay: true,
      autoplayHoverPause: true,
      smartSpeed: 1000,
      responsive: {
        0: {
          items: 2,
          slideBy: 2,
          autoplayTimeout: 2000,
        },
        480: {
          items: 3,
          slideBy: 3,
          autoplayTimeout: 3000,
        },
        620: {
          items: 4,
          slideBy: 4,
          autoplayTimeout: 4000,
        },
        768: {
          items: 3,
          slideBy: 3,
          autoplayTimeout: 3000,
        },
        920: {
          items: 4,
          slideBy: 4,
          autoplayTimeout: 4000,
        },
        1150: {
          items: 5,
          slideBy: 5,
          autoplayTimeout: 5000,
          nav: false,
        },
        1320: {
          items: 6,
          slideBy: 6,
          autoplayTimeout: 6000,
        },
        1500: {
          items: 7,
          slideBy: 7,
          autoplayTimeout: 7000,
        },
        1650: {
          items: 8,
          slideBy: 8,
          autoplayTimeout: 8000,
        }
      }
    });
  }

  ///// end arcades-promo-content-items ///////


  /////// giveaways-page-promo-slider /////////

  var articleSingleSlider = $('.article-single-slider');

  if (articleSingleSlider.length > 0) {

    articleSingleSlider.owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      autoplay: true,
      autoplayTimeout: 2000,
      smartSpeed: 1000,
      autoplayHoverPause: true,
    });
  }

  ///// end giveaways-page-promo-slider ///////


  //////// input-select ///////////

  var inputSelect = document.querySelectorAll('.input-select');

  if (inputSelect.length > 0) {

    var showSelect = function (select) {
      select.classList.add('input-select--open');
      setTimeout(function () {
        document.body.addEventListener('click', hideSelect);
      }, 0);
    };

    var hideSelect = function () {
      var select = document.querySelector('.input-select--open');
      select.classList.remove('input-select--open');
      document.body.removeEventListener('click', hideSelect);
    };

    var toggleSelect = function (e) {
      var selectOpen = document.querySelector('.input-select--open');
      var currentSelect = e.currentTarget;

      if (selectOpen === currentSelect) {
        hideSelect();
      } else if (selectOpen) {
        hideSelect();
        showSelect(currentSelect);
      } else {
        showSelect(currentSelect);
      }
    };

    for (var i = 0; i < inputSelect.length; i++) {
      inputSelect[i].addEventListener('click', toggleSelect);
    }

    var inputSelectItem = document.querySelectorAll('.input-select-item');

    var selectItemHendler = function (e) {
      var selectItemText = e.currentTarget.textContent;
      var input = e.currentTarget.parentElement.parentElement.parentElement.querySelector('input');
      input.value = selectItemText;
    };

    for (var i = 0; i < inputSelectItem.length; i++) {
      inputSelectItem[i].addEventListener('click', selectItemHendler);
    }
  }

  ////// end input-select //////


  windowSize();
  windowScroll();
  $(window).resize(windowSize);
  $(window).scroll(windowScroll);
  if (screen.width > '991') {
      showSearchForm();
  }

});

// Common

function notLoggedInPopup() {
  swal({
    title: 'Oops!',
    text: 'You need to be logged in to complete this action',
    icon: 'warning',
  });
}
