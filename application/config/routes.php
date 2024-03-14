<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'homeController/view';
//$route['(:any)'] = 'home/view/$1';

$route['android/login'] = "authController/android_login";

$route['android/create'] = "authController/android_create_account";

$route['android/app/asset/list'] = "appController/android_app_assets_get_list";
$route['android/app/update-checker'] = "appController/android_update_checker";
$route['android/app/get-update'] = "appController/android_get_update";

$route['android/auth/google/sign-in'] = "authController/android_google_signin";
$route['android/auth/facebook/sign-in'] = "authController/android_facebook_signin";

$route['android/profile/send-code-email'] = "profileController/send_code_email_android";
$route['android/profile/verifycode'] = "profileController/verify_code_android";
$route['android/profile/change-email'] = "profileController/android_change_email";
$route['android/profile/changepassword'] = "authController/android_changePassword";
$route['android/profile/change_privacy_settings'] = "authController/android_privacy_settings";

$route['android/profile/sync_profile'] = "profileController/android_sync_profile";
$route['android/profile/family/sync_profile'] = "profileController/android_sync_profile_family";
$route['android/profile/family/delete_sync_profile'] = "profileController/android_sync_profile_family_delete";
$route['android/profile/family/get-family-list'] = "profileController/android_get_list_family";

$route['android/spatial/(:any)/(:any)/(:any)/(:any)'] = "spatialController/android_get_spatial_list/$1/$2/$3/$4";
$route['android/profile/setup-mode/update'] = "profileController/android_update_setup_mode";
$route['android/profile/search-network-leader'] = "profileController/android_search_network_leader";
$route['android/profile/search-who-invite'] = "profileController/android_search_who_invite";

$route['android/members/get-members'] = "membersController/android_get_member";
$route['android/members/get-network-leader-info'] = "membersController/android_get_network_leader";

$route['android/members/get-person-info-from-id'] = "membersController/android_get_person_info_from_id";

$route['android/profile/(:any)'] = "profileController/android_getProfile/$1";

$route['android/church/search-by-name'] = "churchController/android_search_church_name";
$route['android/church/get-all'] = "churchController/android_get_all_church_name";
$route['android/church/(:any)'] = "churchController/android_getChurch/$1";

$route['android/material/book/list'] = "bookController/android_material_book_get_list";
$route['android/material/book/get'] = "bookController/android_material_book_get";
$route['android/material/book/lessons/list'] = "bookController/android_material_book_lessons_get_list";
$route['android/material/present/list'] = "bookController/android_material_present_get_list";
$route['android/material/present/get'] = "bookController/android_material_present_get";

$route['android/mission/individual/reset/sync'] = "missionController/android_delete_all_syn_data";
$route['android/mission/individual/sync'] = "missionController/android_individual_sync";
$route['android/mission/evangelism/get-evangelize-list'] = "missionController/android_get_evangelize_list";

$route['android/consolidate/list/reset'] = "missionController/android_consolidate_list_reset";
$route['android/consolidate/list/sync'] = "missionController/android_consolidate_list_sync";


$route['register'] = "authController/register";
$route['register/create'] = "homeController/addUser";
$route['login'] = "authController/login";
$route['forgot-password'] = "authController/forgot_password";
$route['dashboard'] = "adminController";
$route['logout'] = "homeController/logout";


$route['apps/download'] = 'appController/download';

$route['privacy'] = "appController/privacy";


$route['profile'] = "profileController";
$route['profile/delete-account'] = "profileController/delete_account_profile";
$route['profile/form-delete-account'] = "profileController/form_delete_account_profile";

$route['profile/request-to-delete-account'] = "profileController/request_delete_account_profile";
$route['profile/update-profile'] = "profileController/update_profile";
$route['profile/upload-profile-photo'] = "profileController/upload_profile_photo";
$route['profile/remove-profile-photo'] = "profileController/remove_profile_photo";
$route['profile/datatable/populate-families'] = "profileController/ctrl_populate_families";
$route['profile/list-of-selected-family'] = "profileController/select_family_list";
$route['profile/list-of-family/add'] = "profileController/family_add";
$route['profile/list-of-family/edit'] = "profileController/family_edit";
$route['profile/list-of-family/update'] = "profileController/family_update";

