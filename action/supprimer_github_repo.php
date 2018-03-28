<?php
/**
 * Utilisation de l'action supprimer pour l'objet github_repo
 *
 * @plugin     Gestionnaire de dépots GitHub 
 * @copyright  2018
 * @author     Rainer Müller
 * @licence    GNU/GPL
 * @package    SPIP\Github2spip\Action
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}



/**
 * Action pour supprimer un·e github_repo
 *
 * Vérifier l'autorisation avant d'appeler l'action.
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, github_repo, #ID_GITHUB_REPO}|oui)
 *         [(#BOUTON_ACTION{<:github_repo:supprimer_github_repo:>,
 *             #URL_ACTION_AUTEUR{supprimer_github_repo, #ID_GITHUB_REPO, #URL_ECRIRE{github_repos}},
 *             danger, <:github_repo:confirmer_supprimer_github_repo:>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, github_repo, #ID_GITHUB_REPO}|oui)
 *         [(#BOUTON_ACTION{
 *             [(#CHEMIN_IMAGE{github_repo-del-24.png}|balise_img{<:github_repo:supprimer_github_repo:>}|concat{' ',#VAL{<:github_repo:supprimer_github_repo:>}|wrap{<b>}}|trim)],
 *             #URL_ACTION_AUTEUR{supprimer_github_repo, #ID_GITHUB_REPO, #URL_ECRIRE{github_repos}},
 *             icone s24 horizontale danger github_repo-del-24, <:github_repo:confirmer_supprimer_github_repo:>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     if (autoriser('supprimer', 'github_repo', $id_github_repo)) {
 *          $supprimer_github_repo = charger_fonction('supprimer_github_repo', 'action');
 *          $supprimer_github_repo($id_github_repo);
 *     }
 *     ```
 *
 * @param null|int $arg
 *     Identifiant à supprimer.
 *     En absence de id utilise l'argument de l'action sécurisée.
**/
function action_supprimer_github_repo_dist($arg=null) {
	if (is_null($arg)){
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
	}
	$arg = intval($arg);

	// cas suppression
	if ($arg) {
		sql_delete('spip_github_repos',  'id_github_repo=' . sql_quote($arg));
	}
	else {
		spip_log("action_supprimer_github_repo_dist $arg pas compris");
	}
}
