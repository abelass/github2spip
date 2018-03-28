<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2018-03-28 14:51:20
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'github2spip',
    'nom' => 'Gestionnaire de dépots GitHub ',
    'slogan' => 'Créer de dépots Spip depuis Github repositories',
    'description' => 'Plugin qui permet de créer de dépôts pour le gestionnaire de plugins de spip à partir de Github repositories',
    'version' => '1.0.0',
    'auteur' => 'Rainer Müller',
    'auteur_lien' => 'http://websimple.be/',
    'licence' => 'GNU/GPL',
    'categorie' => 'outil',
    'etat' => 'dev',
    'compatibilite' => '[3.0.16;3.0.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => 'on',
    'formulaire_config_titre' => '',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'fonctions',
      2 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'Dépôts ',
      'nom_singulier' => 'Dépôt',
      'genre' => 'masculin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => '',
      'table' => 'spip_github_depots',
      'cle_primaire' => 'id_github_depot',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'github_depot',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Déscriptif',
          'champ' => 'descriptif',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '4',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'titre',
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Dépôts',
        'titre_objet' => 'Dépôt',
        'info_aucun_objet' => 'Aucun dépôt',
        'info_1_objet' => 'Un dépôt',
        'info_nb_objets' => '@nb@ dépôts',
        'icone_creer_objet' => 'Créer un dépôt',
        'icone_modifier_objet' => 'Modifier ce dépôt',
        'titre_logo_objet' => 'Logo de ce dépôt',
        'titre_langue_objet' => 'Langue de ce dépôt',
        'texte_definir_comme_traduction_objet' => 'Ce dépôt est une traduction du dépôt numéro :',
        'titre_\\objets_lies_objet' => 'Liés à ce dépôt',
        'titre_objets_rubrique' => 'Dépôts de la rubrique',
        'info_objets_auteur' => 'Les dépôts de cet auteur',
        'retirer_lien_objet' => 'Retirer ce dépôt',
        'retirer_tous_liens_objets' => 'Retirer tous les dépôts',
        'ajouter_lien_objet' => 'Ajouter ce dépôt',
        'texte_ajouter_objet' => 'Ajouter un dépôt',
        'texte_creer_associer_objet' => 'Créer et associer un dépôt',
        'texte_changer_statut_objet' => 'Ce dépôt est :',
        'supprimer_objet' => 'Supprimer cet dépôt',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cet dépôt ?',
      ),
      'liaison_directe' => '',
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'github_depots',
      ),
      'afficher_liens' => '',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => 'redacteur',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
    1 => 
    array (
      'nom' => 'GitHub Repositories',
      'nom_singulier' => 'GitHub Repository',
      'genre' => 'masculin',
      'logo' => 
      array (
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => '',
      'table' => 'spip_github_repos',
      'cle_primaire' => 'id_github_repo',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'github_repo',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Nom',
          'champ' => 'nom',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '8',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'User',
          'champ' => 'user',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '2',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Branch',
          'champ' => 'branch',
          'sql' => 'varchar(50) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => 'Si rien, master',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Tag',
          'champ' => 'tag',
          'sql' => 'varchar(25) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'nom',
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Github repositories',
        'titre_objet' => 'Github repository',
        'info_aucun_objet' => 'Aucun github repository',
        'info_1_objet' => 'Un github repository',
        'info_nb_objets' => '@nb@ github repositories',
        'icone_creer_objet' => 'Créer un github repository',
        'icone_modifier_objet' => 'Modifier ce github repository',
        'titre_logo_objet' => 'Logo de ce github repository',
        'titre_langue_objet' => 'Langue de ce github repository',
        'texte_definir_comme_traduction_objet' => 'Ce github repository est une traduction du github repository numéro :',
        'titre_\\objets_lies_objet' => 'Liés à ce github repository',
        'titre_objets_rubrique' => 'Github repositories de la rubrique',
        'info_objets_auteur' => 'Les github repositories de cet auteur',
        'retirer_lien_objet' => 'Retirer ce github repository',
        'retirer_tous_liens_objets' => 'Retirer tous les github repositories',
        'ajouter_lien_objet' => 'Ajouter ce github repository',
        'texte_ajouter_objet' => 'Ajouter un github repository',
        'texte_creer_associer_objet' => 'Créer et associer un github repository',
        'texte_changer_statut_objet' => 'Ce github repository est :',
        'supprimer_objet' => 'Supprimer cet github repository',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cet github repository ?',
      ),
      'liaison_directe' => '',
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_github_depots',
      ),
      'afficher_liens' => 'on',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
        'explicites' => 
        array (
          0 => 'action/supprimer_objet.php',
        ),
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
      ),
    ),
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => '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',
        ),
      ),
    ),
    'objets' => 
    array (
      0 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => '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',
          ),
        ),
      ),
      1 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => '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',
          ),
        ),
      ),
    ),
  ),
);
