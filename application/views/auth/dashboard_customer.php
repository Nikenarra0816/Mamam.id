<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Customer</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <style>
        :root {
            --input-padding-x: 1.5rem;
            --input-padding-y: .75rem;
        }

        body {
            background: #Ffffff;
          
        }

        .header {
        overflow: hidden;
        background: white;
        padding: 20px 10px;
        width: 100%; 
        
      }

.container-button{
width: 286px;
height: 41.05px;

background: #FEBB0F;
border-radius: 5px;
}


.mySlides {
  display:none;
  width: 1440px;
  height: 600px;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 0px;
  margin-left:25px;
  margin-top:50px;
  position:center;
}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}


/* Style the header links */
.header a {
  float: left;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  border-radius: 4px;
  margin-right: 10px;
  font-family: Poppins;
  font-style: bold;
  font-weight: 800;
  font-size: 20px;
  line-height: 30px;
  /* identical to box height */
  color: #FEBB0F;

}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.logo {
  font-size: 25px;
  font-weight: bold;
  color:black;
  margin-left:20px;
  
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
  width: 286px;
  margin-left:45px;
  margin-top:25px;
}
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
  width: 286px;
  margin-left: 400px;
  margin-top: -595px;
}
.card2 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
  width: 286px;
  margin-left: 765px;
  margin-top: -512px;
}


.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}


/* Change the background color on mouse-over */
.header a:hover {
  background: rgba(254, 187, 15, 0.2);
  color: #FEBB0F;
}

/* Style the active/current link*/
.header a.active {
  background-color: #FEBB0F;;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
  margin-right: 25px;
  padding:5px;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}


/* SEACRH */

* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 1000px;
  background: #ffffff;
  margin:50px;
  border-radius: 5px;
  margin-left: 40px;
  margin-top: 200px;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #47525d;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
    margin-top: -96px;
    border-radius: 5px;
    width: 150px;
    /* margin-left: 20px; */
    margin-top: 200px;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}

input[type=text] {
  width: 100%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
}
input[type=date] {
  width: 100%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
}
select {
  width: 100%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: white;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: #616060;
  border: none;
  color: white;
  padding: 16px 32px;
  margin-top:60px;
  text-decoration: none;
  cursor: pointer;
  width: 100%;
  /* height: 43px; */
  border-radius: 5px;
}

/* TITLE  */

  .title {
    position: absolute;
    width: 737px;
    height: 108px;
    left: 40px;
    top:100px;

    font-family: Poppins;
    font-style: normal;
    font-weight: 800;
    font-size: 36px;
    line-height: 54px;
    letter-spacing: 0.1em;

    color: #FFFFFF;
  }

  .vertical-menu {
     /* Set a width if you like */
    width: 372px;
    height: 456.4px;
    margin-left:25px;
    margin-top:100px;
    margin-bottom:50px;
    border-radius: 5px 5px 5px 5px;
    
  }
  .cont{
    font-family: Poppins;
    font-style: bold;
    font-weight: 500;
    font-size: 20px;
    line-height: 30px;
    letter-spacing: 0.1em;

    color: #000000;
    width: 1000px;
    height: 100px;
    margin-top:170px;
    margin-bottom:50px;
    /* background-color: #FEBB0F; Grey background color */
    
  }

  .vertical-menu a {
    width: 372px;
    height: 65.2px;
    background-color: #FEBB0F; /* Grey background color */
    color: white; /* Black text color */
    display: block; /* Make the links appear below each other */
    padding: 12px; /* Add some padding */
    text-decoration: none; /* Remove underline from links */
    border-radius: 0px 0px 0px 0px;
  }

  .vertical-menu a:hover {
    background-color: #eee; /* Dark grey background on mouse-over */
    width: 372px;
    height: 65.2px;
    border-radius: 0px 0px 0px 0px;
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
  }

  .vertical-menu a.active {
    background-color: #F8A324;; /* Add a green color to the "active/current" link */
    color: white;
    width: 372px;
    height: 65.2px;
    border-radius: 0px 0px 0px 0px;
  }

  .footer {
  /* position: fixed; */

  height: 325px;
  background: rgba(0, 0, 0, 0.7);
  color: white;
  padding-left:100px;
  font-style: normal;
    font-weight: 500;
    font-size: 20px;
    line-height: 54px;
    letter-spacing: 0.1em;
    position: absolute;
    width: 100%;
    margin-top:100px;
  }
  .title-footer{
    font-family: Poppins;
    font-style: normal;
    font-weight: 800;
    font-size: 36px;
    line-height: 54px;
    letter-spacing: 0.1em;
    color: #FFFFFF;
    padding-top:25px;
  }
  .subtitle-footer{
    font-family: Poppins;
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 54px;
    letter-spacing: 0.1em;
    color: #FFFFFF;
  }

  .slidep {
  /* position: fixed; */

  height: 1000px;
  background: rgba(0, 0, 0, 0.5);
  color: white;
  padding-left:100px;
  font-style: normal;
    font-weight: 500;
    font-size: 20px;
    line-height: 54px;
    letter-spacing: 0.1em;
    position: absolute;
    width: 1440px;
    margin-left:25px;
  }
  .title-slidep{
    font-family: Poppins;
    font-style: bold;
    font-weight: 800;
    font-size: 48px;
    line-height: 72px;
    letter-spacing: 0.1em;
    padding-top: 305px;
}

    color: rgba(255, 255, 255, 0.96);
    padding-top:25px;
  }
  .subtitle-slidep{
    font-family: Poppins;
    font-style: bold;
    font-weight: 1000;
    font-size: 25px;
    line-height: 54px;
    letter-spacing: 0.1em;
    color: #FFFFFF;
  }

  .collapsible {
  color: white;
  /* cursor: pointer; */
  padding: 18px;
  text-align: left;
  outline: none;
  font-size: 15px; 
  width: 808px;
  height: 68px;
  background: #FEBB0F;

font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 20px;
line-height: 30px;
/* identical to box height */


color: #FFFFFF;

}

