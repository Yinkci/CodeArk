   (function($) {
    'use strict';
    // TINYMCE
    tinymce.init({
        selector: "#mytextarea",
        theme: "modern",
        width: 500,
        height: 300,
        plugins: [
             "advlist advcode autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
             "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
             "save table contextmenu directionality emoticons template paste textcolor"
       ],
       content_css: "css/content.css",
       toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons code", 
       style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ]
    }); 
// GET HTML CONTENT
    $(document).on('click','.publish_page_btn',function(){
        var htmlcontent = tinyMCE.activeEditor.getContent();
        $(".html_data").val(htmlcontent);
        });


})(jQuery);