function echeck(str) {	//Cấu tạo mail
	var at="@";
	var dot=".";
	var lat=str.indexOf(at);
	var lstr=str.length;
	var ldot=str.indexOf(dot);
	var pattern=/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|me|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
	if (str.indexOf(at)==-1){
		alert("Please enter your Email like (john@abc.com)");
		return false;
	}
	if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		alert("Please enter your Email like (john@abc.com)");
		return false;
	}
	if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		alert("Please enter your Email like (john@abc.com)");
		return false;
	}
	if (str.indexOf(at,(lat+1))!=-1){
		alert("Please enter your Email like (john@abc.com)");
		return false;
	}
	if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		alert("Please enter your Email like (john@abc.com)");
		return false;
	}
	if (str.indexOf(dot,(lat+2))==-1){
		alert("Please enter your Email like (john@abc.com)");
		return false;
	}
	if (str.indexOf(" ")!=-1){
		alert("Please enter your Email like (john@abc.com)");
		return false;
	}
	if(!pattern.test(str)){         
		alert("Please enter your Email like (john@abc.com)");
		return false;   
    }
	return true;				
}



function validate()
{
	
	if(document.frmregister.hoten.value=="" || document.frmregister.hoten.value==null)
	{
		alert("Vui lòng nhập họ và tên");
		document.frmregister.hoten.focus();
		return false;
	}

	if(document.frmregister.username.value=="" || document.frmregister.username.value==null)
	{
		alert("Vui lòng chọn tên đăng nhập");
		document.frmregister.username.focus();
		return false;
	}

	if(document.frmregister.password.value=="" || document.frmregister.password.value==null)
	{
		alert("Vui lòng nhập Password");
		document.frmregister.password.focus();
		return false;
	}

	if(document.frmregister.password1.value=="" || document.frmregister.password1.value==null)
	{
		alert("Vui lòng nhập lại Password");
		document.frmregister.password1.focus();
		return false;
	}

	if(document.frmregister.password.value != document.frmregister.password1.value)
	{
		alert("Password không khớp, vui lòng nhập lại");
		return false;
	}


	if(document.frmregister.diachi.value=="" || document.frmregister.diachi.value==null)
	{
		alert("Vui lòng nhập địa chỉ");
		document.frmregister.diachi.focus();
		return false;
	}

	if(document.frmregister.sodt.value=="" || document.frmregister.sodt.value==null)
	{
		alert("Vui lòng nhập số điện thoại liên lạc");
		document.frmregister.sodt.focus();
		return false;
	}


	if(document.frmregister.email.value=="" || document.frmregister.email.value==null)
	{
		alert("Vui lòng nhập đúng địa chỉ Email (tenmail@abc.com)");
		document.frmregister.email.focus();
		return false;
	}
	if (echeck(document.frmregister.email.value)==false){	//Kiểm tra mail
		document.frmregister.email.focus();
		return false;
	}

	if(document.frmregister.lop.value=="" || document.frmregister.lop.value==null)
	{
		alert("Vuilòng nhập tên lớp đang học");
		document.frmregister.lop.focus();
		return false;
	}

	if(document.frmregister.truong.value=="" || document.frmregister.truong.value==null)
	{
		alert("Vuilòng nhập tên trường đang học");
		document.frmregister.truong.focus();
		return false;
	}

	if(document.frmregister.ngaysinh.value=="" || document.frmregister.ngaysinh.value==null)
	{
		alert("Vuilòng nhập Ngày tháng năm sinh");
		document.frmregister.ngaysinh.focus();
		return false;
	}

	if(document.frmregister.gioitinh.value=="" || document.frmregister.gioitinh.value==null)
	{
		alert("Vuilòngchọn giới tính");
		document.frmregister.gioitinh.focus();
		return false;
	}

	if(document.frmregister.khoi.value=="" || document.frmregister.khoi.value==null)
	{
		alert("Vuilòng chọn khối học");
		document.frmregister.khoi.focus();
		return false;
	}

//	if(document.frmregister.hinhanh.value=="" || document.frmregister.hinhanh.value==null)
//	{
//		alert("Vui lòng chọn ảnh khối học");
//		document.frmregister.hinhanh.focus();
//		return false;
//	}

	return true;
}