(function($) {
  
// MMENU
   $(document).ready(function() {
    $("#cs-menu").mmenu({
        "extensions": [
        // "fx-menu-zoom",
        // "fx-panels-zoom",
        "pagedim-black",
        "position-front"
        ],

        navbars: [{
          // content: [ "<img src='"+logo_url+"' class='logo-mobile'/>" ],
            height: 1
        }],

        offCanvas: {
            position  : "center",
            zposition : "front"
        }, navbar: {
            // title: site_name
        }

    });

    var API = $("#cs-menu").data( "mmenu" );

    $( window ).resize(function() {
        API.close();
    });

   });

})(jQuery);


