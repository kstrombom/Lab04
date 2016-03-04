 function emailCheck(username)
{
	if(username.indexOf("@") == -1 || username.indexOf(".com") == -1 || username.indexOf("@") > username.indexOf(".com"))
	{
		alert("Username must be in the form of a .com email");
		return false;
	}
}
	
function passwordCheck(password)
{
	if(password === "")
	{
		alert("enter password");
		return false;
	}
}

function shippingCheck(shipping)
{
	if(shipping == "")
	{
		alert("Please select your shipping");
		return false;
	}
}

function dogCheck(Gonzo,Ginger,Sammy)
{
	if(Gonzo<0 || Ginger<0 || Sammy<0)
	{
		alert("Can't have a quantity less than zero");
		return false;
	}
	if(Gonzo=="" && Ginger=="" && Sammy=="")
	{
		alert("Please buy a dog");
		return false;
	}
	if(Gonzo==0 && Ginger==0 && Sammy==0)
	{
		alert("Please buy a dog");
		return false;
	}

}


function formChecker(username,password,shipping,Gonzo,Ginger,Sammy)
{
	passwordCheck(password);
	emailCheck(username);
	shippingCheck(shipping);
	dogCheck(Gonzo,Ginger,Sammy);
}
