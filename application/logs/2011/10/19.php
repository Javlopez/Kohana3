<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-19 20:41:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-19 20:41:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\www\kohana3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\www\kohana3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 E:\www\kohana3\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-19 20:52:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-19 20:52:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\www\kohana3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\www\kohana3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 E:\www\kohana3\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-19 21:10:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\home.php [ 3 ]
2011-10-19 21:10:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\home.php [ 3 ]
--
#0 E:\www\kohana3\application\views\home.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\www\kohana3\...', 3, Array)
#1 E:\www\kohana3\system\classes\kohana\view.php(61): include('E:\www\kohana3\...')
#2 E:\www\kohana3\system\classes\kohana\view.php(343): Kohana_View::capture('E:\www\kohana3\...', Array)
#3 E:\www\kohana3\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\www\kohana3\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\www\kohana3\application\classes\controller\welcome.php(8): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\www\kohana3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\www\kohana3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\www\kohana3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 E:\www\kohana3\index.php(109): Kohana_Request->execute()
#11 {main}
2011-10-19 21:22:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Usuarios' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2011-10-19 21:22:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Usuarios' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-19 21:24:18 --- ERROR: Database_Exception [ 1146 ]: Table 'php.usuarioses' doesn't exist [ SHOW FULL COLUMNS FROM `usuarioses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-19 21:24:18 --- STRACE: Database_Exception [ 1146 ]: Table 'php.usuarioses' doesn't exist [ SHOW FULL COLUMNS FROM `usuarioses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\www\kohana3\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 E:\www\kohana3\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('usuarioses')
#2 E:\www\kohana3\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 E:\www\kohana3\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 E:\www\kohana3\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 E:\www\kohana3\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 E:\www\kohana3\application\classes\controller\welcome.php(16): Kohana_ORM::factory('usuarios')
#7 [internal function]: Controller_Welcome->action_usuarios()
#8 E:\www\kohana3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 E:\www\kohana3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 E:\www\kohana3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 E:\www\kohana3\index.php(109): Kohana_Request->execute()
#12 {main}
2011-10-19 21:25:24 --- ERROR: Database_Exception [ 1146 ]: Table 'php.usuarioses' doesn't exist [ SHOW FULL COLUMNS FROM `usuarioses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-19 21:25:24 --- STRACE: Database_Exception [ 1146 ]: Table 'php.usuarioses' doesn't exist [ SHOW FULL COLUMNS FROM `usuarioses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\www\kohana3\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 E:\www\kohana3\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('usuarioses')
#2 E:\www\kohana3\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 E:\www\kohana3\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 E:\www\kohana3\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 E:\www\kohana3\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 E:\www\kohana3\application\classes\controller\welcome.php(16): Kohana_ORM::factory('usuarios')
#7 [internal function]: Controller_Welcome->action_usuarios()
#8 E:\www\kohana3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 E:\www\kohana3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 E:\www\kohana3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 E:\www\kohana3\index.php(109): Kohana_Request->execute()
#12 {main}
2011-10-19 21:25:26 --- ERROR: Database_Exception [ 1146 ]: Table 'php.usuarioses' doesn't exist [ SHOW FULL COLUMNS FROM `usuarioses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-19 21:25:26 --- STRACE: Database_Exception [ 1146 ]: Table 'php.usuarioses' doesn't exist [ SHOW FULL COLUMNS FROM `usuarioses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\www\kohana3\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 E:\www\kohana3\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('usuarioses')
#2 E:\www\kohana3\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 E:\www\kohana3\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 E:\www\kohana3\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 E:\www\kohana3\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 E:\www\kohana3\application\classes\controller\welcome.php(16): Kohana_ORM::factory('usuarios')
#7 [internal function]: Controller_Welcome->action_usuarios()
#8 E:\www\kohana3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 E:\www\kohana3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 E:\www\kohana3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 E:\www\kohana3\index.php(109): Kohana_Request->execute()
#12 {main}
2011-10-19 21:25:32 --- ERROR: Database_Exception [ 1146 ]: Table 'php.usuarioses' doesn't exist [ SHOW FULL COLUMNS FROM `usuarioses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-19 21:25:32 --- STRACE: Database_Exception [ 1146 ]: Table 'php.usuarioses' doesn't exist [ SHOW FULL COLUMNS FROM `usuarioses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\www\kohana3\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 E:\www\kohana3\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('usuarioses')
#2 E:\www\kohana3\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 E:\www\kohana3\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 E:\www\kohana3\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 E:\www\kohana3\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 E:\www\kohana3\application\classes\controller\welcome.php(16): Kohana_ORM::factory('usuarios')
#7 [internal function]: Controller_Welcome->action_usuarios()
#8 E:\www\kohana3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 E:\www\kohana3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 E:\www\kohana3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 E:\www\kohana3\index.php(109): Kohana_Request->execute()
#12 {main}
2011-10-19 21:26:41 --- ERROR: Database_Exception [ 1146 ]: Table 'php.usuarioses' doesn't exist [ SHOW FULL COLUMNS FROM `usuarioses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-19 21:26:41 --- STRACE: Database_Exception [ 1146 ]: Table 'php.usuarioses' doesn't exist [ SHOW FULL COLUMNS FROM `usuarioses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\www\kohana3\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 E:\www\kohana3\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('usuarioses')
#2 E:\www\kohana3\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 E:\www\kohana3\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 E:\www\kohana3\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 E:\www\kohana3\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 E:\www\kohana3\application\classes\controller\welcome.php(16): Kohana_ORM::factory('usuarios')
#7 [internal function]: Controller_Welcome->action_usuarios()
#8 E:\www\kohana3\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 E:\www\kohana3\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 E:\www\kohana3\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 E:\www\kohana3\index.php(109): Kohana_Request->execute()
#12 {main}