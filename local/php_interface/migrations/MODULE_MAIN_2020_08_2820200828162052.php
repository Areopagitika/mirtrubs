<?php

namespace Sprint\Migration;


class MODULE_MAIN_2020_08_2820200828162052 extends Version
{
    protected $description = "MODULE_MAIN_2020_08_28";

    protected $moduleVersion = "3.16.3";

    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~crypto_b_socialservices_user',
  'VALUE' => 
  array (
    'OATOKEN' => true,
    'REFRESH_TOKEN' => true,
  ),
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~crypto_b_user_phone_auth',
  'VALUE' => 
  array (
    'OTP_SECRET' => true,
  ),
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~ft_b_landing',
  'VALUE' => 
  array (
    'SEARCH_CONTENT' => true,
  ),
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~ft_b_landing_block',
  'VALUE' => 
  array (
    'SEARCH_CONTENT' => true,
  ),
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~ft_b_user_index',
  'VALUE' => 
  array (
    'SEARCH_USER_CONTENT' => true,
    'SEARCH_DEPARTMENT_CONTENT' => true,
    'SEARCH_ADMIN_CONTENT' => true,
  ),
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~ft_b_user_index_selector',
  'VALUE' => 
  array (
    'SEARCH_SELECTOR_CONTENT' => true,
  ),
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~new_license11_sign',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_COMPOSITE',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_FINISH_DATE',
  'VALUE' => 'a05677e6770dad89c0e1734a590304d2d5d368d2005da65641f92e5696c91268.2020-09-09',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_MAX_SERVERS',
  'VALUE' => '2',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_MAX_USERS',
  'VALUE' => 'c6e2b2fac3b9d022599f56fbd16922a041dfd5d2602e541b7cfa23897a35b81e.0',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_PARTNER_ID',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~PARAM_PHONE_SIP',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~support_finish_date',
  'VALUE' => '2020-09-09',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => '~update_autocheck_result',
  'VALUE' => 
  array (
    'check_date' => 1597043795,
    'result' => false,
    'error' => '',
    'modules' => 
    array (
    ),
  ),
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'admin_lid',
  'VALUE' => 'ru',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'admin_passwordh',
  'VALUE' => 'FVgQcWYUBgUtCUVcBxcBCgsTAQ==',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'all_bcc',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'allow_socserv_authorization',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'ALLOW_SPREAD_COOKIE',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'attach_images',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'auth_components_template',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'auth_controller_sso',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'auth_multisite',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'auto_time_zone',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'bx_fast_download',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'captcha_registration',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'captcha_restoring_password',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'compres_css_js_files',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'convert_mail_header',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'convert_original_file_name',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'CONVERT_UNIX_NEWLINE_2_WINDOWS',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'cookie_name',
  'VALUE' => 'BITRIX_SM',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'custom_register_page',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'disk_space',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'distributive6',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_archive_size_limit',
  'VALUE' => '104857600',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_base',
  'VALUE' => '1',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_base_skip_log',
  'VALUE' => '0',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_base_skip_search',
  'VALUE' => '0',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_base_skip_stat',
  'VALUE' => '0',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_bucket_id',
  'VALUE' => '0',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_do_clouds',
  'VALUE' => '0',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_encrypt',
  'VALUE' => '0',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_file_kernel',
  'VALUE' => '1',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_file_public',
  'VALUE' => '1',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_integrity_check',
  'VALUE' => '1',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_max_exec_time',
  'VALUE' => '20',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_max_exec_time_sleep',
  'VALUE' => '3',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_max_file_size',
  'VALUE' => '0',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_site_id',
  'VALUE' => 
  array (
  ),
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'dump_use_compression',
  'VALUE' => '1',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'email_from',
  'VALUE' => 'sevir13@yandex.ru',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'error_reporting',
  'VALUE' => '85',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_cleanup_days',
  'VALUE' => '7',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_file_access',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_group_policy',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_login_fail',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_login_success',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_logout',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_marketplace',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_module_access',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_password_change',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_password_request',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_register',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_register_fail',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_task',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_user_delete',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_user_edit',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'event_log_user_groups',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'fill_to_mail',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'gather_catalog_stat',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'GROUP_DEFAULT_RIGHT',
  'VALUE' => 'D',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'GROUP_DEFAULT_TASK',
  'VALUE' => '1',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'hide_panel_for_users',
  'VALUE' => NULL,
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'image_resize_quality',
  'VALUE' => '95',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'imageeditor_proxy_enabled',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'imageeditor_proxy_white_list',
  'VALUE' => NULL,
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'inactive_users_block_days',
  'VALUE' => '0',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_additional_parameters',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_event_bulk',
  'VALUE' => '5',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_event_period',
  'VALUE' => '14',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_gen_text_version',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mail_link_protocol',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'map_left_menu_type',
  'VALUE' => 'left',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'map_top_menu_type',
  'VALUE' => 'top',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'max_file_size',
  'VALUE' => '0',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'move_js_to_body',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'mp_modules_date',
  'VALUE' => 
  array (
    0 => 
    array (
      'ID' => 'sprint.migration',
      'NAME' => 'Миграции для разработчиков',
      'TMS' => 1597142089,
    ),
  ),
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_email_auth',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_email_required',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_email_uniq_check',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_phone_auth',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_phone_required',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_registration',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_registration_cleanup_days',
  'VALUE' => '7',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_registration_def_group',
  'VALUE' => NULL,
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'new_user_registration_email_confirmation',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'optimize_css_files',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'optimize_js_files',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'PARAM_MAX_SITES',
  'VALUE' => '0',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'PARAM_MAX_USERS',
  'VALUE' => '0',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'phone_number_default_country',
  'VALUE' => '16',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'profile_image_height',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'profile_image_size',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'profile_image_width',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_authority_group',
  'VALUE' => '4',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_authority_group_add',
  'VALUE' => '2',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_authority_group_delete',
  'VALUE' => '2',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_rating_group',
  'VALUE' => '3',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_rating_group_add',
  'VALUE' => '1',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_rating_group_delete',
  'VALUE' => '1',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_assign_type',
  'VALUE' => 'auto',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_authority_rating',
  'VALUE' => '2',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_authority_weight_formula',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_community_authority',
  'VALUE' => '30',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_community_last_visit',
  'VALUE' => '90',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_community_size',
  'VALUE' => '1',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_count_vote',
  'VALUE' => '10',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_normalization',
  'VALUE' => '10',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_normalization_type',
  'VALUE' => 'auto',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_self_vote',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_start_authority',
  'VALUE' => '3',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_text_like_d',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_text_like_n',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_text_like_y',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_vote_show',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_vote_template',
  'VALUE' => 'like',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_vote_type',
  'VALUE' => 'like',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'rating_vote_weight',
  'VALUE' => '10',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'save_original_file_name',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'send_mid',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'server_name',
  'VALUE' => 'mirtrub.websevir.ru',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'server_uniq_id',
  'VALUE' => '7e682b30526a4be6b0f553aa99ece8dc',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'session_auth_only',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'session_expand',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'session_show_message',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'show_panel_for_users',
  'VALUE' => NULL,
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'signer_default_key',
  'VALUE' => '9582e3dcc3f4bc17e2f3e7ca7378625d97c355893d76c835f13649fad5ce24864db75207e626ce0a660531831d867a22b6d8e894d9e0a9a88240c3c9c3fc441c',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'site_checker_success',
  'VALUE' => NULL,
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'site_name',
  'VALUE' => 'mirtrub.websevir.ru',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'skip_mask',
  'VALUE' => '0',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'smile_gallery_id',
  'VALUE' => '1',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'sms_default_service',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'stable_versions_only',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'store_password',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'strong_update_check',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'translate_key_yandex',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'translit_original_file_name',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_autocheck',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_devsrv',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_is_gzip_installed',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_load_timeout',
  'VALUE' => '30',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_safe_mode',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site',
  'VALUE' => 'www.bitrixsoft.com',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_ns',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_proxy_addr',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_proxy_pass',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_proxy_port',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_site_proxy_user',
  'VALUE' => '',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_stop_autocheck',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_system_check',
  'VALUE' => '10.08.2020 11:49:58',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'update_system_update',
  'VALUE' => '10.08.2020 10:16:35',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'upload_dir',
  'VALUE' => 'upload',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'url_preview_enable',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'url_preview_save_images',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_digest_auth',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_encrypted_auth',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_hot_keys',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_minified_assets',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_secure_password_cookies',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'use_time_zones',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'user_profile_history',
  'VALUE' => 'N',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'vendor',
  'VALUE' => '1c_bitrix',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
        $helper->Option()->saveOption(array (
  'MODULE_ID' => 'main',
  'NAME' => 'wizard_firstcorp_furniture_s1',
  'VALUE' => 'Y',
  'DESCRIPTION' => NULL,
  'SITE_ID' => NULL,
));
    }

    public function down()
    {
        //your code ...
    }
}
