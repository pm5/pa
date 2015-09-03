<?php
/**
 * @file
 * pa_forum.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function pa_forum_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'administer advanced forum'.
  $permissions['administer advanced forum'] = array(
    'name' => 'administer advanced forum',
    'roles' => array(
      '網站管理者' => '網站管理者',
    ),
    'module' => 'advanced_forum',
  );

  // Exported permission: 'administer forums'.
  $permissions['administer forums'] = array(
    'name' => 'administer forums',
    'roles' => array(
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
    ),
    'module' => 'forum',
  );

  // Exported permission: 'view forum statistics'.
  $permissions['view forum statistics'] = array(
    'name' => 'view forum statistics',
    'roles' => array(
      '學員' => '學員',
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
    ),
    'module' => 'advanced_forum',
  );

  // Exported permission: 'view last edited notice'.
  $permissions['view last edited notice'] = array(
    'name' => 'view last edited notice',
    'roles' => array(
      'authenticated user' => 'authenticated user',
      '學員' => '學員',
      '網站管理者' => '網站管理者',
    ),
    'module' => 'advanced_forum',
  );

  return $permissions;
}
