<?php

/**
 * Gearman Monitor configuration file
 *
 * The following server fields are available:
 *  - address: Gearman server address, hostname and port
 *  - name: Gearman server name to display in Gearman Monitor interface
 *
 * Example:
 * $cfgServers[$i]['address'] = '192.168.0.10:4730';
 * $cfgServers[$i]['name'] = 'Gearman server 1';
 * ++ $i;
 *
 * $cfgServers[$i]['address'] = '192.168.1.1:80';
 * $cfgServers[$i]['name'] = 'Gearman server 2';
 * ++ $i;
 */

$i = 0;
$cfgServers = array();

$cfgServers[$i]['address'] = '192.168.0.101:4730';
$cfgServers[$i]['name'] = '192.168.0.101';

++ $i;

$cfgServers[$i]['address'] = '127.0.0.1:4730';
$cfgServers[$i]['name'] = '<localhost>';

++ $i;

?>