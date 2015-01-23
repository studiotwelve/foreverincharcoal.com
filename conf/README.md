<?php
/* framr can generate your configuration file, if it doesn't exist, at installation time or
   • you can duplicate this file
   • rename it using the naming scheme:
     › [NAME].[TLD].php e.g. example.com.php or with subdomains like: sub1.sub2.example.com or just sub.example.com
   • strip the comments and white space
   • fill in your own connection settings / variables etc.
   
   framr installation will read the configuration file for the current ${REQUEST_URI}
   
   you may use this file to override any/all system/site/global variables.
   • eg $site["name"] = "My Awesome Website"; $site["meta"]["description"] = "My Awesome Website is the best.";

Examples Given:

$host     = "localhost";                    // (string) The database hostname          [required [default: ini_get("mysqli.default_host")]]
$username = "framr";                        // (string) The database username          [required [default: ini_get("mysqli.default_user")]]
$passwd   = ".P@$§WoRD4159";                // (string) The database user's password   [required [default: ini_get("mysqli.default_pw")]]
$dbname   = "framr";                        // (string) The name of the database       [required [default: null]]
$port     = 3306;                           //    (int) The mysql server port          [optional [default: ini_get("mysqli.default_port")]]
$socket   = "/var/run/mysqld/mysqld.sock";  // (string) The path to myssqld.sock       [optional [default: ini_get("mysqli.default_socket")]]

*Remember: Remove the wrapping brackets [[...]] when filling in manually.
*/

$host="[[host]]";
$username="[[username]]";
$passwd="[[passwd]]";
$dbname="[[dbname]]";
$port=[[port]];
$socket="[[socket]]";