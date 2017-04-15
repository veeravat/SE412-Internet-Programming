<?php
$con = new stdClass();

// env pattern //
// "Database=[dbname];Data Source=[hostname];User Id=[user];Password=[password]"//

$connectionString = getenv("MYSQLCONNSTR_localdb");
$varsString = str_replace(";", "&", $connectionString);
parse_str($varsString);

$conn = new mysqli($Data_Source, $User_Id, $Password, $Database);
if ($conn->connect_errno) {
    echo $conn->connect_error;
    exit;
}
$conn->set_charset("utf8");

$results = $conn->query("SHOW TABLES LIKE 'w13Workshop';");
if ($results == true && $results->num_rows > 0) {
    return;
} else {
    // create table
    $sql = "CREATE TABLE `w13Workshop` (
        `UID`  int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT ,
        `firstname`  varchar(255) NULL ,
        `lastname`  varchar(255) NULL ,
        `username`  varchar(255) NULL ,
        `password`  varchar(255) NULL ,
        PRIMARY KEY (`UID`)
        )
    ;";
    $conn->query($sql);
}


return $conn;
