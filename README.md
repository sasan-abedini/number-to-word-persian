# number-to-word-persian
تبدیل عدد به حروف فارسی
# NumberToWords PHP Library

این کتابخانه PHP برای تبدیل اعداد به حروف فارسی طراحی شده است.

## نصب و راه‌اندازی

1. کپی کردن فایل `NumberToWords.php` به پوشه پروژه شما.

## استفاده

برای استفاده از این کتابخانه، مراحل زیر را دنبال کنید:

1. شامل کردن فایل `NumberToWords.php` در پروژه‌ی خود:
    ```php
    <?php
    require_once 'NumberToWords.php';
    ```

2. ایجاد یک نمونه از کلاس `NumberToWords` و استفاده از متد `convert` برای تبدیل عدد به حروف:
    ```php
    <?php
    require_once 'NumberToWords.php';

    $converter = new NumberToWords();
    echo $converter->convert(123456789); // خروجی: یکصد و بیست و سه میلیون و چهارصد و پنجاه و شش هزار و هفتصد و هشتاد و نه
    ?>
    ```

## متدها

### `convert($number)`

این متد یک عدد صحیح را به عنوان ورودی می‌گیرد و آن را به حروف فارسی تبدیل می‌کند.

#### پارامترها

- `$number` (عدد صحیح): عددی که باید به حروف تبدیل شود.

#### بازگشتی

- `string`: نمایش حروفی عدد.

## مثال‌ها

تبدیل اعداد مختلف به حروف:
```php
<?php
require_once 'NumberToWords.php';

$converter = new NumberToWords();
echo $converter->convert(0); // خروجی: صفر
echo $converter->convert(5); // خروجی: پنج
echo $converter->convert(42); // خروجی: چهل و دو
echo $converter->convert(317); // خروجی: سیصد و هفده
echo $converter->convert(1234); // خروجی: یک هزار و دویست و سی و چهار
echo $converter->convert(-567); // خروجی: منفی پانصد و شصت و هفت
?>

