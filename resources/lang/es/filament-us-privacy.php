<?php

return [
    'page' => [
        'title' => 'Inventario de datos personales',
        'navigation_label' => 'Datos personales',
    ],

    'fields' => [
        'column' => 'Columna',
        'category' => 'Categoría',
        'purpose' => 'Finalidad',
        'processing' => 'Venta, anuncios, perfiles',
        'retention' => 'Retención',
        'anonymize' => 'Desidentificación',
    ],

    'category' => [
        'personal' => 'Personal',
        'sensitive' => 'Sensible',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'Origen racial o étnico',
        'religious_beliefs' => 'Creencias religiosas',
        'health' => 'Salud',
        'sex_life_or_orientation' => 'Vida sexual u orientación',
        'citizenship_or_immigration' => 'Ciudadanía o situación migratoria',
        'genetic' => 'Datos genéticos',
        'biometric' => 'Datos biométricos',
        'known_child' => 'Datos de un menor conocido',
        'precise_geolocation' => 'Geolocalización precisa',
        'national_origin' => 'Origen nacional',
        'transgender_or_nonbinary_status' => 'Condición de persona trans o no binaria',
        'crime_victim_status' => 'Condición de víctima de un delito',
        'financial_account' => 'Cuenta financiera',
        'government_identifier' => 'Identificador oficial',
        'union_membership' => 'Afiliación sindical',
        'neural_data' => 'Datos neuronales',
        'consumer_health' => 'Datos de salud del consumidor',
    ],

    'anonymize' => [
        'nullify' => 'Anular',
        'hash' => 'Hash',
        'mask' => 'Enmascarar',
        'keep' => 'Conservar (guarda legal)',
    ],

    'sold' => 'Vendida',
    'targeted_advertising' => 'Anuncios dirigidos',
    'profiling' => 'Elaboración de perfiles',
    'empty' => 'No hay modelos registrados. Añada sus modelos a us-privacy.models en config/us-privacy.php.',
    'states' => [
        'title' => 'Leyes estatales de privacidad',
        'navigation_label' => 'Leyes estatales',
        'description' => 'Las reglas de cada ley estatal tal como están configuradas en config/us-privacy.php. Verifíquelas con su asesor legal.',
        'columns' => [
            'state' => 'Estado',
            'effective' => 'Vigencia',
            'response' => 'Respuesta (días)',
            'appeal' => 'Apelación (días)',
            'sensitive' => 'Datos sensibles',
            'universal_opt_out' => 'Exclusión universal',
            'assessments' => 'Evaluaciones',
            'minors' => 'Menores (anuncios, venta)',
        ],
        'sensitive' => [
            'opt_in' => 'Consentimiento',
            'opt_out' => 'Exclusión',
            'strictly_necessary' => 'Estrictamente necesario',
        ],
        'not_yet' => 'Todavía no',
        'yes' => 'Sí',
        'no' => 'No',
        'under' => 'Menores de',
        'prohibited' => 'prohibido',
    ],
];
