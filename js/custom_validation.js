function form_validation(page_name,form_name){

var emailRegExp = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var mobileRegExp = /^[0-9]{1}[0-9]{9}/;
var numRegExp = /^[0-9]+$/;

var full_name,contact_no,email_id;
full_name = $("#full_name").val();
email_id = $("#email_id").val();
contact_no = $("#contact_no").val();
state = $("#state").val();

if(full_name === "" || full_name.length <= 2){
  $("#msg").html("<span style='color:red'><strong>Please enter name</strong></span>");
  setTimeout(function(){ $("#msg").html(""); }, 3000);
   $("#full_name").focus();
}else if(email_id === ""){
   $("#msg").html("<span style='color:red'><strong>Please enter email</strong></span>");
  setTimeout(function(){ $("#msg").html(""); }, 3000);
   $("#email_id").focus();
}else if(email_id !== "" && (!email_id.match(emailRegExp))){
    $("#msg").html("<span style='color:red'><strong>Please enter proper email</strong></span>");
    setTimeout(function(){ $("#msg").html(""); }, 3000);
    $("#email_id").focus();
}else if(contact_no === "" ||  (!contact_no.match(mobileRegExp))){
    $("#msg").html("<span style='color:red'><strong>Please enter whats number</strong></span>");
    setTimeout(function(){ $("#msg").html(""); }, 3000);
    $("#contact_no").focus();
}else if(contact_no.length < 10 || contact_no.length > 10){
    $("#msg").html("<span style='color:red'><strong>Please enter proper whats number</strong></span>");
    setTimeout(function(){ $("#msg").html(""); }, 3000);
    $("#contact_no").focus();
}else if(state === ""){
   $("#msg").html("<span style='color:red'><strong>Please select state</strong></span>");
  setTimeout(function(){ $("#msg").html(""); }, 3000);
   $("#state").focus();
}else{
    $("#apply_btn").css("display","none");
    $("#gif_image").css("display","block");  
    $.ajax({
		    url:page_name,
			method: 'post',
			data : $("#"+form_name).serialize(),
			success:function(data){
            
			  if(data == 1){
			    /* $("#msg").html("<span style='color:green'><strong>Popcorn Infotech team will contact you soon</strong></span>");*/
               //alert("Thank You ! We have received your details. Our experts will contact you shortly.");
               window.location.replace("thankyou.php"); 
                setTimeout(function(){ $("#msg").html(""); }, 3000);
                $("#apply_btn").css("display","block");
                $("#gif_image").css("display","none");
                $('input:text').val('');
                $('textarea').val('');
			  }else{
			     $("#msg").html("<span style='color:red'><strong>Something went wrong. Please try agian</strong></span>");
                 setTimeout(function(){ $("#msg").html(""); }, 3000);
			    $("#apply_btn").css("display","block");
                $("#gif_image").css("display","none");  
			  } 
			}	
		});

}

}