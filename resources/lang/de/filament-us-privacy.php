<?php

return [
    'page' => [
        'title' => 'Verzeichnis personenbezogener Daten',
        'navigation_label' => 'Personenbezogene Daten',
    ],

    'fields' => [
        'column' => 'Spalte',
        'category' => 'Kategorie',
        'purpose' => 'Zweck',
        'processing' => 'Verkauf, Werbung, Profiling',
        'retention' => 'Aufbewahrung',
        'anonymize' => 'De-Identifizierung',
    ],

    'category' => [
        'personal' => 'Personenbezogen',
        'sensitive' => 'Sensibel',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'Rassische oder ethnische Herkunft',
        'religious_beliefs' => 'Religiöse Überzeugungen',
        'health' => 'Gesundheit',
        'sex_life_or_orientation' => 'Sexualleben oder Orientierung',
        'citizenship_or_immigration' => 'Staatsangehörigkeit oder Aufenthaltsstatus',
        'genetic' => 'Genetische Daten',
        'biometric' => 'Biometrische Daten',
        'known_child' => 'Daten eines bekannten Kindes',
        'precise_geolocation' => 'Genaue Standortdaten',
        'national_origin' => 'Nationale Herkunft',
        'transgender_or_nonbinary_status' => 'Trans- oder nichtbinärer Status',
        'crime_victim_status' => 'Status als Opfer einer Straftat',
        'financial_account' => 'Finanzkonto',
        'government_identifier' => 'Amtliche Kennung',
        'union_membership' => 'Gewerkschaftszugehörigkeit',
        'neural_data' => 'Neuronale Daten',
        'consumer_health' => 'Gesundheitsdaten von Verbrauchern',
    ],

    'anonymize' => [
        'nullify' => 'Leeren',
        'hash' => 'Hash',
        'mask' => 'Maskieren',
        'keep' => 'Behalten (gesetzliche Aufbewahrung)',
    ],

    'sold' => 'Verkauft',
    'targeted_advertising' => 'Gezielte Werbung',
    'profiling' => 'Profiling',
    'empty' => 'Keine Models registriert. Fügen Sie Ihre Models zu us-privacy.models in config/us-privacy.php hinzu.',
    'states' => [
        'title' => 'Datenschutzgesetze der Bundesstaaten',
        'navigation_label' => 'Landesgesetze',
        'description' => 'Die Regeln jedes Landesgesetzes wie in config/us-privacy.php konfiguriert. Prüfen Sie sie mit Ihrer Rechtsberatung.',
        'columns' => [
            'state' => 'Bundesstaat',
            'effective' => 'In Kraft seit',
            'response' => 'Antwort (Tage)',
            'appeal' => 'Einspruch (Tage)',
            'sensitive' => 'Sensible Daten',
            'universal_opt_out' => 'Universeller Opt-out',
            'assessments' => 'Folgenabschätzungen',
            'minors' => 'Minderjährige (Werbung, Verkauf)',
        ],
        'sensitive' => [
            'opt_in' => 'Einwilligung',
            'opt_out' => 'Opt-out',
            'strictly_necessary' => 'Unbedingt erforderlich',
        ],
        'not_yet' => 'Noch nicht',
        'yes' => 'Ja',
        'no' => 'Nein',
        'under' => 'Unter',
        'prohibited' => 'verboten',
    ],
];
