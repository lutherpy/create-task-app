<?php require('config.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Create Task App</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <a name="" id="" class="btn btn-primary btn-sm" href="createtask.php" role="button">Add Task</a>
        </div>
        <div class="row">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Task Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $select_query = "SELECT * FROM tasks order by id desc";
                    $select_result = mysqli_query($conn, $select_query);
                    while ($data = mysqli_fetch_array ($select_result))
                    {
                        ?>
                    
                
                    <tr>
                        <td scope="row"><?php echo $data['id'];?> </td>
                        <td><?php echo $data['title'];?> </td>
                        <td>
                            <a name="" id="" class="btn btn-info btn-sm" href="viewtask.php?id=<?php echo $data['id'];?>" role="button">View</a>
                            <a name="" id="" class="btn btn-primary btn-sm" href="edittask.php?id=<?php echo $data['id'];?>" role="button">Edit</a>
                            <a name="" id="" class="btn btn-danger btn-sm" href="deletetask.php?id=<?php echo $data['id'];?>" role="button" onclick="return confirm('Tem certeza que pretende eliminar a tarefa?')">Delete</a>
                        </td>
                    </tr>
                    <?php 
                    }
                    ?>
                  
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <p>Created by Lutero Paulino.</p>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>