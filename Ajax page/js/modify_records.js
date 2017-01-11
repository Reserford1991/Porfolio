function edit_row(id)
{
	
	var fname=document.getElementById("firstN_val"+id).innerHTML;
	var sname=document.getElementById("secondN_val"+id).innerHTML;
	var mail=document.getElementById("mail_val"+id).innerHTML;
	
	document.getElementById("firstN_val"+id).innerHTML="<input type='text' id='fname_text"+id+"' value='"+fname+"'>";
	document.getElementById("secondN_val"+id).innerHTML="<input type='text' id='sname_text"+id+"' value='"+sname+"'>";
	document.getElementById("mail_val"+id).innerHTML="<input type='text' id='mail_text"+id+"' value='"+mail+"'>";
	
	document.getElementById("edit_button"+id).style.display="none";
	document.getElementById("save_button"+id).style.display="block";
	
}

function save_row(id)
{
	
	var fname=document.getElementById("fname_text"+id).value;
	var sname=document.getElementById("sname_text"+id).value;
	var mail=document.getElementById("mail_text"+id).value;
	
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	var fnameregex = /^[a-zA-Z]{2,30}$/;
	var snameregex = /^[a-zA-Z]{2,30}$/;
	var errors = "";
	
	if(!fname.match(fnameregex))  
		{ 
			errors += "You have entered an invalid first name! ";
		}
		if(!sname.match(snameregex))  
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
		}
		
	if (!errors)
	{  
		$.ajax
		({
			type:'post',
			url:'modify_records.php',
			data:{
				edit_row:'edit_row',
				row_id:id,
				firstN_val:fname,
				secondN_val:sname,
				mail_val:mail
				
			},
			success:function(response) {
				if(response=="success")
				{
					document.getElementById("firstN_val"+id).innerHTML=fname;
					document.getElementById("secondN_val"+id).innerHTML=sname;
					document.getElementById("mail_val"+id).innerHTML=mail;
					document.getElementById("edit_button"+id).style.display="block";
					document.getElementById("save_button"+id).style.display="none";
				}
			}
		});
}
}


function delete_row(id)
{
	$.ajax
	({
		type:'post',
		url:'modify_records.php',
		data:{
			delete_row:'delete_row',
			row_id:id,
		},
		success:function(response) {
			if(response=="success")
			{
				var row=document.getElementById("row"+id);
				row.parentNode.removeChild(row);
			}
		}
	});
}

function insert_row()
{
	var fname=document.getElementById("first_name").value;
	var sname=document.getElementById("second_name").value;
	var mail=document.getElementById("mail").value;
	
	
	if (ValidateForm1())
	{
		$.ajax
		({
			type:'post',
			url:'modify_records.php',
			data:{
				insert_row:'insert_row',
				firstN_val:fname,
				secondN_val:sname,
				mail_val:mail
			},
			success:function(response) {
				if(response!="")
				{
					var id=response;
					var table=document.getElementById("user_table");
					var table_len=(table.rows.length)-1;
					var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='firstN_val"+id+"'>"+fname+"</td><td id='secondN_val"+id+"'>"+sname+ "</td><td id='mail_val"+id+"'>"+mail+"</td><td><input type='button' class='edit_button' id='edit_button"+id+"' value='edit' onclick='edit_row("+id+");'/><input type='button' class='save_button' id='save_button"+id+"' value='save' onclick='save_row("+id+");'/><input type='button' class='delete_button' id='delete_button"+id+"' value='delete' onclick='delete_row("+id+");'/></td></tr>";
					
					document.getElementById("first_name").value="";
					document.getElementById("second_name").value="";
					document.getElementById("mail").value="";
				}
			}
		});
	}
}

function ValidateForm1()  
{  
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	var fnameregex = /^[a-zA-Z]{2,30}$/;
	var snameregex = /^[a-zA-Z]{2,30}$/;
	var mailinfo = document.getElementById("mail").value;
	var fnameinfo = document.getElementById("first_name").value;
	var snameinfo = document.getElementById("second_name").value;
	var errors = "";
	if(!fnameinfo.match(fnameregex))  
	{ 
		errors += "You have entered an invalid first name! ";
	}
	if(!snameinfo.match(snameregex))  
	{ 
		errors += "\nYou have entered an invalid second name!";
	}
	if (!mailinfo.match(mailformat))  
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

/*
	function ValidateForm2()  
	{  
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	var fnameregex = /^[a-zA-Z]{2,30}$/;
	var snameregex = /^[a-zA-Z]{2,30}$/;
	// var mailinfo = document.getElementById('mail_text"+id+"').value;
	// var fnameinfo = document.getElementById('fname_text"+id+"').value;
	// var snameinfo = document.getElementById('sname_text"+id+"').value;
	
	var fname=document.getElementById("fname_text"+id).value;
	var sname=document.getElementById("sname_text"+id).value;
	var mail=document.getElementById("mail_text"+id).value;
	
	var errors = "";
	if(!fname.match(fnameregex))  
	{ 
	errors += "You have entered an invalid first name! ";
	}
	if(!sname.match(snameregex))  
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
}	*/