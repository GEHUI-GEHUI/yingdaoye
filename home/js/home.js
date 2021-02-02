	var time=document.getElementsByClassName("time");
	var xmlhttp=new XMLHttpRequest();
	function time_ajax(){
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				time[0].innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","/date.php",true);
		xmlhttp.send();
	}
	setInterval("time_ajax()",1000) ;