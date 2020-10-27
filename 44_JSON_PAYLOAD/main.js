$(document).ready(function () {
    $("#save-user-data").on("click", function (e) {
        e.preventDefault();

        const fname = $("#first_name").val();
        const lname = $("#last_name").val();

        let arr = { first_name: fname, last_name: lname };

        $.ajax({
            url: "save-data.php",
            type: "POST",
            data: JSON.stringify(arr),
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            async: false,

            success: function(resp){
                
            }

        })// Ajax End
    }) // save-user-data Click End
}) // Document End