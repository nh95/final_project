<?php
//this is how you print something
include 'header.php';
if($data == false){
        echo '<p> No Task created!</p>';
 }else {
    print utility\htmlTable::genarateTableFromMultiArray($data);
}
?>
<h1><a href="index.php?page=tasks&action=create">Create Task</a> </h1>



