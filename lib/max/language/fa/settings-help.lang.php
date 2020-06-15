<?php

/*
  +---------------------------------------------------------------------------+
  | Revive Adserver                                                           |
  | http://www.revive-adserver.com                                            |
  |                                                                           |
  | Copyright: See the COPYRIGHT.txt file.                                    |
  | License: GPLv2 or later, see the LICENSE.txt file.                        |
  +---------------------------------------------------------------------------+
 */

// Settings help translation strings
$GLOBALS['phpAds_hlp_dbhost'] = "نام میزبانی که {$phpAds_dbmsname} پایگاه داده که می خواهید به آن وارد شوید را وارد کنید .";

$GLOBALS['phpAds_hlp_dbport'] = "تعیین تعداد پورت از {$phpAds_dbmsname} سرور پایگاه داده که شما در حال تلاش برای اتصال هستید. ";

$GLOBALS['phpAds_hlp_dbuser'] = "نام کاربری که {$PRODUCT_NAME} باید برای به دست آوردن دسترسی به {$phpAds_dbmsname} سرور پایگاه داده استفاده کنید را مشخص کنید.";

$GLOBALS['phpAds_hlp_dbpassword'] = "مشخص کنید رمز عبوری را که {$PRODUCT_NAME} باید برای به دست آوردن دسترسی به {$phpAds_dbmsname} سرور پایگاه داده استفاده کنید.";

$GLOBALS['phpAds_hlp_dbname'] = "مشخص کردن نام پایگاه داده در سرور پایگاه داده که در آن {$PRODUCT_NAME} باید اطلاعات خود را ذخیره کنید.
مهم است که پایگاه داده در حال حاضر باید بر روی سرور پایگاه داده ایجاد شود. {$PRODUCT_NAME} ایجاد نخواهد شد
این پایگاه داده اگر هنوز وجود ندارد.";

$GLOBALS['phpAds_hlp_persistent_connections'] = "استفاده از اتصال مداوم می تواند سرعت {$PRODUCT_NAME}، بطور قابل توجهی
و حتی ممکن است باعث کاهش بار بر روی سرور شود. 
یکی از مشکلات این حالت ، در سایت های با بازدید کننده زیاد ،بار گذاری بر روی سرور ممکن است افزایش یابد و بزرگتر شود در حالی که از اتصال معمولی استفاده می کنید .این که آیا شما باید اتصالات به طور منظم و یا اتصالات مداوم استفاده کنید بستگی به
تعداد بازدید کنندگان و سخت افزاری است که شما استفاده می کنید . اگر {$PRODUCT_NAME} از منابع بسیار زیادی استفاده می کند،
شما باید نگاهی به این تنظیمات بیندازید";

$GLOBALS['phpAds_hlp_compatibility_mode'] = "اگر شما با داشتن مشکل یکپارچه سازی {$PRODUCT_NAME} با یک محصول 3rd party 
دارید
این ممکن است به نوبه خود کمکی در حالت سازگاری پایگاه داده باشد. اگر شما از از حالت محلی{$PRODUCT_NAME}
نیایش استفاده می کنید و سازگاری پایگاه
{$PRODUCT_NAME} روشن باشد باید حالت اتصال پایگاه داده بید دقیقا همان قبلی باشد که {$PRODUCT_NAME} اجرا می شد . 
این گزینه مقداری کندتر ،فقط کمی کندتر ،
.و در نتیجه در پیش فرض خاموش است
";

$GLOBALS['phpAds_hlp_table_prefix'] = "اگر پایگاه داده {$PRODUCT_NAME} در حال استفاده توسط محصولات نرم افزاری مختلف به اشتراک گذاشته است، عاقلانه است که
اضافه کردن یک پیشوند به نام جدول. اگر شما با استفاده از تاسیسات متعدد {$PRODUCT_NAME}
در همان پایگاه داده، باید مطمئن شوید که این پیشوند منحصر به فرد برای تمام نصب است.";

$GLOBALS['phpAds_hlp_table_type'] = "mySQL از انواع جدول متعددی پشتیبانی می کند .هر نوع از جدول ویزگی های منحصربهفرد دارد ومی تواند سرعت {$PRODUCT_NAME}  را به طور قابل توجهی زیاد کند .MyISAM جدول پیش فرض است و در دسترس است.
در تمام نسخه های MySQL است. جدول های دیگر ممکن است در دسترس نباشد";

