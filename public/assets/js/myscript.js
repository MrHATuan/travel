
    // when new comment has image

$("input#btnCmImg").change(function () {
    $("#CmImage").slideDown();
    $this = $(this);
    readURL5(this);
});
function readURL5(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#demoImg').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
};

    // when reply comment has image

// $("input#btnReImg").change(function () {
//     $input=$(this);
//     $("#reCMimage").slideDown();
//     readURL6(this);
// });
// function readURL6(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function (e) {
//             $('#reCMImg').attr('src', e.target.result);
//         }
//         reader.readAsDataURL(input.files[0]);
//     }
// };
