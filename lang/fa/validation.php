<?php

return [

    /*
    |--------------------------------------------------------------------------
    | خطوط زبان اعتبارسنجی
    |--------------------------------------------------------------------------
    |
    | خطوط زبان زیر شامل پیام‌های پیش‌فرض خطا هستند که توسط کلاس
    | اعتبارسنج استفاده می‌شوند. برخی قوانین چندین نسخه دارند
    | مثل قوانین مربوط به اندازه. می‌توانید این پیام‌ها را به دلخواه تغییر دهید.
    |
    */

    'accepted' => ':attribute باید پذیرفته شود.',
    'accepted_if' => ':attribute باید پذیرفته شود وقتی :other برابر :value باشد.',
    'active_url' => ':attribute باید یک URL معتبر باشد.',
    'after' => ':attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => ':attribute باید تاریخی بعد یا برابر با :date باشد.',
    'alpha' => ':attribute فقط باید شامل حروف باشد.',
    'alpha_dash' => ':attribute فقط باید شامل حروف، اعداد، خط تیره و زیرخط (_) باشد.',
    'alpha_num' => ':attribute فقط باید شامل حروف و اعداد باشد.',
    'any_of' => ':attribute معتبر نیست.',
    'array' => ':attribute باید یک آرایه باشد.',
    'ascii' => ':attribute فقط باید شامل کاراکترها و نمادهای تک‌بایتی باشد.',
    'before' => ':attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => ':attribute باید تاریخی قبل یا برابر با :date باشد.',
    'between' => [
        'array' => ':attribute باید بین :min تا :max آیتم داشته باشد.',
        'file' => ':attribute باید بین :min تا :max کیلوبایت باشد.',
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'string' => ':attribute باید بین :min تا :max کاراکتر باشد.',
    ],
    'boolean' => ':attribute باید مقدار صحیح یا غلط باشد.',
    'can' => ':attribute شامل مقدار غیرمجاز است.',
    'confirmed' => 'تأییدیه :attribute مطابقت ندارد.',
    'contains' => ':attribute یک مقدار الزامی را ندارد.',
    'current_password' => 'رمز عبور اشتباه است.',
    'date' => ':attribute باید یک تاریخ معتبر باشد.',
    'date_equals' => ':attribute باید تاریخی برابر با :date باشد.',
    'date_format' => ':attribute باید با فرمت :format مطابقت داشته باشد.',
    'decimal' => ':attribute باید :decimal رقم اعشار داشته باشد.',
    'declined' => ':attribute باید رد شود.',
    'declined_if' => ':attribute باید رد شود وقتی :other برابر :value باشد.',
    'different' => ':attribute و :other باید متفاوت باشند.',
    'digits' => ':attribute باید :digits رقم باشد.',
    'digits_between' => ':attribute باید بین :min و :max رقم باشد.',
    'dimensions' => 'ابعاد تصویر :attribute نامعتبر است.',
    'distinct' => ':attribute مقدار تکراری دارد.',
    'doesnt_end_with' => ':attribute نباید با یکی از این مقادیر تمام شود: :values.',
    'doesnt_start_with' => ':attribute نباید با یکی از این مقادیر شروع شود: :values.',
    'email' => ':attribute باید یک آدرس ایمیل معتبر باشد.',
    'ends_with' => ':attribute باید با یکی از مقادیر زیر تمام شود: :values.',
    'enum' => 'گزینه انتخابی :attribute معتبر نیست.',
    'exists' => 'گزینه انتخابی :attribute معتبر نیست.',
    'extensions' => ':attribute باید دارای یکی از پسوندهای زیر باشد: :values.',
    'file' => ':attribute باید یک فایل باشد.',
    'filled' => ':attribute باید دارای مقدار باشد.',
    'gt' => [
        'array' => ':attribute باید بیشتر از :value آیتم داشته باشد.',
        'file' => ':attribute باید بیشتر از :value کیلوبایت باشد.',
        'numeric' => ':attribute باید بیشتر از :value باشد.',
        'string' => ':attribute باید بیشتر از :value کاراکتر باشد.',
    ],
    'gte' => [
        'array' => ':attribute باید :value آیتم یا بیشتر داشته باشد.',
        'file' => ':attribute باید بزرگتر یا برابر :value کیلوبایت باشد.',
        'numeric' => ':attribute باید بزرگتر یا برابر :value باشد.',
        'string' => ':attribute باید بزرگتر یا برابر :value کاراکتر باشد.',
    ],
    'hex_color' => ':attribute باید یک رنگ هگزادسیمال معتبر باشد.',
    'image' => ':attribute باید یک تصویر باشد.',
    'in' => 'گزینه انتخابی :attribute معتبر نیست.',
    'in_array' => ':attribute باید در :other وجود داشته باشد.',
    'in_array_keys' => ':attribute باید حداقل یکی از کلیدهای زیر را داشته باشد: :values.',
    'integer' => ':attribute باید یک عدد صحیح باشد.',
    'ip' => ':attribute باید یک آدرس IP معتبر باشد.',
    'ipv4' => ':attribute باید یک آدرس IPv4 معتبر باشد.',
    'ipv6' => ':attribute باید یک آدرس IPv6 معتبر باشد.',
    'json' => ':attribute باید یک رشته JSON معتبر باشد.',
    'list' => ':attribute باید یک لیست باشد.',
    'lowercase' => ':attribute باید حروف کوچک باشد.',
    'lt' => [
        'array' => ':attribute باید کمتر از :value آیتم داشته باشد.',
        'file' => ':attribute باید کمتر از :value کیلوبایت باشد.',
        'numeric' => ':attribute باید کمتر از :value باشد.',
        'string' => ':attribute باید کمتر از :value کاراکتر باشد.',
    ],
    'lte' => [
        'array' => ':attribute نباید بیشتر از :value آیتم داشته باشد.',
        'file' => ':attribute باید کمتر یا برابر :value کیلوبایت باشد.',
        'numeric' => ':attribute باید کمتر یا برابر :value باشد.',
        'string' => ':attribute باید کمتر یا برابر :value کاراکتر باشد.',
    ],
    'mac_address' => ':attribute باید یک آدرس MAC معتبر باشد.',
    'max' => [
        'array' => ':attribute نباید بیشتر از :max آیتم داشته باشد.',
        'file' => ':attribute نباید بیشتر از :max کیلوبایت باشد.',
        'numeric' => ':attribute نباید بزرگتر از :max باشد.',
        'string' => ':attribute نباید بیشتر از :max کاراکتر باشد.',
    ],
    'max_digits' => ':attribute نباید بیشتر از :max رقم داشته باشد.',
    'mimes' => ':attribute باید یک فایل با نوع: :values باشد.',
    'mimetypes' => ':attribute باید یک فایل با نوع: :values باشد.',
    'min' => [
        'array' => ':attribute باید حداقل :min آیتم داشته باشد.',
        'file' => ':attribute باید حداقل :min کیلوبایت باشد.',
        'numeric' => ':attribute باید حداقل :min باشد.',
        'string' => ':attribute باید حداقل :min کاراکتر باشد.',
    ],
    'min_digits' => ':attribute باید حداقل :min رقم داشته باشد.',
    'missing' => ':attribute باید وجود نداشته باشد.',
    'missing_if' => ':attribute باید زمانی که :other برابر :value است وجود نداشته باشد.',
    'missing_unless' => ':attribute باید وجود نداشته باشد مگر اینکه :other برابر :value باشد.',
    'missing_with' => ':attribute باید زمانی که :values موجود است، وجود نداشته باشد.',
    'missing_with_all' => ':attribute باید زمانی که :values موجودند، وجود نداشته باشد.',
    'multiple_of' => ':attribute باید مضربی از :value باشد.',
    'not_in' => 'گزینه انتخابی :attribute معتبر نیست.',
    'not_regex' => 'فرمت :attribute نامعتبر است.',
    'numeric' => ':attribute باید یک عدد باشد.',
    'password' => [
        'letters' => ':attribute باید حداقل یک حرف داشته باشد.',
        'mixed' => ':attribute باید حداقل یک حرف بزرگ و یک حرف کوچک داشته باشد.',
        'numbers' => ':attribute باید حداقل یک عدد داشته باشد.',
        'symbols' => ':attribute باید حداقل یک نماد داشته باشد.',
        'uncompromised' => ':attribute وارد شده در یک نشت اطلاعاتی یافت شده است. لطفاً یک :attribute دیگر انتخاب کنید.',
    ],
    'present' => ':attribute باید وجود داشته باشد.',
    'present_if' => ':attribute باید وجود داشته باشد وقتی :other برابر :value باشد.',
    'present_unless' => ':attribute باید وجود داشته باشد مگر اینکه :other برابر :value باشد.',
    'present_with' => ':attribute باید وجود داشته باشد وقتی :values موجود است.',
    'present_with_all' => ':attribute باید وجود داشته باشد وقتی :values موجودند.',
    'prohibited' => ':attribute ممنوع است.',
    'prohibited_if' => ':attribute زمانی که :other برابر :value باشد ممنوع است.',
    'prohibited_if_accepted' => ':attribute زمانی که :other پذیرفته شده باشد ممنوع است.',
    'prohibited_if_declined' => ':attribute زمانی که :other رد شده باشد ممنوع است.',
    'prohibited_unless' => ':attribute ممنوع است مگر اینکه :other در :values باشد.',
    'prohibits' => ':attribute مانع از وجود :other می‌شود.',
    'regex' => 'فرمت :attribute نامعتبر است.',
    'required' => ':attribute الزامی است.',
    'required_array_keys' => ':attribute باید شامل مقادیر: :values باشد.',
    'required_if' => ':attribute الزامی است وقتی :other برابر :value باشد.',
    'required_if_accepted' => ':attribute الزامی است وقتی :other پذیرفته شده باشد.',
    'required_if_declined' => ':attribute الزامی است وقتی :other رد شده باشد.',
    'required_unless' => ':attribute الزامی است مگر اینکه :other در :values باشد.',
    'required_with' => ':attribute الزامی است وقتی :values موجود باشد.',
    'required_with_all' => ':attribute الزامی است وقتی :values موجود باشد.',
    'required_without' => ':attribute الزامی است وقتی :values موجود نباشد.',
    'required_without_all' => ':attribute الزامی است وقتی هیچ‌یک از :values موجود نباشند.',
    'same' => ':attribute باید با :other یکسان باشد.',
    'size' => [
        'array' => ':attribute باید شامل :size آیتم باشد.',
        'file' => ':attribute باید :size کیلوبایت باشد.',
        'numeric' => ':attribute باید برابر :size باشد.',
        'string' => ':attribute باید :size کاراکتر باشد.',
    ],
    'starts_with' => ':attribute باید با یکی از مقادیر زیر شروع شود: :values.',
    'string' => ':attribute باید یک رشته باشد.',
    'timezone' => ':attribute باید یک منطقه زمانی معتبر باشد.',
    'unique' => ':attribute قبلاً استفاده شده است.',
    'uploaded' => 'بارگذاری :attribute ناموفق بود.',
    'uppercase' => ':attribute باید با حروف بزرگ باشد.',
    'url' => ':attribute باید یک URL معتبر باشد.',
    'ulid' => ':attribute باید یک ULID معتبر باشد.',
    'uuid' => ':attribute باید یک UUID معتبر باشد.',

    /*
    |--------------------------------------------------------------------------
    | پیام‌های اعتبارسنجی سفارشی
    |--------------------------------------------------------------------------
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'پیام-سفارشی',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | نام‌های سفارشی ویژگی‌ها
    |--------------------------------------------------------------------------
    */

    'attributes' => [
        'mobile' => 'شماره موبایل',
        'password' => 'رمز عبور',
        'password_confirm' => 'تایید رمز عبور',
        'fname' => 'نام',
        'lname' => 'نام خانوادگی',
    ],

];
