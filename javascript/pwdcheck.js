// Third jquery
		$(document).ready(function(){
			$("#row2_con_right_image").cycle({fx:'shuffle',
			delay:  -999900
		});
		});
		
		//Fouth jquery
		$(document).ready(function(){
				$("#foth").cycle({fx:'scrollDown'});
    	});

// JavaScript Document
function Change()
{
	document.getElementById("cpwd").value="";
}
function checkpwd()
{
	var pwd=document.getElementById('pwd').value;
	var cpwd=document.getElementById('cpwd').value;
	if(pwd!=cpwd)
	{
		document.getElementById('show').innerHTML="Password and Confirm password does not match!";
	}
	else
		document.getElementById('show').innerHTML="";
}

//check email
function getObj()
{
		var req;
				if(window.XMLHttpRequest)
				{
					req=new XMLHttpRequest();
				}
			else
				{
					req=new ActiveXObject("Microsoft.XMLHTTP");
				}
				return req;
}
function CheckEmail(email)
{
	  var request=getObj();
			request.onreadystatechange=function()
				{
					if(request.readyState==4 && request.status==200)
						{
						
							document.getElementById("emailerror").innerHTML=request.responseText;
						}
				}
		//alert("Checkemail.php?email="+email);
			request.open("GET","Checkemail.php?email="+email,true);
			request.send();	
}