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
    <?php
    if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $select_query = "SELECT * FROM tasks WHERE id=$id";
        $select_result = mysqli_query ($conn, $select_query);
        $select_row = $select_result->fetch_assoc();
        $select_title = $select_row['title'];
        $select_description = $select_row['description'];
        }
?>
    <div class="container">
        <div class="row mt-5">
            <a name="" id="" class="btn btn-primary btn-sm" href="index.php" role="button">Manage Tasks</a>
        </div>
        <div class="row mt-5">

            <div class="col-md-12">

 
                <h2>View Task</h2>
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Task Title</label>
                        <input type="text" name="title" id="" class="form-control" placeholder=""
                            value="<?php echo $select_title?>"  disabled>

                    </div>
                    <div class="form-group">
                        <label for="">Task Description</label>
                        <div class="form-group">

                            <textarea class="form-control" name="description" id=""
                                rows="3" disabled><?php echo $select_description?></textarea>
                        </div>
                        <a name="" id="" class="btn btn-secondary btn-sm" href="index.php" role="button">Back</a>
                    </div>
                </form>
            </div>
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