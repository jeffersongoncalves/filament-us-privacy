<?php

return [
    'page' => [
        'title' => 'Inventário de dados pessoais',
        'navigation_label' => 'Dados pessoais',
    ],

    'fields' => [
        'column' => 'Coluna',
        'category' => 'Categoria',
        'purpose' => 'Finalidade',
        'processing' => 'Venda, anúncios, perfilamento',
        'retention' => 'Retenção',
        'anonymize' => 'Desidentificação',
    ],

    'category' => [
        'personal' => 'Pessoal',
        'sensitive' => 'Sensível',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'Origem racial ou étnica',
        'religious_beliefs' => 'Crenças religiosas',
        'health' => 'Saúde',
        'sex_life_or_orientation' => 'Vida sexual ou orientação',
        'citizenship_or_immigration' => 'Cidadania ou situação migratória',
        'genetic' => 'Dados genéticos',
        'biometric' => 'Dados biométricos',
        'known_child' => 'Dados de criança conhecida',
        'precise_geolocation' => 'Geolocalização precisa',
        'national_origin' => 'Origem nacional',
        'transgender_or_nonbinary_status' => 'Condição de pessoa trans ou não binária',
        'crime_victim_status' => 'Condição de vítima de crime',
        'financial_account' => 'Conta financeira',
        'government_identifier' => 'Identificador oficial',
        'union_membership' => 'Filiação sindical',
        'neural_data' => 'Dados neurais',
        'consumer_health' => 'Dados de saúde do consumidor',
    ],

    'anonymize' => [
        'nullify' => 'Anular',
        'hash' => 'Hash',
        'mask' => 'Mascarar',
        'keep' => 'Manter (guarda legal)',
    ],

    'sold' => 'Vendida',
    'targeted_advertising' => 'Anúncios direcionados',
    'profiling' => 'Perfilamento',
    'empty' => 'Nenhum model registrado. Adicione seus models em us-privacy.models no config/us-privacy.php.',
    'states' => [
        'title' => 'Leis estaduais de privacidade',
        'navigation_label' => 'Leis estaduais',
        'description' => 'As regras de cada lei estadual como configuradas em config/us-privacy.php. Confirme-as com um advogado.',
        'columns' => [
            'state' => 'Estado',
            'effective' => 'Vigência',
            'response' => 'Resposta (dias)',
            'appeal' => 'Recurso (dias)',
            'sensitive' => 'Dados sensíveis',
            'universal_opt_out' => 'Opt-out universal',
            'assessments' => 'Avaliações',
            'minors' => 'Menores (anúncios, venda)',
        ],
        'sensitive' => [
            'opt_in' => 'Consentimento',
            'opt_out' => 'Opt-out',
            'strictly_necessary' => 'Estritamente necessário',
        ],
        'not_yet' => 'Ainda não',
        'yes' => 'Sim',
        'no' => 'Não',
        'under' => 'Menores de',
        'prohibited' => 'proibido',
    ],
];
