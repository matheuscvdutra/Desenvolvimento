<?php 

require_once "config.php";
// exibe o id da sessão atual e permanece fixo mesmo dando um refresh na página
echo session_id();

//session_regenerate_id(); com essa função o id renova a cada refresh de página

?>