$route['profile/list-of-selected-family/add'] = "profileController/selected_family_add";
$route['profile/list-of-family/delete'] = "profileController/family_delete";
$route['profile/list-of-selected-family/delete'] = "profileController/selected_family_delete";
$route['profile/send-code-email'] = "profileController/send_code_email";
$route['profile/send-code-email-forgot-password'] = "profileController/send_code_email_none_session_data";
$route['profile/change-email'] = "profileController/change_email";
$route['profile/changepassword'] = "authController/changePassword";
$route['profile/verifycode'] = "profileController/verify_code";
$route['profile/verifycode-forgot-password'] = "profileController/verify_code_none_session_data";
$route['profile/new-password'] = "profileController/new_password";
$route['profile/get-family-background-form'] = "profileController/family_background_form";

$route['profile/(:any)'] = "profileController/browse_profile/$1";

$route['achievements'] = "achievementController";
$route['achievements/claim'] = "achievementController/claim_now";

$route['create-new-ministry'] = "churchController/create_new_ministry";
$route['church'] = "churchController";
$route['church/get-list'] = "churchController/simple_list_church";
$route['church/create-add-church-form'] = "churchController/create_add_form";
$route['church/create-edit-church-form'] = "churchController/create_edit_church_form";
$route['church/remove-photo'] = "churchController/remove_photo";
$route['church/upload-profile-photo'] = "churchController/upload_profile_photo";
$route['church/upload-cover-photo'] = "churchController/upload_cover_photo";
$route['church/upload-default-cover-photo'] = "churchController/upload_default_cover_photo";
$route['church/search-church'] = "churchController/search_church";


//$route['church'] = "churchController/church";
$route['church/list'] = "churchController/get_church_list";
$route['church/add'] = "churchController/add_church";
$route['church/edit'] = "churchController/edit_church";
$route['church/update'] = "churchController/update_church";
$route['church/delete'] = "churchController/delete_church";

$route['church/join-church'] = "churchController/join_church";
$route['church/remove-church'] = "churchController/remove_church";

//ROLES IN THE CHURCH//
$route['church/roles'] = "rolesController";
$route['church/roles/set-church'] = "rolesController/set_church";
$route['church/roles/get-church'] = "rolesController/get_church";
$route['church/roles/select-church'] = "rolesController/select_church";
$route['church/roles/basic-information'] = "rolesController/get_basic_information_form";
$route['church/roles/view-church'] = "rolesController/get_view_church_form";
$route['church/roles/address'] = "rolesController/get_address_form";
$route['church/roles/quick-add-members/add'] = "rolesController/add_members";
$route['church/roles/quick-add-members/preview'] = "rolesController/preview_members";
$route['church/roles/view-members'] = "rolesController/get_view_members_form";

$route['church/(:any)'] = "churchController/profile/$1";

$route['church/network/disciples'] = "networkController";
$route['church/network/disciples/create'] = "networkController/create";
$route['church/network/disciples/delete'] = "networkController/delete";
$route['church/network/disciple/search'] = "networkController/search";
$route['church/network/disciple/add/member'] = "networkController/add_new_member";
$route['church/network/disciple/load/members'] = "networkController/get_members";

$route['church/ministry-mission/evangelize'] = "missionController/evangelize_form";
$route['church/mission/list'] = "missionController/get_evangelized_list";

$route['church/members/quick-add-members'] = "membersController/get_quick_add_members_form";

$route['users-management'] = "usersManagementController/users_management";
$route['users-management/list'] = "usersManagementController/getList";
$route['users-management/add'] = "usersManagementController/add_users";
$route['users-management/edit'] = "usersManagementController/edit_users";
$route['users-management/update'] = "usersManagementController/update_users";
$route['users-management/delete'] = "usersManagementController/delete_users";

$route['spatial'] = "spatialController/search_spatial";
$route['simple-autocomplete'] = "spatialController/get_autocomplete";

$route['system-access'] = "systemAccessController/system_access";
$route['system-access/list'] = "systemAccessController/getList";
$route['system-access/add'] = "systemAccessController/add_access";
$route['system-access/edit'] = "systemAccessController/edit_access";
$route['system-access/update'] = "systemAccessController/update_access";
$route['system-access/delete'] = "systemAccessController/delete_access";

$route['notify/welcome-close'] = "notificationController/welcome_close";
$route['notify/read-notification-message'] = "notificationController/read_notification";

//$route['blog/(:any)'] = "PageController/Function/YourID";
//$route['blog-edit/(:num)'] = "PageController/Function/YourID";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;







