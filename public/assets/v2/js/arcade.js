////////////// settings-filters-block-item /////////////

var settingsFiltersBlockItem =  $('.settings-filters-block-item');

var settingsFiltersBlockItemHandler = function(e) {
    e.preventDefault();
    var settingsFiltersCurrentValue = $(this).parent().parent().siblings('.settings-filters-block-current').find('span');

    var source = $('.settings-filters-wrapper-outer-wrapper').data('source');
    var url = $('.settings-filters-wrapper-outer-wrapper').data('url');

    if ($(this).data('filter-sort')) {

        $(this).siblings().removeClass('settings-filters-block-item--current');
        $(this).addClass('settings-filters-block-item--current');
        settingsFiltersCurrentValue.text($(this).text());
        storeFiltersSubmit(source, url);
        return;

    }

    if ($(this).data('filter-all')) {
        $(this).siblings().removeClass('settings-filters-block-item--current');
        $(this).addClass('settings-filters-block-item--current');
    }
    else if (!$(this).hasClass('settings-filters-block-item--current')) {
        //var settingsFiltersCurrentValue = $(this).parent().parent().siblings('.settings-filters-block-current').find('span');
        //$(this).siblings('.settings-filters-block-item--current').removeClass('settings-filters-block-item--current');
        //$(this).addClass('settings-filters-block-item--current');
        //settingsFiltersCurrentValue.text($(this).text());
        $(this).siblings('[data-filter-all]').removeClass('settings-filters-block-item--current');
        $(this).addClass('settings-filters-block-item--current');
    } else {
        $(this).removeClass('settings-filters-block-item--current');
        if ($(this).siblings('.settings-filters-block-item--current').length === 0) {
            $(this).siblings('[data-filter-all]').addClass('settings-filters-block-item--current');
        }
    }
    // update the filter label
    if ($(this).data('filter-all')) {
        settingsFiltersCurrentValue.text($(this).text());
    } else if ($(this).siblings('.settings-filters-block-item--current[data-filter-all]').length === 1) {
        settingsFiltersCurrentValue.text($(this).siblings('[data-filter-all]').text());
    } else if ($(this).parent().find('.settings-filters-block-item--current').length === 1) {
        settingsFiltersCurrentValue.text($(this).parent().find('.settings-filters-block-item--current').text());
    }
    else {
        var count = $(this).siblings('.settings-filters-block-item--current').addBack().length;
        settingsFiltersCurrentValue.text(count + $(this).siblings('[data-filter-all]').data('multiple-text'))
    }
    // Start the spinner spinning
    arcadeSpinner.spin();
    $(".arcadeSpinner").html(arcadeSpinner.el);
    // submit all filters

    storeFiltersSubmit(source, url);

};

settingsFiltersBlockItem.on('click', settingsFiltersBlockItemHandler);

/////////// end settings-filters-block-item ////////////

function storeFiltersSubmit(source, url) {
    var jointypes = [];
    $('.settings-filters-block-item--current[data-filter-jointype]').each(function(){
        jointypes.push($(this).text());
    });

    var status = [];
    $('.settings-filters-block-item--current[data-filter-status]').each(function(){
        status.push($(this).text());
    });

    var parameters = [ 'source=' + source, 'ajax=1' ];
    if ($('[data-filter-pagesize]').text().length) {
        parameters.push('pageSize='+$('[data-filter-pagesize]').text());
    }
    if (jointypes.length) {
        parameters.push('jointypes=' + jointypes.join(','));
    }
    if (status.length) {
        parameters.push('status=' + status.join(','));
    }

    var query = url + '?' + parameters.join('&');
    $.get(query).success(
        function() {
            $.fn.yiiListView.update("arcadeListView1", {
                url: ''
            });
            $.fn.yiiListView.update("arcadeListView2", {
                url: ''
            });
            $.fn.yiiListView.update("arcadeListView3", {
                url: ''
            });
            $.fn.yiiListView.update("arcadeListView4", {
                url: ''
            });
        }
    );
}

/////// settings-per-page /////////
function productsPerPageInit(source, url) {
    var settingsPerPage = $('.items-settings-per-page');

    if (settingsPerPage.length > 0) {
        $(document).on('click', function (event) {
            if (!$(event.target).closest('.items-settings-per-page').length) {
               settingsPerPage.removeClass('items-settings-per-page--opened');

            }
        });

        var settingsPerPageCurrent = $('.items-settings-per-page-current');
        var settingsPerPageItemsWrapper = $('.items-settings-per-page-items-wrapper');
        var settingsPerPageItems = $('.items-settings-per-page-items');
        var settingsPerPageItem = $('.items-settings-per-page-item');


        settingsPerPageCurrent.on('click',  function(){
            settingsPerPage.addClass('items-settings-per-page--opened');
        });

        var settingsPerPageItemHandler = function() {
            if (!($(this).hasClass('items-settings-per-page-item--active'))) {
                $('.items-settings-per-page-item--active').removeClass('items-settings-per-page-item--active');
                $(this).addClass('items-settings-per-page-item--active');
                settingsPerPageCurrent.text($(this).text());
                settingsPerPage.removeClass('items-settings-per-page--opened');
                storeFiltersSubmit(source, url);
            }
        };

        settingsPerPageItem.on('click', settingsPerPageItemHandler);

    }
}
///// end settings-per-page ///////

/* disabled pagination buttons */
$('.pagination-items .disabled a').click(function(event) {
    event.preventDefault();
    return false;
});