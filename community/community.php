<?php
session_start();
include 'conn.php'; 

if (isset($_POST['save'])) {
    $uid = $_SESSION['user_id'];
    $name = $_POST['name'];
    $msg = $_POST['msg'];

    $query = "INSERT INTO community (user_id, c_name, community_questions) VALUES ('$uid', '$name', '$msg')";
    if (!mysqli_query($conn, $query)) {
        die('Error: ' . mysqli_error($conn));
    }
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
                <h3>Community forum</h3>
                <hr>
                <form name="frm" method="post" action="">
                    <input type="hidden" id="commentid" name="Pcommentid" value="0">
                    <div class="form-group">
                        <label for="usr">Write your name:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Write your question:</label>
                        <textarea class="form-control" rows="5" name="msg" type="text" required></textarea>
                    </div>
                    <input type="submit" id="butsave" name="save" class="btn btn-primary" value="Send">
                </form>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <h4>Recent questions</h4>
              
                    <tbody id="record">
                        <?php
                        $query = "SELECT community_id, c_name, community_questions FROM community";
                        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $community_id = isset($row['community_id']) ? htmlspecialchars($row['community_id']) : 'Unknown';
                         
                                echo "<h2>" . htmlspecialchars($row['c_name']) . "</h2>";
                                echo "<h4>" . htmlspecialchars($row['community_questions']) . "</h4>";
                                echo "<a href='community_reply.php?community_id=" . $community_id . "'>Reply</a>";

                                $q1 = "SELECT * FROM community_reply WHERE c_id = '$community_id'";
                                $r1 = mysqli_query($conn, $q1) or die(mysqli_error($conn));

                                if (mysqli_num_rows($r1) > 0) {
                                    while ($row1 = mysqli_fetch_assoc($r1)) {
                                        echo "<table class='table'>";
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($row1['r_name']) . "</td>";
                                        echo "<td>" . htmlspecialchars($row1['reply']) . "</td>";
                                        echo "</tr>";
                                        echo "</table>";
                                    }
                                }


                            }
                        } else {
                            echo "<h3 colspan='3'>No questions found.</h3>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