$GLOBALS['phpAds_hlp_url_prefix'] = "{$PRODUCT_NAME} نیاز به دانستن محل نصب بر روی وب سرور است تا به درستی کار کند . شما دایرکتوری URL مشخصی را در محل نصب {$PRODUCT_NAME} تعریف کنید ، به عنوان مثال  <i>http://www.your-url.com/ads</i>.";

$GLOBALS['phpAds_hlp_ssl_url_prefix'] = "{$PRODUCT_NAME} نیاز به دانستن این است که کجا ذخیره شده است تا به درستی کار کند . گاهی اوقات پیشوند SSL با استفاده از پیشوند URL منطم متفاوت است . شما باید URL ای را به دایرکتوری جایی که needs to know where it is located on the web server in order
to work correctly. Sometimes the SSL prefix is different than the regular URL prefix.
You must specify the URL to the directory where {$PRODUCT_NAME}
is installed, for example: نصب شده است مشخص کنید، به عنوان مثال :  <i>https://www.your-url.com/ads</i>.";

$GLOBALS['phpAds_hlp_my_header'] = $GLOBALS['phpAds_hlp_my_footer'] = "شما باید آدرس فایل سر در را اینجا وارد کنید(به عنوان مثال: /home/login/www/header.htm)
برای داشتن هدر و/یا فوتر در هر صفحه در رابط مدیریتی شما ، می توانید هر متن و یا html  را در این فایل ها قرار دهید(اگر می خواهید html  در یک یا هر دو از این فایل ها استفاده کنید از برچسب های مانند <html> یا <body> استفاده کنید).";

$GLOBALS['phpAds_hlp_my_logo'] = "در این قسمت باید نام فایل لوگویی کع می خواهید تا به جای لوگو پیش فرض نشان داده شود وارد کنید . لوگو باید در دایرکتوری مدیریت / تصاویر ، قبل تعیین اسم فایل جاگذاری شود . ";

$GLOBALS['phpAds_hlp_gui_header_foreground_color'] = "در اینجا باید یک رنگ سفارشی که در زبانه ها ، نوار جستجو و بعضی از متون پر رنگ شده قرار دهید ";

$GLOBALS['phpAds_hlp_gui_header_background_color'] = "شما باید در اینجا یک رنگ سفارشی برای هدر پس زمینه خواهد شد قرار دهید";

$GLOBALS['phpAds_hlp_gui_header_active_tab_color'] = "شما باید در اینجا یک رنگ سفارشی که برای برگه اصلی در حال حاضر انتخاب شده استفاده می شود قرار دهید";

$GLOBALS['phpAds_hlp_gui_header_text_color'] = "شما باید در اینجا یک رنگ سفارشی که برای متن در هدر قرار دهید";

$GLOBALS['phpAds_hlp_content_gzip_compression'] = "با فعال کردن فشرده سازی محتوای GZIP شما یک کاهش بزرگ از داده ها که
به مرورگر هر بار یک صفحه از رابط مدیر باز است ارسال می شود.
برای فعال کردن این ویژگی شما نیاز به وسعت GZIP نصب شده است.";

$GLOBALS['phpAds_hlp_language'] = "مشخص کنید زبان پیش فرض {$PRODUCT_NAME} باید استفاده کنید. این زبان
به عنوان یک پیش فرض برای مدیریت و تبلیغ رابط استفاده می شود. توجه کنید که:
شما می توانید زبان های مختلف تنظیم برای هر تبلیغ از رابط مدیریت
و اجازه به تبلیغ برای تغییر دادن زبان خود داده می شود.";

$GLOBALS['phpAds_hlp_name'] = "اسمی را که مخواهید برای این نرم افزار استفاده کنید مشخص کنید .این رشته بر روی هر صفحه در رابط مدیریتی و تبلیغاتی نمایش داده می شود . اگر این تنظیمات را خالی قرار دهید (پیشفرض)
لوگویی از {$PRODUCT_NAME} نمایش داده می شود .";

$GLOBALS['phpAds_hlp_company_name'] = "این نام در ایمیل فرستاده شده توسط {$PRODUCT_NAME} استفاده شده است ";

$GLOBALS['phpAds_hlp_override_gd_imageformat'] = "{$PRODUCT_NAME} معمولا تشخیص اگر کتابخانه GD نصب شده است و تصویر
فرمت توسط نسخه نصب شده از GD پشتیبانی می شود. با این حال ممکن است
تشخیص دقیق و یا نادرست نیست، برخی از نسخه های پی اچ پی اجازه نمی دهد
تشخیص از فرمت های تصویری پشتیبانی می کند. اگر {$PRODUCT_NAME} نتواند به شناسایی خودکار
فرمت تصویر سمت راست شما می توانید فرمت تصویر سمت راست را مشخص کنید. ممکن
ارزش ها: هیچ کدام، PNG، JPEG، GIF.";

