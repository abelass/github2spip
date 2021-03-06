<?php
/**
 * Utilisations de pipelines par Gestionnaire de dépots GitHub
 *
 * @plugin     Gestionnaire de dépots GitHub
 * @copyright  2018 - 2021
 * @author     Rainer Müller
 * @licence    GNU/GPL
 * @package    SPIP\Github2spip\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Ajout de contenu sur certaines pages,
 * notamment des formulaires de liaisons entre objets
 *
 * @pipeline affiche_milieu
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function github2spip_affiche_milieu($flux) {
	$texte = '';
	$e = trouver_objet_exec($flux['args']['exec']);



	// github_depots sur les github_depots
	if (!$e['edition'] and in_array($e['type'], array('github_depot'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'github_depots',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}
	// github_repos sur les github_depots
	if (!$e['edition'] and in_array($e['type'], array('github_depot'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'github_repos',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}

	if ($texte) {
		if ($p = strpos($flux['data'], '<!--affiche_milieu-->')) {
			$flux['data'] = substr_replace($flux['data'], $texte, $p, 0);
		} else {
			$flux['data'] .= $texte;
		}
	}

	return $flux;
}




/**
 * Optimiser la base de données
 *
 * Supprime les liens orphelins de l'objet vers quelqu'un et de quelqu'un vers l'objet.
 * Supprime les liens orphelins de l'objet vers quelqu'un et de quelqu'un vers l'objet.
 * Supprime les objets à la poubelle.
 * Supprime les objets à la poubelle.
 *
 * @pipeline optimiser_base_disparus
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function github2spip_optimiser_base_disparus($flux) {

	include_spip('action/editer_liens');
	$flux['data'] += objet_optimiser_liens(array('github_depot'=>'*', 'github_repo'=>'*'), '*');

	sql_delete('spip_github_depots', "statut='poubelle' AND maj < " . $flux['args']['date']);

	sql_delete('spip_github_repos', "statut='poubelle' AND maj < " . $flux['args']['date']);

	return $flux;
}
