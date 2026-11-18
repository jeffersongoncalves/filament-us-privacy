<?php

return [
    'page' => [
        'title' => 'Inventaris van persoonsgegevens',
        'navigation_label' => 'Persoonsgegevens',
    ],

    'fields' => [
        'column' => 'Kolom',
        'category' => 'Categorie',
        'purpose' => 'Doel',
        'processing' => 'Verkoop, advertenties, profilering',
        'retention' => 'Bewaring',
        'anonymize' => 'De-identificatie',
    ],

    'category' => [
        'personal' => 'Persoonlijk',
        'sensitive' => 'Gevoelig',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'Ras of etnische afkomst',
        'religious_beliefs' => 'Religieuze overtuigingen',
        'health' => 'Gezondheid',
        'sex_life_or_orientation' => 'Seksleven of geaardheid',
        'citizenship_or_immigration' => 'Staatsburgerschap of verblijfsstatus',
        'genetic' => 'Genetische gegevens',
        'biometric' => 'Biometrische gegevens',
        'known_child' => 'Gegevens van een bekend kind',
        'precise_geolocation' => 'Precieze geolocatie',
        'national_origin' => 'Nationale afkomst',
        'transgender_or_nonbinary_status' => 'Transgender of non-binaire status',
        'crime_victim_status' => 'Status als slachtoffer van een misdrijf',
        'financial_account' => 'Financiële rekening',
        'government_identifier' => 'Overheidsidentificatie',
        'union_membership' => 'Vakbondslidmaatschap',
        'neural_data' => 'Neurale gegevens',
        'consumer_health' => 'Gezondheidsgegevens van consumenten',
    ],

    'anonymize' => [
        'nullify' => 'Leegmaken',
        'hash' => 'Hash',
        'mask' => 'Maskeren',
        'keep' => 'Behouden (wettelijke bewaring)',
    ],

    'sold' => 'Verkocht',
    'targeted_advertising' => 'Gerichte advertenties',
    'profiling' => 'Profilering',
    'empty' => 'Geen modellen geregistreerd. Voeg uw modellen toe aan us-privacy.models in config/us-privacy.php.',
    'states' => [
        'title' => 'Privacywetten van de staten',
        'navigation_label' => 'Wetten van de staten',
        'description' => 'De regels van elke staatswet zoals ingesteld in config/us-privacy.php. Controleer ze met uw juridisch adviseur.',
        'columns' => [
            'state' => 'Staat',
            'effective' => 'Van kracht',
            'response' => 'Antwoord (dagen)',
            'appeal' => 'Bezwaar (dagen)',
            'sensitive' => 'Gevoelige gegevens',
            'universal_opt_out' => 'Universele opt-out',
            'assessments' => 'Beoordelingen',
            'minors' => 'Minderjarigen (advertenties, verkoop)',
        ],
        'sensitive' => [
            'opt_in' => 'Toestemming',
            'opt_out' => 'Opt-out',
            'strictly_necessary' => 'Strikt noodzakelijk',
        ],
        'not_yet' => 'Nog niet',
        'yes' => 'Ja',
        'no' => 'Nee',
        'under' => 'Onder',
        'prohibited' => 'verboden',
    ],
];
