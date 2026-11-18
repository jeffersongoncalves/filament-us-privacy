<?php

return [
    'page' => [
        'title' => 'Kişisel veri envanteri',
        'navigation_label' => 'Kişisel veriler',
    ],

    'fields' => [
        'column' => 'Sütun',
        'category' => 'Kategori',
        'purpose' => 'Amaç',
        'processing' => 'Satış, reklam, profilleme',
        'retention' => 'Saklama',
        'anonymize' => 'Kimliksizleştirme',
    ],

    'category' => [
        'personal' => 'Kişisel',
        'sensitive' => 'Hassas',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'Irk veya etnik köken',
        'religious_beliefs' => 'Dini inançlar',
        'health' => 'Sağlık',
        'sex_life_or_orientation' => 'Cinsel yaşam veya yönelim',
        'citizenship_or_immigration' => 'Vatandaşlık veya göçmenlik durumu',
        'genetic' => 'Genetik veriler',
        'biometric' => 'Biyometrik veriler',
        'known_child' => 'Bilinen bir çocuğun verileri',
        'precise_geolocation' => 'Hassas konum',
        'national_origin' => 'Ulusal köken',
        'transgender_or_nonbinary_status' => 'Trans veya ikili olmayan kimlik',
        'crime_victim_status' => 'Suç mağduru durumu',
        'financial_account' => 'Finansal hesap',
        'government_identifier' => 'Resmî kimlik numarası',
        'union_membership' => 'Sendika üyeliği',
        'neural_data' => 'Nöral veriler',
        'consumer_health' => 'Tüketici sağlık verileri',
    ],

    'anonymize' => [
        'nullify' => 'Boşalt',
        'hash' => 'Hash',
        'mask' => 'Maskele',
        'keep' => 'Koru (yasal saklama)',
    ],

    'sold' => 'Satılıyor',
    'targeted_advertising' => 'Hedefli reklam',
    'profiling' => 'Profilleme',
    'empty' => 'Kayıtlı model yok. Modellerinizi config/us-privacy.php içindeki us-privacy.models\'e ekleyin.',
    'states' => [
        'title' => 'Eyalet gizlilik yasaları',
        'navigation_label' => 'Eyalet yasaları',
        'description' => 'config/us-privacy.php içinde yapılandırılan her eyalet yasasının kuralları. Bunları hukuk danışmanınızla doğrulayın.',
        'columns' => [
            'state' => 'Eyalet',
            'effective' => 'Yürürlük',
            'response' => 'Yanıt (gün)',
            'appeal' => 'İtiraz (gün)',
            'sensitive' => 'Hassas veriler',
            'universal_opt_out' => 'Evrensel ret',
            'assessments' => 'Değerlendirmeler',
            'minors' => 'Reşit olmayanlar (reklam, satış)',
        ],
        'sensitive' => [
            'opt_in' => 'Rıza',
            'opt_out' => 'Ret',
            'strictly_necessary' => 'Kesinlikle gerekli',
        ],
        'not_yet' => 'Henüz değil',
        'yes' => 'Evet',
        'no' => 'Hayır',
        'under' => 'Altında',
        'prohibited' => 'yasak',
    ],
];
