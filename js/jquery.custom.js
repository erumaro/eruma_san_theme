/*-----------------------------------------------------------------------------------

 	Custom JS - All front-end jQuery
 
-----------------------------------------------------------------------------------*/
 
jQuery(document).ready(function() {
    // Twitter function
    $(function(){
    $(".tweet").tweet({
        username: "Eruvaeron",
        avatar_size: 32,
        count: 4,
        loading_text: "loading tweets..."
    });
    });
    // Mobile nav function
    $(function () {
      $("#menu-menunav").tinyNav();
    });
}); // END OF DOCUMENT