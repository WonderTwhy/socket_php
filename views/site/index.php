<?php

//use app\models\Asterisk_ami;
use yii\helpers\Html;

use Graze\TelnetClient\TelnetClient;


//use welltime\phpagi\AGI_AsteriskManager;

?>



<?
$command_arr = [];
$command_arr [0] = '123';
$command_arr [1] = '123';
$command_arr [2] = '123';
$command_arr [3] = '123';
$command_arr [4] = '123';
$command_arr [5] = '1ssss';

$command_arr1 = [];
$command_arr1 [0] = '222';
$command_arr1 [1] = '222';
$command_arr1 [2] = '222';
$command_arr1 [3] = '222';
$command_arr1 [4] = '222';
$command_arr1 [5] = '222';

$command_arr2 = [];
$command_arr2 [0] = '123';
$command_arr2 [1] = '123';
$command_arr2 [2] = '123';
$command_arr2 [3] = '123';
$command_arr2 [4] = '123';
$command_arr2 [5] = '1ssss';

$command_arr3 = [];
$command_arr3 [0] = '222';
$command_arr3 [1] = '222';
$command_arr3 [2] = '222';
$command_arr3 [3] = '222';
$command_arr3 [4] = '222';
$command_arr3 [5] = '222';


$itemarray = [];
$itemarray [0] = $command_arr;
$itemarray [1] = $command_arr1;
$itemarray [2] = $command_arr2;
$itemarray [3] = $command_arr3;

print_r($itemarray);
echo '<br />';
print_r(array_unique($itemarray, SORT_REGULAR));
    
    // $text = $command_arr[0];
    // echo $text.'5';
    // $text = $command_arr[4];
    // echo $text;

    // echo end($command_arr);
//require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'phpagi.php');
//require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'phpagi-asmanager.php');

// include "C:\OpenServer\domains\\telnetushka\\vendor\welltime\phpagi\src\phpagi.php";
// include "C:\OpenServer\domains\\telnetushka\\vendor\welltime\phpagi\src\phpagi-fastagi.php";
// include "C:\OpenServer\domains\\telnetushka\\vendor\welltime\phpagi\src\phpagi-asmanager.php";

//$AGIs = new TelnetClient();
//$AGIs = new AGI_AsteriskManager();

// function ami_connect(){
//     global $socket;
//     $socket = fsockopen('192.168.65.137', '5038', $ac_err_num, $ac_err_msg, 3);
//     if (!$socket){
//           echo "AMI connection: failed!
//                  Error number:".$ac_err_num."
//                  Error notice:".$ac_err_msg."
// ";
//     }
//     else{
//           //echo "AMI connection:success";
//     }
//    //echo '1';
//     $auth  = "Action: login\r\n";
//     $auth .= "Username: hello\r\n";
//     $auth .= "Secret: world\r\n";
//     $auth .= "Events: off\r\n\r\n";
//     fputs($socket,$auth);
//     usleep(500000);
// }
   
// // function mute_conf($conf_num,$channel){
// //     global $socket;
// //     $action  = "Action: ConfbridgeMutern";
// //     $action .= "Conference: $conf_numrn";
// //     $action .= "Channel: $channelrnrn";
// //     fputs($socket,$action);
// //     usleep(500000);
// // }

// // function unmute_conf($conf_num,$channel){
// //     global $socket;
// //     $action  = "Action: ConfbridgeUnmutern";
// //     $action .= "Conference: $conf_numrn";
// //     $action .= "Channel: $channelrnrn";
// //     fputs($socket,$action);
// //     usleep(500000);
// // }

// // function start_record_conf($conf_num){
// //     global $socket;
// //     $action  = "Action: ConfbridgeStartRecordrn";
// //     $action .= "Conference: $conf_numrn";
// //     fputs($socket,$action);
// //     usleep(500000);
// // }

// // function stop_record_conf($conf_num){
// //     global $socket;
// //     $action  = "Action: ConfbridgeStopRecordrn";
// //     $action .= "Conference: $conf_numrn";
// //     fputs($socket,$action);
// //     usleep(500000);
// // }     

