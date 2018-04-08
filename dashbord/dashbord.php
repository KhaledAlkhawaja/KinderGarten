<?php
require_once('dashbord_header.php')
?>
<html>
    <style>
        .com-dash{
            font-size:25px;
             transition-duration: .4s; 
        }
.com-dash:hover{
  font-size:35px;
   transition-duration: .4s; 
}
.com-btn{
    font-size:25px;
    width:300px;    
}
</style>
    <body>
       <div class="row">
       
    <!--comments-->
       <div class="col-md-4"  style="margin-top:200px; margin-left:130px;">
       <a href="comment_control.php" class="btn btn-primary com-btn">
<br>
        Comments
&nbsp;&nbsp;  <span class="glyphicon glyphicon-comment com-dash"></span>
<br><br>
</a >
    </div> 
    <!--posts-->
    <div class="col-md-4"  style="margin-top:200px; margin-left:-87px;">
       <a href="posts_control.php" class="btn btn-success com-btn">
<br>
        Posts
&nbsp;&nbsp;  <span class="glyphicon glyphicon-file com-dash"></span>
<br><br>
</a >
    </div> 
        <!--users-->   
   <div class="col-md-4"  style="margin-top:200px; margin-left:-100px;">
       <a href="../share/user.php" class="btn btn-danger com-btn">
<br>
Users
&nbsp;&nbsp;  <span class="glyphicon glyphicon-user com-dash"></span>
<br><br>
</a>
    </div> 
 
</div>
</body>
</html>