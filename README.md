# Learn PHP

## Cú pháp
`php` được code trong thẻ `<?php  ?>`

file mở rộng `.php`

Câu lệnh php kết thúc bằng dấu chấm phẩy `;`

keyword trong php không phân biệt hoa thường(Tuy nhiên thì biến vẫn phân biệt)

## coding convension
https://viblo.asia/p/coding-convention-doi-voi-mot-project-php-ORNZqNPrl0n

## comment
```php
<?php
// Đây là comment 1 dòng

# Đây cũng là comment 1 dòng

/* Đây là comment
 * Nhiều dòng
 * 
 * */

?>

```

## Biến
### Biến
Trong php biến được khai báo bắt đầu bằng `$`
### Phạm vi Biến
Có 3 phạm vi biến
* local
* global
* static

## Echo
## Kiểu dữ liệu
PHP hỗ trợ kiểu:
* string
* interger
* float
* boolean
* array
* object
* null
* resource
## Hằng
```php
<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>
```

### Câu điều kiện
```php
<?php
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}
?>
```
### Switch case

```php
<?php
switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}
?>
```

## Vòng lặp
### while
```php
<?php
while (condition is true) {
  code to be executed;
}
?>
```

### for
```php
for (init counter; test counter; increment counter) {
    code to be executed for each iteration;
}
```

### foreach
```php
<?php
    foreach ($array as $value) {
      code to be executed;
    }
?>
```

### Function


```php
<?php
function functionName() {
  code to be executed;
}
?>

```

## Regex