// // function locked_conf($conf_num){
// //     global $socket;
// //     $action  = "Action: ConfbridgeLockrn";
// //     $action .= "Conference: $conf_numrn";
// //     fputs($socket,$action);
// //     usleep(500000);
// // }

// // function unlocked_conf($conf_num){
// //     global $socket;
// //     $action  = "Action: ConfbridgeUnlockrn";
// //     $action .= "Conference: $conf_numrn";
// //     fputs($socket,$action);
// //     usleep(500000);
// // }

// // function kick_from_conf($conf_num,$channel){
// //     global $socket;
// //     $action  = "Action: ConfbridgeKickrn";
// //     $action .= "Conference: $conf_numrn";
// //     $action .= "Channel: $channelrnrn";
// //     fputs($socket,$action);
// //     usleep(500000);
// // }

// // function init_call($ext_from,$ext_to){
// //     global $socket;
// //     $action  = "Action: Originatern";
// //     $action .= "Channel: SIP/$ext_fromrn";
// //     $action .= "Callerid: Phoenix-call <$ext_from>rn";
// //     $action .= "Timeout: 15000rn";
// //     $action .= "Context: from-internalrn";
// //     $action .= "Exten: $ext_torn";
// //     $action .= "Priority: 1rnrn";
// //     $action .= "Async: yesrnrn";
// //     fputs($socket,$action);
// //     usleep(500000);
// // }

// // function pickup_call($ext_from,$channel){
// //     global $socket;
// //     $action  = "Action: Originatern";
// //     $action .= "Channel: SIP/$ext_fromrn";
// //     $action .= "Callerid: Phoenix-Pickuprn";
// //     $action .= "Application: PickupChanrn";
// //     $action .= "Data: $channelrnrn";
// //     $action .= "Timeout: 15000rn";
// //     $action .= "Priority: 1rnrn";
// //     $action .= "Async: yesrnrn";
// //     fputs($socket,$action);
// //     usleep(500000);
// // }

// // function spy_call($ext_from,$ext_to){
// //     global $socket;
// //     $action  = "Action: Originatern";
// //     $action .= "Channel: SIP/$ext_fromrn";
// //     $action .= "Callerid: Phoenix-Spyrn";
// //     $action .= "Application: ChanSpyrn";
// //     $action .= "Data: $ext_to,qxrn";
// //     $action .= "Timeout: 15000rn";
// //     $action .= "Priority: 1rnrn";
// //     $action .= "Async: yesrnrn";
// //     fputs($socket,$action);
// //     usleep(500000);
// // }

// // function whispers_call($ext_from,$ext_to){
// //     global $socket;
// //     $action  = "Action: Originatern";
// //     $action .= "Channel: SIP/$ext_fromrn";
// //     $action .= "Callerid: Phoenix-whispersrn";
// //     $action .= "Application: ChanSpyrn";
// //     $action .= "Data: $ext_to,wxrn";
// //     $action .= "Timeout: 15000rn";
// //     $action .= "Priority: 1rnrn";
// //     $action .= "Async: yesrnrn";
// //     fputs($socket,$action);
// //     usleep(500000);
// // }

// //

// //

// function hello_status(){
//     global $socket;
//     //$action  = "Action: Status\r\n\r\n";
//     //fputs($socket,$action);
   
//     usleep(2000000);

//     var_dump(fread($socket,10000));
    
// }

// // function destr_call($channel){
// //     global $socket;
// //     $action  = "Action: Hanguprn";
// //     $action .= "Channel: $channelrnrn";
// //     fputs($socket,$action);
// //     usleep(500000);
// // }

// function ami_disconnect(){
//     global $socket;
//     $action = "Action: Logoff\r\n\r\n";
//     fputs($socket,$action);
//     usleep(500000);
//     fclose($socket);
// }



// ami_connect();
// hello_status();
// ami_disconnect();




// // $a = new Asterisk_ami();
// // $a->connect();
// // if ($a->ini["con"])
// // {
// //     $a->init();
// //     $a->write("Action: Status");
// //     var_dump($a->read());
// //     var_dump($a -> ini["lastRead"]);
// //     $a->disconnect();
// // }
// // unset($a);

