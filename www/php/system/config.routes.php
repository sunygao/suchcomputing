<?php

Router::add('/', DIR_CTRL.'/index.php');

// see www/lib/php/controller/api.php
Router::add("#^/api/.*$#", DIR_CTRL.'/api.php', Router::ROUTE_PCRE);

/**
 * Routes are added with the static method Router::add($pattern, $replacement)
 * It is processed as preg_replace($pattern, $replace) in the router class, so
 * use any style for $pattern. Though it would be best to use # for pattern 
 * delimiters and ${n} for the replacement string variables. To carry a string
 * from the pattern, just put them in parentheses (). These are run in order,
 * and first one that matches and has a readable controller file is used.
 *
 * PHP's preg_replace: http://php.net/preg_replace/
 *
 * examples:
 *
 * Router::add('#/#', DIR_CTRL.'index.php', Router::ROUTE_PCRE);
 *      sends index page to the index.php contoller
 *
 * Router::add('#/news/(archive|latest)/#', DIR_CTRL.'news.${1}.php', Router::ROUTE_PCRE);
 *      /news/archive/ goes to news.archive.php
 *
 * you can also do this
 *
 * Router::add('#/news/(archive|latest)/#', DIR_CTRL.'news/${1}.php', Router::ROUTE_PCRE);
 *      /news/archive/ goes to news/archive.php
 */
 
 Router::add('/about', DIR_CTRL.'/about.php');
 Router::add('/mobile', DIR_CTRL.'/mobile.php');
 Router::add('/store', DIR_CTRL.'/store.php');
  Router::add('/art', DIR_CTRL.'/art.php');
 ?>
