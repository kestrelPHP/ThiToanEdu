<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">

.container22 {width: 130px; margin: 0 auto; overflow: hidden;}

.clock {width:120px; margin:0 auto; padding: 0; border:1px solid #333; color:#fff; }

#Date { font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; font-size: 10px; text-align:center; text-shadow:0 0 5px #00c6ff; color: #00cc00; }

ul1 { width:100px; margin:0 auto; padding:0px; list-style:none; text-align:center; }
ul1 li1 { display:inline; font-size: 1.7em; text-align: center; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; text-shadow:0 0 5px #00c6ff; color: #ff0000; 	font-weight: bold;}

#point { position:relative; -moz-animation:mymove 1s ease infinite; -webkit-animation:mymove 1s ease infinite; padding-left: 0; padding-right:0; }

@-webkit-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 10px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 10px #00c6ff; }	
}


@-moz-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 10px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 10px #00c6ff; }	
}

</style>
<script type="text/javascript" src="js_dongho"></script>
<script type="text/javascript">
$(document).ready(function() {
// Tao 2 mang chua ten ngay thang
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

// Tao moi doi tuong Date()
var newDate = new Date();
// Lay gia tri thoi gian hien tai
newDate.setDate(newDate.getDate());
// Xuat ngay thang, nam
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
	// lay gia tri giay trong doi tuong Date()
	var seconds = new Date().getSeconds();
	// Chen so 0 vao dang truoc gia tri giay
	$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
	},1000);
	
setInterval( function() {
	// Tuong tu lay gia tri phut
	var minutes = new Date().getMinutes();
	// Chen so 0 vao dang truoc gia tri phut neu gia tri hien tai nho hon 10
	$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
	
setInterval( function() {
	// Lay gia tri gio hien tai
	var hours = new Date().getHours();
	// Chen so 0 vao truoc gia tri gio neu gia tri nho hon 10
	$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);	
});
</script>

</head>
<body>
<div class="container22">
<div class="clock">
<div id="Date"></div>

<ul1>
	<li1 id="hours"> </li1>
    <li1 id="point">:</li1>
    <li1 id="min"> </li1>
    <li1 id="point">:</li1>
    <li1 id="sec"> </li1>
</ul1>

</div>
</div>
</body>
</html>
