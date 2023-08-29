<?php
require_once "./function/function.php";
$data=getUsers("https://reqres.in/api/users");
// echo "<pre>";print_r($data['data']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Example REST API Client</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.classless.min.css">
</head>
<body>
    
    <main>
         <h1>Repositories</h1>
    
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Avatar</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach($data['data'] as $datas):?>
                
                <tr>
                    <td>
                        <?php echo $datas['first_name'] ?>
                    </td>
                    <td><?php echo $datas['last_name'] ?></td>
                    <td><img src="<?php echo $datas['avatar'] ?>" alt="image" width="50" height="60"></td>
                    <td> <?php echo $datas['email'] ?></td>
                    
                </tr>
                
            <?php endforeach; ?>
            
        </tbody>
    </table>
    
    <a href="new.php">New</a>
    
</main>
</body>
</html>