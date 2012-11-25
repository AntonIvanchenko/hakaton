$(document).ready(function(){
    var resum = $('.resume-body'),
        caruselFirstNum = 0,
        caruselFirstAllTemp = $("#inner>ul>li").length,
        innerFirst = $("#inner>ul"),
        textArea = [],
        resumTemplateSelect = "template1",
        resumTemplateBuy;

    //index page
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
    // end index page
    // step 2
    resum.find(">.resume-part").each(function(i){
        textArea[i] = true;
    })
    $(".hide-show").toggle(
        function(){
            $(this).parent(".resume-part").find(">.part-wrapper").slideUp(300);
            $(this).text("show");
            textArea[$(this).parent(".resume-part").index()] = false;
            return false;
        },
        function(){
            $(this).parent(".resume-part").find(">.part-wrapper").slideDown(300);
            $(this).text("hide");
            textArea[$(this).parent(".resume-part").index()] = true;
            return false;
        }
    );
    $("#next").attr("href", "/step3/template/"+resumTemplateSelect)
    $("#templatesMenu>li>a").click(function(){
        var button = $(this),
            resumTemplate = button.attr('href');
        resum.removeClass().addClass(resumTemplate);
        
        if(button.parent().hasClass("paid_template")){
            $("#next").css({"display":"none"});
            $("#buy").css({"display":"inline-block"});
            resumTemplateBuy = resumTemplate;
        }else{
            $("#next").css({"display":"inline-block"});
            $("#buy").css({"display":"none"});
            resumTemplateBuy = "";
        }
        resumTemplateSelect = resumTemplate;
        $("#next").attr("href", "/index/step3/")
        return false;
    });
    $("#buy").click(function(){
        $("#buyWindow").fadeIn(500)
        $("#part img").attr("src", $("a[href*='"+resumTemplateSelect+"']>img").attr("src"));
        return false;
    });
    $("#buyTemp").click(function(){
        //alert("you bought a template")
        $("#buyWindow").fadeOut(500);
        $("#buy").css({"display":"none"});
        $("#next").css({"display":"inline-block"});
        return false;
    });
    $("#closeBuyTemp, #buyBg").click(function(){
        $("#buyWindow").fadeOut(500)
        return false;
    });
    // end step 2
    // step 3
    $("#getLink").click(function(){
        $("#getLinkWindow").fadeIn(500)
        $("input[name='link']").val(window.location.href).select();
        return false;
    });
    $("#closeGetLink, #buyBg").click(function(){
        $("#getLinkWindow").fadeOut(500)
        return false;
    });
    // end step 3
});