<?php

return [
    'page' => [
        'title' => 'Personal data inventory',
        'navigation_label' => 'Personal data',
    ],

    'fields' => [
        'column' => 'Column',
        'category' => 'Category',
        'purpose' => 'Purpose',
        'processing' => 'Sale, ads, profiling',
        'retention' => 'Retention',
        'anonymize' => 'Deidentification',
    ],

    'category' => [
        'personal' => 'Personal',
        'sensitive' => 'Sensitive',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'Racial or ethnic origin',
        'religious_beliefs' => 'Religious beliefs',
        'health' => 'Health',
        'sex_life_or_orientation' => 'Sex life or orientation',
        'citizenship_or_immigration' => 'Citizenship or immigration status',
        'genetic' => 'Genetic data',
        'biometric' => 'Biometric data',
        'known_child' => 'Data of a known child',
        'precise_geolocation' => 'Precise geolocation',
        'national_origin' => 'National origin',
        'transgender_or_nonbinary_status' => 'Transgender or nonbinary status',
        'crime_victim_status' => 'Crime victim status',
        'financial_account' => 'Financial account',
        'government_identifier' => 'Government identifier',
        'union_membership' => 'Union membership',
        'neural_data' => 'Neural data',
        'consumer_health' => 'Consumer health data',
    ],

    'anonymize' => [
        'nullify' => 'Nullify',
        'hash' => 'Hash',
        'mask' => 'Mask',
        'keep' => 'Keep (legal retention)',
    ],

    'sold' => 'Sold',
    'targeted_advertising' => 'Targeted ads',
    'profiling' => 'Profiling',
    'empty' => 'No models registered. Add your models to us-privacy.models in config/us-privacy.php.',

    'states' => [
        'title' => 'State privacy laws',
        'navigation_label' => 'State laws',
        'description' => 'The rules of each state law as configured in config/us-privacy.php. Verify them with counsel.',
        'columns' => [
            'state' => 'State',
            'effective' => 'Effective',
            'response' => 'Response (days)',
            'appeal' => 'Appeal (days)',
            'sensitive' => 'Sensitive data',
            'universal_opt_out' => 'Universal opt-out',
            'assessments' => 'Assessments',
            'minors' => 'Minors (ads, sale)',
        ],
        'sensitive' => [
            'opt_in' => 'Consent',
            'opt_out' => 'Opt-out',
            'strictly_necessary' => 'Strictly necessary',
        ],
        'not_yet' => 'Not yet',
        'yes' => 'Yes',
        'no' => 'No',
        'under' => 'Under',
        'prohibited' => 'prohibited',
    ],
];
