<?php

require_once './config.php';
echo session_save_path() . '<br>';

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo 'As sessões estiverem desabilitadas!';
        break;
    case PHP_SESSION_NONE:
        echo 'As sessões estão habilitadas, mas não iniciada!';
        break;
    case PHP_SESSION_ACTIVE :
        echo 'As sessões estão habilitadas, e está iniciada!';
        break;
    default :
        break;
}
?>