<?php

return [
    'page' => [
        'title' => '个人数据清单',
        'navigation_label' => '个人数据',
    ],

    'fields' => [
        'column' => '列',
        'category' => '类别',
        'purpose' => '目的',
        'processing' => '出售、广告、画像',
        'retention' => '保留期限',
        'anonymize' => '去标识化',
    ],

    'category' => [
        'personal' => '个人',
        'sensitive' => '敏感',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => '种族或民族出身',
        'religious_beliefs' => '宗教信仰',
        'health' => '健康',
        'sex_life_or_orientation' => '性生活或性取向',
        'citizenship_or_immigration' => '公民身份或移民身份',
        'genetic' => '基因数据',
        'biometric' => '生物识别数据',
        'known_child' => '已知儿童的数据',
        'precise_geolocation' => '精确地理位置',
        'national_origin' => '国籍出身',
        'transgender_or_nonbinary_status' => '跨性别或非二元身份',
        'crime_victim_status' => '犯罪受害者身份',
        'financial_account' => '金融账户',
        'government_identifier' => '政府身份标识',
        'union_membership' => '工会会员身份',
        'neural_data' => '神经数据',
        'consumer_health' => '消费者健康数据',
    ],

    'anonymize' => [
        'nullify' => '置空',
        'hash' => '哈希',
        'mask' => '掩码',
        'keep' => '保留（法定留存）',
    ],

    'sold' => '出售',
    'targeted_advertising' => '定向广告',
    'profiling' => '画像分析',
    'empty' => '尚未注册模型。请将模型添加到 config/us-privacy.php 的 us-privacy.models 中。',
    'states' => [
        'title' => '州隐私法',
        'navigation_label' => '州法律',
        'description' => 'config/us-privacy.php 中配置的各州法律规则。请与法律顾问核实。',
        'columns' => [
            'state' => '州',
            'effective' => '生效日期',
            'response' => '答复（天）',
            'appeal' => '申诉（天）',
            'sensitive' => '敏感数据',
            'universal_opt_out' => '通用退出',
            'assessments' => '评估',
            'minors' => '未成年人（广告、出售）',
        ],
        'sensitive' => [
            'opt_in' => '同意',
            'opt_out' => '退出',
            'strictly_necessary' => '严格必要',
        ],
        'not_yet' => '尚未',
        'yes' => '是',
        'no' => '否',
        'under' => '未满',
        'prohibited' => '禁止',
    ],
];
