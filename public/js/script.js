$(document).ready(function(){
var resum = $('#resume'),
        caruselFirstNum = 0,
        caruselFirstAllTemp = $("#inner>ul>li").length,
        innerFirst = $("#inner>ul");
        
    $("#templatesMenu>li>a").click(function(){
        var button = $(this),
            resumTemplate = button.attr('href');
        resum.removeClass().addClass(resumTemplate);
        
        if(button.parent().hasClass("paid_template")){
            $("#next").css({"display":"none"});
            $("#buy").css({"display":"inline-block"}); 
        }else{
            $("#next").css({"display":"inline-block"});
            $("#buy").css({"display":"none"}); 
        }
        return false;
    });
    // step 2
    $(".hide-show").toggle(
        function(){
                $(this).parent().find("p").slideUp(300);
            $(this).text("show")
                return false;
        },
        function(){
                $(this).parent().find("p").slideDown(300);
            $(this).text("hide")
                return false;
        }
    );

    $('#menu').superfish({
      delay:       500,
      animation:   {height:'show'},
      speed:       600,
      autoArrows:  false,
      dropShadows: false,
    });
    $(".fancyImg").fancybox({
        'transitionIn'  :   'swing',
        'transitionOut' :   'swing',
        'speedIn'       :   600, 
        'speedOut'      :   200, 
        'overlayShow'   :   true,
        'overlayColor'  :   "#000000"
    });
    $("#nextTemp").click(function(){
        if(caruselFirstNum<caruselFirstAllTemp-3){
            caruselFirstNum++
            innerFirst.stop(true).animate({"left":-caruselFirstNum*320}, 700, "easeInOutCubic")
        }
        return false;
    })
    $("#prevTemp").click(function(){
        if(caruselFirstNum>0){
            caruselFirstNum--
            innerFirst.stop(true).animate({"left":-caruselFirstNum*320}, 700, "easeInOutCubic")
        }
        return false;
    })
    $("#inner a").hover(
        function(){
            $("img", this).stop(true).animate({"top":-20}, 500, "easeInOutCubic");
            $(".imgShadow", this).stop(true).fadeTo(400, 0.5, "easeInOutCubic");
        },
        function(){
            $("img", this).stop(true).animate({"top":0}, 500, "easeInOutCubic");
            $(".imgShadow", this).stop(true).fadeTo(400, 1, "easeInOutCubic"); 
        }
    )

    // step 2 / Carousel
    $( '#templatesMenu' ).elastislide();

});    