$GLOBALS['phpAds_hlp_p3p_policies'] = "اگر مخواهید سیاسیت حفظ تحریم شخصی p3p {$PRODUCT_NAME} باید این گزینه را فعال کنید";

$GLOBALS['phpAds_hlp_p3p_compact_policy'] = "سیاست جمع و جور است که همراه با کوکی ها ارسال می شود. تنظیم پیش فرض
است: «CUR ADM OUR , NOR STA NID، که اجازه می دهد اینترنت اکسپلورر 6 به
کوکی ها استفاده شده توسط {$PRODUCT_NAME} را بپذیرید. اگر می خواهید شما می توانید این
تنظیمات برای مطابقت با بیانیه حفظ حریم خصوصی خود را تغییر دهید. ";

$GLOBALS['phpAds_hlp_p3p_policy_location'] = "اگر شما می خواهید به استفاده از یک سیاست حفظ حریم خصوصی کامل، شما می توانید محل
از سیاست را مشخص کنید.";

$GLOBALS['phpAds_hlp_compact_stats'] = "به طور سنتی  {$PRODUCT_NAME} از سیستم ورود نسبتا گسترده ، که بسیار دقیق بود ولی به سرور پایگاه داده وابسته بود استفاده می کند . این ممکن مشکل بزرگی در سایت هایی با بازدید کننده بسیار زیاد باشد . تا بر این مشکل غلبه کنیم  {$PRODUCT_NAME} از یک نوع پشتیبانی جدید ،آمار جمع و جور ، که کمتر به سرور پایگاه داده وابسته است ولی جزییات کمتری دارد .آمار جمع وجور تبلیغات کلیکی و مشاهداتی و تبدیل برای هر  ساعتی جمع آوری می کند . اگر جزییات بیشتری می خواهید ، می توانید آمار جمع و جور را خاموش کنید ";

$GLOBALS['phpAds_hlp_log_adviews'] = "به طور معمول تمام Adviews، اگر شما نمی خواهید به جمع آوری آمار
در مورد AdViews شما می توانید این را خاموش کنید.";

$GLOBALS['phpAds_hlp_block_adviews'] = "اگر بازدید کننده صفحه مجدد AdView خواهد شد {$PRODUCT_NAME} هر بار وارد سایت شوید.
این ویژگی استفاده می کنید تا مطمئن شوید که تنها یک AdView برای هر منحصر به فرد وارد
بنر برای تعدادی از ثانیه شما را مشخص کنید. به عنوان مثال: اگر شما از این ارزش
به 300 ثانیه، {$PRODUCT_NAME} تنها AdViews ورود اگر نیازی بنر یکسان
در 5 دقیقه گذشته به بازدید کننده نشان داده شده است همان. این ویژگی فقط با مرورگر کوکی کار می کند.";

$GLOBALS['phpAds_hlp_log_adclicks'] = "به طور معمول تمام آگهی کلیک به سیستم وارد شده است، اگر شما نمی خواهید به جمع آوری آمار
در مورد آگهی کلیک شما می توانید خاموشش کنید";

$GLOBALS['phpAds_hlp_block_adclicks'] = "اگر یک بازدید کننده کلیک چند بار در یک بنر AdClick خواهد شد وارد {$PRODUCT_NAME}
هر زمان. این ویژگی استفاده می کنید تا مطمئن شوید که تنها یک AdClick برای هر سیستم وارد
بنر منحصر به فرد برای تعدادی از ثانیه شما را مشخص کنید. به عنوان مثال: اگر شما از این ارزش
به 300 ثانیه، {$PRODUCT_NAME} تنها AdClicks ورود اگر بازدید کننده کی با کلیک بر روی همان
بنر در 5 دقیقه گذشته. این قابلیت تنها در زمانی که مرورگر کوکی را قبول کند.";

$GLOBALS['phpAds_hlp_log_adconversions'] = "به طور معمول همه تبلیغات تبدیل به سیستم وارد شده است، اگر شما نمی خواهید به جمع آوری آمار
در مورد تبدیل شما می توانید این را خاموش کنید.";

