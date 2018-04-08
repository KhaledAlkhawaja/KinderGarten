<?php
// بدء جلسة
session_start();
// فحص اذا كان هنالك جلسة سابقة لهذا المستخدم وادخاله الى الصفحة الرئيسية
    if (isset($_SESSION['admins']))
    {
        header('Location: admins/');
        exit();
    }
    elseif (isset($_SESSION['teachers']))
    {
        header('Location: teachers/');
        exit();
    }
    elseif (isset($_SESSION['user']))
    {
        header('Location: users/');
        exit();
    }
    

// تضمين صفحة الاتصال بالقاعدة
    require_once('share/connect.php');
    
    require_once('share/func.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $_POST['user'];
    $pass = $_POST['pass'];

    $stmt = $con->prepare("SELECT * FROM users WHERE user_name = ? AND user_pass =? LIMIT 1");

    $stmt->execute(array($username ,$pass));
   
    $count = $stmt->rowCount();
   
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
   
    if ($count > 0)
    {
        if ($result['user_name']==$username && $result['user_pass']==$pass && ($result['account_type'] == 1 || $result['account_type'] == 3 || $result['account_type'] == 4) ) // admin
        {
            $_SESSION['admins'] = $username;
            $_SESSION['id'] = $result['user_id'];
            header('Location: admins/');
            exit();
        }
         elseif ($result['user_name']==$username && $result['user_pass']==$pass && $result['account_type'] == 2) // student
        {
            $_SESSION['teachers'] = $username;
            $_SESSION['id'] = $result['user_id'];
            header('Location: teachers/');
            exit();
        }
        elseif ($result['user_name']==$username && $result['user_pass']==$pass && $result['account_type'] == 5) // tech
        {
            $_SESSION['user'] = $username;
            $_SESSION['id'] = $result['user_id'];
            header('Location: users/');
            exit();
        }
        else {
            // error user name or password
        }
    }
    else 
    {
        $errors = "Sory You Cant Browse this Page Direc";
        homepages($errors,6);
    }
    
}
?>

<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8" name="viewport" content="width=device-width,inital scale=1" />
            <title>KinderGarten
            </title>
            <link rel="shortcut icon" href="plug-ins/img/s.ico" />
            <!-- bootstrap css -->
            <link rel="stylesheet" href="plug-ins/bootstrap/bootstrap.min.css">
            <!-- jquery -->
            <script src="plug-ins/jquery/jquery.min.js"></script>
             <!-- bootstarp js -->               
            <script src="plug-ins/bootstrap/bootstrap.min.js"></script>
            <!-- css file -->
            <link rel="stylesheet" href="plug-ins/css/main.css">
        </head>
   <body>
       <!-- my js file -->
    <script src="plug-ins/jquery/myjquery.js"></script>    
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
                   <img src="plug-ins/img/logo1.png"  class="navbar-brand">   <!-- Navbar brand -->
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
                    <li class="dropdown " > <!-- drop down for مواد الروضة -->
<a href="#" class="dropdown-toggle borderbottom" data-toggle="dropdown">مواد الروضـة
    <span class="caret"></span>
</a>
                        <ul class="dropdown-menu ">     <!-- قائمة مواد الروضة -->
                            <center><h4>
                            <hr><li><a href="#">رياضيـات</a></li><hr>
                            <li><a href="#">اللغة العربية</a></li><hr>      
                            <li><a href="#">لغة أجنبية</a></li><hr>
</h4>
</center>
                        </ul>  <!-- اغلاق قائمة مواد الروضة-->
                        </li>   <!-- اغلاق ال drop down -->

                        <li class="dropdown  borderbottom">
    <!-- drop down for أتصل بنا-->
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown">أتصل بــنا <span class="caret"></span></a>
                      <ul class="dropdown-menu ">     <!-- قائمة عناصر أتصل بنا -->
                              <h4><center>
                                <li><a href="#">ساريــة طليمات</a></li><hr>
                                <li><a href="#">سليــم معيني</a></li><hr>
                                <li><a href="#" >خالـد الخواجة</a></li><hr>
                                <li><a href="#" >وسيم الصــوفي</a></li><hr>
                                <li><a href="#" >عبد السلام الصباغ</a></li><hr>
</center>
</h4>
                            </ul>      <!-- أغلاق قائمة عناصر اتصل بنا -->
                      </li>      <!-- أغلاق الdrop down -->
                    </ul> <!-- close main list -->
                    <ul class="nav navbar-nav navbar-right">   <!-- قائمة عناصر التسجيل -->                
<li class="dropdown ">
    <a href="#" class=" dropdown-toggle" data-toggle="dropdown">
        <span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp; Log In</a>
                        <ul class="dropdown-menu login-ul" id="login">
<form class="form" role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="login-nav">
    <div class="form-group">
        <input type="Text" class="form-control" name="user" placeholder="Name" required>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="pass" placeholder="Password" required>
        <div class="help-block text-right">
            <a href="">Forget the password ?</a>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Log in" class="btn btn-primary btn-block">
    </div>
</form>
                    </ul>
                     </li>
                        <li>
               <input type="text" class="search1"/>
            </li>
                        </ul>
        </div> </div>   
            </nav>        
               </header> <!-- end header -->
           