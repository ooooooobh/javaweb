<?php
$base = c('modules.mobile.base');
$export[] = array($base, array('controller' => 'index', 'module' => 'mobile'));
$export[] = array($base . '/', array('controller' => 'index', 'module' => 'mobile'));
$export[] = array($base . '/article/:name/:action/:gid/:mode', array('controller' => 'article', 'module' => 'mobile', 'action' => null, 'mode' => null), array('gid' => '\d+'));
$export[] = array($base . '/article/:name/:action', array('controller' => 'article', 'module' => 'mobile'));
$export[] = array($base . '/board/:name/:mode', array('controller' => 'board', 'module' => 'mobile', 'mode' => null));
$export[] = array($base . '/att/:name/:mode/:id/:pos/:type', array('controller' => 'attachment', 'action' => 'download', 'mode' => null, 'type' => null), array('id' => '\d+', 'pos' => '\d+', 'mode' => '\d+', 'type' => '[A-Za-z][\w-]*'));
$export[] = array($base . '/section/:name', array('controller' => 'section', 'module' => 'mobile', 'name' => null));
$export[] = array($base . '/mail/send', array('controller' => 'mail', 'module' => 'mobile', 'action' => 'send'));
$export[] = array($base . '/mail/:type/:action/:num', array('controller' => 'mail', 'module' => 'mobile', 'num' => null), array('num'=> '\d+'));
$export[] = array($base . '/mail/:type', array('controller' => 'mail', 'module' => 'mobile', 'action' => 'index', 'type' => null));
$export[] = array($base . '/refer/:type/:action', array('controller' => 'refer', 'module' => 'mobile', 'action' => null));
$export[] = array($base . '/favor/:num', array('controller' => 'favor', 'module' => 'mobile', 'action' => 'index', 'num' => null), array('num' => '\d+'));
$export[] = array($base . '/go', array('controller' => 'index', 'module' => 'mobile', 'action' => 'searchBoard'));
$export[] = array($base . '/hot/:t', array('controller' => 'index', 'module' => 'mobile', 'action' => 'hot', 't' => null));
$export[] = array($base . '/user/query/:id', array('controller' => 'user', 'module' => 'mobile', 'action' => 'query'));
$export[] = array($base . '/user/:action', array('controller' => 'user', 'module' => 'mobile'));
$export[] = array($base . '/friend/:action', array('controller' => 'friend', 'module' => 'mobile'));
$export[] = array($base . '/*', array('controller' => 'error', 'module' => 'mobile', 'action' => 'error'), array(), false);