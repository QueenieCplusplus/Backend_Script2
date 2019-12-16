<?php

//User Agent Types
/*
| -------------------------------------------------------------------
| USER AGENT TYPES:
| help to identify platform, browser, robot, and mobile device data.
| -------------------------------------------------------------------
| This file contains four arrays of user agent data. It is used by the
| User Agent Class to help identify browser, platform, robot, and
| mobile device data. The array keys are used to identify the device
| and the array values are used to set the actual name of the item.
*/
$platforms = array(
	'windows nt 10.0'	=> 'Windows 10',
	'windows nt 6.3'	=> 'Windows 8.1',
	'windows nt 6.2'	=> 'Windows 8',
	'windows nt 6.1'	=> 'Windows 7',
	'windows nt 6.0'	=> 'Windows Vista',
	'windows nt 5.2'	=> 'Windows 2003',
	'windows nt 5.1'	=> 'Windows XP',
	'windows nt 5.0'	=> 'Windows 2000',
	'windows nt 4.0'	=> 'Windows NT 4.0',
	'winnt4.0'			=> 'Windows NT 4.0',
	'winnt 4.0'			=> 'Windows NT',
	'winnt'				=> 'Windows NT',
	'windows 98'		=> 'Windows 98',
	'win98'				=> 'Windows 98',
	'windows 95'		=> 'Windows 95',
    'win95'				=> 'Windows 95',
    
	'windows phone'			=> 'Windows Phone',
    'windows'			=> 'Unknown Windows OS',
    
    'android'			=> 'Android',
    
    'blackberry'		=> 'BlackBerry',
    
	'iphone'			=> 'iOS',
	'ipad'				=> 'iOS',
    'ipod'				=> 'iOS',
    
	'os x'				=> 'Mac OS X',
    'ppc mac'			=> 'Power PC Mac',
    
	'freebsd'			=> 'FreeBSD',
	'ppc'				=> 'Macintosh',
    'linux'				=> 'Linux',
    
	'debian'			=> 'Debian',
	'sunos'				=> 'Sun Solaris',
    'beos'				=> 'BeOS',
    
	'apachebench'		=> 'ApacheBench',
	'aix'				=> 'AIX',
	'irix'				=> 'Irix',
	'osf'				=> 'DEC OSF',
	'hp-ux'				=> 'HP-UX',
	'netbsd'			=> 'NetBSD',
	'bsdi'				=> 'BSDi',
    'openbsd'			=> 'OpenBSD',
    
    'gnu'				=> 'GNU/Linux',
    
    'unix'				=> 'Unknown Unix OS',
    
	'symbian' 			=> 'Symbian OS'
);


// The order of this array should NOT be changed. Many browsers return
// multiple browser types so we want to identify the sub-type first.
$browsers = array(
    'OPR'			=> 'Opera',
    
	'Flock'			=> 'Flock',
    'Edge'			=> 'Spartan',
    
	'Chrome'		=> 'Chrome',
    // Opera 10+ always reports Opera/9.80 and appends Version/<real version> to the user agent string
    
	'Opera.*?Version'	=> 'Opera',
    'Opera'			=> 'Opera',
    
	'MSIE'			=> 'Internet Explorer',
	'Internet Explorer'	=> 'Internet Explorer',
    'Trident.* rv'	=> 'Internet Explorer',
    
    'Shiira'		=> 'Shiira',
    
    'Firefox'		=> 'Firefox',
    
    'Chimera'		=> 'Chimera',
    
    'Phoenix'		=> 'Phoenix',
    
	'Firebird'		=> 'Firebird',
    'Camino'		=> 'Camino',
    
    'Netscape'		=> 'Netscape',
    
    'OmniWeb'		=> 'OmniWeb',
    
    'Safari'		=> 'Safari',
    
	'Mozilla'		=> 'Mozilla',
	'Konqueror'		=> 'Konqueror',
    'icab'			=> 'iCab',
    
	'Lynx'			=> 'Lynx',
	'Links'			=> 'Links',
	'hotjava'		=> 'HotJava',
	'amaya'			=> 'Amaya',
	'IBrowse'		=> 'IBrowse',
    'Maxthon'		=> 'Maxthon',
    
	'Ubuntu'		=> 'Ubuntu Web Browser'
);

