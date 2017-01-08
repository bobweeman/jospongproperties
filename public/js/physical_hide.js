$(document).ready(function (){

    toggleFenced();


    $("#fenced").change(function(){
        toggleFenced();
    });
        // alert("tolo");
});
//setting fillable fields depending on user's choice
function toggleFenced(){
    if($("#fenced").val()=="yes")
        $("#fence_type").slideDown();
    else
        $("#fence_type").delay('2000').slideUp();
}

// function togglePlotting(){
//     if($("#plotting_stat").val()=="Yes")
//         $("#plotting_det").show();
//     else
//         $("#plotting_det").hide();
// }

