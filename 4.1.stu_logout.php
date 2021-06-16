<?php
    session_start();
    session_unset();
    session_destroy();
    echo ("<script LANGUAGE='JavaScript'>
			window.alert('Successfully Logged Out');
			window.location.href='4.stu_login.php';
			</script>"
        );
?>