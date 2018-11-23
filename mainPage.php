<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width= device-width, initial-scale=1">
	<title>Kolik Kz</title>
</head>
<style >
	body{
	background-image: url("back10.jpg");
	background-size: cover;
	background-repeat: no-repeat;
	margin:0;
}
.acc{
	position: absolute;
	top:2px;
	right: 25px;
	
}

.l{
	text-decoration: none;
	color: white;
	font-size: 20px;
}
.l:hover{
	color:yellow;
}

span{
	color:white;
	font-size: 45px;

}
form{
	padding: 5px;
}
button{
	padding: 0px 2px 0px 2px;
	margin-left:5px;
	border-radius: 5px;
}
.cars{
	padding-left: 30px; 
}
.contact{
	color: white;
}
.kolik{
	margin-top:20px;
}
b{	padding-left:5px; 
	color:black;
}
.iconki{
	position: absolute;
	top:15;
	left: 40%;
	text-align: center;
}
.newpage{
	color:white;
	text-decoration:none; 
}
.title{
	position: relative;
	margin-left: 60px;
	bottom: 0;
	height: 100%;
}
.gif{
	position: absolute;
	top:30%;
	left:30%;
}

.footer{
	background-color: #333333;
	width: 100%;
	position: absolute;
	bottom: 0;
	left: 0;
}
.o{
	color: white;
}
.o:hover{
	color: red;
}
.texts{
	margin-left: 15px;
	text-align: center;
	object-position:  center;
}
.icons{
	padding: 5px;
}

.hrefs{
	margin-top: 50px;
}
.mash{
	text-decoration: none;
	color:yellow;
	display: block;
	margin-top: 10px;
	font-size: 25px;
	width: 200px;
}
.hrefs a:hover{
	color: white
}
.newpage:hover{
	color: yellow;
}
.categories-content{ 
display: none; 
position: absolute; 
background-color: #F9F9F9; 
min-width: 120px; 
box-shadow: 0px 8px 16px 0px 
rgba(0,0,0,0.2); 
} 
.mySlides{
	width: 450px;
	height: 350px;
}
.gora{
	position: absolute;
	top:0px;
	left: 5%;
	font-weight:bold;
	font-size: 25px;
}
.active .categories-content a{ 
color: black; 
} 

.categories .active{ 
} 
.galery{
	position: absolute;
	width: 450px;
	height: 350px;
	top:10%;
	left:30%;
}
.b_left{
	position: absolute;
	top:50%;
	left:0px;
}
.b_right{
	position: absolute;
	top:50%;
	right:0px;
}

.categories:hover .categories-content{ 
display: block; 
}

@media  screen and(max-width:300px){
	.title{
		margin-left: 2px;
	}
	.signin{
		display: none;
	}	
}
</style>
<body>

	<div class="title">
		<div class="kolik"><span>KoLiK KZ</span>
			
  			<div class="acc">
			<a href="create.php" class="l">Подать объявление+</a>
			<div class="login"><a href="log.php" class="l">Login</a></div>
            <div class="reg"><a href="register.php" class="l">Registration</a></div>
			<div class="adm" ><a href="admin.php" class="l">Admin Page</a></div>
			</div>
			
			 
		<div class="hrefs">
			<a href="newCar.php?catergory=new" class="mash" > Новые машины </a>
			<a href="newCar.php?catergory=old" class="mash">Машины с пробегом</a>
			<a href="newCar.php?catergory=moto" class="mash">Мототехника </a>
			<a href="newCar.php?catergory=water" class="mash">Водный транспорт </a>
		</div>

	</div>
	</div>
	<div class="footer">
		<div class="texts"><a href="https://instagram.com" class="icons"><img src="insts.png" width="25" height="25"></a> 
			<a href="https://vk.com" class="icons"><img src="vk.ico" width="25" height="25"></a>
			<a href="https://odnoclasniki.com" class="icons"><img src="odno.png" width="25" height="25"></a>
			<a href="https://facebook.com" class="icons"><img src="fc.png" width="25" height="25"></a> <b class="contact">Contact us 87076061565</b></div>
</div>
<?php
	
	
	
	
?>	

</body>
</html>