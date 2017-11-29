<?php 
    include("displayQueryResult.php");

    if($_POST['submit'] == "Select Query"){
        $query_string = $_POST['query_string'];
    }else if($_POST['submit'] == "Run Query") {
        $query_string = $_POST['new_query'];
    }
?>

<!doctype html>
<html lang="en">
<head>
    <title>Team 6 Project IV - Output</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style>
        form {margin:0 auto;width:800px;text-align:left;}
        table {margin:0 auto;}
    </style>
</head>
<body>
    <form action="index.html">
        <hr>
        <fieldset>
            <legend>Output</legend>
            <div><?php display_db_query($query_string, $global_dbh, TRUE, "border=1"); ?></div>
        </fieldset>
        <hr>
        <input type="submit" class="btn btn-outline-primary" value="< Back">
    </form>
    <!-- Load Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>