<?php
require_once('users_header.php');
?>
<html>
    <body>
<div class="slider">  <!-- start slider -->
     <div class="active">
        <img src="../plug-ins/img/6.jpg" class="img-responsive thumbunil">
     </div>
        <div>
            <img src="../plug-ins/img/1.jpg" class="img-responsive thumbunil">
        </div>
    <div>
        <img src="../plug-ins/img/2.jpg" class="img-responsive thumbunil">
    </div>
        <div>
            <img src="../plug-ins/img/3.jpg" class="img-responsive thumbunil">
        </div>
            <div>
                <img src="../plug-ins/img/4.jpg" class="img-responsive thumbunil">
            </div>
                <div>
                    <img src="../plug-ins/img/5.jpg" class="img-responsive thumbunil">
                </div>
                    <div>
                        <img src="../plug-ins/img/6.jpg" class="img-responsive thumbunil">
                    </div>
   
                    <div>
        <img src="../plug-ins/img/7.jpg" class="img-responsive thumbunil">
    </div>
</div> <!--end slider -->
    <div class="div1">
    <div class="container">
        <div class="row">
            <div class="col-md-4"> <!--side bar -->
            <!-- catigories -->
<?php
require_once('../share/sidebar.php');
?>
        </div>           
            <!-- posts -->
            <div class="col-md-8" dir="rtl">
                <h1 class="page-header" style="color:#16505b;">المقالات والأعلانــات</h1>
                <!-- first article -->
                <h2>
                    <a href="#">بدء التسجيل</a>
                    <hr style="background-color:#16505b; height:1px;">
                </h2>
                <p>
                    كتب بواسطة :
                    <a href="#">
                    <span class="glyphicon glyphicon-user"></span> Saleem Maine </a>  في :
                    <span class="glyphicon glyphicon-time"></span> 20/06/2017 - 10:30
            
                </p>
                <hr>
                <img src="../plug-ins/img/3.jpg" class="img-responsive thumbnail">
                <hr>
                <p>
                    أهالي الطلاب الكرام نعلمكم بالبدء بالتسجيل للعام الدراسي الجديد كما وحددت ادارة الروضة المبالغ المترتبة والاقساط على الأهالي الذين  يرغبون بتسجيل اطفالهم في الروضة وكما حددالبدء في الدوام بتاريخ .....
                
                </p>
                <a href="ad.php" class="btn btn-primary">قراءة المزيد
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <hr>
                <!-- second article -->
                <h2>
                    <a href="#">النشاطات الصيفية</a>
            <hr style="background-color:#16505b; height:1px;">
                </h2>
                <p>
                        كتب بواسطة :
                        <a href="#">
                            <span class="glyphicon glyphicon-user"></span> Saleem Maine </a> في :
                        <span class="glyphicon glyphicon-time"></span> 20/06/2017 - 10:30
                </p>
                <hr>
                <img src="../plug-ins/img/1.jpg" class="img-responsive  thumbnail">
                <hr>
                <p>
                    نبشر أهالي أطفالنا الأعزاء ببدء الروضة بنشاطاتها الصيفية الثقافية والترفيهية حييث سيتم تعليم الأطفال مهارات الحياة الأساسية من خلال طرق بسيطة تنمي تفكيرهم وابداعهم ...
                </p>
                <a href="ad.php" class="btn btn-primary">قراءة المزيد
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <hr style="background-color:#16505b;height:1px;">
                <!-- pager -->
                <ul class="pager"   >
                    <li class="previous">
                        <a href="#"> أحدث  &larr; </a>
                    </li>
                    <li class="next">
                        <a href="#">&rarr; أقدم</a>
                    </li>
                </ul>
            </div>
    </div>
    </div>  
</font>
<?php
require_once('../share/footer.php');
?>