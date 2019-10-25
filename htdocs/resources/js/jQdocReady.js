$(document).ready(function() {

    // open the modal
    $("#contactBtn").on('click', function(e){
        $("#contactModal").show();
        $('#contact').trigger("reset");        
    });

    // close the modal
    $("#closeModal").on('click', function(e){
        $('#contact').trigger("reset");
        $("#contactModal").hide();
    });

    // When the user clicks anywhere outside of the modal, close it
    $(window).click(function(e) {
        if(e.target.id == "contactModal"){
            $('#contact').trigger("reset");
            $("#contactModal").hide();            
        }
    });

    //Add Parsley functions to the contact form
//    $('#contact').parsley();

});

/**************************************
 * 
 * Simple script to dynamically load 
 * contact method input
 * 
 */

$("input[name='responseMethod']").on('click', function(e){

    console.log('inside click event function');

    var radioValue = $("input[name='responseMethod']:checked").val();

    switch(radioValue){

        case "sms":
        case "phone":
                console.log("Your are a - " + radioValue);
                $("#popOutLabel").text('Phone Number:\xa0\xa0\xa0');
                $("#popOutInput").html("<input type='tel' name='phone' pattern='[0-9]{3}-?[0-9]{3}-?[0-9]{4}' required />");
        break;

        case "email":
                console.log("Your are a - " + radioValue);
                $("#popOutLabel").text('Email Address:\xa0\xa0\xa0');
                $("#popOutInput").html("<input name='email' type='email' data-parsley-type='email' data-parsley-required />");                
        break;

    }

});


/********************************
 * 
 * Remove Dynamic Inputs in
 * case of being reset
 * 
 */
$("#contact").on('reset', function(e) {

    console.log('inside reset from event function');
    $("#popOutLabel").text('');
    $("#popOutInput").html("");
    
});