function get(id)
	{
		return document.getElementById(id);
	}

	function validate()
	{
		//alert("OK");
		refresh();
		
		if(get("name").value == "")
		{
		hasError = true;
		get("err_name").innerHTML = "<span style='color: red;'>  Bank Name required.</span>";
		}
		if(get("paymentCat").value == "")
		{
		hasError = true;
		get("err_paymentCat").innerHTML = "<span style='color: red;'>  Category required.</span>";
		}
		
		if(get("description").value == "")
		{
		hasError = true;
		get("err_description").innerHTML = "<span style='color: red;'>  Description required.</span>";
		}
		

		
		return !hasError;
	}
	function refresh()
	{
		hasError = false;
		
		get("err_name").innerHTML = "";
		get("err_paymentCat").innerHTML = "";
		get("err_description").innerHTML = "";
		//get("err_p_image").innerHTML = "";
	}