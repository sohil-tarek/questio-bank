/* ------------------------------------------------------------------------------
*
*  # Dynamic tree views
*
*  Specific JS code additions for extra_trees.html page
*
*  Version: 1.0
*  Latest update: Aug 1, 2015
*
* ---------------------------------------------------------------------------- */

$(function() {



    $(".tree-default").fancytree({
        init: function(event, data) {
            $('.has-tooltip .fancytree-title').tooltip();
        }
    });



});
