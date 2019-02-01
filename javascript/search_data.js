// JavaScript Document
/*Item Search*/
		function SearchItem(itemname)
		{
			//alert("hi");
			if (itemname=="")	{
			document.getElementById("res").innerHTML="";
			return;	
		}
		 if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		  } 
		   else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			  //  alert(xmlhttp.responseText);
			  document.getElementById("res").innerHTML=xmlhttp.responseText;
			}
		  }
		  
		  xmlhttp.open("GET","SeachController.php?itemname="+itemname,true);
		  xmlhttp.send();
		
		}