<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Project name</a>
            </div>
        </div>
    </nav>

    <div class="container">

        <?php
            //var_dump($_SESSION);
            foreach($_SESSION['flash'] as $flash) {
                echo "<div class=\"alert alert-danger\" role=\"alert\">$flash</div>";
            }
            $_SESSION['flash'] = array();
        ?>

        <div class="panel panel-default">
            <div class="panel-heading">Create a post</div>
            <div class="panel-body">
                <form action="create_post.php" method="POST">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" 
                            name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <textarea name="text">
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>


        <?php
            foreach($posts as $post) {
                echo "
                    <div class=\"jumbotron\">
                        <h1>$post->title</h1>
                        <p>$post->text</p>
                    </div>
                ";
            }
        ?>

    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>