$GLOBALS['phpAds_hlp_block_adconversions'] = "اگر بازدید کننده یک صفحه با یک فانوس دریایی تبدیل آگهی مجدد، {$PRODUCT_NAME} خواهد تبدیل آگهی وارد شوید
هر زمان. این ویژگی استفاده می کنید تا مطمئن شوید که تنها یک تبدیل آگهی برای هر سیستم وارد
تبدیل منحصر به فرد برای تعدادی از ثانیه شما را مشخص کنید. به عنوان مثال: اگر شما از این ارزش
به 300 ثانیه، {$PRODUCT_NAME} تنها ورود آگهی تبدیل اگر بازدید کننده نمی همان بار
صفحه با چراغ AdConversion در 5 دقیقه گذشته. این قابلیت تنها در زمانی که مرورگر کوکی را قبول کند.";

$GLOBALS['phpAds_hlp_geotracking_stats'] = "اگر شما با استفاده از یک جغرافیایی هدف قرار دادن پایگاه داده شما همچنین می توانید اطلاعات جغرافیایی ذخیره
در پایگاه داده. اگر این گزینه را فعال کرده اند شما قادر به دیدن آمار در مورد خواهد بود
محل بازدید کنندگان خود را و چگونه هر یک بنر در کشورهای مختلف انجام شده است.
این گزینه فقط در دسترس شما اگر شما با استفاده از آمار دراز باشد.";

$GLOBALS['phpAds_hlp_reverse_lookup'] = "The hostname is usually determined by the web server, but in some cases this might be
turned off. If you want to use the visitors hostname inside delivery rules and/or
keep statistics about this and the server doesn't provide this information you will need to
turn this option on. Determining the hostname of the visitor does take some time; it will
slow the delivery of banners down.";

$GLOBALS['phpAds_hlp_proxy_lookup'] = "برخی از بازدید کنندگان با استفاده از یک پروکسی سرور برای دسترسی به اینترنت. در این صورت {$PRODUCT_NAME} خواهد شد
ورود به سیستم آدرس IP یا نام میزبان سرور پروکسی را به جای کاربر. اگر شما را قادر می سازد
این ویژگی {$PRODUCT_NAME} سعی خواهد کرد برای پیدا کردن آدرس IP یا نام میزبان از کامپیوتر بازدید کننده
پشت پروکسی سرور. اگر ممکن است برای پیدا کردن آدرس دقیق از بازدید کننده
آن را به آدرس سرور پروکسی را استفاده کنید. این گزینه به طور پیش فرض فعال نیست،
به دلیل آن را تحویل آگهی ها بطور قابل توجهی پایین است.";

$GLOBALS['phpAds_hlp_obfuscate'] = "هیچی اینجا نیست ...";

$GLOBALS['phpAds_hlp_auto_clean_tables'] = $GLOBALS['phpAds_hlp_auto_clean_tables_interval'] = "اگر شما این ویژگی را فعال، آمار جمع آوری خواهد شد به طور خودکار پس از حذف
دوره شما در زیر این چک باکس مشخص منتقل می شود. برای مثال، اگر شما این مجموعه تا 5 هفته،
آمار قدیمی تر از 5 هفته به طور خودکار حذف خواهد شد.";

$GLOBALS['phpAds_hlp_auto_clean_userlog'] = $GLOBALS['phpAds_hlp_auto_clean_userlog_interval'] = "این ویژگی به طور خودکار ورودی های کاربر را که قدیمی تر از تعداد هفته هایی که این زیر در چک باکس تعیین شده است را پاک می کند";

$GLOBALS['phpAds_hlp_geotracking_type'] = "Geotargeting allows {$PRODUCT_NAME} to convert the IP address of the visitor to geographical
information. Based on this information you can set delivery rules or you could store
this information to see which country is generation the most impressions or click-thrus.
If you want to enable geotargeting you need to choose which type of database you have.
{$PRODUCT_NAME} currently supports the <a href='http://hop.clickbank.net/?phpadsnew/ip2country' target='_blank'>IP2Country</a>
and <a href='http://www.maxmind.com/?rId=phpadsnew' target='_blank'>GeoIP</a> database.";

$GLOBALS['phpAds_hlp_geotracking_location'] = "مگر اینکه ماژول آپاچی ، شما باید به{$PRODUCT_NAME} محل 
پایگاه داده geotargeting  را بدهید . همیشه پیشنهاد داده می می شود کخ پایگاه داده را خارج از وب سرور های ریشه سند قرار دهید ، چون در غیر این صورت  ، مردم قادر خواهند بود که پایگاه داده را دانلو کنند . ";

$GLOBALS['phpAds_hlp_geotracking_cookie'] = "تبدیل آدرس IP در اطلاعات جغرافیایی طول می کشد. برای جلوگیری از
{$PRODUCT_NAME} از نیاز به انجام این هر بار که یک بنر تحویل داده شده است در نتیجه می تواند
ذخیره شده در یک کوکی. اگر این کوکی موجود است {$PRODUCT_NAME} این اطلاعات به جای
تبدیل آدرس IP را استفاده میکنند .";

