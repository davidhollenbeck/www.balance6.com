(function($) {

    $(document).ready( function() {
        var wpcf7Elm = document.querySelector( '.wpcf7' );

        wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
            $(location).attr({
                href: "/wp-content/uploads/2018/09/MoreTimeMoneyFreedom.pdf",
                target: "_blank"
            });
        }, false );
    });

})( jQuery );