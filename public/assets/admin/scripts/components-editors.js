var ComponentsEditors = function () {
    
    var handleWysihtml5 = function () {
        if (!jQuery().wysihtml5) {
            return;
        }

    }
    
    /*
    var handleSummernote = function () {
        $('#summernote_1').summernote({height: 300});
        //API:
        //var sHTML = $('#summernote_1').code(); // get code
        //$('#summernote_1').destroy(); // destroy
    }*/

    return {
        //main function to initiate the module
        init: function () {
            handleWysihtml5();
            //handleSummernote();
        }
    };

}();