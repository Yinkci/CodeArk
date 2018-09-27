(function($) {
    'use strict';

///////////////////////////////////////////////////////////////////////////////////////////////////
// MMENU
///////////////////////////////////////////////////////////////////////////////////////////////////

   $(document).ready(function() {
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
    var order = parseInt($("#sortable_nav li:last-of-type input").val());
    var order_ = order+1;
    var ads = ctr+1;
    var pass_Var;
          e.preventDefault();
          $.ajax({
            async: false,
            type: 'POST',
            url: 'data/addMenutab.php',
            data: {
              ads : ads,
              order_ : order_,
            },
            success: function (result) {
                pass_Var = result;
            }
          });
            $('#sortable_nav').append(pass_Var);
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
// DELETE PAGE
///////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
     $('.deletepage_').click(function(e){ 
              e.preventDefault();
              var x = $(this).data('name');  
              var y = '.form_page'+x;
              $.ajax({
                type: 'POST',
                url: 'data/pageDelete',
                data: {
                  x : x,
                },
               success: function (result) {
                $(y).remove();
                // $(".mainpage_").html("SUCCESS");
                    
                },
                error: function () {
                    $(".mainpage_").html("Something Went Wrong");
                }
          
            });
    });

});

///////////////////////////////////////////////////////////////////////////////////////////////////
// DROPDOWN TOGGLE FOR ADDING MENU
///////////////////////////////////////////////////////////////////////////////////////////////////


$(document).ready(function(){     
    $(document).on('click','.slidx',function(){
        //this version will find the parent dropdown-cus of the slidx and mfields,
        //and then find the mfields inside it, and only that one
        $(this).closest('.dropdown-cus').find(".mfields").slideToggle( 'slow', function() {});

    });

});

///////////////////////////////////////////////////////////////////////////////////////////////////
// DRAG AND SORT MENU
///////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){  
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
                $(this).children('.sortable-number').attr('value', newVal);
                $(this).children('#item_display_order').attr('value', newVal);
            });
        }
    });
    $("#sortable_nav").disableSelection();
});

///////////////////////////////////////////////////////////////////////////////////////////////////
// ADD PAGE
///////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
        $(document).on('click','.publish_page_btn',function(){
        $('#publishpage_id').submit();
        });

});
$(document).ready(function(){
    var non_selected = $("select.template_file option:selected").val();
         $(".template_file_field").val(non_selected);

        // $(".template_file_field").val(selectedtemplate);
        $("select.template_file").change(function(){
        var selectedtemplate = $("select.template_file option:selected").val();
         $(".template_file_field").val(selectedtemplate);
        });
});
// ON CLICK ADD MENU
//   $(document).on('click','.addMenu_btn',function(){
//     var input = $('#counter');
//     input.text(Number(input.text())+1);
//     input.val(Number(input.val())+1);
//     myFunction();

// });




})(jQuery);


