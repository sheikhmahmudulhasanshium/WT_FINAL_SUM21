var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		
		function validate(){
			refresh();
			if(get("uname").value == ""){
				hasError = true;
				get("err_uname").innerHTML = "*UserName Req";
			}
	
			if(get("email").value==""){
				hasError = true;
				get("err_email").innerHTML = "*Email Req";
			}
			
			
			
			return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_uname").innerHTML ="";
			get("err_email").innerHTML ="";
		}