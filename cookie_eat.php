<?php 

if(isset($_COOKIE['firstname'])){
    echo '<p>Your First Name is: ' . $_COOKIE['firstname'] . '</p>';
}
if(isset($_COOKIE['lastname'])){
    echo '<p>Your Last Name is: ' . $_COOKIE['lastname'] . '</p>';
}

if(isset($_COOKIE['username'])){
    echo '<p>Your username is: ' . $_COOKIE['username'] . '</p>';
}

if (isset($_COOKIE["cookie"])){
    foreach ($_COOKIE["cookie"] as $key=>$val) {
        echo $key.' is '.$val."<br>\n";
    } 
} 

?>