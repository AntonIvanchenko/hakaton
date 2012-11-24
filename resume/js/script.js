$(document).ready(function(){
    var resum = $('#resume');
    $("#templatesMenu>li>a").click(function(){
        var resumTemplate = $(this).attr('href');
        console.log(resumTemplate)
        resum.removeClass().addClass(resumTemplate);
        return false;
    });
    // step 2
    $(".hide-show").click(function(){
    	$(this).parent(".param").addClass("param-hidden");
    	return false;
    });
    $(".hide-show span").click(function(){
    	$(this).parent().parent(".param").removeClass("param-hidden");
    	return false;
    });
    // buy btn
   /* $("#templatesMenu>.paid_template>a").click(function(){
    	$("#next").addClass("hidden");
    	$("#buy").removeClass("hidden");
    	return false;
    });
    $("#templatesMenu>.free_template>a").click(function(){
    	$("#buy").addClass("hidden");
    	$("#next").removeClass("hidden");
    	return false;
    }); */

    // step 2 / Carousel
    $( '#templatesMenu' ).elastislide();

});    