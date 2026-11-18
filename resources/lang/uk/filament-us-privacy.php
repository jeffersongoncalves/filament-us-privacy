<?php

return [
    'page' => [
        'title' => 'Реєстр персональних даних',
        'navigation_label' => 'Персональні дані',
    ],

    'fields' => [
        'column' => 'Стовпець',
        'category' => 'Категорія',
        'purpose' => 'Мета',
        'processing' => 'Продаж, реклама, профілювання',
        'retention' => 'Зберігання',
        'anonymize' => 'Деідентифікація',
    ],

    'category' => [
        'personal' => 'Персональні',
        'sensitive' => 'Чутлива',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'Расове або етнічне походження',
        'religious_beliefs' => 'Релігійні переконання',
        'health' => 'Здоров\'я',
        'sex_life_or_orientation' => 'Статеве життя або орієнтація',
        'citizenship_or_immigration' => 'Громадянство або міграційний статус',
        'genetic' => 'Генетичні дані',
        'biometric' => 'Біометричні дані',
        'known_child' => 'Дані відомої дитини',
        'precise_geolocation' => 'Точна геолокація',
        'national_origin' => 'Національне походження',
        'transgender_or_nonbinary_status' => 'Трансгендерний або небінарний статус',
        'crime_victim_status' => 'Статус жертви злочину',
        'financial_account' => 'Фінансовий рахунок',
        'government_identifier' => 'Державний ідентифікатор',
        'union_membership' => 'Членство у профспілці',
        'neural_data' => 'Нейродані',
        'consumer_health' => 'Дані про здоров\'я споживача',
    ],

    'anonymize' => [
        'nullify' => 'Очистити',
        'hash' => 'Хеш',
        'mask' => 'Маскувати',
        'keep' => 'Зберегти (обов\'язкове зберігання)',
    ],

    'sold' => 'Продається',
    'targeted_advertising' => 'Таргетована реклама',
    'profiling' => 'Профілювання',
    'empty' => 'Немає зареєстрованих моделей. Додайте моделі до us-privacy.models у config/us-privacy.php.',
    'states' => [
        'title' => 'Закони штатів про конфіденційність',
        'navigation_label' => 'Закони штатів',
        'description' => 'Правила кожного закону штату згідно з config/us-privacy.php. Перевірте їх із юристом.',
        'columns' => [
            'state' => 'Штат',
            'effective' => 'Набрав чинності',
            'response' => 'Відповідь (дні)',
            'appeal' => 'Апеляція (дні)',
            'sensitive' => 'Чутливі дані',
            'universal_opt_out' => 'Універсальна відмова',
            'assessments' => 'Оцінки',
            'minors' => 'Неповнолітні (реклама, продаж)',
        ],
        'sensitive' => [
            'opt_in' => 'Згода',
            'opt_out' => 'Відмова',
            'strictly_necessary' => 'Суворо необхідне',
        ],
        'not_yet' => 'Ще ні',
        'yes' => 'Так',
        'no' => 'Ні',
        'under' => 'До',
        'prohibited' => 'заборонено',
    ],
];
