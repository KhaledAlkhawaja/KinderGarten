<?php 
require_once('admins_header.php')
?>
<!DOCTYPE html>
<html>
<body>
    <!-- my js file -->
    <script src="jquery/myjquery.js"></script>
    <font face="myfont" style="font-size:14px;">
         <div class="container">                   
<div class="col-md-12" style="margin-top:80px; margin-bottom:50px;">
            <!-- start slide -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="../plug-ins/img/1.jpg" >
            </div>
    
            <div class="item">
                <img src="../plug-ins/img/3.jpg" >
            </div>
            <div class="item">
                <img src="../plug-ins/img/2.jpg" >
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> <!-- end slide -->
</div>
<div class="col-md-12" style="margin-top:50;margin-bottom:50px;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="../plug-ins/img/1.jpg" alt="Los Angeles">
            </div>
    
            <div class="item">
                <img src="../plug-ins/img/3.jpg" alt="Chicago">
            </div>
    
            <div class="item">
                <img src="../plug-ins/img/2.jpg" alt="New York">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> <!-- end slide -->

</div>
</div>
</div>
<?php
require_once('../share/footer.php');
?>