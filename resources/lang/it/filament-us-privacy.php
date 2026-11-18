<?php

return [
    'page' => [
        'title' => 'Inventario dei dati personali',
        'navigation_label' => 'Dati personali',
    ],

    'fields' => [
        'column' => 'Colonna',
        'category' => 'Categoria',
        'purpose' => 'Finalità',
        'processing' => 'Vendita, pubblicità, profilazione',
        'retention' => 'Conservazione',
        'anonymize' => 'De-identificazione',
    ],

    'category' => [
        'personal' => 'Personale',
        'sensitive' => 'Sensibile',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'Origine razziale o etnica',
        'religious_beliefs' => 'Convinzioni religiose',
        'health' => 'Salute',
        'sex_life_or_orientation' => 'Vita sessuale o orientamento',
        'citizenship_or_immigration' => 'Cittadinanza o status migratorio',
        'genetic' => 'Dati genetici',
        'biometric' => 'Dati biometrici',
        'known_child' => 'Dati di un minore noto',
        'precise_geolocation' => 'Geolocalizzazione precisa',
        'national_origin' => 'Origine nazionale',
        'transgender_or_nonbinary_status' => 'Stato transgender o non binario',
        'crime_victim_status' => 'Stato di vittima di reato',
        'financial_account' => 'Conto finanziario',
        'government_identifier' => 'Identificativo governativo',
        'union_membership' => 'Iscrizione sindacale',
        'neural_data' => 'Dati neurali',
        'consumer_health' => 'Dati sanitari del consumatore',
    ],

    'anonymize' => [
        'nullify' => 'Svuota',
        'hash' => 'Hash',
        'mask' => 'Maschera',
        'keep' => 'Conserva (obbligo legale)',
    ],

    'sold' => 'Venduta',
    'targeted_advertising' => 'Pubblicità mirata',
    'profiling' => 'Profilazione',
    'empty' => 'Nessun model registrato. Aggiungi i tuoi model a us-privacy.models in config/us-privacy.php.',
    'states' => [
        'title' => 'Leggi statali sulla privacy',
        'navigation_label' => 'Leggi statali',
        'description' => 'Le regole di ogni legge statale come configurate in config/us-privacy.php. Verificale con un legale.',
        'columns' => [
            'state' => 'Stato',
            'effective' => 'In vigore dal',
            'response' => 'Risposta (giorni)',
            'appeal' => 'Ricorso (giorni)',
            'sensitive' => 'Dati sensibili',
            'universal_opt_out' => 'Opt-out universale',
            'assessments' => 'Valutazioni',
            'minors' => 'Minori (pubblicità, vendita)',
        ],
        'sensitive' => [
            'opt_in' => 'Consenso',
            'opt_out' => 'Opt-out',
            'strictly_necessary' => 'Strettamente necessario',
        ],
        'not_yet' => 'Non ancora',
        'yes' => 'Sì',
        'no' => 'No',
        'under' => 'Sotto i',
        'prohibited' => 'vietato',
    ],
];
