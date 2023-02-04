





<html>

<form method="post">
    <textarea rows="1" placeholder="Title" name="title"></textarea>
    <textarea rows="3" placeholder="What are you thinking?" name="post"></textarea>
    <button type="submit" value="Submit">Post</button>
</form>
</html>

<?php

echo $_POST['title'];
echo $_POST['post'];

?>
