(function($) {
    'use strict';

///////////////////////////////////////////////////////////////////////////////////////////////////
// MMENU
///////////////////////////////////////////////////////////////////////////////////////////////////

   $(document).ready(function() {
       // ON CLICK ADD MENU




$("#sortable_nav").sortable({
    placeholder: "ui-state-highlight",
    helper: 'clone',
    sort: function(e, ui) {
        $(ui.placeholder).html(Number($("#sortable_nav > li:visible").index(ui.placeholder)) + 1);
    },
    update: function(event, ui) {
        var $lis = $(this).children('li');
        $lis.each(function() {
            var $li = $(this);
            var newVal = $(this).index() + 1;
            $(this).children('.sortable-number').val(newVal);
            $(this).children('#item_display_order').val(newVal);
        });
    }
});
$("#sortable_nav").disableSelection();



$('.draggable_').sortable({
    // stop: function(event, ui){
    //     $(".dragmenux").each(function(i, el){
    //            $(el).attr('data-id',$(el).index()+1);
    //     });
    // }
});
    $("#my-menu").mmenu({
        "extensions": [
        // "fx-menu-zoom",
        // "fx-panels-zoom",
        "pagedim-black",
        "position-front"
        ],

        navbars: [{
            height: 1
        }],

        offCanvas: {
            position  : "center",
            zposition : "front"
        }, 

    });

    var API = $("#my-menu").data( "mmenu" );

    $( window ).resize(function() {
        API.close();
    });

   });

///////////////////////////////////////////////////////////////////////////////////////////////////
// FIX POSITION FOR MENU
///////////////////////////////////////////////////////////////////////////////////////////////////

    $(window).scroll(function() {

    if( $(this).scrollTop() > 0){
    $(".header").addClass("small-iix");
    }
    else{
    $(".header").removeClass("small-iix");
    }

    });

// ON CLICK ADD MENU
//   $(document).on('click','.addMenu_btn',function(){
//     var input = $('#counter');
//     input.text(Number(input.text())+1);
//     input.val(Number(input.val())+1);
//     myFunction();

// });

///////////////////////////////////////////////////////////////////////////////////////////////////
// ADD MENU
///////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
    var ctr_ = parseInt($("#sortable_nav li:last-of-type .dropdown-cus .mfields input:last-child").val());
    $(".addMenu_ctr").val(ctr_);
    // alert(ctr_);

    $('.addMenu_btn').click(function(e){
    var ctr = parseInt($("#sortable_nav li:last-of-type .dropdown-cus .mfields input:last-child").val());
    $(".addMenu_ctr").val(ctr+1);
    var ads = ctr+1;
    var pass_Var;
          e.preventDefault();
          $.ajax({
            async: false,
            type: 'POST',
            url: 'data/addMenutab.php',
            data: {
              ads : ads,
            },
            success: function (result) {
                pass_Var = result;
            }
          });
            $('.addMenu_input').append(pass_Var);
        });

});

///////////////////////////////////////////////////////////////////////////////////////////////////
// DELETE MENU
///////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
     $('.menu_delete').click(function(e){   
        var x = $(this).data('name');   
        var y = ".re_"+x;
        $(y).remove();
              e.preventDefault();
              $.ajax({
                type: 'POST',
                url: 'data/menuDelete',
                data: {
                  x : x,
                },
                success: function (result) {
                    // var ctr_ = parseInt($(".addMenu_input input:last-child").val());
                    // $(".addMenu_ctr").val(ctr_-1);
                    location.reload();
                          var ctr_ = parseInt($(".addMenu_input input:last-child").val());
                    $(".addMenu_ctr").val(ctr_-1);
                },
                error: function () {
                    $(".rightMenu").html("Something Went Wrong");
                }
            });
    });

});


///////////////////////////////////////////////////////////////////////////////////////////////////
// DROPDOWN FOR ADDING MENU
///////////////////////////////////////////////////////////////////////////////////////////////////


// $(document).on('click','.dropdown-cus',function(){
//  $(".dropdown-cus input").fadeIn().css("display","block").slow();
// });
// var xtoggle = 1;
// var z = parseInt($(".addMenu_input  .dropdown-cus:last-of-type input:last-child").val());
// alert(z);
// var xc = 1;
//     while(xc <= 11){
//         var a = '.slidx'+xc;
//         var b = '.dropdown-cus #mfields'+xc;

//         $(document).on('click',a,function(){
//             $(b).slideToggle( 'slow', function() {});
//         });
//         xc++;
//     }

$(document).ready(function(){     
    $(document).on('click','.slidx',function(){
        //this version will find the parent dropdown-cus of the slidx and mfields,
        //and then find the mfields inside it, and only that one
        $(this).closest('.dropdown-cus').find(".mfields").slideToggle( 'slow', function() {});

    });

});
// while (i < 10) {
//     text += "The number is " + i;
//     i++;
// }

// alert(ctr);

  // $(".dropdown-cus #mfields11").slideToggle( "slow", function() {});


// jQuery.curCSS = function(element, prop, val) {
//     return jQuery(element).css(prop, val);
// };











})(jQuery);


   // jQuery.browser = {};
   //  (function () {
   //      jQuery.browser.msie = false;
   //      jQuery.browser.version = 0;
   //      if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
   //          jQuery.browser.msie = true;
   //          jQuery.browser.version = RegExp.$1;
   //      }
   //  })();

