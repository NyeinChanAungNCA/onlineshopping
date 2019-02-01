// JavaScript Document

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

//chnage id
function ChangeID(itemid)
{
	 var request=getObj();
			request.onreadystatechange=function()
				{
					if(request.readyState==4 && request.status==200)
						{
						
							document.getElementById("res").innerHTML=request.responseText;
							
						}
				}
		
			request.open("GET","update_show.php?itemid="+itemid,true);
			request.send();
}

///
function Delete()
{
	var r=confirm("Are u sure want to delete?");
	if(r==true)
	{
    document.ff.action="DeleteEvent_db.php";
	}
	else
	{
		 document.ff.action="index.php";
	}
}