$(document).ready(function(){
    $('.user-achievement-block-item').on('mouseenter', '.user-achievement-item-locked', function () {
        $(this).find(".user-achievement-item-hover").fadeTo( "fast", 1 );
    });
    $('.user-achievement-block-item').on('mouseleave', '.user-achievement-item-locked', function () {
        $(this).find(".user-achievement-item-hover").fadeTo( "fast", 0 );
    });

    $('.account-achievements-body-right-img').on('mouseenter', function () {
        $(this).children(1).fadeIn( "fast")

    });

    $('.account-achievements-body-right-img').on('mouseleave', function () {
        $(this).children('img.img-responsive.account-achievements-body-right-img-red').hide(0);
    });


    $(".account-friendslist-friends-friend-left-section").mouseenter(function () {
        $(this).find(".account-friendslist-friends-friend-item-img").css({"opacity": "0.5"});
        $(this).find(".account-friendslist-friends-friend-img-btn-wrapper").css({"opacity": "1"});
    });

    $(".account-friendslist-friends-friend-left-section").mouseleave(function () {
        $(this).find(".account-friendslist-friends-friend-item-img").css({"opacity": "1"});
        $(this).find(".account-friendslist-friends-friend-img-btn-wrapper").css({"opacity": "0"});
    });


})