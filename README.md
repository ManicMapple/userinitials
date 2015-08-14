# userinitials
A small php lib to generate user images from initials like trello or the gmail app on android

# basic usage
See the [sample.php](https://github.com/ManicMapple/userinitials/tree/master/samples) for a complete sample

```php
  
  //options are optional
  $options= array();
  $options['backgroundcolor'] = '#d6dadc';
  $options['color'] = '#000000';
  $options['width'] = '85';
  $options['height'] = '85';
  $options['borderradius'] = '20';
    
  $ui = new UserInitials($options);

  print $ui->createSVG("SH");
  print $ui->createSVG("AC");
```

![Sample](https://raw.githubusercontent.com/ManicMapple/userinitials/master/samples/sample.png)
