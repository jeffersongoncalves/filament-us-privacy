<?php

return [
    'page' => [
        'title' => '個人データ一覧',
        'navigation_label' => '個人データ',
    ],

    'fields' => [
        'column' => '列',
        'category' => 'カテゴリ',
        'purpose' => '目的',
        'processing' => '販売・広告・プロファイリング',
        'retention' => '保持期間',
        'anonymize' => '非識別化',
    ],

    'category' => [
        'personal' => '個人',
        'sensitive' => 'センシティブ',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => '人種または民族的出自',
        'religious_beliefs' => '宗教的信条',
        'health' => '健康',
        'sex_life_or_orientation' => '性生活または性的指向',
        'citizenship_or_immigration' => '国籍または在留資格',
        'genetic' => '遺伝データ',
        'biometric' => '生体データ',
        'known_child' => '既知の子どものデータ',
        'precise_geolocation' => '正確な位置情報',
        'national_origin' => '国籍上の出自',
        'transgender_or_nonbinary_status' => 'トランスジェンダーまたはノンバイナリーであること',
        'crime_victim_status' => '犯罪被害者であること',
        'financial_account' => '金融口座',
        'government_identifier' => '公的識別子',
        'union_membership' => '労働組合への加入',
        'neural_data' => '神経データ',
        'consumer_health' => '消費者の健康データ',
    ],

    'anonymize' => [
        'nullify' => '空にする',
        'hash' => 'ハッシュ',
        'mask' => 'マスク',
        'keep' => '保持（法定保存）',
    ],

    'sold' => '販売',
    'targeted_advertising' => 'ターゲティング広告',
    'profiling' => 'プロファイリング',
    'empty' => '登録されたモデルがありません。config/us-privacy.php の us-privacy.models にモデルを追加してください。',
    'states' => [
        'title' => '州のプライバシー法',
        'navigation_label' => '州法',
        'description' => 'config/us-privacy.php で設定された各州法のルールです。弁護士に確認してください。',
        'columns' => [
            'state' => '州',
            'effective' => '施行日',
            'response' => '回答期限（日）',
            'appeal' => '不服申立て（日）',
            'sensitive' => 'センシティブデータ',
            'universal_opt_out' => 'ユニバーサルオプトアウト',
            'assessments' => '評価',
            'minors' => '未成年者（広告・販売）',
        ],
        'sensitive' => [
            'opt_in' => '同意',
            'opt_out' => 'オプトアウト',
            'strictly_necessary' => '厳密に必要な範囲のみ',
        ],
        'not_yet' => '未施行',
        'yes' => 'はい',
        'no' => 'いいえ',
        'under' => '未満:',
        'prohibited' => '禁止',
    ],
];
