$(document).ready(function (){

    toggleFenced();
    toggleGated();
    toggleEncroach();


    $("#fenced").change(function(){
        toggleFenced();
    });
    $("#gated").change(function(){
        toggleGated();
    });
    $("#encroach").change(function(){
        toggleEncroach();
    });
        // alert("tolo");
});
//setting fillable fields depending on user's choice
function toggleFenced(){
    if($("#fenced").val()=="yes")
        $("#fence_type").slideDown();
    else
        $("#fence_type").hide();
}
function toggleGated(){
    if($("#gated").val()=="yes")
        $("#gate_type").slideDown();
    else
        $("#gate_type").hide();
}
function toggleEncroach(){
    if($("#encroach").val()=="yes")
        $("#encroach_details").slideDown();
    else
        $("#encroach_details").hide();
}
// function togglePlotting(){
//     if($("#plotting_stat").val()=="Yes")
//         $("#plotting_det").show();
//     else
//         $("#plotting_det").hide();
// }

