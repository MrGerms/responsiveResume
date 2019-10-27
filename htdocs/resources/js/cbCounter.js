/**************************************
 * 
 * This is a simple script to verify if at 
 * lease one checkbox is selected in the 
 * modal pop up window.
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

$("#contact").on('reset', function(e) {

    console.log('inside reset from event function');
    
    $("#popOutLabel").text('');
    $("#popOutInput").html("");
    
});