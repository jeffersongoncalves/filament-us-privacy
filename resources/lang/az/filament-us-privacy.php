<?php

return [
    'page' => [
        'title' => 'Şəxsi məlumatların inventarı',
        'navigation_label' => 'Şəxsi məlumatlar',
    ],

    'fields' => [
        'column' => 'Sütun',
        'category' => 'Kateqoriya',
        'purpose' => 'Məqsəd',
        'processing' => 'Satış, reklam, profilləşdirmə',
        'retention' => 'Saxlama',
        'anonymize' => 'Deidentifikasiya',
    ],

    'category' => [
        'personal' => 'Şəxsi',
        'sensitive' => 'Həssas',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'İrqi və ya etnik mənşə',
        'religious_beliefs' => 'Dini inanclar',
        'health' => 'Sağlamlıq',
        'sex_life_or_orientation' => 'Cinsi həyat və ya oriyentasiya',
        'citizenship_or_immigration' => 'Vətəndaşlıq və ya immiqrasiya statusu',
        'genetic' => 'Genetik məlumatlar',
        'biometric' => 'Biometrik məlumatlar',
        'known_child' => 'Məlum uşağın məlumatları',
        'precise_geolocation' => 'Dəqiq geolokasiya',
        'national_origin' => 'Milli mənşə',
        'transgender_or_nonbinary_status' => 'Transgender və ya qeyri-binar status',
        'crime_victim_status' => 'Cinayət qurbanı statusu',
        'financial_account' => 'Maliyyə hesabı',
        'government_identifier' => 'Dövlət identifikatoru',
        'union_membership' => 'Həmkarlar ittifaqı üzvlüyü',
        'neural_data' => 'Neyron məlumatları',
        'consumer_health' => 'İstehlakçının sağlamlıq məlumatları',
    ],

    'anonymize' => [
        'nullify' => 'Boşalt',
        'hash' => 'Hash',
        'mask' => 'Maskala',
        'keep' => 'Saxla (hüquqi saxlama)',
    ],

    'sold' => 'Satılır',
    'targeted_advertising' => 'Hədəfli reklam',
    'profiling' => 'Profilləşdirmə',
    'empty' => 'Qeydiyyatdan keçmiş model yoxdur. Modellərinizi config/us-privacy.php faylında us-privacy.models-ə əlavə edin.',
    'states' => [
        'title' => 'Ştat məxfilik qanunları',
        'navigation_label' => 'Ştat qanunları',
        'description' => 'config/us-privacy.php faylında qurulduğu kimi hər ştat qanununun qaydaları. Onları hüquqşünasla yoxlayın.',
        'columns' => [
            'state' => 'Ştat',
            'effective' => 'Qüvvəyə minmə',
            'response' => 'Cavab (gün)',
            'appeal' => 'Apellyasiya (gün)',
            'sensitive' => 'Həssas məlumatlar',
            'universal_opt_out' => 'Universal imtina',
            'assessments' => 'Qiymətləndirmələr',
            'minors' => 'Yetkinlik yaşına çatmayanlar (reklam, satış)',
        ],
        'sensitive' => [
            'opt_in' => 'Razılıq',
            'opt_out' => 'İmtina',
            'strictly_necessary' => 'Mütləq zəruri',
        ],
        'not_yet' => 'Hələ yox',
        'yes' => 'Bəli',
        'no' => 'Xeyr',
        'under' => 'Altında',
        'prohibited' => 'qadağandır',
    ],
];
