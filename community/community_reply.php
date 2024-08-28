<?php
session_start();
include 'conn.php'; 

if (isset($_GET['community_id'])) {
    $community_id = $_GET['community_id'];
} else {
    header("Location: community.php?error=community_id_not_set");
    exit(); 
}

if (isset($_POST['save1'])) {
    $uid = $_SESSION['user_id'];
    $name = $_POST['name'];
    $msg = $_POST['msg'];

    $query = "INSERT INTO community_reply (c_id, user_id, r_name, reply) VALUES ('$community_id', '$uid', '$name', '$msg')";
    if (!mysqli_query($conn, $query)) {
        die('Error: ' . mysqli_error($conn));
    }

    header("Location: community.php?success=reply_added");
}


?>


<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="logo-image.png" type="image/png" />
    <title>Wellness Junction | Where Community Nurtures Wellness</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="community_styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css">
    <script src="script.js"></script>
</head>
<body>
<div class="myDiv">
    <div class="container">
        <div class="panel panel-default" style="margin-top:50px">
            <div class="panel-body">
                <h3>Reply Question</h3>
                <hr>
                <form name="frm" method="post" action="">
                    <input type="hidden" id="commentid" name="Pcommentid" value="0">
                    <div class="form-group">
                        <label for="usr">Write your name:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Write your reply:</label>
                        <textarea class="form-control" rows="5" name="msg" type="text" required></textarea>
                    </div>
                    <input type="submit" id="butsave" name="save1" class="btn btn-primary" value="Send">
                </form>
            </div>
        </div>

    </div>
</div>
</body>
</html>
