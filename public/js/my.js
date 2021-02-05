$(document).ready(function (){
    $('#new_image').click(function () {
        $("#image_thumbnail").parent().append($("<input/>",{type:"file",name:"image_detail[]",accept:'image/*'}));
    })
})
