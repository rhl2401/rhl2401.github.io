<?php
include_once "dbconnect.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Programmering - Rasmus 3.i</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body class="container-fluid">

<div class="col-12 offset-0 col-sm-12 offset-sm-0 col-md-12 offset-md-0 col-lg-10 offset-lg-2 col-xl-8 offset-xl-2">
    <h1>Programmering <small>Rasmus Lauridsen, 3.i</small></h1>
    <hr>

    <?php
    $sql = "SELECT * FROM posts";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3'>
                    <div class='card' style='width: 100%;'>
                        <div class='card-body'>
                            <h5 class='card-title'>". $row["title"] ."</h5>
                            <h6 class='card-subtitle mb-2 text-muted'>". $row["subtitle"] ."</h6>
                            <p class='card-text'>". $row["description"] ."</p>
                            <a href='". $row["url"] ."' class='btn btn-outline-dark'>
                                <div class='git-button'>
                                    <img src='https://icons-for-free.com/iconfiles/png/512/github+icon-1320168274457504277.png' class='img-reponsive'>
                                    <p>Se repo</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>";
        }
    } else {
        print("There was a problem loading data");
    }

    ?>

</div>

</body>
</html>