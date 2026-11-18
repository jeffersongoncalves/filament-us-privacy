<?php

return [
    'page' => [
        'title' => 'جرد البيانات الشخصية',
        'navigation_label' => 'البيانات الشخصية',
    ],

    'fields' => [
        'column' => 'العمود',
        'category' => 'الفئة',
        'purpose' => 'الغرض',
        'processing' => 'البيع والإعلانات والتنميط',
        'retention' => 'الاحتفاظ',
        'anonymize' => 'إزالة الهوية',
    ],

    'category' => [
        'personal' => 'شخصية',
        'sensitive' => 'حساسة',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'الأصل العرقي أو الإثني',
        'religious_beliefs' => 'المعتقدات الدينية',
        'health' => 'الصحة',
        'sex_life_or_orientation' => 'الحياة الجنسية أو التوجه',
        'citizenship_or_immigration' => 'الجنسية أو وضع الهجرة',
        'genetic' => 'البيانات الجينية',
        'biometric' => 'البيانات البيومترية',
        'known_child' => 'بيانات طفل معروف',
        'precise_geolocation' => 'الموقع الجغرافي الدقيق',
        'national_origin' => 'الأصل القومي',
        'transgender_or_nonbinary_status' => 'حالة العبور الجنسي أو اللاثنائية',
        'crime_victim_status' => 'حالة ضحية الجريمة',
        'financial_account' => 'الحساب المالي',
        'government_identifier' => 'المعرّف الحكومي',
        'union_membership' => 'العضوية النقابية',
        'neural_data' => 'البيانات العصبية',
        'consumer_health' => 'بيانات صحة المستهلك',
    ],

    'anonymize' => [
        'nullify' => 'إفراغ',
        'hash' => 'تجزئة',
        'mask' => 'إخفاء',
        'keep' => 'الإبقاء (احتفاظ قانوني)',
    ],

    'sold' => 'مُباعة',
    'targeted_advertising' => 'الإعلانات الموجهة',
    'profiling' => 'التنميط',
    'empty' => 'لا توجد نماذج مسجلة. أضف نماذجك إلى us-privacy.models في config/us-privacy.php.',
    'states' => [
        'title' => 'قوانين الخصوصية في الولايات',
        'navigation_label' => 'قوانين الولايات',
        'description' => 'قواعد كل قانون ولاية كما هي مضبوطة في config/us-privacy.php. تحقق منها مع مستشار قانوني.',
        'columns' => [
            'state' => 'الولاية',
            'effective' => 'تاريخ السريان',
            'response' => 'الرد (أيام)',
            'appeal' => 'الطعن (أيام)',
            'sensitive' => 'البيانات الحساسة',
            'universal_opt_out' => 'إلغاء الاشتراك الشامل',
            'assessments' => 'التقييمات',
            'minors' => 'القاصرون (الإعلانات، البيع)',
        ],
        'sensitive' => [
            'opt_in' => 'الموافقة',
            'opt_out' => 'إلغاء الاشتراك',
            'strictly_necessary' => 'ضروري للغاية',
        ],
        'not_yet' => 'ليس بعد',
        'yes' => 'نعم',
        'no' => 'لا',
        'under' => 'أقل من',
        'prohibited' => 'محظور',
    ],
];
