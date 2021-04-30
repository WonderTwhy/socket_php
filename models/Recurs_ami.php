<?

namespace app\models;

class Recurs_ami 
{

    
    public $socket;
    
    public $client;

    function __construct(){
       
        $this -> client = [];
    }

    public function ami_connect() {

        $this -> socket = fsockopen('192.168.65.137', '5038', $ac_err_num, $ac_err_msg, 3);
            if (!$this -> socket){
                echo "AMI connection: failed!
                Error number:".$ac_err_num."
                Error notice:".$ac_err_msg."
        ";
            }
            else{
                
            }
        
        $auth  = "Action: login\r\n";
        $auth .= "Username: hello\r\n";
        $auth .= "Secret: world\r\n";
        $auth .= "Events: off\r\n\r\n";
        fputs($this -> socket,$auth);
        
    }

    function hello_status(){
       
        $action  = "Action: Events\r\n";
        $action .= "EventMask: on\r\n\r\n";
        fputs($this -> socket,$action);
       
        
        
    }

    function ami_disconnect(){
       
        $action = "Action: Logoff\r\n\r\n";
        fputs($this -> socket,$action);
        usleep(500000);
        fclose($this -> socket);
    }

     public function check(){
 
    
    
        
         $line = fgets($this -> socket);
        
        
            switch ($line){
                
                case "Event: Newchannel\r\n":{
                    echo "Event: Newchannel\r\n";
                    $i = 0;
                    $check_id;
                    $IDnum = 0;
                    $call_in = false;
                    
                    do{
                        $text  = fgets($this -> socket);
                        

                        if(mb_stripos($text,"CallerIDNum") !== false)
                        {
                            $IDnum = trim(end(explode(":",$text)));         
                        }

                        if(mb_stripos($text,"Context: call-in") !== false)
                        {
                            $call_in = true;                                 
                        }      
                           
                        if(mb_stripos($text,"Uniqueid:") !== false && $call_in)
                        {
                            $id = trim(end(explode(":",$text)));
                            if (!array_key_exists($id,$this->client)){
                                $this->client[$id] = [
                                    'num' => $IDnum,
                                    'id' => $id
                                ];
                                print_r($this->client);
                                break;
                            }                          
                        }           
                        
                    }
                    while ($text != "" && $text != "\r\n" && $text != "\r\n\r\n");
                    
                    break;
                }
               
                case "Event: AgentConnect\r\n":{
                    $i = 0;
                    $call_out = false;
                    $IDnum = 0;
                    $client_id;      
                    echo "Event: AgentConnect\r\n";                  
                    do {
                        $text  = fgets($this -> socket);
                       
                        if(mb_stripos($text,"CallerIDNum") !== false)
                        {
                                $IDnum = trim(end(explode(":",$text)));         
                        }

                        if(mb_stripos($text,"Context: call-out") !== false)
                        {
                            $call_out = true;                                 
                        }  



                        if (mb_stripos($text,"Linkedid:") !== false && $call_out)
                        { 
                            echo 'check\r\n';
                            $i = trim(end(explode(":",$text)));
                            echo $i.'\r\n';

                            if (array_key_exists($i,$this->client) && !array_key_exists('operator',$this->client)){
                                echo 'Enter the void\r\n';
                                $this->client[$i]['operator'] = $IDnum;
                                print_r($this->client);
                                break;
                            }
                            
                              
                        }
                    }

                       while ($text != "" && $text != "\r\n" && $text != "\r\n\r\n");
                
                    
                    break;
                }                
            }

         $this -> check();
    }


}
