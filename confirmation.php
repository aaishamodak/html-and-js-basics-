<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $comment = htmlspecialchars(trim($_POST["comment"]));

    if(!empty($name) && !empty($comment)) {
        echo "<p>Hi, <b>$name</b>, Your comment has been received successfully.</p>";
        echo "<p>Here's the comment that you entered: <b>$comment</b></p>";
    } else {
        echo "<p>Please fill out all the fields in the form</p>";
    }

} else {
    echo "<p>something went wrong, please try again</p>";
}
?>