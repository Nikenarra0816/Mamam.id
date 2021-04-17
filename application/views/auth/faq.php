<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faq</title>
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
        background: rgba(0, 0, 0, 0.7);
        padding: 20px 10px;
        width: 100%; 
      }

      .slide {
        position: absolute;
        width: 100%;
        height: 350px;
        left: 0px;
        top: 89px;
        background: #FEBB0F;
      }

/* Style the header links */
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
  margin-left:10px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.logo {
  font-size: 25px;
  font-weight: bold;
  color:white;
  margin-left:20px;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color: #FEBB0F;;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
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

</style>
</head>
<body>
<div class="header">
  <div  class="logo">Mamam.id</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Category</a>
    <a href="#about">FAQ</a>
    <a href="#about">Logout</a>
  </div>
</div>
<div class="slide">
<div class="title">FAQ | Frequently Asked Questions</div>
<form class="example">
  <input type="text" placeholder="Cari Pertanyaan" name="search">
  <button type="submit">Search </button>
</form>
<div class="vertical-menu">
  <a href="#" class="active">Kategori FAQ</a>
  <a href="<?php echo base_url('');?>">Login</a>
  <a href="<?php echo base_url('');?>">Register</a>
  <a href="<?php echo base_url('');?>">Profile</a>
  <a href="<?php echo base_url('');?>">Order</a>
  <a href="<?php echo base_url('');?>">Payment</a>
  <a href="<?php echo base_url('');?>">Invoice</a>
</div>
<div class="colep">
<button type="button" class="collapsible">Bagaimana Cara Login ?</button>
<div class="content">
  <p>1. Buka Halaman Login ( www.mamam.id/login ) <br>
     2. Masukan Email dan Password yang sudah terdaftar <br>
     3. Pastikan Email dan Password dengan format  yang benar <br>
     4. Klik Button Login <br>
     5. Anda akan masuk pada halaman home dashboard
  </p>
</div>
<button type="button" class="collapsible">Bagaimana Apabila Email Bermasalah ?</button>
<div class="content">
  <p>1. Pastikan Email Anda yang sudah terdaftar<br>
     2. Pastikan format yang Anda gunakan sudah benar <br>
  </p>
</div>
<button type="button" class="collapsible">Bagaimana Apabila Password Bermasalah ?</button>
<div class="content">
  <p>1. Pastikan Sandi Password Anda yang sudah terdaftar <br>
     2. Pastikan format yang Anda gunakan sudah benar <br>
     3. Pastikan Sandi Password yang Anda gunakan sudah benar <br>
     4. Apabila Sandi Password Salah , Silahkan Anda forgot password
  </p>
</div>
<button type="button" class="collapsible">Bagaimana Cara Forgot Password ?</button>
<div class="content">
  <p>1. Klik Forgot Password <br>
     2. Pastikan email yang Anda masukan sudah benar <br>
     3. Ubah password baru Anda <br>
     4. Konfirmasi password baru Anda <br>
     5. Tunggu notifikasi sukses password baru pada email Anda 
  </p>
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
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

</script>
</body>
</html> 