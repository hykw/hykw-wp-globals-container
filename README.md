hykw-wp-globals-container
=========================

It's very easy to use.
The global variable is defined in the plugin, you just set/get the values.

```php
// set the value into the global variable
$GLOBALS[HYKWGVC]->set('key', 'value');

// get the value from the global variable
$val = $GLOBALS[HYKWGVC]->get('key');
```
