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
  storeSpinner.spin();
  $(".storeSpinner").html(storeSpinner.el);
  // submit all filters

  storeFiltersSubmit(source, url);
};

settingsFiltersBlockItem.on('click', settingsFiltersBlockItemHandler);

/////////// end settings-filters-block-item ////////////

function storeFiltersSubmit(source, url) {
  var platforms = [];
  $('.active[data-filter-category]').each(function(){
      platforms.push($(this).data('filter-category'));
  });
  var systems = [];
  $('.settings-filters-block-item--current[data-filter-system]').each(function(){
      systems.push($(this).text());
  });
  var genres = [];
  $('.settings-filters-block-item--current[data-filter-genre]').each(function(){
      genres.push($(this).text());
  });
  var types = [];
  $('.settings-filters-block-item--current[data-filter-type]').each(function(){
      types.push($(this).data('filter-type'));
  });
  var tags = [];
  $('.settings-filters-block-item--current[data-filter-tag]').each(function(){
      tags.push($(this).text());
  });
  var sort = $('.settings-filters-block-item--current[data-filter-sort]').text();
  var parameters = [ 'source=' + source, 'ajax=1', 'sort=' + sort ];
  if ($('[data-filter-pagesize]').text().length) {
    parameters.push('pageSize='+$('[data-filter-pagesize]').text());
  }
  if (platforms.length) {
    parameters.push('product_category_id=' + platforms.join(','));
  }
  if (systems.length) {
    parameters.push('systems=' + systems.join(','));
  }
  if (genres.length) {
    parameters.push('genres=' + genres.join(','));
  }
  if (types.length) {
    parameters.push('types=' + types.join(','));
  }
  if (tags.length) {
    parameters.push('generics=' + tags.join(','));
  }
  var query = url + '?' + parameters.join('&');
  $.get(query).success(
    function() {
      $.fn.yiiListView.update("productlistview", {
        url: ''
      });
    }
  );
}

/////// settings-per-page /////////
function productsPerPageInit(source, url) {
  var settingsPerPage = $('.items-settings-per-page');

  if (settingsPerPage.length > 0) {

    var settingsPerPageCurrent = $('.items-settings-per-page-current');
    var settingsPerPageItemsWrapper = $('.items-settings-per-page-items-wrapper');
    var settingsPerPageItems = $('.items-settings-per-page-items');
    var settingsPerPageItem = $('.items-settings-per-page-item');

    var settingsPerPageItemsShow = function() {
      settingsPerPage.addClass('items-settings-per-page--opened');
      setTimeout(function() {
        $('body').on('click', settingsPerPageItemsHide);
      }, 0);
    };

    var settingsPerPageItemsHide = function() {
      settingsPerPage.removeClass('items-settings-per-page--opened');
      $('body').off('click', settingsPerPageItemsHide);
    };

    var settingsPerPageCurrentHandler = function(e) {
      if (settingsPerPage.hasClass('items-settings-per-page--opened')) {
        settingsPerPageItemsHide();
      } else {
        settingsPerPageItemsShow();
      }
    };

    settingsPerPageCurrent.on('click', settingsPerPageCurrentHandler);

    var settingsPerPageItemHandler = function() {
      if (!($(this).hasClass('items-settings-per-page-item--active'))) {
        $('.items-settings-per-page-item--active').removeClass('items-settings-per-page-item--active');
        $(this).addClass('items-settings-per-page-item--active');
        settingsPerPageCurrent.text($(this).text());
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