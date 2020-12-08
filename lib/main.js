
$(document).ready(function(){
    $("#inputState").on('change', function(){
        $(".form").hide();
        $("#" + $(this).val()).fadeIn(500);
    }).change();
});


function validateForm() {
    var count_checked = $("[name='box[]']:checked").length;
    if (count_checked == 0) {
        alert("Please select at least one checkbox");
        return false;
    }else{
        return true;
    }
}


