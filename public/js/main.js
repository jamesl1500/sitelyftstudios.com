$(function()
{
   // Mobile : Sidebar show
    $(".mobileSidebarOpen").on('click', function(e)
    {
        e.preventDefault();
        e.stopPropagation();

        // Func
        if(!$(".sidebarMain").hasClass("open"))
        {
            if($(window).width() <= 340)
            {
                $(".websiteBody").animate({"right": "260px"}, function ()
                {
                    $(".sidebarMain").addClass("open");
                    $("body").css("overflow", "hidden");
                });
            }else{
                $(".websiteBody").animate({"right": "300px"}, function ()
                {
                    $(".sidebarMain").addClass("open");
                    $("body").css("overflow", "hidden");
                });
            }
        }else{
            $(".websiteBody").animate({"right": "0px"}, function ()
            {
                $(".sidebarMain").removeClass("open");
                $("body").css("overflow", "auto");
            });
        }
    });

    // Contact points
    $(document).on('click', '.emailContactPoint', function(){
        mixpanel.track("Email button was pressed");
    });

    $(document).on('click', '.phoneContactPoint', function(){
        mixpanel.track("Phone button has been pressed");
    });

    $(document).on('click', '.linkedinContactPoint', function(){
        mixpanel.track("Linkedin button has been pressed");
    });

    $(document).on('click', '.whatsappContactPoint', function(){
        mixpanel.track("Whatsapp button has been pressed");
    });
});