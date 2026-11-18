<?php

return [
    'page' => [
        'title' => 'व्यक्तिगत डेटा सूची',
        'navigation_label' => 'व्यक्तिगत डेटा',
    ],

    'fields' => [
        'column' => 'कॉलम',
        'category' => 'श्रेणी',
        'purpose' => 'उद्देश्य',
        'processing' => 'बिक्री, विज्ञापन, प्रोफ़ाइलिंग',
        'retention' => 'प्रतिधारण',
        'anonymize' => 'पहचान हटाना',
    ],

    'category' => [
        'personal' => 'व्यक्तिगत',
        'sensitive' => 'संवेदनशील',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'नस्लीय या जातीय मूल',
        'religious_beliefs' => 'धार्मिक विश्वास',
        'health' => 'स्वास्थ्य',
        'sex_life_or_orientation' => 'यौन जीवन या अभिविन्यास',
        'citizenship_or_immigration' => 'नागरिकता या आप्रवासन स्थिति',
        'genetic' => 'आनुवंशिक डेटा',
        'biometric' => 'बायोमेट्रिक डेटा',
        'known_child' => 'ज्ञात बच्चे का डेटा',
        'precise_geolocation' => 'सटीक भौगोलिक स्थान',
        'national_origin' => 'राष्ट्रीय मूल',
        'transgender_or_nonbinary_status' => 'ट्रांसजेंडर या नॉन-बाइनरी स्थिति',
        'crime_victim_status' => 'अपराध पीड़ित की स्थिति',
        'financial_account' => 'वित्तीय खाता',
        'government_identifier' => 'सरकारी पहचानकर्ता',
        'union_membership' => 'यूनियन सदस्यता',
        'neural_data' => 'तंत्रिका डेटा',
        'consumer_health' => 'उपभोक्ता स्वास्थ्य डेटा',
    ],

    'anonymize' => [
        'nullify' => 'खाली करें',
        'hash' => 'हैश',
        'mask' => 'मास्क करें',
        'keep' => 'रखें (कानूनी प्रतिधारण)',
    ],

    'sold' => 'बेची गई',
    'targeted_advertising' => 'लक्षित विज्ञापन',
    'profiling' => 'प्रोफ़ाइलिंग',
    'empty' => 'कोई मॉडल पंजीकृत नहीं है। अपने मॉडल config/us-privacy.php में us-privacy.models में जोड़ें।',
    'states' => [
        'title' => 'राज्य गोपनीयता कानून',
        'navigation_label' => 'राज्य कानून',
        'description' => 'config/us-privacy.php में कॉन्फ़िगर किए गए प्रत्येक राज्य कानून के नियम। इन्हें कानूनी सलाहकार से सत्यापित करें।',
        'columns' => [
            'state' => 'राज्य',
            'effective' => 'प्रभावी तिथि',
            'response' => 'जवाब (दिन)',
            'appeal' => 'अपील (दिन)',
            'sensitive' => 'संवेदनशील डेटा',
            'universal_opt_out' => 'सार्वभौमिक ऑप्ट-आउट',
            'assessments' => 'आकलन',
            'minors' => 'नाबालिग (विज्ञापन, बिक्री)',
        ],
        'sensitive' => [
            'opt_in' => 'सहमति',
            'opt_out' => 'ऑप्ट-आउट',
            'strictly_necessary' => 'अत्यावश्यक',
        ],
        'not_yet' => 'अभी नहीं',
        'yes' => 'हाँ',
        'no' => 'नहीं',
        'under' => 'से कम',
        'prohibited' => 'निषिद्ध',
    ],
];
