<?php
// بدء جلسة
session_start();
// فحص اذا كان هنالك جلسة سابقة لهذا المستخدم وادخاله الى الصفحة الرئيسية
    /*if (isset($_SESSION['username']))
    {
        header('Location: ');
    }*/

// تضمين صفحة الاتصال بالقاعدة
    require_once('connect.php');
    
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
        if ($result['user_name']==$username && $result['user_pass']==$pass && $result['account_type'] == 1) // admin
        {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $result['user_id'];
            header('Location: ');
            exit();
        }
         elseif ($result['user_name']==$username && $result['user_pass']==$pass && $result['account_type'] == 2) // student
        {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $result['user_id'];
            header('Location: ');
            exit();
        }
        elseif ($result['user_name']==$username && $result['user_pass']==$pass && $result['account_type'] == 3) // tech
        {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $result['user_id'];
            header('Location: ');
            exit();
        }
    }
    else 
    {
        echo "No Account";
    }
    
}