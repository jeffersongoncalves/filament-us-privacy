<?php

return [
    'page' => [
        'title' => 'Shaxsiy ma\'lumotlar inventari',
        'navigation_label' => 'Shaxsiy ma\'lumotlar',
    ],

    'fields' => [
        'column' => 'Ustun',
        'category' => 'Toifa',
        'purpose' => 'Maqsad',
        'processing' => 'Sotish, reklama, profillash',
        'retention' => 'Saqlash',
        'anonymize' => 'Shaxssizlashtirish',
    ],

    'category' => [
        'personal' => 'Shaxsiy',
        'sensitive' => 'Nozik',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'Irqiy yoki etnik kelib chiqish',
        'religious_beliefs' => 'Diniy e\'tiqodlar',
        'health' => 'Sog\'liq',
        'sex_life_or_orientation' => 'Jinsiy hayot yoki yo\'nalish',
        'citizenship_or_immigration' => 'Fuqarolik yoki migratsiya maqomi',
        'genetic' => 'Genetik ma\'lumotlar',
        'biometric' => 'Biometrik ma\'lumotlar',
        'known_child' => 'Ma\'lum bolaning ma\'lumotlari',
        'precise_geolocation' => 'Aniq geolokatsiya',
        'national_origin' => 'Milliy kelib chiqish',
        'transgender_or_nonbinary_status' => 'Transgender yoki nobinar maqom',
        'crime_victim_status' => 'Jinoyat qurboni maqomi',
        'financial_account' => 'Moliyaviy hisob',
        'government_identifier' => 'Davlat identifikatori',
        'union_membership' => 'Kasaba uyushmasiga a\'zolik',
        'neural_data' => 'Neyron ma\'lumotlar',
        'consumer_health' => 'Iste\'molchi sog\'lig\'i ma\'lumotlari',
    ],

    'anonymize' => [
        'nullify' => 'Bo\'shatish',
        'hash' => 'Xesh',
        'mask' => 'Niqoblash',
        'keep' => 'Saqlab qolish (qonuniy saqlash)',
    ],

    'sold' => 'Sotiladi',
    'targeted_advertising' => 'Maqsadli reklama',
    'profiling' => 'Profillash',
    'empty' => 'Ro\'yxatdan o\'tgan model yo\'q. Modellaringizni config/us-privacy.php dagi us-privacy.models ga qo\'shing.',
    'states' => [
        'title' => 'Shtat maxfiylik qonunlari',
        'navigation_label' => 'Shtat qonunlari',
        'description' => 'config/us-privacy.php da sozlanganidek har bir shtat qonunining qoidalari. Ularni huquqshunos bilan tekshiring.',
        'columns' => [
            'state' => 'Shtat',
            'effective' => 'Kuchga kirgan',
            'response' => 'Javob (kun)',
            'appeal' => 'Apellyatsiya (kun)',
            'sensitive' => 'Nozik ma\'lumotlar',
            'universal_opt_out' => 'Universal rad etish',
            'assessments' => 'Baholashlar',
            'minors' => 'Voyaga yetmaganlar (reklama, sotish)',
        ],
        'sensitive' => [
            'opt_in' => 'Rozilik',
            'opt_out' => 'Rad etish',
            'strictly_necessary' => 'Mutlaqo zarur',
        ],
        'not_yet' => 'Hali emas',
        'yes' => 'Ha',
        'no' => 'Yo\'q',
        'under' => 'Ostida',
        'prohibited' => 'taqiqlangan',
    ],
];
