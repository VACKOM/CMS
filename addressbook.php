<!DOCTYPE HTIML>

<?php

    
//error_reporting(0);
require 'db/connect.php';
require 'functions/security.php';



if(!empty($_POST)){
    
        
       
        $ConNo = trim($_POST['ConNo']);
        $ConName = trim($_POST['ConName']);
        $ConEmail = trim($_POST['ConEmail']);
        $ConAdd = trim($_POST['ConAdd']);
        $ConNote = trim($_POST['ConNote']);
        $ConComp = trim($_POST['ConComp']);
        $ConWeb = trim($_POST['ConWeb']);
        
        $BDate = trim($_POST['ConBirth']);
         $bdate = new DateTime($BDate);
         $bdate = $bdate->format('d-m-Y'); // 31-07-2012s
    
    
            if(!empty($ConNo)&& !empty($ConName) && !empty($ConEmail) && !empty($ConAdd) && !empty($ConNote) && !empty($ConComp) && !empty($ConWeb)&& !empty($bdate)){
            
            $insert = $db->prepare("INSERT INTO Contacts (Number, Name, Email, Addresss, Company, Website, Notes, Birthday) VALUES (?,?,?,?,?,?,?,?)");
            $insert->bind_param('ssssssss', $ConNo, $ConName, $ConEmail, $ConAdd,  $ConComp, $ConWeb, $ConNote,$bdate);
                


}else{

   exit("Error While uploading image on the server");
}

            
            if($insert->execute ()){
           
            header('Location: index.php');
            }
            
          
            
        }
       else{echo 'NO';} 
    
        
       
       
    

?>

<html>
<head>
	<title> CMS</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-heigh, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
    
    	<link rel="stylesheet" href="themes/finalTheme.css" />
    <link rel="stylesheet" href="themes/finalTheme.min.css" />
   
    <title>Modex Mobile</title>
    <script class="cssdeck" src="jquery/jquery-2.1.1.min.js"></script>	
    <script class="cssdeck" src="jquery/jquery.mobile-1.4.2.min.js"></script>

    <link rel="stylesheet" href="jquery/jquery.mobile-1.4.2.min.css" media="screen"/>
	<link rel="stylesheet" href="jquery/jquery.mobile.icons-1.4.2.min.css"  media="screen"/>
    <link rel="stylesheet" href="jquery/jquery.mobile.inline-svg-1.4.2.min.css"  media="screen"/>
    <link rel="stylesheet" href="jquery/style.css" />
    <link href="" rel="shortcut icon">        
       
       
</head>
    <body>
<div data-role="page" id="schedule" data-theme="d" >
    <div data-role="header" data-theme="d" >
         <h4>Address Organizer</h4>
         <div data-role="navbar">
         <ul>
         <li><a href= "mainmenu.php">Dash Board</a></li>
         </ul>
         </div> 
    </div>
    
    
        
        
        
        <div data-role="content">

        <ol data-role="listview" data-inset="true" data-theme="d">
        <li data-role="list-divider">Sub Menu</li>
            <li><a href= "#NewCon">Enter New Contact</a></li>
            <li><a href= "">My Contacts</a></li>      
            <li><a href= "">Directory</a></li>
            
        </ol>
    
        </div>
    
        
    
        
        
       
  
    
  </div>
        
         <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2014</h2>
          </div>

        
        <!--  Page for New Contact Entery-->
        
        
        <div data-role="page" id="NewCon" data-theme="d">
     <div data-role="header" data-theme="d">
         <h4>Name Search</h4>
        
     </div>
    
          <div data-role="content">
    
             <form action="" method="POST" data-ajax = "false">
                <h4> Enter Contact Details .</h4>
                <br>
                 
                 <label for="Coname">Contact Name:</label>   
                <input type="text" id ="ConName" name="ConName" value =""  
                   placeholder="Enter Contact Name.....">
                    <br>
                 
                 <label for="conno">Contact Number:</label>
                 <input type="text" id ="ConNo" name="ConNo" value =""  
                   placeholder="Enter Contact Number.....">
                    <br>
                 
                 <label for="conadd">Contact Address:</label>
                 <input type="text" id ="ConAdd" name="ConAdd" value =""  
                   placeholder="Enter Contact Address.....">
                    <br>
                 
                 <label for="conemail">Email Address:</label>
                 <input type="text" id ="ConEmail" name="ConEmail" value =""  
                   placeholder="Enter Email Address.....">
                    <br>
                 
                 <label for="conorg">Organisation:</label>
                 <input type="text" id ="ConComp" name="ConComp" value =""  
                   placeholder="Enter Organisation.....">
                    <br>
                 
                 <label for="conbirth">Contact Birthday:</label>
                 <input type="date" id ="ConBirth" name="ConBirth" value =""  
                   placeholder="Enter Birthday.....">
                    <br>
                 
                 <label for="connote">Description:</label>
                 <input type="text" id ="ConNote" name="ConNote" value =""  
                   placeholder="Enter Notes.....">
                    <br>
                 
                 <label for="conweb">Website:</label>
                 <input type="text" id ="ConWeb" name="ConWeb" value =""  
                   placeholder="Enter Website address.....">
                    <br>
                 
                 
                    <br>
                 
                 
                 
                 
                <input type="submit" id ="submit" value="Save" >
                   
              </form>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2014</h2>
          </div>

        
    
  </div>

    </body>
</html>