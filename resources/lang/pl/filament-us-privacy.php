<?php

return [
    'page' => [
        'title' => 'Inwentarz danych osobowych',
        'navigation_label' => 'Dane osobowe',
    ],

    'fields' => [
        'column' => 'Kolumna',
        'category' => 'Kategoria',
        'purpose' => 'Cel',
        'processing' => 'Sprzedaż, reklamy, profilowanie',
        'retention' => 'Retencja',
        'anonymize' => 'Deidentyfikacja',
    ],

    'category' => [
        'personal' => 'Osobowe',
        'sensitive' => 'Wrażliwe',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'Pochodzenie rasowe lub etniczne',
        'religious_beliefs' => 'Przekonania religijne',
        'health' => 'Zdrowie',
        'sex_life_or_orientation' => 'Życie seksualne lub orientacja',
        'citizenship_or_immigration' => 'Obywatelstwo lub status imigracyjny',
        'genetic' => 'Dane genetyczne',
        'biometric' => 'Dane biometryczne',
        'known_child' => 'Dane znanego dziecka',
        'precise_geolocation' => 'Dokładna geolokalizacja',
        'national_origin' => 'Pochodzenie narodowe',
        'transgender_or_nonbinary_status' => 'Status osoby transpłciowej lub niebinarnej',
        'crime_victim_status' => 'Status ofiary przestępstwa',
        'financial_account' => 'Rachunek finansowy',
        'government_identifier' => 'Identyfikator urzędowy',
        'union_membership' => 'Przynależność do związku zawodowego',
        'neural_data' => 'Dane neuronalne',
        'consumer_health' => 'Dane o zdrowiu konsumenta',
    ],

    'anonymize' => [
        'nullify' => 'Wyczyść',
        'hash' => 'Hash',
        'mask' => 'Maskuj',
        'keep' => 'Zachowaj (obowiązek prawny)',
    ],

    'sold' => 'Sprzedawane',
    'targeted_advertising' => 'Reklamy ukierunkowane',
    'profiling' => 'Profilowanie',
    'empty' => 'Brak zarejestrowanych modeli. Dodaj modele do us-privacy.models w config/us-privacy.php.',
    'states' => [
        'title' => 'Stanowe przepisy o prywatności',
        'navigation_label' => 'Prawo stanowe',
        'description' => 'Zasady każdej ustawy stanowej skonfigurowane w config/us-privacy.php. Zweryfikuj je z prawnikiem.',
        'columns' => [
            'state' => 'Stan',
            'effective' => 'Obowiązuje od',
            'response' => 'Odpowiedź (dni)',
            'appeal' => 'Odwołanie (dni)',
            'sensitive' => 'Dane wrażliwe',
            'universal_opt_out' => 'Uniwersalna rezygnacja',
            'assessments' => 'Oceny',
            'minors' => 'Małoletni (reklamy, sprzedaż)',
        ],
        'sensitive' => [
            'opt_in' => 'Zgoda',
            'opt_out' => 'Rezygnacja',
            'strictly_necessary' => 'Niezbędne',
        ],
        'not_yet' => 'Jeszcze nie',
        'yes' => 'Tak',
        'no' => 'Nie',
        'under' => 'Poniżej',
        'prohibited' => 'zakazane',
    ],
];
