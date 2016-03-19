<?php

$database_type = "mysql";
$database_user = "root";
$database_pass = "";
$database_host = "localhost";
$database_name = "testlink";
$database_prefix = "";

!empty(getenv("DATABASE_TYPE")) && $database_type = getenv("DATABASE_TYPE");
!empty(getenv("DATABASE_USER")) && $database_user = getenv("DATABASE_USER");
!empty(getenv("DATABASE_PASS")) && $database_pass = getenv("DATABASE_PASS");
!empty(getenv("DATABASE_HOST")) && $database_host = getenv("DATABASE_HOST");
!empty(getenv("DATABASE_NAME")) && $database_name = getenv("DATABASE_NAME");
!empty(getenv("DATABASE_PREFIX")) && $database_prefix = getenv("DATABASE_PREFIX");

define('DB_TYPE', $database_type);
define('DB_USER', $database_user);
define('DB_PASS', $database_pass);
define('DB_HOST', $database_host);
define('DB_NAME', $database_name);
define('DB_TABLE_PREFIX', $database_prefix);
