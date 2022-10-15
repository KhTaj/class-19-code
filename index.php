<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    // include_once './store.php';
    $students = $_SESSION['students'];
?>


    <div style="width: 500px; margin: 0 auto">

    <form action="./store.php"  method="post">
     <input name="id" type="text" placeholder="Enter your ID"></br>
     <input name="name" type="text" placeholder="Enter your name"></br>
     <button>Add</button>
    </form>

    <table border="1" style="width: 100%;" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <div>
                
            </div>
        
            <?php
                foreach($students as $student){?>
                <tr>
                    <td><?php echo $student['id']?></td>
                    <td><?php echo $student['name']?></td>
                </tr>

                <?php }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>