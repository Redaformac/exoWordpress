// le js ici

jQuery(document).ready( function() {

    jQuery('#img_service').hover( function() {
        jQuery('#img_service').attr('src', 'wp-content/themes/myTheme/img/service_color.png');
    }, function() {
        jQuery('#img_service').attr('src', 'wp-content/themes/myTheme/img/service_blue.png');
    });

    jQuery('#img_team').hover( function() {
        jQuery('#img_team').attr('src', 'wp-content/themes/myTheme/img/team_color.png');
    }, function() {
        jQuery('#img_team').attr('src', 'wp-content/themes/myTheme/img/team_blue.png');
    });

});
