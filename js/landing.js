//anime stuff
$(document).ready(function(){
    $(".loginButton").click(function(){
        $(".login_over").show();
        setTimeout(loginContent, 800);
    });
}); 

function loginContent(){
$(document).ready(function() {
		$(".login").show(400); 
        $("#logoLogin").show(400);
        $("#logoTab").show(400);     
});
}

$(document).ready(function(){
    $(".signinButton").click(function(){
        $(".signin_over").show();
        setTimeout(signinContent, 800);
    });
}); 

function signinContent(){
$(document).ready(function() {
		$(".signin").show(400); 
        $("#logoSignin").show(400);
        $("#signinTab").show(400);     
});
}

//form
$('#Signfullname').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-zA-Z\s]/g,'') ); }
);
$('#Signusername').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-zA-Z0-9]/g,'') ); }
);
$('#Loginusername').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^a-zA-Z0-9]/g,'') ); }
);

//ajax
$(document).ready(function(){
	$(".signinBut").click(function(){

	})
});