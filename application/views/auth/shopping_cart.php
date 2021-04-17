<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
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
        width: auto; 
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

.card-signin {
            border: 0;
            background: #FFFFFF;
            border-radius: 5px;
            margin:100px;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
            height:560px;
            width:550px;
            margin-left:330px;
            padding-top:10px;
            
        }

        .card-title {
            margin-bottom: 2rem;
            /* font-weight: 300; */
            font-size: 2rem;
            font-family: arial;
            color:#FEBB0F;
            margin-top: -45px;
            font-weight: bold;
            
        }

        .card-subtitle {
            margin-bottom: 10px;
            margin-top: 25px;
            margin-left:35px;
            font-family: Poppins;
            font-style: bold;
            font-weight: 500;
            font-size: 20px;
            line-height: 30px;
            /* identical to box height */

            letter-spacing: 0.1em;

            color: #000000;
            
            
        }

        .button {
            border: 0;
            background: #FEBB0F;
            border-radius: 5px;
            margin:100px;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
            height:48px;
            width:465px;
            margin-left: 2px;
            margin-top: 20px;
            color:#FFFFFF;
            transition-duration: 0.4s;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
             
        }
        .button:hover {
            background-color: #616060; 
            color: white;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }


        .text-forgot {
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 1.5rem;
            font-family: arial;
            color:#FEBB0F;
            margin-top: 25px;
            margin-left: 339px;
        }

        .card-body {
            padding:40px;
            margin-left:50px;
            font-family: Poppins;
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 30px;
            /* identical to box height */

            letter-spacing: 0.1em;

            color: #000000;
            
        }

        .form-signin {
            width: 100%;
           
            
        }

        .form-signin .btn {
            font-size: 80%;
            border-radius: 6px;
            letter-spacing: .1rem;
            font-weight: bold;
            padding: 1rem;
            transition: all 0.2s;
        }

        .form-label-group {
            position: relative;
            margin-bottom: 1rem;
            margin-left:35px;
            
        }

        .form-label-group input {
            height: auto;
            border-radius: 6px;
            width: 470px;
            border: 1px solid #FEBB0F;
            box-sizing: border-box;
            border-radius: 5px;
        }

        .form-label-group>input,
        .form-label-group>label {
            padding: var(--input-padding-y) var(--input-padding-x);
        }

        .form-label-group>label {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            margin-bottom: 0;
            /* Override default `<label>` margin */
            line-height: 1.5;
            color: #777; 
            border: 1px solid transparent;
            border-radius: 12px;
            transition: all .1s ease-in-out;
            
        }

        .form-label-group input::-webkit-input-placeholder {
            color: transparent;
        }

        .form-label-group input:-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-moz-placeholder {
            color: transparent;
        }

        .form-label-group input::placeholder {
            color: transparent;
        }

        .form-label-group input:not(:placeholder-shown) {
            padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
            padding-bottom: calc(var(--input-padding-y) / 3);
        }

        .form-label-group input:not(:placeholder-shown)~label {
            padding-top: calc(var(--input-padding-y) / 3);
            padding-bottom: calc(var(--input-padding-y) / 3);
            font-size: 12px;
            color: #777;
        }
        /* Fallback for Edge
        -------------------------------------------------- */

        @supports (-ms-ime-align: auto) {
            .form-label-group>label {
                display: none;
            }
            .form-label-group input::-ms-input-placeholder {
                color: #FEBB0F;
            }
        }

        /* Fallback for IE
        -------------------------------------------------- */

        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .form-label-group>label {
                display: none;
            }
            .form-label-group input:-ms-input-placeholder {
                color: #777;
            }
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

 

  .footer {
  /* position: fixed; */

  height: 325px;
  margin-top:150px;
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


    .box-cont{
    width: 516px;
    height: 54px;
    left: 64px;
    top: 809px;
    margin-top:30px;
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

    .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    border-radius: 10px;
    width: 286px;
    margin-left:1000px;
    margin-top:-700px;
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

    input[type=textarea]{
        border: 1px solid #FEBB0F;
        box-sizing: border-box;
        border-radius: 5px;
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
</div>


<p class="box-cont" style="margin-left:40px; margin-top:50px;" >Order Menu</p> 

    <div class="row">
          <div class="card-body">    
          <h1 class="card-subtitle ">QTY</h1>
          <div class="form-label-group">  
                <input type="number" name="number" id="text" class="form-control" placeholder="Email address" >
              </div>

            <h1 class="card-subtitle ">Date Booking</h1>
                <div class="form-label-group">  
                <input type="date" name="bookinge" id="text" class="form-control" placeholder="Email address" >
              </div>
              <h1 class="card-subtitle ">Alamat Pengiriman</h1>
              <div class="form-label-group">
                <input type="input" name="alamat" id="alamat" class="form-control" placeholder="Password">
              </div>
              <h1 class="card-subtitle ">Keterangan</h1>
              <div class="form-label-group" style="width:468px; 
              border: 1px solid #FEBB0F;
              box-sizing: border-box;
              border-radius: 5px;">
              <textarea name="message" class="form-control" rows="10" cols="30"></textarea>
              </div>
              <div class="form-label-group">
              <button class="button btn btn-lg btn-primary btn-block text-uppercase" type="submit">Pesan</button>
              <div class="card">
        <img src="<?php echo base_url(); ?>assets/image/ayambbq.jpg" alt="Avatar" style="width:100%">
        <div class="container" >
            <h4><b>Ayam BBQ</b></h4> 
            <p>Rp 15.000</p> 
            <!-- <input type="button" value="Pesan" style="background-color:#FEBB0F; width: 250px; height: 41.05px; margin-top:15px;margin-bottom:15px;"> -->
        </div>
              </div>
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
$(function() {
      $("div.quantity").append('<a class="inc qty-button">+</a><a class="dec qty-button">-</a>');

      $(".qty-button").on("click", function() {

      console.log('clicked');

      var $button = $(this);
      var oldValue = $button.parent().find("input").val();

      if ($button.text() == "+") {
        var newVal = parseFloat(oldValue) + 1;
      } else {
       // Don't allow decrementing below zero
        if (oldValue > 0) {
          var newVal = parseFloat(oldValue) - 1;
        } else {
          newVal = 0;
        }
      }

      $button.parent().find("input").val(newVal);

    });

  });

</script>
</body>
</html> 