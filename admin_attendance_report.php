// <?php
// include_once 'includes/db_connect.php';
// include_once 'includes/functions.php';
 
// sec_session_start();
 
// if (login_check($mysqli) == true) {
//   // echo "logged in ooooooooo";
//     $logged = 'in';
// } else {
//     $logged = 'out';
//   // echo "logged out kmmmm";
//   header('Location: index.php');
// }



// ?>



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
   
    
     
<?php

//error_reporting(0);
require 'db/connect.php';
require 'functions/security.php';

session_start();

$Chapel =$_SESSION['username'];
$Count = 0;

$SelectedDate = $_GET['action'];

$counting = '0';

$John = '0';
$Joel = '0';
$Romans = '0';
$Hebrews = '0';
$Peter = '0';
$Corinthians = '0';
$Jude = '0';
$Genesis = '0';
$Philemon = '0';
$Samuel= '0';
$Nehemiah = '0';
$Phillipians = '0';
$Ephesians = '0';
$Galatians = '0';
$Colossians = '0';
$Luke = '0';
$Mark = '0';
$James = '0';
$Acts = '0';
$Timothy = '0';
$Exodus = '0';
$Matthew = '0';
$Joshua = '0';    

$records = array();

if($results = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results->num_rows){
        while($row = $results->fetch_object()){
            $records[]=$row;
        }
        $results->free();
        
    }
    
    
    
    
}

if(! count($records)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records as $r){
    
   $Date= $r->Date;
   
  $chapelCode = substr($r->Cid ,4,5);
  
  
  
  //echo $chapelCode;
   
// $counting++;


if($chapelCode == "JOHN/" && $Date == $SelectedDate){
    $counting++;
     $John++;
    }
   else if($chapelCode == "JOEL/" && $Date == $SelectedDate){
       $counting++;
     $Joel++;
    }
   else if($chapelCode== "ROMAN" && $Date == $SelectedDate){
       $counting++;
     $Romans++;
    } 
    else if($chapelCode== "HEBRE" && $Date == $SelectedDate){
        $counting++;
     $Hebrews++;
    } 
     else if($chapelCode == "PETER" && $Date == $SelectedDate){
         $counting++;
     $Peter++;
    } 
     else if($chapelCode == "CORIN" && $Date == $SelectedDate){
         $counting++;
     $Corinthians++;
    } 
    else if($chapelCode == "JUDE/" && $Date == $SelectedDate){
        $counting++;
     $Jude++;
    } 
    else if($chapelCode == "GENES" && $Date == $SelectedDate){
     $Genesis++;
     $counting++;
    } 
     else if($chapelCode == "PHILE" && $Date == $SelectedDate){
     $Philemon++;
     $counting++;
    } 
    else if($chapelCode == "SAMUE" && $Date == $SelectedDate){
     $Samuel++;
     $counting++;
    } 
    else if($chapelCode == "NEHEM" && $Date == $SelectedDate){
     $Nehemiah++;
     $counting++;
    } 
    else if($chapelCode == "PHILL" && $Date == $SelectedDate){
     $Phillipians++;
     $counting++;
    }
    else if($chapelCode == "EPHES" && $Date == $SelectedDate){
     $Ephesians++;
     $counting++;
    } 
    else if($chapelCode == "GALAT" && $Date == $SelectedDate){
     $Galatians++;
     $counting++;
     
    }
     else if($chapelCode == "JAMES" && $Date == $SelectedDate){
     $James++;
     $counting++;
    }
    
     else if($chapelCode == "COLOS" && $Date == $SelectedDate){
     $Colossians++;
     $counting++;
    }
    else if($chapelCode == "LUKE/" && $Date == $SelectedDate){
     $Luke++;
     $counting++;
    }
    else if($chapelCode == "MARK/" && $Date == $SelectedDate){
     $Mark++;
     $counting++;
    }
    
    else if($chapelCode == "ACTS/" && $Date == $SelectedDate){
     $Acts++;
     $counting++;
    }
    else if($chapelCode == "TIMOT" && $Date == $SelectedDate){
     $Timothy++;
     $counting++;
    }
     else if($chapelCode == "MATTH" && $Date == $SelectedDate){
     $Matthew++;
     $counting++;
    } else if($chapelCode == "JOSHU" && $Date == $SelectedDate){
     $Joshua++;
     $counting++;
    }else{
        
    }

   
    
}