$GLOBALS['phpAds_hlp_ignore_hosts'] = "اگر شما نمی خواهید به حساب دیدگاه ها، کلیک و جذب از کامپیوتر خاص شما
می توانید از این به این لیست اضافه کنید. اگر شما مراجعه معکوس را فعال کنید شما می توانید
اضافه کردن هر دو نام دامنه و آدرس IP، در غیر این صورت شما فقط می توانید استفاده از IP
آدرس. شما همچنین می توانید نویسه عام استفاده کنید (i.e. '*.altavista.com' or '192.168.*').";

$GLOBALS['phpAds_hlp_begin_of_week'] = "برای بیشتر مردم هفته از دو شنبه شروع می شود ولی اگر می خواهید می توانید از شنبه شروع کنید";

$GLOBALS['phpAds_hlp_percentage_decimals'] = "مشخص کنید چند رقم اعشار می توانید می خواهید در صفحه آمار نشان دهید .";

$GLOBALS['phpAds_hlp_warn_admin'] = "{$PRODUCT_NAME} می تواند به شما ایمیل ارسال کند اگر از یک کمپین تنها تعداد محدودی از
دیدگاه ها، کلیک، و یا تبدیل را باقی مانده باشد. این به طور پیش فرض تبدیل شده است.";

$GLOBALS['phpAds_hlp_warn_client'] = "{$PRODUCT_NAME} می تواند ایمیل تبلیغ کننده را ارسال کند اگر یکی از کمپین های خود را تنها یک
تعداد محدودی از دیدگاه ها، کلیک، و یا تبدیل را باقی مانده باشد. این به طور پیش فرض تبدیل شده است.";

$GLOBALS['phpAds_hlp_qmail_patch'] = "برخی از نسخه های کیومیل توسط یک اشکال، که باعث می شود ایمیل ارسال شده توسط تحت تاثیر قرار
{$PRODUCT_NAME} برای هدر در داخل بدن از ایمیل نشان داده شود. اگر شما فعال کنید
این تنظیم، {$PRODUCT_NAME} ایمیل را در یک فرمت سازگار کیومیل ارسال می کند.";

$GLOBALS['phpAds_hlp_warn_limit'] = "حد اینکه کدام {$PRODUCT_NAME}  شروع به فرستادن ایمیل مشکلات کند . این حد به صورت پیشفرض 100 است";

$GLOBALS['phpAds_hlp_acl'] = "If you are not using delivery rules you can disable this option with this parameter,
this will speed up {$PRODUCT_NAME} a bit.";

$GLOBALS['phpAds_hlp_default_banner_url'] = $GLOBALS['phpAds_hlp_default_banner_target'] = "اگر {$PRODUCT_NAME} نمی تواند به سرور پایگاه داده اتصال، و یا می توانید هر تطبیق پیدا کنید
آگهی ها در همه، برای مثال زمانی که پایگاه داده سقوط کرد و یا حذف شده است،
دارید هر چیزی را نشان نمی دهد. برخی از کاربران ممکن است بخواهید برای مشخص کردن یک بنر پیش فرض،
که در این شرایط نمایش داده شود. بنر پیش فرض مشخص
در اینجا نمی خواهد وارد سیستم شوید و استفاده نخواهد شد اگر هنوز هم آگهی ها فعال وجود دارد
در سمت چپ در پایگاه داده باشد. توسط پیش فرض خاموش شده است .";

$GLOBALS['phpAds_hlp_delivery_caching'] = "برای کمک به سرعت بخشیدن به تحویل {$PRODUCT_NAME} با استفاده از یک کش که شامل همه
اطلاعات مورد نیاز برای تحویل پرچم به بازدید کننده از وب سایت خود را. تحویل
کش به طور پیش فرض در پایگاه داده ذخیره می شود، اما برای افزایش سرعت و حتی بیشتر از آن نیز
ممکن است برای ذخیره کردن کش در داخل یک فایل و یا در داخل حافظه مشترک. حافظه مشترک است سریع ترین،
فایل های نیز بسیار سریع می باشد. توصیه می شود که به نوبه خود کش تحویل، چرا که این باعث
تاثیر به طور جدی بر عملکرد خواهد شد.";

