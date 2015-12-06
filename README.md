The slack bot runs through the Outgoing Web hook, so this Drupal site is pinged 
every time a message is received on slack general channel.

Extending its functionality is as simple as building a drupal module.

In your module, just implement hook_chat_intercept_alter!

~~~
/**
 * Implements hook_chat_intercept_alter().
 */
function mymodule_chat_intercept_alter($message, &$response) {
  //You can do your stuff here.
  //and just add to the response
  //Make sure you don't overwrite $response if you don't intend to.
    $response.=chat_bot_t('This is an interception from another dependent module');
}
~~~
