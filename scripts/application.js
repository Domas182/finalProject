$(document).ready(function(){

      
      $("[data-fancybox]").fancybox({
        iframe : {
            css : {
                'width' : '70%',
                'height' : '70%'
            }}});

      $('#scrollContact').click(function(){
        $('html,body').animate({
          scrollTop: $('.letUs').offset().top},
          'slow');
      });

      $('#changeReason').click(function(){
        if($(".reason1").css("display") != "none"){
          $(".reason1").fadeOut(400);
          $(".reason2").fadeIn(400);
        } else if ($(".reason2").css("display") != "none"){
            $(".reason2").fadeOut(400);
            $(".reason3").fadeIn(400);
        } else if ($(".reason3").css("display") != "none"){
              $(".reason3").fadeOut(400);
              $(".reason4").fadeIn(400);
        } else if ($(".reason4").css("display") != "none"){
                $(".reason4").fadeOut(400);
                $(".reason1").fadeIn(400);
        };
      });

      if (matchMedia("(max-width: 767px)").matches){
        var divs3 = $('div[id^="switch"]').hide(),s = 0;
        (function cycle() { 
          divs3.eq(s).fadeIn(400).delay(3000).fadeOut(400, cycle);
          s = ++s % divs3.length;
          })(); 
        } else {
          var divs = $('div[class*="firstClmnSwitch"]').hide(),i = 0;
      (function cycle() { 
        divs.eq(i).fadeIn(400).delay(3000).fadeOut(400, cycle);
        i = ++i % divs.length;
        })();
        
        var divs2 = $('div[class*="secondClmnSwitch"]').hide(),e = 0;
        (function cycle2() { 
          divs2.eq(e).fadeIn(400).delay(3000).fadeOut(400, cycle2);
          e = ++e % divs2.length;
          })(); 
          }; 
      
});