$GLOBALS['phpAds_hlp_type_web_mode'] = "اگر شما می خواهید استفاده کنید از آگهی های ذخیره شده بر روی وب سرور، شما نیاز به پیکربندی
این تنظیم هستید. اگر شما می خواهید برای ذخیره آگهی ها در یک مجموعه دایرکتوری محلی تعیین کنید
از این گزینه برای <i>دایرکتوری محلی</i>. اگر شما می خواهید برای ذخیره بنر در
سرور FTP خارجی تنظیم این گزینه برای<i>سرور FTP خارجی</i>. در برخی از
وب سرور شما ممکن است بخواهید به استفاده از گزینه FTP حتی در وب سرور محلی باشید.";

$GLOBALS['phpAds_hlp_type_web_dir'] = "مشخص کنید دایرکتوری که در آن {$PRODUCT_NAME} نیاز به کپی کردن آگهی های آپلود
به. این شاخه باید قابل نوشتن PHP، این می تواند به معنای شما نیاز
به تغییر مجوز یونیکس برای این دایرکتوری (سطح دسترسی). دایرکتوری
در اینجا مشخص باید در ریشه سند وب سرور باشد، در وب
سرور باید قادر به خدمت به فایل به طور مستقیم باشد. آیا یک دنباله مشخص نیست
اسلش (/). شما فقط نیاز به پیکربندی این گزینه اگر شما ذخیره سازی را تعیین کرده اند
روش برای از <i> دایرکتوری محلی است </ i>.";

$GLOBALS['phpAds_hlp_type_web_ftp_host'] = "اگر شما مجموعه ای از روش ذخیره سازی به <I> سرور خارجی FTP است </ i> شما نیاز به
تعیین آدرس IP و یا نام دامنه از سرور FTP که در آن {$PRODUCT_NAME} نیازهای
برای کپی کردن آگهی های بارگذاری می شوند.";

$GLOBALS['phpAds_hlp_type_web_ftp_path'] = "اگر شما مجموعه ای از روش ذخیره سازی به <I> سرور خارجی FTP است </ i> شما نیاز به
مشخص دایرکتوری بر روی سرور FTP خارجی که در آن {$PRODUCT_NAME} نیازهای
برای کپی کردن آگهی های بارگذاری می شوند.";

$GLOBALS['phpAds_hlp_type_web_ftp_user'] = "اگر شما مجموعه ای از روش ذخیره سازی به <I> سرور خارجی FTP است </ i> شما نیاز به
مشخص نام کاربری که {$PRODUCT_NAME} باید به منظور استفاده کنید برای اتصال به
سرور FTP خارجی.";

$GLOBALS['phpAds_hlp_type_web_ftp_password'] = "اگر شما مجموعه ای از روش ذخیره سازی به <I> سرور خارجی FTP است </ i> شما نیاز به
مشخص رمز عبوری را که {$PRODUCT_NAME} باید به منظور استفاده کنید برای اتصال به
سرور FTP خارجی.";

$GLOBALS['phpAds_hlp_type_web_ftp_passive'] = "برخی از سرویس دهنده FTP و فایروال نیاز نقل و انتقالات به استفاده از حالت منفعل (PASV).
اگر {$PRODUCT_NAME} نیاز به استفاده از حالت منفعل برای اتصال به شما
سرور FTP، سپس این گزینه را فعال کنید.";

$GLOBALS['phpAds_hlp_type_web_url'] = "اگر شما تبلیغات را بر روی سرور تبلیغاتی ذخیره کنید ، {$PRODUCT_NAME} لازم است بداند کدام URL عمومی مربوط دایرکتوری که زیر مشخص کردید می شود . از یک علامت (/) 
مشخص نکنید";

$GLOBALS['phpAds_hlp_type_web_ssl_url'] = "اگر شما ذخیره آگهی های در یک وب سرور، {$PRODUCT_NAME} نیاز به دانستن است که عمومی
URL (SSL) مطابق با راهنمای شما در زیر مشخص شده است. هنوز مشخص نیست
یک علامت (/).";

$GLOBALS['phpAds_hlp_type_html_auto'] = "اگر این گزینه در {$PRODUCT_NAME} روشن شد به طور خودکار تغییر می دهند آگهی HTML
به منظور اجازه می دهد تا کلیک به سیستم وارد شود. با این حال حتی در حالی که این گزینه
روشن است، آن را هنوز هم ممکن خواهد بود برای غیر فعال کردن این ویژگی در هر بنر
اساس.";

$GLOBALS['phpAds_hlp_type_html_php'] = "این ممکن است تا اجازه {$PRODUCT_NAME} کد PHP جاسازی شده در داخل HTML
آگهی ها اجرا کند. این ویژگی است که توسط پیش فرض خاموش شده است .";

