function user_register(){
    var name=jQuery("#name").val();
    var name=jQuery("#email").val();
    var name=jQuery("#password").val();

    if(name==""){
        alert('Please Enter Name');
    }else if(email==""){
        alert('Please Enter Email');
    }else if(password==""){
        alert('Please Enter Password');
    }else{
        jQuery.ajax({
            url:'send_message.php',
            type:'post',
            data:'name='+name+'&email='+email+'&password='+password,
            success:function(result){
                alert(result);
            }
        });
    }  
 
}