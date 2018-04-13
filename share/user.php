<?php
 session_start();
if (isset($_SESSION['admins']) || isset($_SESSION['teachers']) || isset($_SESSION['user']))
    {
        if(isset($_SESSION['admins']))
        {
            require_once('../admins/admins_header.php');
        }elseif (isset($_SESSION['teachers'])) {
            require_once('../teachers/teachers_header.php');
        }
        elseif (isset($_SESSION['user'])) {
            require_once('../users/users_header.php');
        }
        require_once('connect.php');
        require_once('func.php');

        $go = isset($_GET['go']) ? $_GET['go'] : 'Manage';

        if ($go == 'Manage'){

        $stmt = $con->prepare("SELECT user_id,
                                      user_name,
                                      user_pass,
                                      account_type,
                                      type_name
                                      FROM
                                      users INNER JOIN account_type
                                      ON users.account_type = account_type.type_id
                                      WHERE account_type <> 1 AND account_type <> 3 AND account_type <> 4
                                      ");
        $stmt->execute();
        $result = $stmt->fetchAll();
    require_once('func.php');
    require_once('../dashbord/dashbord_header.php');
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
            <h1 class="text-center" style="margin-top:100px;"> إدارة الحسابات </h1>
            <table class="table table-bordered table-hover" style="width:90%; margin-top:90px;" >
        
    <tr><thead>
                    <th class="info"> <span class="glyphicon glyphicon-comment"></span> &nbsp;رقم المستخدم</th>
                    <th class="info"> <span class="glyphicon glyphicon-comment"></span> &nbsp;اسم المستخدم</th>
                    <th class="info"> <span class="glyphicon glyphicon-user"></span> &nbsp;نوع الحساب</th>
                    <th class="info"> <span class="glyphicon glyphicon-user"></span> &nbsp;كلمة المرور</th>
                    <th class="info"> <span class="glyphicon glyphicon-cog"></span> &nbsp; أدوات</th>
                </tr>
        </thead>
                    <?php
                    foreach ($result as $row) {
                        
                    echo "<tr>";
                    echo "<th>" . $row['user_id'] . "</th>";
                    echo "<th>" . $row['user_name'] . "</th>";
                    echo "<th>" . $row['type_name'] . "</th>";
                    echo "<th>" . $row['user_pass'] . "</th>";
                    echo "<th>
                         <a href='?go=Edit&id=". $row['user_id'] ."'><button class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span>&nbsp;تعديل</button></a>
                         <a href='?go=Delete&id=" . $row['user_id'] ."' class='confirm'><button class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span>&nbsp;حذف</button></a>
                         </th>";
                    echo "<tr>";
                    }
                    ?>
    </table>
    </body>
            </html>


 <?php
        }
        else if ($go == 'Edit') {

            $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0 ;
            
            $stmt = $con->prepare("SELECT * FROM users WHERE user_id =? LIMIT 1");

            $stmt->execute(array($id));
   
            $count = $stmt->rowCount();
   
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($count > 0)
            { ?>
            <!--FORM for Edit -->
                <h1 class="text-center" style="margin-top:100px;">تعديل الحساب </h1>
                <div class="container">
                <form class="form-horizontal" action="?go=Update" method="POST">
                <div class="row">
                <div class="form-goup form-group-lg" >
                <label class="col-sm-2 control-label">اسم المستخدم</label>
                <div class="col-sm-10 col-md-4">
                <input type="hidden" name="userid" class="form-control" value="<?php echo $id; ?>"/>
                <input type="text" name="username" class="form-control" value="<?php echo $result['user_name']; ?>"  autocomplete="new-username"/> 
                </div> 
                </div>
                </div>
                <br><br>
                <div class="row">
                <div class="form-goup form-group-lg">
                <label class="col-sm-2  control-label">كلمة المرور</label>
                <div class="col-sm-10 col-md-4">
                <input type="hidden" name="oldpass" class="form-control"  value="<?php echo $result['user_pass']; ?>"/> 
                <input type="password" name="newpass" class="form-control"  autocomplete="new-password"/> 
                </div> 
                </div>
                </div>
                <br><br>
                <div class="row">
                <div class="form-goup form-group-lg">
                <label class="col-sm-2  control-label">تأكيد كلمة المرور </label>
                <div class="col-sm-10 col-md-4">
                <input type="password" name="newpass2" class="form-control"  autocomplete="new-password"/> 
                </div> 
                </div>
                </div>
                <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-success btn-lg"/>save</button>
                </div>
                </form>
                <br><Br>

        <?php
            }else
            {
                echo "Not Found ID";
            }
        }elseif($go == 'Update')
        {
            echo '<center>
            <h1 class="text-center" style="margin-top:100px;"> تحديث الحساب </h1></center>';
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $id   =     $_POST['userid'];
                $name =     $_POST['username'];

                 // فحص حقل الباس

                $pass = empty($_POST['newpass']) ? $_POST['oldpass'] : $_POST['newpass'];
                $pass2 = empty($_POST['newpass2']) ? $_POST['oldpass'] : $_POST['newpass2']; 

                if ($pass === $pass2)
                {
                    
                // التحديث على القاعدة

                $stmt = $con->prepare("UPDATE users SET user_name = ? , user_pass = ? WHERE user_id = ?");
                $stmt->execute(array($name , $pass , $id));

                echo"<br><br><br>" . $stmt->rowCount() . "Record Update";

                }else{
                    echo "<center><h1>خطأ في تأكيد كلمة المرور</h1></center>";
                }


            } else
            {   
                $errors = "Sory You Cant Browse this Page Direc";
                homepages($errors,6);
            }
        }elseif($go == 'Delete')
        {
            echo '<center>
            <h1 class="text-center" style="margin-top:100px;"> حذف الحساب </h1></center>';
            $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0 ;
            $stmt = $con->prepare("SELECT * FROM users WHERE user_id =? LIMIT 1");

            $stmt->execute(array($id));
   
            $count = $stmt->rowCount();
   
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($count > 0)
            {
                $stmt = $con->prepare("DELETE FROM users WHERE user_id = ?");
                $stmt->execute(array($id));
                echo"<br><br><br>" . $stmt->rowCount() . "Record Update";
                //لربط البارمترات
               // $stmt->bindParam(// البارمترات المراد ربطها);
            }
            else{
                echo "This Id Not Found";
            }
        }

       // require_once('footer.php');
    }
    else {
        header("Location: ../");
        exit();
    }
    ?>