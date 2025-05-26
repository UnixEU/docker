<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'octtcvsm6oun',
  'passwordsalt' => '**********',
  'secret' => '**********',
  'trusted_domains' => 
  array (
    0 => 'sample.example.com',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '31.0.4.1',
  'overwrite.cli.url' => 'https://sample.example.com',
  'overwriteprotocol' => 'https',
  'dbname' => '**********',
  'dbhost' => '**********',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => '**********',
  'dbpassword' => '**********',
  'installed' => true,
  'default_phone_region' => 'IT',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => '**********',
    'port' => 6379,
    'timeout' => 0.0,
    'password' => '**********',
  ),
  'twofactor_enforced' => 'true',
  'twofactor_enforced_groups' => 
  array (
    0 => 'admin',
  ),
  'twofactor_enforced_excluded_groups' => 
  array (
  ),
  'loglevel' => 2,
  'maintenance' => false,
);
