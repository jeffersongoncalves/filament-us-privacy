<?php

return [
    'page' => [
        'title' => 'Inventaire des données personnelles',
        'navigation_label' => 'Données personnelles',
    ],

    'fields' => [
        'column' => 'Colonne',
        'category' => 'Catégorie',
        'purpose' => 'Finalité',
        'processing' => 'Vente, publicité, profilage',
        'retention' => 'Conservation',
        'anonymize' => 'Désidentification',
    ],

    'category' => [
        'personal' => 'Personnelle',
        'sensitive' => 'Sensible',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'Origine raciale ou ethnique',
        'religious_beliefs' => 'Convictions religieuses',
        'health' => 'Santé',
        'sex_life_or_orientation' => 'Vie sexuelle ou orientation',
        'citizenship_or_immigration' => 'Citoyenneté ou statut d\'immigration',
        'genetic' => 'Données génétiques',
        'biometric' => 'Données biométriques',
        'known_child' => 'Données d\'un enfant connu',
        'precise_geolocation' => 'Géolocalisation précise',
        'national_origin' => 'Origine nationale',
        'transgender_or_nonbinary_status' => 'Statut transgenre ou non binaire',
        'crime_victim_status' => 'Statut de victime d\'infraction',
        'financial_account' => 'Compte financier',
        'government_identifier' => 'Identifiant officiel',
        'union_membership' => 'Appartenance syndicale',
        'neural_data' => 'Données neuronales',
        'consumer_health' => 'Données de santé du consommateur',
    ],

    'anonymize' => [
        'nullify' => 'Vider',
        'hash' => 'Hachage',
        'mask' => 'Masquer',
        'keep' => 'Conserver (obligation légale)',
    ],

    'sold' => 'Vendue',
    'targeted_advertising' => 'Publicité ciblée',
    'profiling' => 'Profilage',
    'empty' => 'Aucun modèle enregistré. Ajoutez vos modèles à us-privacy.models dans config/us-privacy.php.',
    'states' => [
        'title' => 'Lois des États sur la vie privée',
        'navigation_label' => 'Lois des États',
        'description' => 'Les règles de chaque loi d\'État telles que configurées dans config/us-privacy.php. Vérifiez-les avec votre conseil juridique.',
        'columns' => [
            'state' => 'État',
            'effective' => 'Entrée en vigueur',
            'response' => 'Réponse (jours)',
            'appeal' => 'Recours (jours)',
            'sensitive' => 'Données sensibles',
            'universal_opt_out' => 'Opposition universelle',
            'assessments' => 'Évaluations',
            'minors' => 'Mineurs (publicité, vente)',
        ],
        'sensitive' => [
            'opt_in' => 'Consentement',
            'opt_out' => 'Opposition',
            'strictly_necessary' => 'Strictement nécessaire',
        ],
        'not_yet' => 'Pas encore',
        'yes' => 'Oui',
        'no' => 'Non',
        'under' => 'Moins de',
        'prohibited' => 'interdit',
    ],
];