$GLOBALS['phpAds_hlp_admin'] = "لطفا نام کاربری مدیر را وارد کنید. با این نام کاربری شما می توانید به سیستم وارد شوید
رابط مدیر.";

$GLOBALS['phpAds_hlp_admin_pw'] = $GLOBALS['phpAds_hlp_admin_pw2'] = "لطفا رمز عبوری که شما می خواهید استفاده کنید از آن برای ورود به رابط مدیر را وارد کنید.
شما نیاز دارید تا آن را 2 بار وارد کنید برای جلوگیری از اشتباهات تایپی.";

$GLOBALS['phpAds_hlp_pwold'] = $GLOBALS['phpAds_hlp_pw'] = $GLOBALS['phpAds_hlp_pw2'] = "برای تغییر رمز مدیریتی شما باید رمز عبور قبلی را بالا مشخص کنید .
همچنین شما باید رمز جدید را دو بار وارد کنید تا از اشتباهات تایپی جلوگیری شود";

$GLOBALS['phpAds_hlp_admin_fullname'] = "مشخص کنید نام و نام خانوادگی مدیر . از این استفاده می شود که آمار را ارسال کند
از طریق ایمیل.";

$GLOBALS['phpAds_hlp_admin_email'] = "Tآدرس ایمیل مدیر. این را به عنوان از آدرس استفاده می شود که
آمار را ارسال کند از طریق ایمیل.";

$GLOBALS['phpAds_hlp_admin_novice'] = "اگر می خواهید قبل از پاک کردن تبلیغات،کمپین،آگهی ها ، وب سایت،مناطق هشداری دریافت کنید این تنظیمات را در حات صحیح قرار دهید";

$GLOBALS['phpAds_hlp_client_welcome'] = "اگر شما به نوبه خود این ویژگی را در یک پیام خوش آمد باشد در صفحه اول نمایش داده می
تبلیغ کننده را خواهد شد پس از loggin در را مشاهده کنید. شما می توانید این ارسال با ویرایش فرد
محل فایل welcome.html در مدیریت / قالب دایرکتوری. چیزهایی که شما ممکن است بخواهید
برای مثال شامل: نام شما شرکت، اطلاعات تماس، آرم شرکت خود را، یک
یک صفحه با نرخ تبلیغات، و غیره پیوند ..";

$GLOBALS['phpAds_hlp_client_welcome_msg'] = "به جای ویرایش فایل welcome.html شما همچنین می توانید یک متن کوچک در اینجا مشخص کنید. اگر شما وارد
یک متن در اینجا، فایل welcome.html نادیده گرفته می شود. آن را مجاز به استفاده کنید تگ های HTML.";

$GLOBALS['phpAds_hlp_updates_frequency'] = "اگر می خواهید برای نسخه های جدید {$PRODUCT_NAME} بررسی شما می توانید این ویژگی را فعال کنید.
این امکان است که فاصله که در آن {$PRODUCT_NAME} تابع یک ارتباط مشخص
سرور به روز رسانی. اگر یک نسخه جدید پیدا شده است یک جعبه محاوره ای با اضافی پاپ تا
اطلاعات در مورد به روز رسانی.";

$GLOBALS['phpAds_hlp_userlog_email'] = "Iاگر شما می خواهید برای نگه داشتن یک کپی از تمام پیام های ایمیل های خروجی ارسال شده توسط {$PRODUCT_NAME}
می توانید این ویژگی را فعال کنید. پیام های ایمیل در ورود به سیستم کاربران ذخیره می شود.";

$GLOBALS['phpAds_hlp_userlog_inventory'] = "برای اطمینان از موجودی محاسبه درستی زد، شما می توانید یک گزارش در مورد صرفه جویی در
محاسبه موجودی ساعتی. این گزارش شامل مشخصات پیش بینی و چه مقدار
اولویت را به تمام آگهی ها اختصاص داده است. این اطلاعات ممکن است اگر از شما مفید
می خواهید برای ارسال یک گزارش اشکال در مورد محاسبات اولویت. گزارش ها
ذخیره شده در داخل userlog.";

$GLOBALS['phpAds_hlp_userlog_autoclean'] = "برای اطمینان از پایگاه داده به درستی هرس شد، شما می توانید یک گزارش در مورد صرفه جویی در
دقیقا همان چیزی در طول هرس اتفاق افتاده است. این اطلاعات ذخیره شده خواهد شد
در userlog.";

