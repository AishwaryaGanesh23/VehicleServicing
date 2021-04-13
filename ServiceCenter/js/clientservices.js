$(document).ready(function(){

    var cookieEmail = getCookie("email").slice(0,-1);
    // alert(cookieEmail)
    $('#wcmsg').html('Services' + cookieEmail);
    
    $("#submit").on('click',function(e){
        
        e.preventDefault();

        // validations
        var serName = $("#service_name").val();
        var serprice = $("#service_price").val();

        // alert(vehRegNo);
        
        if(serName==""){
            $("#nameError").html('Service Name Required*');
            $("#nameError").css('color','red');
            $("#nameError").css('font-size','0.7rem');
            return(false);
        }
        else if(!(checkfochar(serName))){
            $("#nameError").html('Enter Valid Name');
            $("#nameError").css('color','red');
            $("#nameError").css('font-size','0.7rem');
            return(false);
        }
        else{
            $("#nameError").html('');
        }
        
        if(serprice==""){
            $("#priceError").html('Service price Required*');
            $("#priceError").css('color','red');
            $("#priceError").css('font-size','0.7rem');
            return(false);
        }
        else{
            $("#priceError").html('');
        }

    // ajax operation
        $.ajax({
            type:'POST',
            url:'web_services/addService.php',
            data: $("#service_form").serialize(),
            success:function(result){
                alert(result.status);
                if(result.status=='failed'){
                    // alert(result.status);
                    $("#formErr").html("Oops something went wrong. Please contact the admin. Sorry for the inconvinience");
                }
                else if(result.status=='success'){
                    // alert(result.status);
                    // $("#reg_msg").html("Registration Successfull. Try logging in."); 
                    window.location.href="listservices.php";
                }
            },
            error: function(error) {
                alert("error: "+error.status);
            }
        })
    
    })
    
})

function checkforspchar(string){
    return /[~`!#$%\^&*+=\-\[\]\\';.,/{}|\\":<>\?]/g.test(string);
}

function checkforno(string){
    return /\d/.test(string);
}

function checkfochar(string){
    return  /^[a-z][a-z\s]*$/i.test(string);
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }