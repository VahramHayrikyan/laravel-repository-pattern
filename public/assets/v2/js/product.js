function productReviewSubmit() {
    if (!$('#message').val() || !$('#myStarRating').val())
    {
        swal({
            title: 'Oops!',
            text: 'You need to provide both a review and a rating.',
            icon: 'warning',
        });
        return false;
    }

    return true;
}

$('#averageRating').rating({
    starCaptions: {},
    min: 0,
    max: 5,
    step: 0.1,
    size: 'xl',
    showClear: false,
    clearCaption: '0',
    readonly: true,
    showCaption: false,
    emptyStar: '<i class="fa fa-star fa-fw"></i>',
    filledStar: '<i style="color: #f9e46e;" class="fa fa-star fa-fw"></i>',
});

$('#myStarRating').rating({
    starCaptions: {},
    min: 0,
    max: 5,
    step: 0.5,
    size: 'md',
    showClear: false,
    clearCaption: '0',
    readonly: false,
    showCaption: false,
    emptyStar: '<i class="fa fa-star fa-fw"></i>',
    filledStar: '<i style="color: #f9e46e;" class="fa fa-star fa-fw"></i>',
});

$('.disabledRating').rating({
    starCaptions: {},
    min: 0,
    max: 5,
    step: 0.1,
    size: 'sm',
    showClear: false,
    clearCaption: '0',
    readonly: true,
    showCaption: false,
    emptyStar: '<i class="fa fa-star fa-fw"></i>',
    filledStar: '<i style="color: #f9e46e;" class="fa fa-star fa-fw"></i>',
});