<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Contact App</title>
</head>
<body>


<div class="body"><fliedset><center>
    <h1> Entry your details </h1>
        

        

        <form action="adddata.php " method ="post">

            <div class="main">  

            <label for="name"> Full Name:</label>
            <input type="text" name =" name" id="name" required><br><br>

            

            <label for="name"> Number:</label>
            <input type="text" name ="number" id="number" required><br><br>

            
            <input type="submit" value ="save ">
                </form>
</fliedset>
</div>


                        <hr>
                        <h2> List of clients<h2>
                        <table>
                        <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Actions</th>
                        </tr>
</center>

                        <?php
                        include 'db.php';
                        $sql ="Select * FROM names";

                        $result = mysqli_query($conn ,$sql);

                        if ($result){
                            while($row = mysqli_fetch_assoc($result)) {
                            $id = $row['ID']; 
                            $name = $row['name'];
                            $phone = $row['phone'];

                        ?>

                        <tr>
                       
                        <td><?php echo $id ?></td>
                        <td><?php echo $name ?></td>
                        <td ><?php echo $phone ?> </td>
                        <td>
                        <a href ="#">Update</a>
                        <a href ="delete.php?id=<?php echo $id?>">Delete</a>
                        </tr>
                                <?php  
                             
                        }

                    }

                    ?>
            
</body>
</html>