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

function walkWithContent($value,$key)
{
    $content = new content($value);
}

class content
{
    private $week,$name,$dir,$data;
    private static $counter = 0;
    function __construct($init) {
        $this->dir = $init;
        list($this->week,$this->name) = explode('.',$init);
        if($this->readdata()){
            $this->printdata();
            self::$counter++;
        }
        
    }

    
    private function readdata()
    {
        $handle = @fopen($this->dir."/README.md", "r");
        if ($handle) {
            while (($buffer = fgets($handle, 4096)) !== false) {
                $this->data.=$buffer;
            }
            if (!feof($handle)) {
                echo "Error: unexpected fgets() fail\n";
            }
            return true;
            fclose($handle);
        }
        else{
            return false;
        }

    }

    private function getScreenShot()
    {
        $apiKey = getenv('PageSpeedAPI');
        $urlCur =  "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
        $apiURL = "https://www.googleapis.com/pagespeedonline/v1/runPagespeed?
url=$urlCur/$this->dir/&key=$apiKey&screenshot=true";
        $json = file_get_contents($apiURL);
        $obj = json_decode($json);
        echo $obj;
    }

    private function printdata()
    {
        echo '
    <div class="panel-heading" role="tab" id="'.$this->dir.'">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse'.self::$counter.'" aria-expanded="true" aria-controls="collapseOne">
          '.$this->week.' : '.$this->name.'
        </a>
      </h4>
    </div>
    <div id="collapse'.self::$counter.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="'.$this->dir.'">
      <div class="panel-body">
            '.$this->data.'<br>'.$this->getScreenShot().'
      </div>
    </div>
    ';
    }
}

?>