?>
</head>
    <body>
<div data-role="page" id="schedule" data-theme="d" >
    <div data-role="header" data-theme="d" >
         <h4>Sunday Service <?php echo ($SelectedDate); ?> </h4>
         <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()">Service Dates</a></li>
         </ul>
         </div> 
    </div>
    
     <div data-role="content">
       
        
        <ol data-role="listview" data-inset="true" data-theme="d">
        <li data-role="list-divider">Chapel Members List</li>
        
            <li><a href= "#John" data-ajax="false">John Chapel<span class="ui-li-count"><?php echo ($John); ?></span></a></li>
            
             <li><a href= "#Joel" data-ajax="false">Joel Chapel<span class="ui-li-count"><?php echo ($Joel); ?></span></a></li>
           
            <li><a href= "#Romans" data-ajax="false">Romans Chapel<span class="ui-li-count"><?php echo ($Romans); ?></span></a></li>
            
            <li><a href= "#Hebrews" data-ajax="false">Hebrews Chapel<span class="ui-li-count"><?php echo ($Hebrews); ?></span></a></li>
            
            <li><a href= "#Peter" data-ajax="false">Peter Chapel<span class="ui-li-count"><?php echo ($Peter); ?></span></a></li>
            
            <li><a href= "#Samuel" data-ajax="false">Samuel Chapel<span class="ui-li-count"><?php echo ($Samuel); ?></span></a></li>
            
            <li><a href= "#Jude" data-ajax="false">Jude Chapel<span class="ui-li-count"><?php echo ($Jude); ?></span></a></li>
            
            <li><a href= "#Genesis" data-ajax="false">Genesis Chapel<span class="ui-li-count"><?php echo ($Genesis); ?></span></a></li>
            
            <li><a href= "#Nehemiah" data-ajax="false">Nehemiah Chapel<span class="ui-li-count"><?php echo ($Nehemiah); ?></span></a></li>
            
            <li><a href= "#Phillipians" data-ajax="false">Phillipians Chapel<span class="ui-li-count"><?php echo ($Phillipians); ?></span></a></li>
            
            <li><a href= "#James" data-ajax="false">James Chapel<span class="ui-li-count"><?php echo ($James); ?></span></a></li>
            
            <li><a href= "#Galatians" data-ajax="false">Galatians Chapel<span class="ui-li-count"><?php echo ($Galatians); ?></span></a></li>
            
            <li><a href= "#Philemon" data-ajax="false">Philemon Chapel<span class="ui-li-count"><?php echo ($Philemon); ?></span></a></li>
            
            <li><a href= "#Corinthians" data-ajax="false">Corinthians Chapel<span class="ui-li-count"><?php echo ($Corinthians); ?></span></a></li>
            
            <li><a href= "#Ephesians" data-ajax="false">Ephesians Chapel<span class="ui-li-count"><?php echo ($Ephesians); ?></span></a></li>
            
             <li><a href= "#Colossians" data-ajax="false">Colossians Chapel<span class="ui-li-count"><?php echo ($Colossians); ?></span></a></li>
             
             <li><a href= "#Luke" data-ajax="false">Luke Chapel<span class="ui-li-count"><?php echo ($Luke); ?></span></a></li>
             
             <li><a href= "#Mark" data-ajax="false">Mark Chapel<span class="ui-li-count"><?php echo ($Mark); ?></span></a></li>
             
             
              <li><a href= "#Acts" data-ajax="false">Acts Chapel<span class="ui-li-count"><?php echo ($Acts); ?></span></a></li>
             
             <li><a href= "#Timothy" data-ajax="false">Timothy Chapel<span class="ui-li-count"><?php echo ($Timothy); ?></span></a></li>
             
             <li><a href= "#Exodus" data-ajax="false">Exodus Chapel<span class="ui-li-count"><?php echo ($Exodus); ?></span></a></li>
             
             <li><a href= "#Matthew" data-ajax="false">Matthew Chapel<span class="ui-li-count"><?php echo ($Matthew); ?></span></a></li>
             
             <li><a href= "#Joshua" data-ajax="false">Joshua Chapel<span class="ui-li-count"><?php echo ($Joshua); ?></span></a></li>
            
        
        </ol>
        <br>
        <hr>
        <?php
         print("Total No of Members = ".($counting)."<br/>");
        
        ?>
         </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div> 
  
  
        
        
   <div data-role="page" id="John" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >John Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "JOHN/"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=john\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($John == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of John Attendance = ".($John)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>    
        
        

 <!------------------------------- Joel Chapel------------------------------>
 
    <div data-role="page" id="Joel" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Joel Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "JOEL/"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=joel\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Joel == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Joel Attendance = ".($Joel)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>  
  
  
  
  <!------------------------------- Romans Chapel------------------------------>
 
    <div data-role="page" id="Romans" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Romans Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "ROMAN"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=romans\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Romans == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Romans Attendance = ".($Romans)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>  
    
 



<!------------------------------- Hebrews Chapel------------------------------>
 
    <div data-role="page" id="Hebrews" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Hebrews Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "HEBRE"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=hebrews\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Hebrews == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Hebrews Attendance = ".($Hebrews)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>  
    
        
 <!------------------------------- Peter Chapel------------------------------>
 
    <div data-role="page" id="Peter" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Peter Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "PETER"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=peter\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Peter == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Peter Attendance = ".($Peter)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>  
    
               
        
  <!------------------------------- Samuel Chapel------------------------------>
 
    <div data-role="page" id="Samuel" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Samuel Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "SAMUE"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=samuel\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Samuel == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Samuel Attendance = ".($Samuel)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
        
        
        
<!------------------------------- Jude Chapel------------------------------>
 
    <div data-role="page" id="Jude" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Jude Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "JUDE/"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=jude\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Jude == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Jude Attendance = ".($Jude)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
 
 
 <!------------------------------- Genesis Chapel------------------------------>
 
    <div data-role="page" id="Genesis" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Genesis Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "GENES"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=genesis\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Genesis == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Genesis Attendance = ".($Genesis)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
 
 
  <!------------------------------- Nehemiah Chapel------------------------------>
 
    <div data-role="page" id="Nehemiah" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Nehemiah Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "NEHEM"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=nehemiah\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Nehemiah == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Nehemiah Attendance = ".($Nehemiah)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
 
 
 
 <!------------------------------- Phillipians Chapel------------------------------>
 
    <div data-role="page" id="Phillipians" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Phillipians Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "PHILL"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=phillipians\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Phillipians == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Phillipians Attendance = ".($Phillipians)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
 
 
 <!------------------------------- James Chapel------------------------------>
 
    <div data-role="page" id="James" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >James Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "JAMES"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=james\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($James == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of James Attendance = ".($James)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>       
  
  
  <!------------------------------- Galatians Chapel------------------------------>
 
    <div data-role="page" id="Galatians" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Galatians Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "GALAT"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=galatians\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Galatians == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Galatians Attendance = ".($Galatians)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
 
 
  <!------------------------------- Philemon Chapel------------------------------>
 
    <div data-role="page" id="Philemon" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Philemon Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "PHILE"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=philemon\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Philemon == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Philemon Attendance = ".($Philemon)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
 
 
  <!------------------------------- Corinthians Chapel------------------------------>
 
    <div data-role="page" id="Corinthians" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Corinthians Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "CORIN"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=corinthians\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Corinthians == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Corinthians Attendance = ".($Corinthians)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
 
 
 
 <!------------------------------- Ephesians Chapel------------------------------>
 
    <div data-role="page" id="Ephesians" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Ephesians Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "EPHES"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=ephesians\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Ephesians == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Ephesians Attendance = ".($Ephesians)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
 
 
 <!------------------------------- Colossians Chapel------------------------------>
 
    <div data-role="page" id="Colossians" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Colossians Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "COLOS"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=colossians\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Colossians == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Colossians Attendance = ".($Colossians)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
 
 
 <!------------------------------- Luke Chapel------------------------------>
 
    <div data-role="page" id="Luke" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Luke Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "LUKE/"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=luke\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Luke == '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Luke Attendance = ".($Luke)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
 
 
 
 <!------------------------------- Mark Chapel------------------------------>
 
    <div data-role="page" id="Mark" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Mark Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "MARK/"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=mark\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Mark== '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Mark Attendance = ".($Mark)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div> 
  
  
  
   <!------------------------------- Acts Chapel------------------------------>
 
    <div data-role="page" id="Acts" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Acts Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "ACTS/"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=acts\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Acts== '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Acts Attendance = ".($Acts)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
 
 
 
 
 <!------------------------------- Timothy Chapel------------------------------>
 
    <div data-role="page" id="Timothy" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Timothy Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "TIMOT"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=timothy\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Timothy== '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Timothy Attendance = ".($Timothy)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
 
 
 
  <!------------------------------- Exodus Chapel------------------------------>
 
    <div data-role="page" id="Exodus" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Exodus Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "EXODU"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=exodus\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Exodus== '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Exodus Attendance = ".($Exodus)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
 
 
 
 <!------------------------------- Matthew Chapel------------------------------>
 
    <div data-role="page" id="Matthew" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Matthew Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "MATTH"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=matthew\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Matthew== '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Matthew Attendance = ".($Matthew)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>         
 
        
   
   
   <!------------------------------- Joshua Chapel------------------------------>
 
    <div data-role="page" id="Joshua" data-theme="d">
     <div data-role="header" data-theme="d">
     <h4>Sunday Attendance</h4>
     <div data-role="navbar">
         <ul>
         <li><a href= "javascript:history.back()" >Joshua Chapel List</a></li>
         </ul>
         </div>
        
     </div>
    
          <div data-role="content">
              
    <?php
    // Searching for atendance again --------------
    
   $records4 = array();

if($results4 = mysqli_query($db,"SELECT * FROM sunday_attendance")){
    
    if($results4->num_rows){
        while($row4 = $results4->fetch_object()){
            $records4[]=$row4;
        }
        $results4->free();
        
    }

}

if(! count($records4)){
    echo 'No Match Records Found...';
}else{
    
   
}
foreach($records4 as $r4){

     $Mid = $r4->Cid;
     
      $Date2= $r4->Date;
   
  $chapelCode2 = substr($r4->Cid ,4,5);
        
    // echo $Mid;
    // echo $chapelCode2; 
         
         if($chapelCode2 == "JOSHU"&& $Date2 == $SelectedDate ){
   $records3 = array();

// Searching for Member details to display again --------------

if($results3 = mysqli_query($db,"SELECT * FROM membersfile WHERE  Cid = '$Mid' ")){
    
    if($results3->num_rows){
        while($row3 = $results3->fetch_object()){
            $records3[]=$row3;
        }
        $results3->free();
        
    }

}

if(! count($records3)){
    echo 'No Match Records Foundoooo...';
}else{
    
   
}

// Printing Names -----------------
           foreach($records3 as $r3){
       print("<ul data-role=\"listview\" data-inset=\"true\">");
                                                 
                            print("<li data-ibm-jquery-contact=\"".($r3->Cid)."\">");
                            print("<a data-ajax=\"false\" data-transition=\"pop\"href=\"members_details.php?action=".($r3->Cid)."&activity=joshua\">");                           
                            print("".($r3->CFName)." ".($r3->CLName)."<br/>");
                            print("</a>");
                            print("</li>\n");  

                           

                          $test = array('var1'=>$numberholder, 'var2'=>($r3->CContact));
                          $numberholder =  $test['var1'].",". $test['var2'];
                         
                              
                                              
                    print("</ul>");      
           }
        
     }
    if($Joshua== '0'){
        //echo 'No Members recorded';
         
    }else{
         
        
    }
     }
     
?>


<br>
<hr>
        <?php
         print("No of Joshua Attendance = ".($Joshua)."<br/>");
        
        ?>
          </div>
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>
    
  </div>        
 
        
        
        
        
        
<!------------------------------The Page ends here-------------------------->
        
        </div>
        <div data-role="footer" data-position="fixed">
        
               <h2>Condra Solutions 2019 &copy; All Rights reserved.</h2>
          </div>
  
    
  </div>
  </body>
</html>