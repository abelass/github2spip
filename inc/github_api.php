<?php
/**
 * Utilisations de pipelines par Gestionnaire de dépots GitHub 
 *
 * @plugin     Gestionnaire de dépots GitHub 
 * @copyright  2014
 * @author     Rainer Müller
 * @licence    GNU/GPL
 * @package    SPIP\Github2spip\Inc
 */

if (!defined('_ECRIRE_INC_VERSION')) return;
	
/* gets url */
function get_content_from_github($url) {
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,1);
	$content = curl_exec($ch);
	curl_close($ch);
	return $content;
}