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

  // Exported permission: 'access comments'.
  $permissions['access comments'] = array(
    'name' => 'access comments',
    'roles' => array(
      'anonymous user' => 'anonymous user',
      'authenticated user' => 'authenticated user',
      '學員' => '學員',
      '編輯' => '編輯',
    ),
    'module' => 'comment',
  );

  // Exported permission: 'administer CAPTCHA settings'.
  $permissions['administer CAPTCHA settings'] = array(
    'name' => 'administer CAPTCHA settings',
    'roles' => array(
      '網站管理者' => '網站管理者',
    ),
    'module' => 'captcha',
  );

  // Exported permission: 'administer advanced forum'.
  $permissions['administer advanced forum'] = array(
    'name' => 'administer advanced forum',
    'roles' => array(
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
    ),
    'module' => 'advanced_forum',
  );

  // Exported permission: 'administer comments'.
  $permissions['administer comments'] = array(
    'name' => 'administer comments',
    'roles' => array(
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
    ),
    'module' => 'comment',
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

  // Exported permission: 'administer recaptcha'.
  $permissions['administer recaptcha'] = array(
    'name' => 'administer recaptcha',
    'roles' => array(
      '網站管理者' => '網站管理者',
    ),
    'module' => 'recaptcha',
  );

  // Exported permission: 'create forum content'.
  $permissions['create forum content'] = array(
    'name' => 'create forum content',
    'roles' => array(
      '學員' => '學員',
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
      '討論區使用者' => '討論區使用者',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any forum content'.
  $permissions['delete any forum content'] = array(
    'name' => 'delete any forum content',
    'roles' => array(
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete own forum content'.
  $permissions['delete own forum content'] = array(
    'name' => 'delete own forum content',
    'roles' => array(
      '學員' => '學員',
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
      '討論區使用者' => '討論區使用者',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete terms in forum'.
  $permissions['delete terms in forum'] = array(
    'name' => 'delete terms in forum',
    'roles' => array(
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
    ),
    'module' => 'taxonomy',
  );

  // Exported permission: 'edit any forum content'.
  $permissions['edit any forum content'] = array(
    'name' => 'edit any forum content',
    'roles' => array(
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit own comments'.
  $permissions['edit own comments'] = array(
    'name' => 'edit own comments',
    'roles' => array(
      '學員' => '學員',
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
      '討論區使用者' => '討論區使用者',
    ),
    'module' => 'comment',
  );

  // Exported permission: 'edit own forum content'.
  $permissions['edit own forum content'] = array(
    'name' => 'edit own forum content',
    'roles' => array(
      '學員' => '學員',
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
      '討論區使用者' => '討論區使用者',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit terms in forum'.
  $permissions['edit terms in forum'] = array(
    'name' => 'edit terms in forum',
    'roles' => array(
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
    ),
    'module' => 'taxonomy',
  );

  // Exported permission: 'post comments'.
  $permissions['post comments'] = array(
    'name' => 'post comments',
    'roles' => array(
      '學員' => '學員',
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
      '討論區使用者' => '討論區使用者',
    ),
    'module' => 'comment',
  );

  // Exported permission: 'skip CAPTCHA'.
  $permissions['skip CAPTCHA'] = array(
    'name' => 'skip CAPTCHA',
    'roles' => array(
      '網站管理者' => '網站管理者',
    ),
    'module' => 'captcha',
  );

  // Exported permission: 'skip comment approval'.
  $permissions['skip comment approval'] = array(
    'name' => 'skip comment approval',
    'roles' => array(
      '學員' => '學員',
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
      '討論區使用者' => '討論區使用者',
    ),
    'module' => 'comment',
  );

  // Exported permission: 'view forum statistics'.
  $permissions['view forum statistics'] = array(
    'name' => 'view forum statistics',
    'roles' => array(
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
    ),
    'module' => 'advanced_forum',
  );

  // Exported permission: 'view last edited notice'.
  $permissions['view last edited notice'] = array(
    'name' => 'view last edited notice',
    'roles' => array(
      '學員' => '學員',
      '網站管理者' => '網站管理者',
      '編輯' => '編輯',
      '討論區使用者' => '討論區使用者',
    ),
    'module' => 'advanced_forum',
  );

  return $permissions;
}
