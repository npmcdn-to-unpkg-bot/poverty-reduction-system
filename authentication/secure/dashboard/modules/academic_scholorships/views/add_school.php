 <?php

session_start();
if (!isset($_SESSION["session_name"])){
    
    header("Location:../index.php");
    
  exit();
}
if($_SESSION["is_admin"]!=1){

     header("Location:../index.php");
}

?>
<head>
 <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="//npmcdn.com/api-check@latest/dist/api-check.js"></script>
        <script src="js/angular.min.js"></script>
        
            <script src="js/ui-bootstrap.min.js"></script>
        <script src="js/ng-intl-tel-input.js"></script>
        <!-- This is the current state of master for formly core. -->
        <script src="//npmcdn.com/angular-formly@latest/dist/formly.js"></script>
        <!-- This is the current state of master for the bootstrap templates -->
        <script src="//npmcdn.com/angular-formly-templates-bootstrap@latest/dist/angular-formly-templates-bootstrap.js"></script>
   <link href="../ui/css/bootstrap.css" rel="stylesheet">
    <link href="../ui/css/master-ui.css" rel="stylesheet">

    
    </head>

<style>
    
    
body{background: #f1f1f1;
        padding-top: 50px;}
        
  div{background: white;}

            
            .starter-template {
                padding: 40px 15px;
                text-align: center;
            }
      
  .p-head{
    
    font-size: 20px;
    font-style: bold;
    padding-top:10px;
    padding-left: 10px;
  }

    .req_div{border-width: 1px;
    border-color: black;
    border-style: solid;

        width:600px;
    }

    .flt{float: right;}


    .my-panels{
        margin-top: 70px;
        margin-bottom: 5px;

        padding: 5px;
        border-width: 2px;
        border-color: #999999;
        border-style: solid;
        border-radius: 3px;

    }


    .inner-panel{
        margin-top: 5px;
        margin-bottom: 5px;
        padding: 3px;
        border-radius: 3px;
        border-width: 1px;
    border-color: black;
    border-style: solid;
display: block;
    width:99%;
    }
    .panel-head{
        background: #449d44;
        color: white;
        height:50px;
      
        border-radius:  3px 3px 0px 0px;


    }

    
        .pflt{margin-right: 10px;}
    .lll{background: #1995dc;
        color: white;}
</style>




<script src="jquery.js"></script>
<script>

function sendData(){
	
var Data = $("#add_school").serializeArray();

  var loc = window.location.pathname;
var dir = loc.substring(0, loc.lastIndexOf('/'));
var dir = dir.substring(0, dir.lastIndexOf('/'));
 $.ajax(
 {
 url : dir+"/php/insert_school.php",
 type: "POST",
 data : Data,
 success:function(data)
 {
var k = JSON.parse(data);
    var k = k.success;
  
if(k==1){

    alert("School Added");
location.replace("admin_view.php");}
else{

alert("School could not be Added");
location.replace("admin_view.php");

}
 }
 });
	return false;
	
	}
	
	


</script>


    <body ng-app="app" ng-controller="mainController as vm" ng-init="portalitems">
        <nav class="navbar navbar-fixed-top lll" role="navigation">
            <div class="container lll">
                <div class="navbar-header lll">
                    <button type="button" class="navbar-toggle lll" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a  class="navbar-brand lll" href="#">Web Project</a>
                </div>

                <div class="collapse navbar-collapse lll">
                    <ul class="nav navbar-nav">
                        <li class="active lll"><a class="lll" href="../index.php">Home</a></li>
                        <li><a class="lll" href="#about">About</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="lll" ng-click="logout()"><span class="glyphicon glyphicon-log-out lll"></span> Logout</a></li>
                    </ul>
                </div>
                <!--.nav-collapse -->
            </div>
        </nav>
  
    
           

            
            <script src="js/portal.js"></script>
<div id="target"></div>
<div class='container my-panels'>
<div class='panel-head'><p class='p-head'> Add Request</p></div>
<form id="add_school" autocomplete="off" onsubmit="return sendData()">
<table class='table table-striped table-hover table-responsive table-condensed'>
<tr>
 <td>School name: </td> <td><input type="text" name="sch_name"  required></td>
</tr>
 <tr><td> Address </td><td><input type="text" name="sch_address"  required></td></tr>
 <tr><td>   Contact No. </td><td><input type="tel"  name="sch_contact"  required></td></tr>
 <tr><td>   Email </td><td><input type="email" name="sch_email"  required></td></tr>
 <tr><td>   Website </td><td><input type="text" name="website" ></td></tr><br>
 <tr><td>   Username</td><td><input type="text" name="username" required></td></tr>
 <tr><td>   Password</td><td><input type="password" name="password" required></td></tr>
 <tr><td> </td> <td><input type="submit" class='btn btn-primary'  name="Submit" value="Submit"/></td></tr>
  </table>

</form>
</div>

</body>