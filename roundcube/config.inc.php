<?php

$config = array();

// Configuração do banco de dados SQLite
$config['db_dsnw'] = 'sqlite:////var/roundcube/db/sqlite.db';

// Log SQL queries to <log_dir>/sql or to syslog
$config['sql_debug'] = true;  // Habilite o debug para obter mais informações

// IMAP host
$config['default_host'] = 'mail.mary.asa.br';
$config['default_port'] = 143;  // Porta IMAP padrão

// SMTP server host (for sending mails)
$config['smtp_server'] = 'tls://mail.mary.asa.br';
$config['smtp_port'] = 587;

// provide an URL where a user can get support for this Roundcube installation
$config['support_url'] = '';

// this key is used to encrypt the users imap password which is stored
// in the session record (and the client cookie if remember password is enabled)
$config['des_key'] = 'rcmail-!24ByteDESkey*Str';

// Name your service. This is displayed on the login screen and in the window title
$config['product_name'] = 'Roundcube Webmail';

// List of active plugins (in plugins/ directory)
$config['plugins'] = array('archive', 'zipdownload');

// Habilite o log de autenticação
$config['imap_debug'] = true;
$config['smtp_debug'] = true;

?>
include(__DIR__ . '/config.docker.inc.php');
