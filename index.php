<?php
include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Voting System</title>
</head>
<body>
	<div style="margin-top: 100px;"></div>
     <div class="container-fluid">
     	<div class="col-md-12">
     		<div class="row"> 
     			<div class="col-md-1"></div>
     			<div class="col-md-8 bg-white">  
     		<!--<h2 class="text-center h1"><b>Welcome To Catholic University College of Ghana</b></h2>-->
               <h1 class="text-center h1">Faculty of Information Communication Science and Technology (ICST) </h1>
               <br>
               <br>
               <div class="shadow border-rounded ">
                    <h4 class="mx-4">SIGN-UP AS A USER</h4>
                    <p class="mx-4">Online voting system for the Faculty of Information Communication Science and Technology. Before someone can vote for a contestant, the person needs to have an account or create an account.<br><a href="signup.php">I don't have an account.</a>  </p>
                    <span class="mx-4 my-5" style="padding: 10px;">
                      <a href="signup.php"><img src="img/signup1.jpg">
                         <img src="img/signup2.jpg">
                         <img src="img/vote1.jpg" style="width: 190px">
                        </a> 
                    </span>
               </div>
               <br><br>
               <div class="shadow border-rounded my-5">
                  <h4 class="mx-4 mx-4 my-5 text-center">HOW TO VOTE</h4>
                  <p class="mx-4">This apppliction has been designed to give the user a friendly and easy to  navigate interface.<br> <br>
                    <a href="how_to_vote.php">How to vote?</a></p>  
                    <span class="mx-2">
                      <a href="how_to_vote.php"><img src="img/vote1" style="width: 250px;">
                         <img src="img/vote7">
                         <img src="img/vote4"></a>  
                    </span>
               </div>
               
                 <div class=" my-5 border-rounded shadow">
                      <h4 class="mx-4 my-5">FEATURES</h4>
                      <p class="my-1 mx-4">This Software support a lot of function which makes it unique from others.<br> These are the features of this software</p>
                      <ol>
                           <li>Update profile picture.</li>
                           <li>View all contestant before voting.</li>
                           <!--<li>Chatting with other registered users.</li>-->
                           <li>etc......</li>
                      </ol>
                 </div>
     			</div>
                    <div class="col-md-3 my-5">
                         <a href="signup.php"> <img src="img/signup3.jpg" class="my-4"></a>
                         <img src="img/vote1"  class="my-4">
                         <img src="img/vote3" class="my-4">
                         <img src="img/vote5" class="my-4">
                         <img src="img/vote6" class="my-4">
                    </div>
     		</div>
     	</div>
     </div>
</body>
</html>