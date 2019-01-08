<?php
$config['db_dsnw'] = 'pgsql://@SQL_USER;:@SQL_PASSWORD;@@SQL_HOST;/@SQL_DB;';
$config['log_driver'] = 'stdout';
$config['default_host'] = 'tls://@IMAP_HOST;';
$config['imap_conn_options'] = array(
  'ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false),
  'tls'=>array('verify_peer'=>false,'verify_peer_name'=>false)
);
$config['smtp_server'] = 'tls://@SMTP_HOST;';
$config['support_url'] = 'mailto:danny@grabhaulier.com';
$config['des_key'] = 'ESXVbG5O5qwVn0J9Y8ZHCG8w';
$config['plugins'] = array('emoticons', 'managesieve', 'password', 'subscriptions_option', 'zipdownload');
$config['language'] = 'en_US';
