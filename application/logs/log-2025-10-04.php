<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-10-04 00:11:47 --> Severity: Warning --> odbc_exec(): SQL error: [Microsoft][ODBC SQL Server Driver][SQL Server]Invalid column name 'activo'., SQL state S0022 in SQLExecDirect C:\Users\karim\OneDrive\Escritorio\Laragon6\www\EMPRESAA\system\database\drivers\odbc\odbc_driver.php 138
ERROR - 2025-10-04 00:11:47 --> Query error: [Microsoft][ODBC SQL Server Driver][SQL Server]Invalid column name 'activo'. - Invalid query: SELECT Id, nombre_seccion, activo
FROM cat_secciones
WHERE activo = '1'
