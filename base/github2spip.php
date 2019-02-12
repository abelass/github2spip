<?php
/**
 * Déclarations relatives à la base de données
 *
 * @plugin     Gestionnaire de dépots GitHub
 * @copyright  2018 - 2019
 * @author     Rainer Müller
 * @licence    GNU/GPL
 * @package    SPIP\Github2spip\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Déclaration des alias de tables et filtres automatiques de champs
 *
 * @pipeline declarer_tables_interfaces
 * @param array $interfaces
 *     Déclarations d'interface pour le compilateur
 * @return array
 *     Déclarations d'interface pour le compilateur
 */
function github2spip_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['github_depots'] = 'github_depots';
	$interfaces['table_des_tables']['github_repos'] = 'github_repos';

	return $interfaces;
}


/**
 * Déclaration des objets éditoriaux
 *
 * @pipeline declarer_tables_objets_sql
 * @param array $tables
 *     Description des tables
 * @return array
 *     Description complétée des tables
 */
function github2spip_declarer_tables_objets_sql($tables) {

	$tables['spip_github_depots'] = array(
		'type' => 'github_depot',
		'principale' => 'oui',
		'table_objet_surnoms' => array('githubdepot'), // table_objet('github_depot') => 'github_depots'
		'field'=> array(
			'id_github_depot'    => 'bigint(21) NOT NULL',
			'titre'              => 'varchar(255) NOT NULL DEFAULT ""',
			'descriptif'         => 'text NOT NULL DEFAULT ""',
			'date'               => 'datetime NOT NULL DEFAULT "0000-00-00 00:00:00"',
			'statut'             => 'varchar(20)  DEFAULT "0" NOT NULL',
			'maj'                => 'TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_github_depot',
			'KEY statut'         => 'statut',
		),
		'titre' => 'titre AS titre, "" AS lang',
		'date' => 'date',
		'champs_editables'  => array('titre', 'descriptif'),
		'champs_versionnes' => array('titre', 'descriptif'),
		'rechercher_champs' => array("titre" => 8, "descriptif" => 4),
		'tables_jointures'  => array('spip_github_depots_liens'),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date',
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'github_depot:texte_changer_statut_github_depot',


	);

	$tables['spip_github_repos'] = array(
		'type' => 'github_repo',
		'principale' => 'oui',
		'table_objet_surnoms' => array('githubrepo'), // table_objet('github_repo') => 'github_repos'
		'field'=> array(
			'id_github_repo'     => 'bigint(21) NOT NULL',
			'nom'                => 'varchar(255) NOT NULL DEFAULT ""',
			'user'               => 'varchar(255) NOT NULL DEFAULT ""',
			'branch'             => 'varchar(50) NOT NULL DEFAULT ""',
			'tag'                => 'varchar(25) NOT NULL DEFAULT ""',
			'date'               => 'datetime NOT NULL DEFAULT "0000-00-00 00:00:00"',
			'statut'             => 'varchar(20)  DEFAULT "0" NOT NULL',
			'maj'                => 'TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_github_repo',
			'KEY statut'         => 'statut',
		),
		'titre' => 'nom AS titre, "" AS lang',
		'date' => 'date',
		'champs_editables'  => array('nom', 'user', 'branch', 'tag'),
		'champs_versionnes' => array('nom', 'user', 'branch', 'tag'),
		'rechercher_champs' => array("nom" => 8, "user" => 2),
		'tables_jointures'  => array('spip_github_repos_liens'),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date',
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'github_repo:texte_changer_statut_github_repo',


	);

	return $tables;
}


/**
 * Déclaration des tables secondaires (liaisons)
 *
 * @pipeline declarer_tables_auxiliaires
 * @param array $tables
 *     Description des tables
 * @return array
 *     Description complétée des tables
 */
function github2spip_declarer_tables_auxiliaires($tables) {

	$tables['spip_github_depots_liens'] = array(
		'field' => array(
			'id_github_depot'    => 'bigint(21) DEFAULT "0" NOT NULL',
			'id_objet'           => 'bigint(21) DEFAULT "0" NOT NULL',
			'objet'              => 'VARCHAR(25) DEFAULT "" NOT NULL',
			'vu'                 => 'VARCHAR(6) DEFAULT "non" NOT NULL',
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_github_depot,id_objet,objet',
			'KEY id_github_depot' => 'id_github_depot',
		)
	);
	$tables['spip_github_repos_liens'] = array(
		'field' => array(
			'id_github_repo'     => 'bigint(21) DEFAULT "0" NOT NULL',
			'id_objet'           => 'bigint(21) DEFAULT "0" NOT NULL',
			'objet'              => 'VARCHAR(25) DEFAULT "" NOT NULL',
			'vu'                 => 'VARCHAR(6) DEFAULT "non" NOT NULL',
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_github_repo,id_objet,objet',
			'KEY id_github_repo' => 'id_github_repo',
		)
	);

	return $tables;
}
