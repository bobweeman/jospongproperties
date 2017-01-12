$(document).ready(function (){

    //auto hide
    $("#copy_conveyance").hide();

    togglePlotted();
    toggleStamp();
    toggleRegDeed();
    toggleRegTitle();
    toggleLitigation();
    toggleConveyance();
    toggleIndenture();

    $("#plotted").change(function(){
        togglePlotted();
    });
    $("#stamp_duty").change(function(){
        toggleStamp();
    });
    $("#registered_deed").change(function(){
        toggleRegDeed();
    });
    $("#registered_title").change(function(){
        toggleRegTitle();
    });
    $("#litigation_status").change(function(){
        toggleLitigation();
    });
    $("#head_conveyance").change(function(){
        toggleConveyance();
    });
    $("#signed_indenture").change(function(){
        toggleIndenture();
    });
});
//setting fillable fields depending on user's choice
function togglePlotted(){
    if($("#plotted").val()=="yes")
        $("#plot_details").slideDown();
    else
        $("#plot_details").hide();
}
function toggleStamp(){
    if($("#stamp_duty").val()=="yes")

        $("#stamp_duty_details").slideDown();
    else
        $("#stamp_duty_details").hide();
}
function toggleRegDeed(){
    if($("#registered_deed").val()=="yes")
        $("#registered_deed_details").slideDown();
    else
        $("#registered_deed_details").hide();
}
function toggleRegTitle(){
    if($("#registered_title").val()=="yes")
        $("#registered_title_details").show();
    else
        $("#registered_title_details").hide();
}

function toggleLitigation(){
    if($("#litigation_status").val()=="yes")
        $("#litigation_status_details").show();
    else
        $("#litigation_status_details").hide();
}
function toggleConveyance(){

    $('#head_conveyance').on('input',function(e){

        $("#copy_conveyance").show();
 });
}

function toggleIndenture(){
    if($("#signed_indenture").val()=="yes")
        $("#copy_signed_indenture").show();
    else
        $("#copy_signed_indenture").hide();
}
