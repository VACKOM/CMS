<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
   // echo "logged in ooooooooo";
    $logged = 'in';
} else {
    $logged = 'out';
   // echo "logged out kmmmm";
   header('Location: index.php');
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
        
    <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
<div data-role="page" id="schedule" data-theme="d" >
    <div data-role="header" data-theme="d" >
         <h4>Chapels List</h4>
         <div data-role="navbar">
         <ul>
         <li><a href= "admin_mainmenu.php">Dash Board</a></li>
         </ul>
         </div> 
    </div>
     <div data-role="content">
         
         
         
                        <div class="container">
                            
    
              <form action="reports/attendance_search.php" enctype="multipart/form-data" method="POST" data-ajax = "false">
              
      <label class="control-label col-sm-2" for="sub">Select Month for search:</label>
      <div class="col-sm-10">  
      
       
        
            <select id="sub" class="form-control"  placeholder="Enter Stock name" name="sub"  onchange="document.getElementById('dtp_input2').value=this.options[this.selectedIndex].value">
                <option value="">Month</option>
                <option value="01">January</option>
                <option value="02">Februray</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
                
                
            </select>
            
            <hr>
              <label class="control-label col-sm-2" for="sub">Select Year for search:</label>
              <select id="sub" class="form-control"  placeholder="Enter Stock name" name="sub"  onchange="document.getElementById('dtp_input3').value=this.options[this.selectedIndex].value">
                <option value="">Year</option>
                 <!--<option value="all">Customer Main List</option>-->
                <!--<option value="">Customer Type</option>-->
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
               
                
            </select>
            
              <hr>
              <label class="control-label col-sm-2" for="sub">Select Chapel:</label>
              <select id="sub" class="form-control"  placeholder="Enter Chapel" name="sub"  onchange="document.getElementById('dtp_input4').value=this.options[this.selectedIndex].value">
                <option value="">Select Chapel</option>
                 <!--<option value="all">Customer Main List</option>-->
                <!--<option value="">Customer Type</option>-->
                <option value="All">All</option>
                <option value="ACTS/">Acts Chapel</option>
                <option value="COLOS">Colossians Chapel</option>
                <option value="CORIN">Corinthians Chapel</option>
                <option value="EXODU">Exodus Chapel</option>
                <option value="GALAT">Galatians Chapel</option>
                <option value="GENES">Genesis Chapel</option>
                <option value="HEBRE">Hebrew Chapel</option>
                <option value="JAMES">James Chapel</option>
                <option value="JOEL/">Joel Chapel</option>
                <option value="JOHN/">John Chapel</option>
                <option value="JOSHU">Joshua Chapel</option>
                <option value="JUDE/">Jude Chapel</option>
                <option value="LUKE/">Luke Chapel</option>
                <option value="MARK/">Mark Chapel</option>
                <option value="MATTH">Matthew Chapel</option>
                <option value="NEHEM">Nehemiah Chapel</option>
                <option value="PHILE">Philemon Chapel</option>
                <option value="PHILL">Phillipians Chapel</option>
                <option value="PETER">Peter Chapel</option>
                <option value="ROMAN">Romans Chapel</option>
                <option value="SAMUE">Samuel Chapel</option>
                <option value="TIMOT">Timothy Chapel</option>

               
              

            </select>
            
             <div class="form-group">
                 <div class="col-sm-12" id="my_div">  
                 
                 </div>
       
      
      </div>
    </div>
       
          
			<!--<div class="form-group">-->
			    
   <!--             <label for="dtp_input2" class="col-md-2 control-label">Date Picking</label>-->
   <!--             <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">-->
   <!--                 <input class="form-control" size="16" type="text" value="" readonly>-->
   <!--                 <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>-->
			<!--		<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>-->
					
					
   <!--             </div>-->
   <!--             </div>-->
                
                
               
				<input type="hidden" id="dtp_input2" name="dtp_input2" value="" /><br/>
				
					<input type="hidden" id="dtp_input3" name="dtp_input3" value="" /><br/>
					
					<input type="hidden" id="dtp_input4" name="dtp_input4" value="" /><br/>
					
					
            </div>
		
        
        
         <br>
        
      <div class="col-sm-offset-8 col-sm-10">
      
        
        <input type="button" class="btn btn-primary" value="Reset" onclick="location.reload();" />
       
        <button type="submit" class="btn btn-primary">Search for Attendance Details</button>
      </div>
    </div>
    </form>
</div>
        </div>
                
  
            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2019</h2>
          </div>

        
    
  </div>  
        
 
        


     <?php
        if (login_check($mysqli) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . ' Chapel'.'.</p>';
 
            echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
        } else {
                        echo '<p>Currently logged ' . $logged . '.</p>';
                         echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
                }
?>    
        

            
          <div data-role="footer" data-position="fixed">
        
               <h2>&copy; All Rights reserved. 2014</h2>
          </div>

        
    
  </div>  
 

    </body>
</html>