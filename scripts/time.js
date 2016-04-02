function demthoigian(){
	if(milisec <= 0){
		milisec = 600;
		seconds -= 1;
	}
	if(seconds <= -1){
		milisec = 0;
		seconds += 1;
		
	}else{
		milisec -= 1;
		document.getElementById("txtTime").value= seconds + "." + milisec; //Lưu thời gian vào ID=txtTime
		setTimeout("demthoigian()",100);
			SaveTime(document.getElementById("txtTime").value);		
		if(seconds + "." + milisec == 0){
			//alert("Đã hết hạn"
			document.getElementById("Showform").style.display="block";
			document.getElementById("ShowSubForm").style.display="block";
			setTimeout(function(){
			SubmitForm();	
			},10);			
			exit();
		}
	}
}
demthoigian();

function SubmitForm()
{
	
 links='http://localhost/demthoigian/luuthoigian.php'; //Đường dẫn tới file xem kết quả
  // window.location.href = "index.php?page=xemkq"
 $.ajax( 
  { 
 type:'POST', url:links, data:$('#idform').serialize(), success: 
 function(response) 
  {             
   setTimeout(function()
   {window.location.href = "index.php";},3000); 
  }
    });
  return false;
}



function SaveTime(time)
{
idluutg=document.getElementById("idluutg").value;
var xmlhttp;

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
    //document.getElementById("ketquam").innerHTML=xmlhttp.responseText;
    }
  }
links='http://localhost/demthoigian/luuthoigian.php?time='+time+'&idltg='+idluutg; //Lưu thời gian làm bài
//alert(links);
xmlhttp.open("GET",links,true);
xmlhttp.send();
}