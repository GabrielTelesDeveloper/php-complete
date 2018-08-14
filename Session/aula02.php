<?php

require_once './config.php';

/* Como retirar uma sessão? */


//session_unset() - limpa as variáveis de sessão, mas para o site continua como a mesma pessoa.
//session_destroy() - limpa a variável e remove o usuário( e como se houvesse um novo acesso em determinado servidor ).

/* É feito a exibição da sessão já criada */
echo $_SESSION['nome'];
?>