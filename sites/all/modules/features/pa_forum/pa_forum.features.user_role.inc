<?php
/**
 * @file
 * pa_forum.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function pa_forum_user_default_roles() {
  $roles = array();

  // Exported role: 討論區使用者.
  $roles['討論區使用者'] = array(
    'name' => '討論區使用者',
    'weight' => 2,
  );

  return $roles;
}
