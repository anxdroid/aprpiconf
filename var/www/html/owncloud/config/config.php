<?php
$CONFIG = array (
  'instanceid' => 'oct3rerrv0s8',
  'passwordsalt' => 'o/FWX0p270/ny9Nyy2rXgRSTuKpsUu',
  'secret' => 'EBr9aaEI776KJzfQp7svmKJ+yH8wiqZLM3zXEMo8JeLzYpBb',
  'trusted_domains' => 
  array (
    0 => '192.168.1.9',
    1 => 'antopaoletti.ddns.net',
  ),
  'datadirectory' => '/mnt/nsa',
  'overwrite.cli.url' => 'https://192.168.1.9/owncloud',
  'dbtype' => 'mysql',
  'version' => '10.0.10.4',
  'dbname' => 'owncloud',
  'dbhost' => 'localhost',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'owncloud',
  'dbpassword' => 'resistore',
  'logtimezone' => 'UTC',
  'installed' => true,
  'mail_domain' => 'gmail.com',
  'mail_from_address' => 'paoletti.antonello',
  'mail_smtpmode' => 'php',
  'filelocking.enabled' => true,
  'memcache.local' => '\OC\Memcache\APCu',
  'memcache.locking' => '\OC\Memcache\Redis',
  'redis' => [
	      'host' => 'localhost',
	      'port' => 6379,
	  ],
);
