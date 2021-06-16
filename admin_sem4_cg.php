<html>
    <head>

        <title>viewing CG files</title>

        <style>
        
            *{
                background-color:a4ebf3;
            }

            table 
            {
                width:60%;
                border-collapse:collapse;
                margin: 100px auto;
            }

            th,td 
            {
                height: 50px;
                vertical-align:center;
                border:2px solid grey;
            }
            table th
           {
                font-size:20px;
            }
            table tbody
            {
                text-align:center;
            }

        </style>

    </head>

<body>


    <?php

        $conn = mysqli_connect("localhost","root","","project");

        $sql = "SELECT * FROM sem4 WHERE Subject='cg' ";

        $res = mysqli_query($conn,$sql);

        $files_array = mysqli_fetch_all($res,MYSQLI_ASSOC);
    ?>

    <table>
        <thead>
            <th>Filename</th>
            <th>Size</th>
            <th>Action </th>
        <thead>

        <tbody>

        <?php foreach($files_array as $f) :?>

        <tr>
            <td><?php echo $f['Name'];?></td>
            <td><?php echo round($f['Size']/1024,2) ."KB";?></td>
            <td><a href="admin_sem4_cg_download.php?file=<?php echo $f['Name'] ?>">Download</a></td>
        <tr>

        <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>