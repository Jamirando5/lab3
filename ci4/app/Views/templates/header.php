<!doctype html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,
100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;
1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    *{
        padding:0;
        margin:0;
        font-family: 'Barlow', sans-serif;
        box-sizing: border-box;
      }
      .hero{
        height: 100vh;
        width: 100%;
        background-image: url(images/BG.jpg);
        background-size: cover;
        background-position: center;
      }
      nav{
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 45px;
        padding-left: 8%;
        padding-right: 8%;
      }
      .logo{
        color: white;
        font-size: 50px;
        letter-spacing: 1px;
        cursor: pointer;
      }
      span{
        color: orangered;
      }
      nav ul li{
        list-style-type: none;
        display: inline-block;
        padding: 10px 25px;
      }
      nav ul li a{
        color: white;
        text-decoration: none;
        font-weight: bold;
        text-transform: capitalize;
        font-size: 30px;
      }
      nav ul li a:hover{
        color: orangered;
        transition: .2s;
      }
      .btn{
        background-color: orangered;
        color: white;
        text-decoration: none;
        border: 2px solid transparent;
        font-weight: bold;
        border: 2px solid transparent;
        padding: 10px 25px;
        border-radius: 30px;
        transition: transform ,4s;
      
      }
      .btn:hover{
        transform: scale(1.5);
      }
      .content{
        position: absolute;
        top: 50%;
        left: 8%;
        transform: translateY(-50%);
      }
      h1{
        color: white;
        margin: 20px 0px 20px;
        font-size: 100px;
        
      
      }
      h3{
        color: white;
        font-size: 40px;
        margin-bottom: 40px;
      }
      h4{
        color:  wheat;
        letter-spacing: 4px;
        font-size: 40px;
        
      }
      .newslatter form{
        width: 380px;
        max-width: 100%;
        position: relative;
      }
      .newslatter form input:first-child{
        display: inline-block;
        width: 100%;
        padding: 14px 130px 14px 15px;
        border: 2px solid orangered;
        outline: none;
        border-radius: 40px;
        
      }
      .newslatter form input:last-child{
        position: absolute;
        display: inline-block;
        padding: 10px 30px;
        border: none;
        outline: none;
        border-radius: 40px;
        border-radius: 30px;
        background-color:  orangered;
        top:6px;
        right: 6px;
      
      }
      .about{
        width: 100%;
        padding: 100px 0px;
        background-color: black;
      }
      .about img{
        height: auto;
        width: 700px;
      }
      .about-text{
        width: 550px;
        
      }
      .main{
        width:1800px;
        max-width: 95%;
        margin:0 auto;
        display: flex;
        align-items: center;
        justify-content: space-around;
      }
      .about-text h2{
        color: white;
        font-size: 75px;
        text-transform: capitalize;
        margin-bottom: 20px;
      }
      .about-text h5{
        color: white;
        letter-spacing: 2px;
        font-size: 22px;
        margin-bottom: 25px;
        text-transform: capitalize;
      }
      .about-text p{
        color:wheat;
        letter-spacing: 1px;
        line-height: 40px;
        font-size: 25px;
        margin-bottom: 45px;
      }
      button {
        background-color: orangered;
        color: white;
        text-decoration: none;
        border:2px solid transparent;
        font-weight: bold;
        padding: 13px 30px;
        border-radius: 30px;
        transition: .4s;
      }
      button:hover{
        background-color: transparent;
        border: 2px solid orangered;
        cursor: pointer;
      }
      .skills{
        background: rgb(39,40,45);
        width: 100%;
        padding: 100px 0px;
      
      }
      .title h2{
        color: white;
        font-size: 75px;
        width: 1130px;
        margin:30px auto;
        text-align: center;
      }
      .box{
        display:flex;
        justify-content: center;
        align-items: center;
        min-height: 400px;
      }
      .card{
        height:365px;
        width: 335px;
        padding: 20px 35px;
        background-color: black;
        border-radius: 20px;
        margin: 15px;
        position: relative;
        overflow: hidden;
        text-align: center;
      }
      .card i{
        font-size: 50px;
        display: block;
        text-align: center;
        margin: 25px 0px;
        color:orangered;
      }
      h5{
        color: white;
        font-size: 23px;
        margin-bottom: 15px;
      }
      .pra p{
        color: wheat;
        font-size: 16px;
        line-height: 27px;
        margin-bottom: 25px;
      }
      footer{
        position: relative;
        width:100%;
        height: 400px;
        background: black;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }
      footer p:nth-child(1){
        font-size: 30px;
        color: white;
        margin-bottom:20px;
        font-weight:bold;
      }
      footer p:nth-child(2){
        color: white;
        font-size: 17px;
        width: 500px;
        text-align: center;
        line-height: 26px;
      }
      .Social{
        display: flex;
      }
      .Social a{
        width: 75px;
        height: 75px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: orangered;
        border-radius: 50%;
        margin: 22px 10px;
        color:white;
        text-decoration: none;
      }
      .Social a:hover{
      cursor: pointer;
      background-color: white;
      color: orangered;
      transition: .5s;
      }
      
</style>
<?php 
?>
    <title>Stricto</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body>
<?php 

?>