function ValidateForm()  
{  
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	var fnameregex = /^[a-zA-Z]{2,30}$/;
	var snameregex = /^[a-zA-Z]{2,30}$/;
	var mail = document.forms["addForm"]["mail"].value;
	var fnameinfo = document.forms["addForm"]["firstName"].value;
	var snameinfo = document.forms["addForm"]["secondName"].value;
	var errors = "";
	if(!fnameinfo.match(fnameregex))  
	{ 
		errors += "You have entered an invalid first name! ";
	}
	if(!snameinfo.match(snameregex))  
	{ 
		errors += "\nYou have entered an invalid second name!";
	}
	if (!mail.match(mailformat))  
	{  
		errors += "\nYou have entered an invalid email address!";
	}  
	if (errors)  
	{  
		alert(errors);
		return false;  
	}
	else  
	{  
		return true;
	}  
}