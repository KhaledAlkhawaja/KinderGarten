<?php
require_once('dashbord_header.php');
?>
<!DOCTYPE html>
<html>
    <style>
        
        table{
    table-layout:fixed;
        }
        th{
            vertical-align:middle;
            text-align:center;
        }
        
</style>
    <title>comment control </title>
    <body>
        <center>
        <table class="table table-bordered table-hover" style="width:90%; margin-top:90px;" >
    
<tr><thead>
                <th class="info"> <span class="glyphicon glyphicon-comment"></span> &nbsp;اسم المستخدم</th>
                <th class="info"> <span class="glyphicon glyphicon-user"></span> &nbsp;نوع الحساب</th>
                <th class="info"> <span class="glyphicon glyphicon-cog"></span> &nbsp; أدوات</th>
             </tr>
    </thead>
<tr>
                <th >التسجيل</th>
                <th>النشاطات الصيفية</th>
                <th>
                <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;حذف</button>
                <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>&nbsp;تعديل</button></th>
    </tr>
</table>
</body>
        </html>