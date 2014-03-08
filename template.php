<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Flintstones theme.
 */

/**
* Implements hook_preprocess_HOOK().
*/
function flintstones_preprocess_textarea(&$vars) {
  // KILL THE GRIPPIE!!
  $vars['element']['#resizable'] = 0;
}
