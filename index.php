<?

require('define.php');
include_once(__ROOT__ . DS . 'library' . DS . 'helper.php');

// client-side controlled value
echo $_SERVER[HTTP_HOST];
// server-side controlled value
//echo $_SERVER[SERVER_NAME];

#debug($_SERVER);

?>
