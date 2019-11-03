$(document).ready(function() {

    // open the modal
    $("#contactBtn").on('click', function(e){
        $("#contactModal").show();
        $('#contact').trigger("reset");
        $('#contact').parsley().reset();
        $("#reCaptchaRequiredError").css("display","none");
        grecaptcha.reset();
        $("#responseMethodErrorField").css("display", "none");
    });


    // close the modal
    $("#closeModal").on('click', function(e){
        $('#contact').trigger("reset");
        $('#contact').parsley().reset();
        $("#reCaptchaRequiredError").css("display","none");
        grecaptcha.reset();
        $("#responseMethodErrorField").css("display", "none");
        $("#contactModal").hide();
    });


    // When the user clicks anywhere outside of the modal, close it
    $(window).click(function(e) {
        if(e.target.id == "contactModal"){
            $('#contact').trigger("reset");
            $('#contact').parsley().reset();
            $("#reCaptchaRequiredError").css("display","none");
            grecaptcha.reset();
            $("#responseMethodErrorField").css("display", "none");            
            $("#contactModal").hide();
        }
    });


    // Add Parsley functions to the contact form
    $('#contact').parsley();

    //create a dynamic row for cb error to properly show message
    //default functionality either leaves an unwanted blank space or breaks cb
    $("#sms_responseRequested").parsley().on('field:error', function(){
        console.log("inside parsley validation for #sms_responseRequested field:error");
        $("#responseMethodErrorField").css("display", "block");    
    });

    // Remove dynamic row when validated after cb error
    $("#sms_responseRequested").parsley().on('field:validate', function(){
        console.log("inside parsley validation for #sms_responseRequested field:validate");
        $("#responseMethodErrorField").css("display", "none");
    });



    // Form Reset settings for dynamic fields 
    $("#contact").on('reset', function(e) {
        console.log('inside reset from event function');
        $("#popOutLabel").text('');
        $("#popOutInput").html("");
        $('#contact').parsley().reset();
        $("#reCaptchaRequiredError").css("display","none");
        grecaptcha.reset();
        $("#responseMethodErrorField").css("display", "none");
    });  

    // catch ReCaptcha Status on Submit, prevent submission unless something exists in box
    $("#contact").submit(function(e){
        if( !grecaptcha.getResponse() ){
            e.preventDefault();
            console.log('form submit attempted without reCaptcha value');
            $("#reCaptchaRequiredError").css("display","block");
        }
    });

});


//Dynamic Field based on #responseMethod answer
$("input[name='responseMethod']").on('click', function(e){

    var radioValue = $("input[name='responseMethod']:checked").val();

    switch(radioValue){

        case "sms":
        case "phone":
            console.log("Your are a - " + radioValue);
            $("#popOutRowForResponseAnswer").css("display","block");
            $("#popOutLabel").text('Phone Number:\xa0\xa0\xa0');
            $("#popOutInput").html("<input type='tel' name='phone' pattern='[0-9]{3}-?[0-9]{3}-?[0-9]{4}' required />");
        break;

        case "email":
            console.log("Your are a - " + radioValue);
            $("#popOutRowForResponseAnswer").css("display","block");
            $("#popOutLabel").text('Email Address:\xa0\xa0\xa0');
            $("#popOutInput").html("<input name='email' type='email' data-parsley-type='email' data-parsley-required />");
        break;

    }

});


function resetDynamicFields(){

}