.active, .collapsible:hover {
  background-color: #FEBB0F;
  border:none;
  outline: none;
}

.content {
  padding: 12px;
  display: none;
  overflow: hidden;
  background-color:#FFFFFF;
  text-align: left;

  font-family: Poppins;
  font-style: normal;
  font-weight: normal;
  font-size: 20px;
  line-height: 30px;
  /* identical to box height */


  color: #000000;
}
.colep{
width: 808px;
height: 905px;
margin-top: -508px;
margin-left: 504px;
margin-bottom: 150px;

background: #FFFFFF;
border: 2px solid #FEBB0F;
box-sizing: border-box;
/* border-radius: 5px; */
}


.box-text{
width: 516px;
height: 54px;
left: 64px;
top: 809px;
margin-left:25px;
margin-top:30px;
margin-bottom:25px;

font-family: Poppins;
font-style: bold;
font-weight: 600;
font-size: 36px;
line-height: 54px;
/* identical to box height */

letter-spacing: 0.1em;

color: #000000;
}

.box-cont{
width: 516px;
height: 54px;
left: 64px;
top: 809px;
margin-top:40px;
margin-bottom:25px;

font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 36px;
line-height: 54px;
/* identical to box height */

letter-spacing: 0.1em;

color: #000000;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #FEBB0F;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  /* padding: 2px 16px; */
  background-color: #FEBB0F;
  color: white;
}


.box-cont1{
width: 516px;
height: 54px;
left: 64px;
top: 809px;
margin-top:135px;
margin-bottom:25px;

font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 36px;
line-height: 54px;
/* identical to box height */

letter-spacing: 0.1em;

color: #000000;
}

