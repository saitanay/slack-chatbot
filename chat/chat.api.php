<?php

/**
 * Implements hook_chat_intercept_alter().
 */
function hook_chat_intercept_alter($message, &$response) {
  //Do your Stuff here.
  //Modify the response. Make sure not to overwrite it unless you intend to.
  //$response.=chat_bot_t('This is an interception from another dependent module');
}
