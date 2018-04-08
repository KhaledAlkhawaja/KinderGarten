<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8" name="viewport" content="widthe=device-width,inital scale=1" />
            <title>KinderGarten
            </title>
            <link rel="shortcut icon" href="../plug-ins/img/s.ico" />
            <!-- bootstrap css -->
            <link rel="stylesheet" href="../plug-ins/bootstrap/bootstrap.min.css">
            <!-- jquery -->
            <script src="../plug-ins/jquery/jquery.min.js"></script>
             <!-- bootstarp js -->               
            <script src="../plug-ins/bootstrap/bootstrap.min.js"></script>
            <!-- css file -->
            <link rel="stylesheet" href="../plug-ins/css/main.css">
        </head>
   <body>
       <!-- my js file -->
    <script src="../plug-ins/jquery/myjquery.js"></script>    
<font face="myfont" style="font-size:14px;">
    <div class="main">
    <header> <!-- start header -->
    <!-- start navbar -->
    <nav class="navbar navbar navbar-default navbar-fixed-top" id="nav">
    <!-- Navbar content -->
    <div class="container">
            <div class="navbar-header" >   <!-- Navbar for mobile size -->
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <img src="../plug-ins/img/logo1.png"  class="navbar-brand">   <!-- Navbar brand -->
                </div>      <!--end Navbar for mobile --> 
        <div id="navbar"  class="navbar-collapse collapse"> 
            <ul class="nav navbar-nav " >         <!-- main list -->
              <li >
                      <a href="index.php" class="borderbottom"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp; الصفحة الرئيسية</a>
                    </li>

                    <li >
     <a href="imggallery.php" class="borderbottom">
       <span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;  معرض الصور</a>
                    </li>
                <li>
             <a href="#"><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;منشوراتي
</a>    
            </li>
            <li >
     <a href="insert.php" class="borderbottom">
       <span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;  اضافة منشور  </a>
                    </li>

            <li >
     <a href="insert.php" class="borderbottom">
       <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;  طلابي  </a>
                    </li>
        </ul>
            <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
    <a href="#" class=" dropdown-toggle" data-toggle="dropdown">
        <span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp; <?php echo $_SESSION['teachers'];?> </a>
                        <ul class="dropdown-menu login-ul" id="login">
                        <li>
               <a href="../share/user.php?go=Edit&id=<?php echo $_SESSION['id']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp; Edit Profile</a>
            </li>   
            <li >
               <a href="../share/log_out.php" class="btn btn-danger"><span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp; Log out</a>
            </li> 
                    </ul>
                     </li>
            <li>
               <input type="text" class="search1"/>
            </li>
</ul>
               </nav>        
               </header> <!-- end header -->