<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
   header('Location: index.php');
}
?>


<!DOCTYPE HTIML>



<html>
<head>
	<title> LCI</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-heigh, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
    	
    <link rel="stylesheet" href="themes/finalTheme.css" />
    <link rel="stylesheet" href="themes/finalTheme.min.css" />
	
    
    <script class="cssdeck" src="jquery/jquery-2.1.1.min.js"></script>	
    <script class="cssdeck" src="jquery/jquery.mobile-1.4.2.min.js"></script>

    <link rel="stylesheet" href="jquery/jquery.mobile-1.4.2.min.css" media="screen"/>
	<link rel="stylesheet" href="jquery/jquery.mobile.icons-1.4.2.min.css"  media="screen"/>
    <link rel="stylesheet" href="jquery/jquery.mobile.inline-svg-1.4.2.min.css"  media="screen"/>
    <link rel="stylesheet" href="jquery/style.css" />
    <link href="" rel="shortcut icon">        
       <script>
       
       
      
       </script>
</head>
    <body>
         <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
    <div data-role="page" id="schedule" data-theme="d" >
    <div data-role="header" data-theme="d" >
         <h4>Dash Board</h4>
         <div data-role="navbar">
         
         </div> 
    </div>
    
     <div data-role="content">
        
        
        
        <ul data-role="listview" data-inset="true" data-theme="d">
        <li data-role="list-divider">Main Menu</li>
             <br>
            <li><a href= "chapel_list.php">Chapel List</a></li>
             <br>
             <li><a href= "admin_member_list.php">Members List</a></li>
             <br>
            <li><a href= "schedules.php" data-transition ="slide">Daily Activity Schedule</a></li>
             <br>
             <li><a href= "admin_report_generator.php">Reports Generator</a></li>
            
        </ul>
        
     <?php
        if (login_check($mysqli) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . ' Chapel'.'.</p>';
 
            echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
        } else {
                        
                        header('Location: ../index.php');
                        echo '<p>Currently logged ' . $logged . '.</p>';
                        // echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
                        echo "<p>Enter Chapel Email Address & Password to Login</p>";
                }
?>    
 
        
        
        </div>
  <div data-role="footer" data-position="fixed">
        
               <h2>Condra Solutions 2019 &copy; All Rights reserved</h2>
          </div>   
    
  </div>
  
 
    
    </body>
    
    </html>