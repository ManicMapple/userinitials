# userinitials
A small php lib to generate user images from initials like trello or the gmail app on android

# basic usage
See the [sample.php](https://github.com/ManicMapple/userinitials/tree/master/samples) for a complete sample

```php
$ui = new UserInitials(array('width' => 100, 'height' => 100));

print $ui->createSVG("SH");
```
