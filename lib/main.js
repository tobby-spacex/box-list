
$(document).ready(function(){
    $("#inputState").on('change', function(){
        $(".form").hide();
        $("#" + $(this).val()).fadeIn(500);
    }).change();
});


// $(document).ready(function(){
//     // hideAll()
//       $("#inputState").on('change', function(){
//         // hideAll()
//         const formName = $('#inputState').val()
//         $('#' + formName).show() // #dvd
//         // .fadeIn(700);
//       })
//   });


// function hideAll(){
//     $(".boxs").hide();
// }