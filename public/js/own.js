// $('.alert').delay(4000).slideUp(800);

$(document).ready(function(){
    $("#switch").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="residential"){
                $("#commercial").hide();
                $("#residential").show();
            }
            else if($(this).attr("value")=="commercial"){
                $("#commercial").hide();
                $("#residential").show();
            }

            else{
                $(".box").hide();
            }
        });
    }).change();
});
