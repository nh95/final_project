<?php
//this is how you print something
include 'header.php';
if($data == false){
        echo '<p> No Task created!</p>';
 }else {
    print utility\htmlTable::genarateTableFromMultiArray($data);
}
?>
<html>
<body>
<form action="index.php?page=tasks&action=create" method="post" id="form1">
    <button type="submit" form="form1" value="create">Create Task</button>
    </form>
</body>
</html>


