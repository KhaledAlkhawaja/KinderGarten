<?php

function homePages($errorMessage , $sec_ref = 5)
{
    echo '<center>
    <h1 class="text-center" style="margin-top:100px;">' . $errorMessage . '</h1>';
    echo '<br><center>
    <h1 class="text-center" style="margin-top:100px;"> You Will Be Redirect to HomePage After '. $sec_ref .' </h1></center>';
    header("refresh:$sec_ref;url=index.php");
    exit();
}