<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CRUD</title>
</head>

<body>


    <?php require_once 'model.php'; ?>

    <nav class="navbar navbar-dark bg-dark">

        <div class="container">
            <a class="navbar-brand mb-0 h1" href="index.php">Navbar</a>
            <a href="index.php" class="btn btn-primary btn-sm">Add Data</a>

        </div>

    </nav>


    <br><br>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                Form Student
            </div>
            <div class="card-body">
                <form action="view.php" method="POST">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>" placeholder="enter your name" required>
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" placeholder="enter your name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="enter your email" required>
                    </div>
                    <div class="form-group">
                        <?php if ($update == true) : ?>
                            <Button type="submit" name="update" class="btn btn-info">Update</Button>
                            <a href="view.php" type="submit" name="back" class="btn btn-secondary">Back</a>

                        <?php else : ?>
                            <Button type="submit" name="save" class="btn btn-primary">Submit</Button>
                        <?php endif; ?>


                    </div>

                </form>

            </div>
        </div>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>