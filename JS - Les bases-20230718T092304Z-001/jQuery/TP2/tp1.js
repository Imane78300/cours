
$(document).ready(function(){
        $('.question').css({
                "color": "black", 
                "font-weight": "bold",
                "background": "cyan",
                "border": "solid",
                "margin-top":"30px",
                "display":"flex",
                "justify-content": "space-between",
        });
      
        $("#reponse1").hide(); 
        $("#reponse2").hide(); 
        $("#reponse3").hide(); 
        
        $("a").hover(
                function(){
                        if ($('#r1').is(':checked')){
                                $("#reponse1").toggle(); 
                                $("#reponse1").css({"color": "green"}); 
                                $("#img1").attr("src","bon.png");
                        }   
                        if ($('#r3,#r2').is(':checked')){
                                $("#reponse1").toggle(); 
                                $("#reponse1").css({"color": "red"}); 
                                $("#img1").attr("src","mauvais.png");
                        }  
                        if ($('#r5').is(':checked')){
                                $("#reponse2").toggle(); 
                                $("#reponse2").css({"color": "red"}); 
                                $("#img2").attr("src","mauvais.png");
                        }   
                        if ($('#r4,#r6').is(':checked')){
                                $("#reponse2").toggle(); 
                                $("#reponse2").css({ "color": "green"}); 
                                $("#img2").attr("src","bon.png");
                        }  
                        if ($('#r7').is(':checked')){
                                $("#reponse3").toggle(); 
                                $("#reponse3").css({"color": "red"}); 
                                $("#img3").attr("src","mauvais.png");
                        }   
                        if ($('#r8,#r9').is(':checked')){
                                $("#reponse3").toggle(); 
                                $("#reponse3").css({"color": "green"}); 
                                $("#img3").attr("src","bon.png");
                        }  
                },
                function() {
                        
                }
        );
});





  



