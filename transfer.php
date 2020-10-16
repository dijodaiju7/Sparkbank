	
<?php
include 'dbconnection.php';
		error_reporting(0);
		$result = mysqli_query($db_handler,"SELECT *  FROM bank");
		$resul1 = mysqli_query($db_handler,"SELECT *  FROM bank");
?>
<!DOCTYPE html>
<head>
    <title>Fund Transfer</title>
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

.transferform{
		width: 800px;
		background-color: #2E2E2E;
        margin-top: 20px;
		margin-left: 300px;
		color: #ffffff;
		padding: 10px 0px 10 px 0px;
		text-align: center;
        border-radius: 15px 15px 0px 0px;
}
form {
        padding:5px;
	}
	.From{
	    margin-left: 90px;
	    margin-top: 70px;
	    width: 125px;
	    color: black;
	    font-size: 20px;
    
	}
	.to{
	    margin-left: 90px;
	    margin-top: 10px;
	    width: 125px;
	    color: black;
	    font-size: 20px;
    
	}
	.amount{
	    margin-left: 90px;
	    margin-top: 5px;
	    width: 125px;
	    color: black;
	    font-size: 20px;
    
	}
	.fromuser{
	    position: relative;
	    left: 250px;
	    top: -27px;
	    width: 300px;
	    height: 40px;
	    line-height: 30px;
	    border-radius: 6px;
	    padding: 0  50px;
	    font-size: 16px;
        background-color: #fff;
	}
	.touser{
	   position: relative;
	    left: 250px;
	    top: -27px;
	    width: 300px;
	    height: 40px;
	    line-height: 30px;
	    border-radius: 6px;
	    padding: 0  50px;
	    font-size: 16px;
	   background-color: #fff;
	}
	.amounttotransfer{
        position: relative;
	    left: 250px;
	    top: -20px;
        width: 200px;
	    height: 35px;
	    line-height: 30px;
	    border-radius: 6px;
	    padding: 0  50px;
	    font-size: 16px;
        background-color: #fff;
        border: 1px solid transparent;
        outline: 3px #000;
	}

#submit{
    position: relative;
    margin-left: 200px;
    margin-top: 25px;
    padding:5px 15px; 
    background-color:#242943;
    color: white;
    border:0 none;
    cursor:pointer;
    border-radius: 5px; 
    width: 180px;
    height: 40px;
    font-family: 'Nunito';
    font-size: 20px;
}
#submit:hover {
   background-color: #5587C8
   color: black;
   }

   .desk{
    position: relative;
    margin-left: 204px;
    margin-top: 25px;
    padding:5px 15px; 
background-color:   #242943;
color: white;
font-family: 'Nunito'; 
    border:0 none;
    cursor:pointer;
    border-radius: 5px; 
    width: 180px;
    height: 40px;
    font-size: 20px;
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

<img class="logo"
           src='bank.svg' />
           <h6>Spark Bank</h6>
             <ul class="navbar__links">
    <a href="index.php"><li>Home</li></a>
    <a href="customers.php"><li>Customers</li></a>
    <a href="transfer.php"><li>Fund Transfer</li></a>
  </ul>
  <div id="box">
<h1>Fund Transfer</h1>

<div class='main'>
<form action="" method="GET">
		<h1 class= From>  Source Account  </h1>
		<select  class= fromuser type="text"  name="u1" required value="">
		<option value =""></option>
		<?php
                        while($tname = mysqli_fetch_array($result)) {
                            echo "<option value='" . $tname['name'] . "'>" . $tname['name'] . "</option>";
                        }
                ?>

                </select>
		<h2 class= to>Beneficiary Account  </h2>
		<select  class =touser  type="text" name="u2" value="">
	     <option value =""></option>
		<?php
                        while($tname = mysqli_fetch_array($resul1)) {
                            echo "<option value='" . $tname['name'] . "'>" . $tname['name'] . "</option>";
                        }
                ?>

                </select>
		<h2 class= amount>Amount </h2>
		<input class = amounttotransfer type="number" name="amt" value=""><br>
		<input type="submit" id= submit name="submit" value=" Transfer">
	</form>
</div>

	<?php
	
			if($_GET['submit'])
			{
			$u1=$_GET['u1'];
			$u2=$_GET['u2'];
			$amt=$_GET['amt'];


			if($u1!="" && $u2!="" && $amt!="")
			{
				//update transaction changes in database
				$query1= "UPDATE bank  SET balance = balance + '$amt' WHERE name = '$u2' ";
				$data1= mysqli_query($db_handler, $query1);
				$query2= "UPDATE  bank  SET balance = balance  - '$amt' WHERE name = '$u1' ";
				$data2= mysqli_query($db_handler, $query2);
				
				//insert into transaction_history
				    $query1 = "INSERT INTO transfer (sender,reciever,amount) VALUES('$u1','$u2','$amt')";
                                    $res2 = mysqli_query($db_handler,$query1);
				
                                          if($res2){
		                           	 $user1 = "SELECT * FROM bank WHERE  name='$u1' ";
                                                 $res=mysqli_query($db_handler,$user1);
                                                 $row_count=mysqli_num_rows($res);
			                      }
				
            

				     if ($data1 && $data2)
				     {
              echo"<script type='text/javascript'>location.href = 'success.html';</script>";

				}
				else
				{
					$message="Error While Commiting Transaction ";
          echo "<script type='text/javascript'>alert('$message');
          </script>";
				}

			}

			else
			{
				$message="All Fields are Mandatory";
				echo "<script type='text/javascript'>alert('$message');
                    </script>";
			}
		}
		

  ?>
  <div class= btn>
	<a href="transactions.php"><button class = 'desk' align= center> Transactions</button></a>
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