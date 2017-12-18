var pageTitle = "-----Mayhem-----";
function animateTitle() {
    pageTitle = pageTitle.substring(1, pageTitle.length) + pageTitle.substring(0, 1);
    document.title = pageTitle;
    setTimeout("animateTitle()", 300);
}

$(document).ready(function() {
    animateTitle();
    
    $(".mayhem").animate({
        opacity: 1
    }, 500, function() {
        $(".mayhemSmall").animate({
            opacity: 1
        }, 500, function() {
            $(".links").animate({
                opacity: 1
            }, 500);
        });
    });
    
    function loop() {
        $(".mayhem").animate({
            color: "#c64800"
        }, 1500, function() {
            $(".mayhem").animate({
                color: "#a8c600"
            }, 1500, function() {
                $(".mayhem").animate({
                    color: "#00c67d"
                }, 1500, function() {
                    $(".mayhem").animate({
                        color: "#009ec6"
                    }, 1500, function() {
                        $(".mayhem").animate({
                            color: "#7000c6"
                        }, 1500, function() {
                            $(".mayhem").animate({
                                color: "#c6007d"
                            }, 1500, function() {
                                loop();
                            });
                        });
                    });
                });
            });
        });
    }
    loop();
    
    $("a").hover(function() {
        $(this).stop();
        $(this).animate({
            color: "#b2ff00"
        }, 300);
        $(this).before().animate({
            backgroundColor: "#b2ff00"
        }, 300);
    });
    
    $("a").mouseout(function() {
        $(this).stop();
        $(this).animate({
            color: "#ff6100"
        }, 300);
        $(this).before().animate({
            backgroundColor: "#ff6100"
        }, 300);
    });
});