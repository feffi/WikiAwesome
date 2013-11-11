<?php
/**
 * Hooks for WikiAwesome inclusion
 *
 * @file
 * @ingroup Extensions
 *
 * This is the main include file for the WikiAwesome extension.
 *
 * Installation: Add the following line in LocalSettings.php:
 * require_once( "$IP/extensions/WikiAwesome/WikiAwesome.php" );
 *
 * @author Kevin Wennemuth <feffi@feffi.org>
 * @license MIT
 * @version 0.0.1
 * 
 * The MIT License (MIT)
 * Copyright (c) 2013 Kevin Wennemuth
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT
 * NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

// Check environment
if ( !defined( 'MEDIAWIKI' ) ) {
	echo ( "This is a MediaWiki extension and cannot be run standalone.\n" );
	die ( 1 );
}

/** Set up credits **/
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'WikiAwesome',
	'author' => 'Kevin Wennemuth',
	'url' => 'https://github.com/feffi/WikiAwesome',
	'descriptionmsg' => 'wikiawesome-desc',
	'version' => '0.0.1',
);

/* Configuration */
// Defaults to $wgExtensionAssetsPath.'/WikiAwesome/font-awesome/build/assets/font-awesome'
$waResourcePath = null;

/** Setup hooks **/
$wgExtensionMessagesFiles['WikiAwesome'] = __DIR__.'/WikiAwesome.i18n.php';
$wgExtensionFunctions[] = 'WikiAwesome::setupPath';
$wgHooks['BeforePageDisplay'][] = 'WikiAwesome::addStyles';


abstract class WikiAwesome {

	/**
	 * Set up resource paths
	 */
	public static function setupPath() {
		// Web-accessable resource path
		global $waResourcePath, $wgExtensionAssetsPath;
		if ( $waResourcePath === null ) {
			$waResourcePath = $wgExtensionAssetsPath.'/WikiAwesome/font-awesome/build/assets/font-awesome';
		}
	}
	
	/**
	 * Add FontAwesome styles to page
	 */
	public static function addStyles($out) {
		global $waResourcePath;
		$out->addLink(
			array(
				'rel' => 'stylesheet',
				'type' => 'text/css',
				'href' => $waResourcePath.'/css/font-awesome.min.css'
			)
		);
		return true;
	}
}
