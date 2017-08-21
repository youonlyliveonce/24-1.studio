<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PRO-ae508f8b0e5331fc7acb71d1c56785c6');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
thumb::$defaults['memory'] = '512MB';

c::set('debug',true);
c::set('markdown.extra', true);
c::set('languages', array(
	array(
		'code'		=> 'de',
		'name'		=> 'Deutsch',
		'default' => true,
		'locale'	=> 'de_DE',
		'url'			=> '/de/',
	),
	array(
		'code'		=> 'en',
		'name'		=> 'English',
		'locale'	=> 'en_US',
		'url'		 	=> '/en/',
	)
));

// Routing for authors page
c::set('routes', array(
  array(
      'pattern' => '(:all)/blog-author/(:any)',
      'action'  => function($lang, $user) {
        $site = kirby()->site();
        $pages = $site->pages();
        tpl::load(kirby()->roots()->templates() . DS . 'blog_author.php', array('user' => $user, 'site' => $site, 'pages' => $pages), false);
      }
  )
));

// c::set('language.detect', true);
