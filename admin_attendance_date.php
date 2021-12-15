<?php 
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
  require 'db/connect.php';
require 'functions/security.php';



$records2 = array();

if($results2 = mysqli_query($db,"SELECT DISTINCT Date FROM sunday_attendance ORDER BY Date DESC")){
    
    if($results2->num_rows){
        while($row2 = $results2->fetch_object()){
            $records2[]=$row2;
        }
        $results2->free();
        
    }
    
    
    
    
}

if(! count($records2)){
    echo 'No Match Records Found 1...';
}else{
        
}



?>

<!DOCTYPE HTML>

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
    
    </head>
    
    <body>

<div data-role="page" id="thankucard" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Service</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Attendance List</a></li>
         </ul>
         </div> 
     
         
        
     </div>
    
          <div data-role="content">
              
    <?php
    // $tank = '0';
    // $thanks = '0';

    //  foreach($records as $r){
    //      $Count++;
    //  $now = time(); // or your date as well
    //  $your_date = strtotime($r->thanks);
    //  $datediff = $now - $your_date;
    //  $tank = floor($datediff/(60*60*24));
   
    // if($tank >= 0 ){
    //   $thanks++;
    
     foreach($records2 as $r2){ 
          $column = $r2->Date;
    
  
           
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r2->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"admin_attendance_report.php?action=".($column)."&activity=thanksyou\">");                           
                            print("".($column)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r2->Date));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
    
         
             
        
     }
    if($thanks == '0'){
        echo 'No Thank you SMS need to be sent today';
         
    }else{
         
        
        //  echo "Members to be called today = ";
        //  echo $counting;
        //   print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
        //                     print("<li data-ibm-jquery-contact=\"".($r->CContact)."\">");
        //                     print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"ScheduleSMS.php?action=".$numberholder."?\">");                           
        //                      print("Send SMS to All <br>");
        //                     print("</a>");
        //                     print("</li>\n");  
                                                
                                              
        //             print("</ul>");      
    }
?>


<br>
<hr>
        
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>

        
    
  </div>    

 </body>
</html>
