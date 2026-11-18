<?php

return [
    'page' => [
        'title' => 'Реестр персональных данных',
        'navigation_label' => 'Персональные данные',
    ],

    'fields' => [
        'column' => 'Столбец',
        'category' => 'Категория',
        'purpose' => 'Цель',
        'processing' => 'Продажа, реклама, профилирование',
        'retention' => 'Хранение',
        'anonymize' => 'Деидентификация',
    ],

    'category' => [
        'personal' => 'Персональные',
        'sensitive' => 'Чувствительная',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'Расовое или этническое происхождение',
        'religious_beliefs' => 'Религиозные убеждения',
        'health' => 'Здоровье',
        'sex_life_or_orientation' => 'Сексуальная жизнь или ориентация',
        'citizenship_or_immigration' => 'Гражданство или миграционный статус',
        'genetic' => 'Генетические данные',
        'biometric' => 'Биометрические данные',
        'known_child' => 'Данные известного ребёнка',
        'precise_geolocation' => 'Точная геолокация',
        'national_origin' => 'Национальное происхождение',
        'transgender_or_nonbinary_status' => 'Трансгендерный или небинарный статус',
        'crime_victim_status' => 'Статус жертвы преступления',
        'financial_account' => 'Финансовый счёт',
        'government_identifier' => 'Государственный идентификатор',
        'union_membership' => 'Членство в профсоюзе',
        'neural_data' => 'Нейроданные',
        'consumer_health' => 'Данные о здоровье потребителя',
    ],

    'anonymize' => [
        'nullify' => 'Очистить',
        'hash' => 'Хеш',
        'mask' => 'Маскировать',
        'keep' => 'Сохранить (обязательное хранение)',
    ],

    'sold' => 'Продаётся',
    'targeted_advertising' => 'Таргетированная реклама',
    'profiling' => 'Профилирование',
    'empty' => 'Нет зарегистрированных моделей. Добавьте модели в us-privacy.models в config/us-privacy.php.',
    'states' => [
        'title' => 'Законы штатов о конфиденциальности',
        'navigation_label' => 'Законы штатов',
        'description' => 'Правила каждого закона штата в настройках config/us-privacy.php. Проверьте их с юристом.',
        'columns' => [
            'state' => 'Штат',
            'effective' => 'Вступил в силу',
            'response' => 'Ответ (дни)',
            'appeal' => 'Апелляция (дни)',
            'sensitive' => 'Чувствительные данные',
            'universal_opt_out' => 'Универсальный отказ',
            'assessments' => 'Оценки',
            'minors' => 'Несовершеннолетние (реклама, продажа)',
        ],
        'sensitive' => [
            'opt_in' => 'Согласие',
            'opt_out' => 'Отказ',
            'strictly_necessary' => 'Строго необходимое',
        ],
        'not_yet' => 'Ещё нет',
        'yes' => 'Да',
        'no' => 'Нет',
        'under' => 'До',
        'prohibited' => 'запрещено',
    ],
];
