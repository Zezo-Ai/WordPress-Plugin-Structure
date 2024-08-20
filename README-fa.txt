wordPress-plugin-structure/
│
├── wordPress-plugin-structure.php     # فایل اصلی افزونه، شامل هدر افزونه و کدهای اصلی
├── uninstall.php                      # فایل برای پاک‌سازی داده‌ها هنگام حذف افزونه
├── readme.txt                         # فایل توضیحات افزونه برای مخزن افزونه‌های وردپرس
├── license.txt                        # فایل حاوی اطلاعات لایسنس و حقوق مالکیت
│
├── assets/                            # پوشه شامل منابع استاتیک
│   ├── css/                           # پوشه برای فایل‌های استایل
│   │   ├── admin-style.css            # استایل‌های خاص برای بخش مدیریت
│   │   └── public-style.css           # استایل‌های خاص برای بخش عمومی
│   ├── js/                            # پوشه برای فایل‌های جاوااسکریپت
│   │   ├── admin-script.js            # اسکریپت‌های خاص برای بخش مدیریت
│   │   └── public-script.js           # اسکریپت‌های خاص برای بخش عمومی
│   ├── images/                        # پوشه برای تصاویر افزونه
│   │   ├── icon-16x16.png             # آیکون‌های کوچک افزونه
│   │   ├── icon-32x32.png             # آیکون‌های بزرگتر افزونه
│   │   ├── logo.png                   # لوگوی افزونه
│   │   ├── banner.jpg                 # بنر افزونه
│   │   └── placeholder.png            # تصویر پیش‌فرض
│   └── fonts/                         # پوشه برای فونت‌های سفارشی
│       ├── custom-font.ttf            # فونت TrueType
│       └── custom-font.woff           # فونت Web Open Font Format
│
├── includes/                          # پوشه شامل فایل‌های PHP برای منطق افزونه
│   ├── admin/                         # پوشه برای فایل‌های مرتبط با بخش مدیریت
│   │   ├── class-admin.php            # کلاس‌های مدیریت افزونه
│   │   ├── admin-functions.php        # توابع بخش مدیریت
│   │   ├── admin-hooks.php            # هوک‌ها و اکشن‌های مدیریت
│   │   └── admin-settings.php         # تنظیمات بخش مدیریت
│   ├── public/                        # پوشه برای فایل‌های مرتبط با بخش عمومی
│   │   ├── class-public.php           # کلاس‌های عمومی افزونه
│   │   ├── public-functions.php       # توابع بخش عمومی
│   │   ├── public-hooks.php           # هوک‌ها و اکشن‌های عمومی
│   │   └── public-settings.php        # تنظیمات بخش عمومی
│   ├── class-loader.php               # بارگذاری کلاس‌های افزونه
│   ├── class-i18n.php                 # مدیریت ترجمه‌ها و محلی‌سازی
│   ├── class-deactivator.php          # پاک‌سازی‌ها هنگام غیرفعال کردن افزونه
│   ├── class-activator.php            # تنظیمات اولیه هنگام فعال‌سازی افزونه
│   ├── class-helper.php               # توابع و ابزارهای کمکی
│   ├── class-settings.php             # مدیریت تنظیمات افزونه
│   ├── class-cron.php                 # مدیریت وظایف زمان‌بندی (Cron Jobs)
│   ├── class-rest-api.php             # مدیریت REST API (در صورت استفاده)
│   └── class-custom-post-types.php    # مدیریت انواع پست سفارشی
│
├── languages/                         # پوشه شامل فایل‌های ترجمه (PO و MO)
│   ├── en_US.po                       # فایل ترجمه انگلیسی
│   ├── en_US.mo                       # فایل باینری ترجمه انگلیسی
│   ├── fa_IR.po                       # فایل ترجمه فارسی
│   └── fa_IR.mo                       # فایل باینری ترجمه فارسی
│
├── templates/                         # پوشه شامل فایل‌های الگو
│   ├── admin/                         # پوشه برای فایل‌های الگوی بخش مدیریت
│   │   ├── settings-page.php          # صفحه تنظیمات افزونه
│   │   ├── dashboard-widget.php       # ویجت‌های صفحه داشبورد
│   │   ├── admin-notice.php           # پیام‌های اطلاع‌رسانی بخش مدیریت
│   │   └── admin-menu.php             # منوی مدیریت
│   ├── public/                        # پوشه برای فایل‌های الگوی بخش عمومی
│   │   ├── shortcode-display.php      # نمایش شورت‌کدها
│   │   ├── widget-display.php         # نمایش ویجت‌های عمومی
│   │   ├── public-notice.php          # پیام‌های اطلاع‌رسانی بخش عمومی
│   │   └── public-page.php            # صفحات عمومی
│   └── emails/                        # پوشه برای فایل‌های الگوی ایمیل
│       ├── admin-notification.php     # ایمیل‌های اطلاع‌رسانی به مدیر
│       └── user-notification.php      # ایمیل‌های اطلاع‌رسانی به کاربران
│
├── vendor/                            # پوشه برای وابستگی‌های Composer (در صورت استفاده از Composer)
│   ├── autoload.php                   # فایل بارگذاری خودکار Composer
│   ├── composer.json                  # فایل پیکربندی Composer
│   └── composer.lock                  # فایل قفل Composer برای نسخه‌های وابستگی
│
├── tests/                             # پوشه شامل فایل‌های تست
│   ├── test.php                       # تست‌های اصلی افزونه
│   ├── bootstrap.php                  # راه‌اندازی اولیه برای تست‌ها
│   ├── phpunit.xml                    # فایل پیکربندی PHPUnit
│   └── test-helpers.php               # توابع و ابزارهای کمکی برای تست‌ها
│
├── .gitignore                         # فایل برای تنظیمات Git به منظور نادیده گرفتن فایل‌های خاص
└── CHANGELOG.md                       # فایل برای ثبت تغییرات و نسخه‌های جدید افزونه
