document.getElementById('jbtn').onclick = function(){
	var userpass = document.querySelector('.userpass').value,
	usercpass = document.querySelector('.usercpass').value;
	
	if(userpass == ""){
	alert("Fill all details");	
	return false;}
		
	else if(userpass != usercpass){
	alert("Password dismatched");
	return false
	}
	
	return true
	
}