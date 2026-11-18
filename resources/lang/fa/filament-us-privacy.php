<?php

return [
    'page' => [
        'title' => 'فهرست داده‌های شخصی',
        'navigation_label' => 'داده‌های شخصی',
    ],

    'fields' => [
        'column' => 'ستون',
        'category' => 'دسته',
        'purpose' => 'هدف',
        'processing' => 'فروش، تبلیغات، پروفایل‌سازی',
        'retention' => 'نگهداری',
        'anonymize' => 'حذف شناسه',
    ],

    'category' => [
        'personal' => 'شخصی',
        'sensitive' => 'حساس',
    ],

    'sensitive_type' => [
        'racial_or_ethnic_origin' => 'منشأ نژادی یا قومی',
        'religious_beliefs' => 'باورهای مذهبی',
        'health' => 'سلامت',
        'sex_life_or_orientation' => 'زندگی جنسی یا گرایش',
        'citizenship_or_immigration' => 'تابعیت یا وضعیت مهاجرت',
        'genetic' => 'داده‌های ژنتیکی',
        'biometric' => 'داده‌های بیومتریک',
        'known_child' => 'داده‌های کودک شناخته‌شده',
        'precise_geolocation' => 'موقعیت جغرافیایی دقیق',
        'national_origin' => 'منشأ ملی',
        'transgender_or_nonbinary_status' => 'وضعیت تراجنسیتی یا ناباینری',
        'crime_victim_status' => 'وضعیت قربانی جرم',
        'financial_account' => 'حساب مالی',
        'government_identifier' => 'شناسه دولتی',
        'union_membership' => 'عضویت در اتحادیه',
        'neural_data' => 'داده‌های عصبی',
        'consumer_health' => 'داده‌های سلامت مصرف‌کننده',
    ],

    'anonymize' => [
        'nullify' => 'خالی کردن',
        'hash' => 'هش',
        'mask' => 'پوشاندن',
        'keep' => 'نگه‌داشتن (نگهداری قانونی)',
    ],

    'sold' => 'فروخته‌شده',
    'targeted_advertising' => 'تبلیغات هدفمند',
    'profiling' => 'پروفایل‌سازی',
    'empty' => 'هیچ مدلی ثبت نشده است. مدل‌های خود را به us-privacy.models در config/us-privacy.php اضافه کنید.',
    'states' => [
        'title' => 'قوانین حریم خصوصی ایالتی',
        'navigation_label' => 'قوانین ایالتی',
        'description' => 'قواعد هر قانون ایالتی همان‌طور که در config/us-privacy.php تنظیم شده است. آن‌ها را با مشاور حقوقی بررسی کنید.',
        'columns' => [
            'state' => 'ایالت',
            'effective' => 'تاریخ اجرا',
            'response' => 'پاسخ (روز)',
            'appeal' => 'اعتراض (روز)',
            'sensitive' => 'داده‌های حساس',
            'universal_opt_out' => 'انصراف سراسری',
            'assessments' => 'ارزیابی‌ها',
            'minors' => 'صغار (تبلیغات، فروش)',
        ],
        'sensitive' => [
            'opt_in' => 'رضایت',
            'opt_out' => 'انصراف',
            'strictly_necessary' => 'کاملاً ضروری',
        ],
        'not_yet' => 'هنوز نه',
        'yes' => 'بله',
        'no' => 'خیر',
        'under' => 'زیر',
        'prohibited' => 'ممنوع',
    ],
];
