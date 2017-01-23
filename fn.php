<?PHP 

function connect(){
    $con = new stdClass();
    $connect = getenv('MYSQLCONNSTR_mysqlConnection');
    $connect = explode(';',$connect);
    list($name,$con->db) = explode('=',$connect[0]);
    list($name,$con->host) = explode('=',$connect[1]);
    list($name,$con->username) = explode('=',$connect[2]);
    list($name,$con->password) = explode('=',$connect[3]);
    $conn = new mysqli($con->host,$con->username,$con->password,$con->db);
    if ($conn->connect_errno) {
		echo $conn->connect_error;
		exit;
	}
    return $conn;
}


?>