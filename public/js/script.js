$(document).ready(function(){
    var resum = $('#resume'),
        caruselFirstNum = 0,
        caruselFirstAllTemp = $("#inner>ul>li").length,
        innerFirst = $("#inner>ul"),
        textArea = [],
        resumTemplateSelect = "template1",
        resumTemplateBuy;
    if(window.location.href.lastIndexOf(".php")==-1){
        $("footer").attr("id", "footer");        
    }
        
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
    resum.find(">div").each(function(i){
        textArea[i] = true;
    })
    $(".hide-show").toggle(
        function(){
            $(this).parent().find("p").slideUp(300);
            $(this).text("show");
            textArea[$(this).parent("div").index()] = false;
            return false;
        },
        function(){
            $(this).parent().find("p").slideDown(300);
            $(this).text("hide");
            textArea[$(this).parent("div").index()] = true;
            return false;
        }
    );
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
        return false;
    });
    //$("#next").submit({resumTemplate:resumTemplateSelect, textArea:textArea}});
    $("#buy").click(function(){
        $("#buyWindow").fadeIn(500)
        return false;
    });
    $("#buyTemp").click(function(){
        alert("you bought a template")
        return false;
    });
    $("#closeBuyTemp, #buyBg").click(function(){
        $("#buyWindow").fadeOut(500)
        return false;
    });
    // end step 2

});    