$GLOBALS['phpAds_hlp_default_banner_weight'] = "اگر شما می خواهید به استفاده از یک وزن بنر پیش فرض بالاتر شما می توانید به وزن مورد نظر در اینجا مشخص کنید.
این تنظیمات به طور پیش فرض 1 است.";

$GLOBALS['phpAds_hlp_default_campaign_weight'] = "اگر شما می خواهید به استفاده از یک وزن کمپین به طور پیش فرض بالاتر شما می توانید به وزن مورد نظر در اینجا مشخص کنید.
این تنظیمات به طور پیش فرض 1 است .";

$GLOBALS['phpAds_hlp_gui_show_campaign_info'] = "اگر این گزینه فعال باشد اطلاعات اضافی در مورد هر کمپین خواهد شد در نشان داده شده است
<> مبارزات است </ i> صفحه. اطلاعات اضافی شامل تعداد AdViews باقی مانده،
تعداد AdClicks باقی مانده، تعداد AdConversions باقی مانده، زمان فعال شدن،
تاریخ انقضا و تنظیمات اولویت است.";

$GLOBALS['phpAds_hlp_gui_show_banner_info'] = "اگر این گزینه فعال باشد اطلاعات اضافی در مورد هر بنر خواهد شد در نشان داده شده است
<> آگهی ها </ I> صفحه. اطلاعات اضافی شامل URL مقصد، کلمات کلیدی،
اندازه و وزن بنر.";

$GLOBALS['phpAds_hlp_gui_show_campaign_preview'] = "اگر این گزینه فعال باشد یک پیش نمایش از تمام آگهی های خواهد شد در نشان داده شده است <i> آگهی ها </ i>
صفحه اگر این گزینه غیر فعال است هنوز هم ممکن است برای نشان دادن یک پیش نمایش از هر بنر کلیک کنید
بر روی مثلث کنار هر بنر در <i> آگهی ها </ i> صفحه.";

$GLOBALS['phpAds_hlp_gui_show_banner_html'] = "اگر این گزینه فعال باشد بنر HTML واقعی خواهد شد به جای کد HTML نشان داده شده است. این
گزینه به طور پیش فرض فعال است، چرا که آگهی HTML ممکن با رابط کاربری در تضاد است.
اگر این گزینه غیر فعال است هنوز هم ممکن است برای مشاهده بنر HTML واقعی، با کلیک بر روی
از <i> نمایش بنر </ i> را فشار دهید بعد به کد HTML.";

$GLOBALS['phpAds_hlp_gui_show_banner_preview'] = "اگر این گزینه فعال باشد یک پیش نمایش خواهد شد در بالای <i> خواص بنر نشان داده است </ i>،
<i> گزینه تحویل </ i> و <i> مناطق مرتبط است </ i> صفحات. اگر این گزینه غیر فعال است آن است که هنوز
ممکن است برای مشاهده بنر، با کلیک بر روی <i> نمایش بنر دکمه </ i> را در بالای صفحات.";

$GLOBALS['phpAds_hlp_gui_hide_inactive'] = "اگر این گزینه فعال باشد تمام آگهی ها غیر فعال، مبارزات و تبلیغ کنندگان خواهد شد از پنهان
<i> تبلیغات و مبارزات </ i> و <i> مبارزات است </ i> صفحات. اگر این گزینه فعال باشد آن است
هنوز هم ممکن است برای مشاهده آیتم های مخفی، با کلیک بر روی <i> نمایش همه دکمه </ i> را در پایین
صفحه.";

$GLOBALS['phpAds_hlp_gui_show_matching'] = "اگر این گزینه فعال باشد بنر تطبیق خواهد شد بر روی <i> آگهی های مرتبط است </ i> صفحه، اگر نشان داده شده است
از <i> انتخاب کمپین </ i> روش انتخاب شده است. این اجازه می دهد به شما دقیقا ببینید که آگهی ها
برای تحویل در نظر گرفته اگر کمپین مرتبط است. آن را نیز ممکن شود تا در یک پیش نمایش نگاه کنید
آگهی ها منطبق.";

$GLOBALS['phpAds_hlp_gui_show_parents'] = "اگر این گزینه فعال باشد مبارزات پدر و مادر از آگهی های خواهد شد در نشان داده شده است <i> آگهی های مرتبط است </ i>
صفحه، اگر <i> انتخاب بنر </ i> روش انتخاب شده است. این به شما اجازه ببینید که بنر
متعلق به کدام کمپین قبل از بنر مرتبط است. این بدین معنی است که آگهی های گروه بندی می شوند
توسط کمپین های پدر و مادر و دیگر بر اساس حروف الفبا.";
