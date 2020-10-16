<!DOCTYPE html>
<head>
    <title>Spark Bank | Welcome</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap');

:root {
  --main-color: #242943 ;
}

*{
  padding: 0;
  margin: 0;
  text-decoration: none;
}
#box{
    margin-top: 25px;
    height: 400px;
    width: 400px;
    color: black;
    font-family: 'Nunito';
   margin-left: 590px;

}
#box1{
  background-color: wheat;
  height:100px;
  width:400px;
  border-radius: 5px;
}

.navbar{
  position: fixed;
  color: white;
  width: 100%;
  height: 70px;
  background-color: var(--main-color);
  font-family: 'Nunito';

}

.navbar__logo{
  position: absolute;
  left: 50px;
  width: 50px;
}


.navbar__links{
  position: absolute;
  opacity: 1;
  right: 50px;
  flex-basis: 30%;
  display: flex;
  top: 50%;
  transform: translateY(-50%);
  list-style-type: none;
}

.navbar__links a{
    color: white;
    font-family: Nunito;
}

.navbar__links a li{
    display: flex;
    align-items: center;
    height: 70px;
    padding: 0 40px;
    transition: 0.2s linear;
}

.navbar__links a li:hover{
    background-color: #ffffff;
    color: #242943 ;
}

.navbar__ham{
  position: absolute;
  right: 50px;
  top: 50%;
  transform: translateY(-50%);
  height: 30px;
  width: 30px;
  background-color: white;
  visibility: hidden;
  cursor: pointer;
}

@media (max-width: 600px){
  .navbar{
    position: fixed;
    width: 100%;
    background-color: var(--main-color);
  }
  
  .navbar__links{
    background-color: var(--main-color);
    width: 50%;
    position: absolute;
    opacity: 1;
    right: 0;
    flex-basis: auto;
    display: flex;
    flex-flow: column;
    top: -500px;
    transform: translateY(0);
    list-style-type: none;
    transition: 0.3s;
  }
  
  .active{
    top: 70px;
  }
  
  .navbar__ham{
    visibility: visible;
  }
}


.social{
    display: flex;
    flex-wrap: wrap;
    margin: 20px 0px 0px 0px;
    justify-content: space-between;
    color: grey;
}
.social a{
    text-decoration: none;
    margin: 0;
    color: #076678;
}
.social-link{
    font-size: 30px;
}
/* FOOTER */

.footer{
  position: absolute;
  bottom: 0;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;

  padding: 30px 0;
  width: 100%;
  background-color: #242943 ;
}

.logo{
  width: 50px;
  height: auto;
  margin-right: 20px;
  transition: 0.3s ease-in;

 }

.logo:hover{
  opacity: 0.5;
}

.footer__rights{
  font-family: 'Nunito';
  color: white;
}

.footer__rights a{
  color: white;
}

.footer__rights a:hover{
  text-decoration: none;
}
</style>
<body>

<nav class="navbar">
<a href="index.php"/>
<img class="logo"
           src='bank.svg' /></a>
           <h6>Spark Bank</h6>
             <ul class="navbar__links">
    <a href="index.php"><li>Home</li></a>
    <a href="customers.php"><li>Customers</li></a>
    <a href="transfer.php"><li>Fund Transfer</li></a>
  </ul>
  <div id="box">
<h1><center>Welcome to spark bank</center></h1><br>
<h3>This is a simple banking application created using</h3>
<div class="social">
<i class="fab fa-html5 fa-5x"></i>
<i class="fab fa-css3-alt fa-5x"></i>
<i class="fab fa-js fa-5x"></i>
<i class="fab fa-php fa-5x"></i>
<i class="fa fa-database fa-5x" aria-hidden="true"></i>
</div>

  </div>

  <div class="navbar__ham">

  </div>
</nav>

<!-- FOOTER -->

<footer class="footer">
 
      
  <div class="footer__rights">
  <b><a href="https://devokoder.me"/>Designed and Developed with &#9829; by Dijo Daiju |</a> 2020 </b>
   
  </div>
</footer>
</body>
</html>
<script>
$("document").ready(function(){
  $(".navbar__ham").on("click", function(){
    $(".navbar__links").toggleClass("active");
    
  });

  $(".navbar__links a li").on("click", function(){
    $(".navbar__links").removeClass("active");
  });
});




  
</script>