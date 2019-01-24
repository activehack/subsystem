<?php
$config['db_dsnw'] = 'pgsql://@SQL_USER;:@SQL_PASSWORD;@@SQL_HOST;/@ROUNDCUBE_DB;';
$config['log_driver'] = 'stdout';
$config['des_key'] = 'QebBz4OgCquj9xW66cfd84EC';
$config['default_host'] = 'tls://@IMAP_HOST;';
$config['default_port'] = 143;
$config['smtp_server'] = 'tls://@SMTP_HOST;';
$config['smtp_port'] = 25;
$config['smtp_user'] = '';
$config['smtp_pass'] = '';
$config['smtp_helo_host'] = 'ROUNDCUBE';
$config['smtp_auth_type'] = 'PLAIN';
$config['imap_conn_options'] = array(
  'ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false),
  'tls'=>array('verify_peer'=>false,'verify_peer_name'=>false)
);
$config['memcache_hosts'] = null; // e.g. array( 'localhost:11211', '192.168.1.12:11211', 'unix:///var/tmp/memcached.sock' );
$config['memcache_pconnect'] = true;
$config['memcache_timeout'] = 1;
$config['memcache_retry_interval'] = 15;
$config['skin_logo'] = null;
$config['auto_create_user'] = true;
$config['user_aliases'] = false;
$config['force_https'] = false;
$config['use_https'] = false;
$config['login_autocomplete'] = 0;
$config['display_product_info'] = 1;
$config['proxy_whitelist'] = array();
$config['password_charset'] = 'ISO-8859-1';
$config['sendmail_delay'] = 5;
$config['max_message_size'] = '100M';
$config['max_recipients'] = 0;
$config['max_disclosed_recipients'] = 5;
$config['max_group_members'] = 0;
$config['product_name'] = '@TITLE;';
$config['useragent'] = 'Webmail/1';
$config['generic_message_footer'] = '';
$config['generic_message_footer_html'] = '';
$config['http_received_header'] = false;
$config['http_received_header_encrypt'] = false;
$config['plugins'] = array('additional_message_headers', 'archive', 'attachment_reminder', 'emoticons', 'identity_select', 'managesieve', 'password', 'show_additional_headers', 'subscriptions_option', 'vcard_attachments', 'zipdownload');
$config['default_charset'] = 'UTF-8';
$config['skin'] = 'larry';
$config['timezone'] = 'Asia/Kuala_Lumpur';
$config['show_images'] = 2;
