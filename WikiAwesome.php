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
 * @author Kevin Wennemuth <feffi1@gmail.com>
 * @license MIT
 * @version 0.0.1
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