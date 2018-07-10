/*
 * Application
 */

$(document).tooltip({
    selector: "[data-toggle=tooltip]"
})

/*
 * Auto hide navbar
 */
jQuery(document).ready(function($){
    var $header = $('.navbar-autohide'),
        scrolling = false,
        previousTop = 0,
        currentTop = 0,
        scrollDelta = 10,
        scrollOffset = 150

    $(window).on('scroll', function(){
        if (!scrolling) {
            scrolling = true

            if (!window.requestAnimationFrame) {
                setTimeout(autoHideHeader, 250)
            }
            else {
                requestAnimationFrame(autoHideHeader)
            }
        }
    })

    function autoHideHeader() {
        var currentTop = $(window).scrollTop()

        // Scrolling up
        if (previousTop - currentTop > scrollDelta) {
            $header.removeClass('is-hidden')
        }
        else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
            // Scrolling down
            $header.addClass('is-hidden')
        }

        previousTop = currentTop
        scrolling = false
    }

    $('.page-title').html(function(i,el) {
        return el.replace(/\b([A-Z])/g, "<span class=\"first-letter\">$1</span>");
    });

    // /kontakt: show uploaded file on contact form
    $('#file-upload').bind('change', function() { 
        var fileName = ''; 
        fileName = $(this).val(); 
        $('#file-selected').html(fileName); 
    })

    // Menü Simple Sidebar
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $("button.navbar-toggle").toggleClass("active");
    });

    // /: show Overlay Text for Mobile Devices after Hero Image
    var isMobile = window.matchMedia("only screen and (max-width: 760px)");
    if (isMobile.matches) {
        $("#zitatXs").append( $( "#zitat" ) );
    }

    $("#contact_name").focus();

});