.box{
  margin-left:35px;
  margin-bottom:35px;
}
.column {
  float: left;
  width: 360px;
  padding: 20px;
  height: 172px;
 /* Should be removed. Only for demonstration */
 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  margin-left:10px;
  font-family: Poppins;
font-style: bold;
font-weight: 800;
font-size: 20px;
line-height: 30px;
/* identical to box height */

letter-spacing: 0.1em;

color: #000000;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
.popup{
  margin-left: 14px;
  margin-bottom: 20px;
  background: #FEBB0F;
  border-radius: 5px;
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

</style>
</head>
<body>
<div class="header">
  <div  class="logo">Mamam.id</a>
  <div class="header-right">
    <a class="active" href="#home">Login</a>
    <a class="active" href="#home">Daftar</a>
  </div>
</div>

<div class="w3-content w3-section" style="max-width:500px">
<div class="slidep">
  <p class="title-slidep">YOU STAY AT HOME <br>
  WE DELIVER !</p>
  <p class="subtitle-slidep">
  Anti Ribet <br>
  Order Cepat <br>
  Halal 100% </p></p>
  </div>
  <img class="mySlides" src="<?php echo base_url(); ?>assets/image/slide1.jpg" style="height: 1000px;" >
  <img class="mySlides" src="<?php echo base_url(); ?>assets/image/slide2.jpg" style="height: 1000px;" >
  <img class="mySlides" src="<?php echo base_url(); ?>assets/image/slide3.jpg" style="height: 1000px;" >
</div>

<p class="box-text">Mau Makan Apa Besok ?</p>
<div class="box">
<div class="row" >
  <div class="column" style="background-color:#FEBB0F;">
    <h2>Menu Pesananan</h2>
    <form>
      <input type="text" name="search" placeholder="Menu Pesanan">
    </form>
  </div>
  <div class="column" style="background-color:#FEBB0F;">
    <h2>Tanggal Pesanan</h2>
    <form>
      <input type="date" name="search" placeholder="Menu Pesanan">
    </form>
  </div>
  <div class="column" style="background-color:#FEBB0F;">
    <h2>Kategori</h2>
    <form>
      <select id="category" name="category">
      <option value="au">Semua Kategori</option>
      <option value="ca">Individu</option>
      <option value="usa">Kids</option>
      <option value="usa">Family</option>
      </select>
    </form>
  </div>
  <div class="column" style="background-color:#FEBB0F;">
  <input type="button" value="Search">
  </div>
  <br>
  </div>
  <p class="box-cont">Apa Ada Kategori lain ?</p> 
  <a class="active" href="#home">Semua Kategori</a>
  <a href="<?php echo base_url('');?>">Individu</a>
  <a href="<?php echo base_url('');?>">Kids</a>
  <a href="<?php echo base_url('');?>">Family</a>
</div>
</div>
<div class="card">
  <img src="<?php echo base_url(); ?>assets/image/ayambbq.jpg" alt="Avatar" style="width:100%">
  <div class="container" >
    <h4><b>Ayam BBQ</b></h4> 
    <p>Rp 15.000</p> 
    <input type="button" value="Pesan" style="background-color:#FEBB0F; width: 250px; height: 41.05px; margin-top:15px;margin-bottom:15px;">
</div>
<button class="popup" id="myBtn" style="background: rgba(254, 187, 15, 0.2);border: 1px solid #FEBB0F;color:#FEBB0F;font-weight: bold;
box-sizing: border-box; width: 250px; height: 41.05px; margin-top:15px;margin-bottom:25px;
  border-radius: 5px;">See Detail</button>
    <div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Detail Ayam BBQ</h2>
  </div>
  <div class="modal-body">
  <BR>
    <p>Ayam barbeque, Kentang slice, Sayuran segar, Saos barbeque</p> 
    
    <p>- Lauk pendamping dapat berbeda pada setiap pesanan <BR>
- Minimum pemesanan 5 box untuk bento mealbox atau valuebox <BR>
- Maksimal pemesanan H-1</p> 
<h3><b>@Box Rp 15.000,-</b></h3> <BR>
<br>

  </div>
  <div class="modal-footer">
  <p>Untuk pertanyaan dan pemesanan silahkan hubungi Whatsapp Customer Care kami di  081334866525, Senin-Jumat 9:00-17:00 WIB</p>
  </div>
</div>

</div>
</div>
<div class="card1">
  <img src="<?php echo base_url(); ?>assets/image/ayamkatzu.jpg" alt="Avatar" style="width:100%">
  <div class="container" >
    <h4><b>Ayam Katzu</b></h4> 
    <p>Rp 15.000</p> 
    <input type="button" value="Pesan" style="background-color:#FEBB0F; width: 250px; height: 41.05px; margin-top:15px;margin-bottom:15px;">
  </div>
</div>
</div>
<div class="card2">
  <img src="<?php echo base_url(); ?>assets/image/ayamkatzu.jpg" alt="Avatar" style="width:100%">
  <div class="container" >
    <h4><b>Ayam Rujak</b></h4> 
    <p>Rp 20.000</p> 
    <input type="button" value="Pesan" style="background-color:#FEBB0F; width: 250px; height: 41.05px; margin-top:15px;margin-bottom:15px;">
  </div>
</div>
</div>


<p class="box-cont1" style="margin-left:40px;">Promo</p> 
</div>
</div>
<div class="card">
  <img src="<?php echo base_url(); ?>assets/image/ayambbq.jpg" alt="Avatar" style="width:100%">
  <div class="container" >
    <h4><b>Ayam BBQ</b></h4> 
    <p>Rp 15.000</p> 
    <input type="button" value="Pesan" style="background-color:#FEBB0F; width: 250px; height: 41.05px; margin-top:15px;margin-bottom:15px;">
  </div>
</div>
</div>


<div class="footer">
  <p class="title-footer">Mamam.id</p>
  <p>Catering terkini , <br>
cepat dan 100% halal </p>
<p class="subtitle-footer">Sawojajar Gang XII , Malang , Jawa Timur </p>
</div>
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html> 