SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `backend_access_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `backend_access_log` (`id`, `user_id`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 1, '::1', '2019-09-19 20:45:24', '2019-09-19 20:45:24');

CREATE TABLE `backend_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persist_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `backend_users` (`id`, `first_name`, `last_name`, `login`, `email`, `password`, `activation_code`, `persist_code`, `reset_password_code`, `permissions`, `is_activated`, `role_id`, `activated_at`, `last_login`, `created_at`, `updated_at`, `deleted_at`, `is_superuser`) VALUES
(1, 'Admin', 'Person', 'admin', 'admin@domain.tld', '$2y$10$Zk1VpAgMNnGrrqsRa4k43O91DdxYufXYFP27mspc48OPfN1I4ypGm', NULL, '$2y$10$7naMbD01YTmvO2dyMopv6e3SuR6Bp68Bk8xg2i/cO21lko40t/vje', NULL, '', 1, 2, NULL, '2019-09-19 20:45:24', '2019-09-19 20:42:32', '2019-09-19 20:45:24', NULL, 1);

CREATE TABLE `backend_users_groups` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `backend_users_groups` (`user_id`, `user_group_id`) VALUES
(1, 1);

CREATE TABLE `backend_user_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `is_new_user_default` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `backend_user_groups` (`id`, `name`, `created_at`, `updated_at`, `code`, `description`, `is_new_user_default`) VALUES
(1, 'Owners', '2019-09-19 20:42:32', '2019-09-19 20:42:32', 'owners', 'Default group for website owners.', 0);

CREATE TABLE `backend_user_preferences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `backend_user_preferences` (`id`, `user_id`, `namespace`, `group`, `item`, `value`) VALUES
(1, 1, 'backend', 'reportwidgets', 'dashboard', '{\"welcome\":{\"class\":\"Backend\\\\ReportWidgets\\\\Welcome\",\"sortOrder\":50,\"configuration\":{\"ocWidgetWidth\":7}},\"systemStatus\":{\"class\":\"System\\\\ReportWidgets\\\\Status\",\"sortOrder\":60,\"configuration\":{\"ocWidgetWidth\":7}},\"activeTheme\":{\"class\":\"Cms\\\\ReportWidgets\\\\ActiveTheme\",\"sortOrder\":70,\"configuration\":{\"title\":\"Website\",\"ocWidgetWidth\":5,\"ocWidgetNewRow\":null}}}');

CREATE TABLE `backend_user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `is_system` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `backend_user_roles` (`id`, `name`, `code`, `description`, `permissions`, `is_system`, `created_at`, `updated_at`) VALUES
(1, 'Publisher', 'publisher', 'Site editor with access to publishing tools.', '', 1, '2019-09-19 20:42:32', '2019-09-19 20:42:32'),
(2, 'Developer', 'developer', 'Site administrator with access to developer tools.', '', 1, '2019-09-19 20:42:32', '2019-09-19 20:42:32');

CREATE TABLE `backend_user_throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `suspended_at` timestamp NULL DEFAULT NULL,
  `is_banned` tinyint(1) NOT NULL DEFAULT '0',
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `backend_user_throttle` (`id`, `user_id`, `ip_address`, `attempts`, `last_attempt_at`, `is_suspended`, `suspended_at`, `is_banned`, `banned_at`) VALUES
(1, 1, '::1', 0, NULL, 0, NULL, 0, NULL);

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `cms_theme_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cms_theme_data` (`id`, `theme`, `data`, `created_at`, `updated_at`) VALUES
(1, 'jumplink-viola', '{\"color\":\"green\",\"site_name\":\"Instituto de Oncologia\",\"company_name\":\"Instituto de Oncologia\",\"phone_number\":\"+01 101 01 01 01 01\",\"email_address\":\"info@domain.ltd\",\"bs4-white\":\"#fff\",\"bs4-black\":\"#000\",\"bs4-red\":\"#d9534f\",\"bs4-orange\":\"#f0ad4e\",\"bs4-yellow\":\"#ffd500\",\"bs4-green\":\"#5cb85c\",\"bs4-blue\":\"#0275d8\",\"bs4-teal\":\"#5bc0de\",\"bs4-pink\":\"#ff5b77\",\"bs4-purple\":\"#613d7c\",\"bs4-gray-dark\":\"#292b2c\",\"bs4-gray\":\"#464a4c\",\"bs4-gray-light\":\"#636c72\",\"bs4-gray-lighter\":\"#eceeef\",\"bs4-gray-lightest\":\"#f7f7f9\",\"bs4-brand-primary\":\"$blue\",\"bs4-brand-success\":\"$green\",\"bs4-brand-info\":\"$teal\",\"bs4-brand-warning\":\"$orange\",\"bs4-brand-danger\":\"$red\",\"bs4-brand-inverse\":\"$gray-dark\",\"bs4-enable-rounded\":\"1\",\"bs4-enable-shadows\":\"0\",\"bs4-enable-gradients\":\"0\",\"bs4-enable-transitions\":\"1\",\"bs4-enable-hover-media-query\":\"0\",\"bs4-enable-grid-classes\":\"1\",\"bs4-enable-print-styles\":\"1\",\"bs4-spacer\":\"1rem\",\"bs4-spacer-x\":\"$spacer\",\"bs4-spacer-y\":\"$spacer\",\"bs4-spacers-x-0\":\"0\",\"bs4-spacers-y-0\":\"0\",\"bs4-spacers-x-1\":\"$spacer-x * .25\",\"bs4-spacers-y-1\":\"$spacer-y * .25\",\"bs4-spacers-x-2\":\"($spacer-x * .5)\",\"bs4-spacers-y-2\":\"($spacer-y * .5)\",\"bs4-spacers-x-3\":\"($spacer-x)\",\"bs4-spacers-y-3\":\"($spacer-y)\",\"bs4-spacers-x-4\":\"($spacer-x * 1.5)\",\"bs4-spacers-y-4\":\"($spacer-y * 1.5)\",\"bs4-spacers-x-5\":\"($spacer-x * 3)\",\"bs4-spacers-y-5\":\"($spacer-y * 3)\",\"bs4-border-width\":\"1px\",\"bs4-body-bg\":\"$white\",\"bs4-body-color\":\"$gray-dark\",\"bs4-inverse-bg\":\"$gray-dark\",\"bs4-inverse-color\":\"$gray-lighter\",\"bs4-link-color\":\"$brand-primary\",\"bs4-link-decoration\":\"none\",\"bs4-link-hover-color\":\"darken($link-color, 15%)\",\"bs4-link-hover-decoration\":\"underline\",\"bs4-grid-breakpoints-xs\":\"0\",\"bs4-grid-breakpoints-sm\":\"576px\",\"bs4-grid-breakpoints-md\":\"768px\",\"bs4-grid-breakpoints-lg\":\"992px\",\"bs4-grid-breakpoints-xl\":\"1200px\",\"bs4-container-max-widths-xs\":\"null\",\"bs4-container-max-widths-sm\":\"540px\",\"bs4-container-max-widths-md\":\"720px\",\"bs4-container-max-widths-lg\":\"960px\",\"bs4-container-max-widths-xl\":\"1140px\",\"bs4-grid-columns\":\"12\",\"bs4-grid-gutter-width-base\":\"30px\",\"bs4-grid-gutter-widths-xs\":\"$grid-gutter-width-base\",\"bs4-grid-gutter-widths-sm\":\"$grid-gutter-width-base\",\"bs4-grid-gutter-widths-md\":\"$grid-gutter-width-base\",\"bs4-grid-gutter-widths-lg\":\"$grid-gutter-width-base\",\"bs4-grid-gutter-widths-xl\":\"$grid-gutter-width-base\",\"bs4-font-family-sans-serif\":\"-apple-system, system-ui, BlinkMacSystemFont, \\\"Segoe UI\\\", Roboto, \\\"Helvetica Neue\\\", Arial, sans-serif\",\"bs4-font-family-serif\":\"Georgia, \\\"Times New Roman\\\", Times, serif\",\"bs4-font-family-monospace\":\"Menlo, Monaco, Consolas, \\\"Liberation Mono\\\", \\\"Courier New\\\", monospace\",\"bs4-font-family-base\":\"$font-family-sans-serif\",\"bs4-font-size-root\":\"16px\",\"bs4-font-size-base\":\"1rem\",\"bs4-font-size-lg\":\"1.25rem\",\"bs4-font-size-sm\":\".875rem\",\"bs4-font-size-xs\":\".75rem\",\"bs4-font-weight-normal\":\"normal\",\"bs4-font-weight-bold\":\"bold\",\"bs4-font-weight-base\":\"$font-weight-normal\",\"bs4-line-height-base\":\"1.5\",\"bs4-font-size-h1\":\"2.5rem\",\"bs4-font-size-h2\":\"2rem\",\"bs4-font-size-h3\":\"1.75rem\",\"bs4-font-size-h4\":\"1.5rem\",\"bs4-font-size-h5\":\"1.25rem\",\"bs4-font-size-h6\":\"1rem\",\"bs4-headings-margin-bottom\":\"($spacer \\/ 2)\",\"bs4-headings-font-family\":\"inherit\",\"bs4-headings-font-weight\":\"500\",\"bs4-headings-line-height\":\"1.1\",\"bs4-headings-color\":\"inherit\",\"bs4-display1-size\":\"6rem\",\"bs4-display2-size\":\"5.5rem\",\"bs4-display3-size\":\"4.5rem\",\"bs4-display4-size\":\"3.5rem\",\"bs4-display1-weight\":\"300\",\"bs4-display2-weight\":\"300\",\"bs4-display3-weight\":\"300\",\"bs4-display4-weight\":\"300\",\"bs4-display-line-height\":\"$headings-line-height\",\"bs4-lead-font-size\":\"1.25rem\",\"bs4-lead-font-weight\":\"300\",\"bs4-small-font-size\":\"80%\",\"bs4-text-muted\":\"$gray-light\",\"bs4-abbr-border-color\":\"$gray-light\",\"bs4-blockquote-small-color\":\"$gray-light\",\"bs4-blockquote-font-size\":\"($font-size-base * 1.25)\",\"bs4-blockquote-border-color\":\"$gray-lighter\",\"bs4-blockquote-border-width\":\".25rem\",\"bs4-hr-border-color\":\"rgba($black,.1)\",\"bs4-hr-border-width\":\"$border-width\",\"bs4-mark-padding\":\".2em\",\"bs4-dt-font-weight\":\"$font-weight-bold\",\"bs4-kbd-box-shadow\":\"inset 0 -.1rem 0 rgba($black,.25)\",\"bs4-nested-kbd-font-weight\":\"$font-weight-bold\",\"bs4-list-inline-padding\":\"5px\",\"bs4-line-height-lg\":\"(4 \\/ 3)\",\"bs4-line-height-sm\":\"1.5\",\"bs4-border-radius\":\".25rem\",\"bs4-border-radius-lg\":\".3rem\",\"bs4-border-radius-sm\":\".2rem\",\"bs4-component-active-color\":\"$white\",\"bs4-component-active-bg\":\"$brand-primary\",\"bs4-caret-width\":\".3em\",\"bs4-caret-width-lg\":\"$caret-width\",\"bs4-transition-base\":\"all .2s ease-in-out\",\"bs4-transition-fade\":\"opacity .15s linear\",\"bs4-transition-collapse\":\"height .35s ease\",\"bs4-table-cell-padding\":\".75rem\",\"bs4-table-sm-cell-padding\":\".3rem\",\"bs4-table-bg\":\"transparent\",\"bs4-table-inverse-bg\":\"$gray-dark\",\"bs4-table-inverse-color\":\"$body-bg\",\"bs4-table-bg-accent\":\"rgba($black,.05)\",\"bs4-table-bg-hover\":\"rgba($black,.075)\",\"bs4-table-bg-active\":\"$table-bg-hover\",\"bs4-table-head-bg\":\"$gray-lighter\",\"bs4-table-head-color\":\"$gray\",\"bs4-table-border-width\":\"$border-width\",\"bs4-table-border-color\":\"$gray-lighter\",\"bs4-btn-padding-x\":\"1rem\",\"bs4-btn-padding-y\":\".5rem\",\"bs4-btn-line-height\":\"1.25\",\"bs4-btn-font-weight\":\"$font-weight-normal\",\"bs4-btn-box-shadow\":\"inset 0 1px 0 rgba($white,.15), 0 1px 1px rgba($black,.075)\",\"bs4-btn-focus-box-shadow\":\"0 0 0 2px rgba($brand-primary, .25)\",\"bs4-btn-active-box-shadow\":\"inset 0 3px 5px rgba($black,.125)\",\"bs4-btn-primary-color\":\"$white\",\"bs4-btn-primary-bg\":\"$brand-primary\",\"bs4-btn-primary-border\":\"$btn-primary-bg\",\"bs4-btn-secondary-color\":\"$gray-dark\",\"bs4-btn-secondary-bg\":\"$white\",\"bs4-btn-secondary-border\":\"#ccc\",\"bs4-btn-info-color\":\"$white\",\"bs4-btn-info-bg\":\"$brand-info\",\"bs4-btn-info-border\":\"$btn-info-bg\",\"bs4-btn-success-color\":\"$white\",\"bs4-btn-success-bg\":\"$brand-success\",\"bs4-btn-success-border\":\"$btn-success-bg\",\"bs4-btn-warning-color\":\"$white\",\"bs4-btn-warning-bg\":\"$brand-warning\",\"bs4-btn-warning-border\":\"$btn-warning-bg\",\"bs4-btn-danger-color\":\"$white\",\"bs4-btn-danger-bg\":\"$brand-danger\",\"bs4-btn-danger-border\":\"$btn-danger-bg\",\"bs4-btn-link-disabled-color\":\"$gray-light\",\"bs4-btn-padding-x-sm\":\".5rem\",\"bs4-btn-padding-y-sm\":\".25rem\",\"bs4-btn-padding-x-lg\":\"1.5rem\",\"bs4-btn-padding-y-lg\":\".75rem\",\"bs4-btn-block-spacing-y\":\".5rem\",\"bs4-btn-toolbar-margin\":\".5rem\",\"bs4-btn-border-radius\":\"$border-radius\",\"bs4-btn-border-radius-lg\":\"$border-radius-lg\",\"bs4-btn-border-radius-sm\":\"$border-radius-sm\",\"bs4-btn-transition\":\"all .2s ease-in-out\",\"bs4-input-padding-x\":\".75rem\",\"bs4-input-padding-y\":\".5rem\",\"bs4-input-line-height\":\"1.25\",\"bs4-input-bg\":\"$white\",\"bs4-input-bg-disabled\":\"$gray-lighter\",\"bs4-input-color\":\"$gray\",\"bs4-input-border-color\":\"rgba($black,.15)\",\"bs4-input-btn-border-width\":\"$border-width\",\"bs4-input-box-shadow\":\"inset 0 1px 1px rgba($black,.075)\",\"bs4-input-border-radius\":\"$border-radius\",\"bs4-input-border-radius-lg\":\"$border-radius-lg\",\"bs4-input-border-radius-sm\":\"$border-radius-sm\",\"bs4-input-bg-focus\":\"$input-bg\",\"bs4-input-border-focus\":\"lighten($brand-primary, 25%)\",\"bs4-input-box-shadow-focus\":\"$input-box-shadow, rgba($input-border-focus, .6)\",\"bs4-input-color-focus\":\"$input-color\",\"bs4-input-color-placeholder\":\"$gray-light\",\"bs4-input-padding-x-sm\":\".5rem\",\"bs4-input-padding-y-sm\":\".25rem\",\"bs4-input-padding-x-lg\":\"1.5rem\",\"bs4-input-padding-y-lg\":\".75rem\",\"bs4-input-height\":\"(($font-size-base * $input-line-height) + ($input-padding-y * 2))\",\"bs4-input-height-lg\":\"(($font-size-lg * $line-height-lg) + ($input-padding-y-lg * 2))\",\"bs4-input-height-sm\":\"(($font-size-sm * $line-height-sm) + ($input-padding-y-sm * 2))\",\"bs4-input-transition\":\"border-color ease-in-out .15s, box-shadow ease-in-out .15s\",\"bs4-form-text-margin-top\":\".25rem\",\"bs4-form-feedback-margin-top\":\"$form-text-margin-top\",\"bs4-form-check-margin-bottom\":\".5rem\",\"bs4-form-check-input-gutter\":\"1.25rem\",\"bs4-form-check-input-margin-y\":\".25rem\",\"bs4-form-check-input-margin-x\":\".25rem\",\"bs4-form-check-inline-margin-x\":\".75rem\",\"bs4-form-group-margin-bottom\":\"$spacer-y\",\"bs4-input-group-addon-bg\":\"$gray-lighter\",\"bs4-input-group-addon-border-color\":\"$input-border-color\",\"bs4-cursor-disabled\":\"not-allowed\",\"bs4-custom-control-gutter\":\"1.5rem\",\"bs4-custom-control-spacer-x\":\"1rem\",\"bs4-custom-control-spacer-y\":\".25rem\",\"bs4-custom-control-indicator-size\":\"1rem\",\"bs4-custom-control-indicator-margin-y\":\"(($line-height-base * 1rem) - $custom-control-indicator-size) \\/ -2\",\"bs4-custom-control-indicator-bg\":\"#ddd\",\"bs4-custom-control-indicator-bg-size\":\"50% 50%\",\"bs4-custom-control-indicator-box-shadow\":\"inset 0 .25rem .25rem rgba($black,.1)\",\"bs4-custom-control-disabled-cursor\":\"$cursor-disabled\",\"bs4-custom-control-disabled-indicator-bg\":\"$gray-lighter\",\"bs4-custom-control-disabled-description-color\":\"$gray-light\",\"bs4-custom-control-checked-indicator-color\":\"$white\",\"bs4-custom-control-checked-indicator-bg\":\"$brand-primary\",\"bs4-custom-control-checked-indicator-box-shadow\":\"none\",\"bs4-custom-control-focus-indicator-box-shadow\":\"0 0 0 1px $body-bg, 0 0 0 3px $brand-primary\",\"bs4-custom-control-active-indicator-color\":\"$white\",\"bs4-custom-control-active-indicator-bg\":\"lighten($brand-primary, 35%)\",\"bs4-custom-control-active-indicator-box-shadow\":\"none\",\"bs4-custom-checkbox-radius\":\"$border-radius\",\"bs4-custom-checkbox-indeterminate-bg\":\"$brand-primary\",\"bs4-custom-checkbox-indeterminate-indicator-color\":\"$custom-control-checked-indicator-color\",\"bs4-custom-checkbox-indeterminate-box-shadow\":\"none\",\"bs4-custom-radio-radius\":\"50%\",\"bs4-custom-select-padding-x\":\".75rem\",\"bs4-custom-select-padding-y\":\".375rem\",\"bs4-custom-select-indicator-padding\":\"1rem\",\"bs4-custom-select-line-height\":\"$input-line-height\",\"bs4-custom-select-color\":\"$input-color\",\"bs4-custom-select-disabled-color\":\"$gray-light\",\"bs4-custom-select-bg\":\"$white\",\"bs4-custom-select-disabled-bg\":\"$gray-lighter\",\"bs4-custom-select-bg-size\":\"8px 10px\",\"bs4-custom-select-indicator-color\":\"#333\",\"bs4-custom-select-border-width\":\"$input-btn-border-width\",\"bs4-custom-select-border-color\":\"$input-border-color\",\"bs4-custom-select-border-radius\":\"$border-radius\",\"bs4-custom-select-focus-border-color\":\"lighten($brand-primary, 25%)\",\"bs4-custom-select-focus-box-shadow\":\"inset 0 1px 2px rgba($black, .075), 0 0 5px rgba($custom-select-focus-border-color, .5)\",\"bs4-custom-select-sm-padding-y\":\".2rem\",\"bs4-custom-select-sm-font-size\":\"75%\",\"bs4-custom-file-height\":\"2.5rem\",\"bs4-custom-file-width\":\"14rem\",\"bs4-custom-file-focus-box-shadow\":\"0 0 0 .075rem $white, 0 0 0 .2rem $brand-primary\",\"bs4-custom-file-padding-x\":\".5rem\",\"bs4-custom-file-padding-y\":\"1rem\",\"bs4-custom-file-line-height\":\"1.5\",\"bs4-custom-file-color\":\"$gray\",\"bs4-custom-file-bg\":\"$white\",\"bs4-custom-file-border-width\":\"$border-width\",\"bs4-custom-file-border-color\":\"$input-border-color\",\"bs4-custom-file-border-radius\":\"$border-radius\",\"bs4-custom-file-box-shadow\":\"inset 0 .2rem .4rem rgba($black,.05)\",\"bs4-custom-file-button-color\":\"$custom-file-color\",\"bs4-custom-file-button-bg\":\"$gray-lighter\",\"bs4-custom-file-text-placeholder-en\":\"\\\"Choose file...\\\"\",\"bs4-custom-file-text-placeholder-de\":\"\\\"Datei ausw\\u00e4hlen...\\\"\",\"bs4-custom-file-text-button-label-en\":\"\\\"Browse\\\"\",\"bs4-custom-file-text-button-label-de\":\"\\\"Durchsuchen\\\"\",\"bs4-form-icon-success-color\":\"$brand-success\",\"bs4-form-icon-warning-color\":\"$brand-warning\",\"bs4-form-icon-danger-color\":\"$brand-danger\",\"bs4-dropdown-min-width\":\"10rem\",\"bs4-dropdown-padding-y\":\".5rem\",\"bs4-dropdown-margin-top\":\".125rem\",\"bs4-dropdown-bg\":\"$white\",\"bs4-dropdown-border-color\":\"rgba($black,.15)\",\"bs4-dropdown-border-width\":\"$border-width\",\"bs4-dropdown-divider-bg\":\"$gray-lighter\",\"bs4-dropdown-box-shadow\":\"0 .5rem 1rem rgba($black,.175)\",\"bs4-dropdown-link-color\":\"$gray-dark\",\"bs4-dropdown-link-hover-color\":\"darken($gray-dark, 5%)\",\"bs4-dropdown-link-hover-bg\":\"$gray-lightest\",\"bs4-dropdown-link-active-color\":\"$component-active-color\",\"bs4-dropdown-link-active-bg\":\"$component-active-bg\",\"bs4-dropdown-link-disabled-color\":\"$gray-light\",\"bs4-dropdown-item-padding-x\":\"1.5rem\",\"bs4-dropdown-header-color\":\"$gray-light\",\"bs4-zindex-dropdown-backdrop\":\"990\",\"bs4-zindex-navbar\":\"1000\",\"bs4-zindex-dropdown\":\"1000\",\"bs4-zindex-fixed\":\"1030\",\"bs4-zindex-sticky\":\"1030\",\"bs4-zindex-modal-backdrop\":\"1040\",\"bs4-zindex-modal\":\"1050\",\"bs4-zindex-popover\":\"1060\",\"bs4-zindex-tooltip\":\"1070\",\"bs4-navbar-border-radius\":\"$border-radius\",\"bs4-navbar-padding-x\":\"$spacer\",\"bs4-navbar-padding-y\":\"($spacer \\/ 2)\",\"bs4-navbar-brand-padding-y\":\".25rem\",\"bs4-navbar-toggler-padding-x\":\".75rem\",\"bs4-navbar-toggler-padding-y\":\".25rem\",\"bs4-navbar-toggler-font-size\":\"$font-size-lg\",\"bs4-navbar-toggler-border-radius\":\"$btn-border-radius\",\"bs4-navbar-inverse-color\":\"rgba($white,.5)\",\"bs4-navbar-inverse-hover-color\":\"rgba($white,.75)\",\"bs4-navbar-inverse-active-color\":\"rgba($white,1)\",\"bs4-navbar-inverse-disabled-color\":\"rgba($white,.25)\",\"bs4-navbar-inverse-toggler-border\":\"rgba($white,.1)\",\"bs4-navbar-light-color\":\"rgba($black,.5)\",\"bs4-navbar-light-hover-color\":\"rgba($black,.7)\",\"bs4-navbar-light-active-color\":\"rgba($black,.9)\",\"bs4-navbar-light-disabled-color\":\"rgba($black,.3)\",\"bs4-navbar-light-toggler-border\":\"rgba($black,.1)\",\"bs4-nav-item-margin\":\".2rem\",\"bs4-nav-item-inline-spacer\":\"1rem\",\"bs4-nav-link-padding\":\".5em 1em\",\"bs4-nav-link-hover-bg\":\"$gray-lighter\",\"bs4-nav-disabled-link-color\":\"$gray-light\",\"bs4-nav-disabled-link-hover-color\":\"$gray-light\",\"bs4-nav-disabled-link-hover-bg\":\"transparent\",\"bs4-nav-tabs-border-color\":\"#ddd\",\"bs4-nav-tabs-border-width\":\"$border-width\",\"bs4-nav-tabs-border-radius\":\"$border-radius\",\"bs4-nav-tabs-link-hover-border-color\":\"$gray-lighter\",\"bs4-nav-tabs-active-link-hover-color\":\"$gray\",\"bs4-nav-tabs-active-link-hover-bg\":\"$body-bg\",\"bs4-nav-tabs-active-link-hover-border-color\":\"#ddd\",\"bs4-nav-tabs-justified-link-border-color\":\"#ddd\",\"bs4-nav-tabs-justified-active-link-border-color\":\"$body-bg\",\"bs4-nav-pills-border-radius\":\"$border-radius\",\"bs4-nav-pills-active-link-color\":\"$component-active-color\",\"bs4-nav-pills-active-link-bg\":\"$component-active-bg\",\"bs4-pagination-padding-x\":\".75rem\",\"bs4-pagination-padding-y\":\".5rem\",\"bs4-pagination-padding-x-sm\":\".5rem\",\"bs4-pagination-padding-y-sm\":\".25rem\",\"bs4-pagination-padding-x-lg\":\"1.5rem\",\"bs4-pagination-padding-y-lg\":\".75rem\",\"bs4-pagination-line-height\":\"1.25\",\"bs4-pagination-color\":\"$link-color\",\"bs4-pagination-bg\":\"$white\",\"bs4-pagination-border-width\":\"$border-width\",\"bs4-pagination-border-color\":\"#ddd\",\"bs4-pagination-hover-color\":\"$link-hover-color\",\"bs4-pagination-hover-bg\":\"$gray-lighter\",\"bs4-pagination-hover-border\":\"#ddd\",\"bs4-pagination-active-color\":\"$white\",\"bs4-pagination-active-bg\":\"$brand-primary\",\"bs4-pagination-active-border\":\"$brand-primary\",\"bs4-pagination-disabled-color\":\"$gray-light\",\"bs4-pagination-disabled-bg\":\"$white\",\"bs4-pagination-disabled-border\":\"#ddd\",\"bs4-jumbotron-padding\":\"2rem\",\"bs4-jumbotron-bg\":\"$gray-lighter\",\"bs4-state-success-text\":\"#3c763d\",\"bs4-state-success-bg\":\"#dff0d8\",\"bs4-state-success-border\":\"darken($state-success-bg, 5%)\",\"bs4-state-info-text\":\"#31708f\",\"bs4-state-info-bg\":\"#d9edf7\",\"bs4-state-info-border\":\"darken($state-info-bg, 7%)\",\"bs4-state-warning-text\":\"#8a6d3b\",\"bs4-state-warning-bg\":\"#fcf8e3\",\"bs4-mark-bg\":\"$state-warning-bg\",\"bs4-state-warning-border\":\"darken($state-warning-bg, 5%)\",\"bs4-state-danger-text\":\"#a94442\",\"bs4-state-danger-bg\":\"#f2dede\",\"bs4-state-danger-border\":\"darken($state-danger-bg, 5%)\",\"bs4-card-spacer-x\":\"1.25rem\",\"bs4-card-spacer-y\":\".75rem\",\"bs4-card-border-width\":\"1px\",\"bs4-card-border-radius\":\"$border-radius\",\"bs4-card-border-color\":\"rgba($black,.125)\",\"bs4-card-border-radius-inner\":\"calc(#{$card-border-radius} - #{$card-border-width})\",\"bs4-card-cap-bg\":\"$gray-lightest\",\"bs4-card-bg\":\"$white\",\"bs4-card-link-hover-color\":\"$white\",\"bs4-card-img-overlay-padding\":\"1.25rem\",\"bs4-card-deck-margin\":\"($grid-gutter-width-base \\/ 2)\",\"bs4-card-columns-sm-up-column-gap\":\"1.25rem\",\"bs4-card-columns-count\":\"3\",\"bs4-card-columns-gap\":\"1.25rem\",\"bs4-card-columns-margin\":\"$card-spacer-y\",\"bs4-tooltip-max-width\":\"200px\",\"bs4-tooltip-color\":\"$white\",\"bs4-tooltip-bg\":\"$black\",\"bs4-tooltip-opacity\":\".9\",\"bs4-tooltip-padding-y\":\"3px\",\"bs4-tooltip-padding-x\":\"8px\",\"bs4-tooltip-margin\":\"3px\",\"bs4-tooltip-arrow-width\":\"5px\",\"bs4-tooltip-arrow-color\":\"$tooltip-bg\",\"bs4-popover-inner-padding\":\"1px\",\"bs4-popover-bg\":\"$white\",\"bs4-popover-max-width\":\"276px\",\"bs4-popover-border-width\":\"$border-width\",\"bs4-popover-border-color\":\"rgba($black,.2)\",\"bs4-popover-box-shadow\":\"0 5px 10px rgba($black,.2)\",\"bs4-popover-title-bg\":\"darken($popover-bg, 3%)\",\"bs4-popover-title-padding-x\":\"14px\",\"bs4-popover-title-padding-y\":\"8px\",\"bs4-popover-content-padding-x\":\"14px\",\"bs4-popover-content-padding-y\":\"9px\",\"bs4-popover-arrow-width\":\"10px\",\"bs4-popover-arrow-color\":\"$popover-bg\",\"bs4-popover-arrow-outer-width\":\"($popover-arrow-width + 1px)\",\"bs4-popover-arrow-outer-color\":\"fade-in($popover-border-color, .05)\",\"bs4-badge-default-bg\":\"$gray-light\",\"bs4-badge-primary-bg\":\"$brand-primary\",\"bs4-badge-success-bg\":\"$brand-success\",\"bs4-badge-info-bg\":\"$brand-info\",\"bs4-badge-warning-bg\":\"$brand-warning\",\"bs4-badge-danger-bg\":\"$brand-danger\",\"bs4-badge-color\":\"$white\",\"bs4-badge-link-hover-color\":\"$white\",\"bs4-badge-font-size\":\"75%\",\"bs4-badge-font-weight\":\"bold\",\"bs4-badge-padding-x\":\".4em\",\"bs4-badge-padding-y\":\".25em\",\"bs4-badge-pill-padding-x\":\".6em\",\"bs4-badge-pill-border-radius\":\"10rem\",\"bs4-modal-inner-padding\":\"15px\",\"bs4-modal-dialog-margin\":\"10px\",\"bs4-modal-dialog-sm-up-margin-y\":\"30px\",\"bs4-modal-title-line-height\":\"$line-height-base\",\"bs4-modal-content-bg\":\"$white\",\"bs4-modal-content-border-color\":\"rgba($black,.2)\",\"bs4-modal-content-border-width\":\"$border-width\",\"bs4-modal-content-xs-box-shadow\":\"0 3px 9px rgba($black,.5)\",\"bs4-modal-content-sm-up-box-shadow\":\"0 5px 15px rgba($black,.5)\",\"bs4-modal-backdrop-bg\":\"$black\",\"bs4-modal-backdrop-opacity\":\".5\",\"bs4-modal-header-border-color\":\"$gray-lighter\",\"bs4-modal-footer-border-color\":\"$modal-header-border-color\",\"bs4-modal-header-border-width\":\"$modal-content-border-width\",\"bs4-modal-footer-border-width\":\"$modal-header-border-width\",\"bs4-modal-header-padding\":\"15px\",\"bs4-modal-lg\":\"800px\",\"bs4-modal-md\":\"500px\",\"bs4-modal-sm\":\"300px\",\"bs4-modal-transition\":\"transform .3s ease-out\",\"bs4-alert-padding-x\":\"1.25rem\",\"bs4-alert-padding-y\":\".75rem\",\"bs4-alert-margin-bottom\":\"$spacer-y\",\"bs4-alert-border-radius\":\"$border-radius\",\"bs4-alert-link-font-weight\":\"$font-weight-bold\",\"bs4-alert-border-width\":\"$border-width\",\"bs4-alert-success-bg\":\"$state-success-bg\",\"bs4-alert-success-text\":\"$state-success-text\",\"bs4-alert-success-border\":\"$state-success-border\",\"bs4-alert-info-bg\":\"$state-info-bg\",\"bs4-alert-info-text\":\"$state-info-text\",\"bs4-alert-info-border\":\"$state-info-border\",\"bs4-alert-warning-bg\":\"$state-warning-bg\",\"bs4-alert-warning-text\":\"$state-warning-text\",\"bs4-alert-warning-border\":\"$state-warning-border\",\"bs4-alert-danger-bg\":\"$state-danger-bg\",\"bs4-alert-danger-text\":\"$state-danger-text\",\"bs4-alert-danger-border\":\"$state-danger-border\",\"bs4-progress-height\":\"1rem\",\"bs4-progress-font-size\":\".75rem\",\"bs4-progress-bg\":\"$gray-lighter\",\"bs4-progress-border-radius\":\"$border-radius\",\"bs4-progress-box-shadow\":\"inset 0 .1rem .1rem rgba($black,.1)\",\"bs4-progress-bar-color\":\"$white\",\"bs4-progress-bar-bg\":\"$brand-primary\",\"bs4-progress-bar-animation-timing\":\"1s linear infinite\",\"bs4-list-group-color\":\"$body-color\",\"bs4-list-group-bg\":\"$white\",\"bs4-list-group-border-color\":\"rgba($black,.125)\",\"bs4-list-group-border-width\":\"$border-width\",\"bs4-list-group-border-radius\":\"$border-radius\",\"bs4-list-group-item-padding-x\":\"1.25rem\",\"bs4-list-group-item-padding-y\":\".75rem\",\"bs4-list-group-hover-bg\":\"$gray-lightest\",\"bs4-list-group-active-color\":\"$component-active-color\",\"bs4-list-group-active-bg\":\"$component-active-bg\",\"bs4-list-group-active-border\":\"$list-group-active-bg\",\"bs4-list-group-active-text-color\":\"lighten($list-group-active-bg, 50%)\",\"bs4-list-group-disabled-color\":\"$gray-light\",\"bs4-list-group-disabled-bg\":\"$list-group-bg\",\"bs4-list-group-disabled-text-color\":\"$list-group-disabled-color\",\"bs4-list-group-link-color\":\"$gray\",\"bs4-list-group-link-heading-color\":\"$gray-dark\",\"bs4-list-group-link-hover-color\":\"$list-group-link-color\",\"bs4-list-group-link-active-color\":\"$list-group-color\",\"bs4-list-group-link-active-bg\":\"$gray-lighter\",\"bs4-thumbnail-padding\":\".25rem\",\"bs4-thumbnail-bg\":\"$body-bg\",\"bs4-thumbnail-border-width\":\"$border-width\",\"bs4-thumbnail-border-color\":\"#ddd\",\"bs4-thumbnail-border-radius\":\"$border-radius\",\"bs4-thumbnail-box-shadow\":\"0 1px 2px rgba($black,.075)\",\"bs4-thumbnail-transition\":\"all .2s ease-in-out\",\"bs4-figure-caption-font-size\":\"90%\",\"bs4-figure-caption-color\":\"$gray-light\",\"bs4-breadcrumb-padding-y\":\".75rem\",\"bs4-breadcrumb-padding-x\":\"1rem\",\"bs4-breadcrumb-item-padding\":\".5rem\",\"bs4-breadcrumb-bg\":\"$gray-lighter\",\"bs4-breadcrumb-divider-color\":\"$gray-light\",\"bs4-breadcrumb-active-color\":\"$gray-light\",\"bs4-breadcrumb-divider\":\"\\\"\\/\\\"\",\"bs4-media-margin-top\":\"15px\",\"bs4-media-heading-margin-bottom\":\"5px\",\"bs4-media-alignment-padding-x\":\"10px\",\"bs4-carousel-control-color\":\"$white\",\"bs4-carousel-control-width\":\"15%\",\"bs4-carousel-control-opacity\":\".5\",\"bs4-carousel-indicator-width\":\"30px\",\"bs4-carousel-indicator-height\":\"3px\",\"bs4-carousel-indicator-spacer\":\"3px\",\"bs4-carousel-indicator-active-bg\":\"$white\",\"bs4-carousel-caption-width\":\"70%\",\"bs4-carousel-caption-color\":\"$white\",\"bs4-carousel-control-icon-width\":\"20px\",\"bs4-carousel-transition\":\"transform .6s ease-in-out\",\"bs4-close-font-size\":\"$font-size-base * 1.5\",\"bs4-close-font-weight\":\"$font-weight-bold\",\"bs4-close-color\":\"$black\",\"bs4-close-text-shadow\":\"0 1px 0 $white\",\"bs4-code-font-size\":\"90%\",\"bs4-code-padding-x\":\".4rem\",\"bs4-code-padding-y\":\".2rem\",\"bs4-code-color\":\"#bd4147\",\"bs4-code-bg\":\"$gray-lightest\",\"bs4-kbd-color\":\"$white\",\"bs4-kbd-bg\":\"$gray-dark\",\"bs4-pre-bg\":\"$gray-lightest\",\"bs4-pre-color\":\"$gray-dark\",\"bs4-pre-border-color\":\"#ccc\",\"bs4-pre-scrollable-max-height\":\"340px\",\"contact_succeess_text\":\"Sent message successfully\",\"contact_regard\":\"New request from {{name}}: {{regard}}\",\"mail_template\":\"viola::contact-notification\"}', '2019-09-19 20:43:36', '2019-09-19 21:25:37'),
(2, 'thebakerdev-waard', '{\"website_name\":\"\",\"website_author\":\"ROI CONSULTORIA\",\"website_url\":\"http:\\/\\/localhost\\/october\\/install-master\\/\",\"description\":\"Instituto de Oncologia de Mogi das Cruzes\",\"keywords\":\"october,octobercms,themes,templates,free octobercms themes\",\"hero_description\":\"Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus.\",\"hero_carousel\":\"1\",\"hero_carousel_controls\":\"1\",\"hero_carousel_indicators\":\"1\",\"hero_carousel_slide_1\":\"slide_1.jpg\",\"hero_carousel_slide_2\":\"slide_2.jpg\",\"hero_carousel_slide_3\":\"slide_3.jpg\",\"facebook_link\":\"https:\\/\\/www.facebook.com\\/\",\"twitter_link\":\"https:\\/\\/twitter.com\\/\",\"instagram_link\":\"https:\\/\\/www.instagram.com\\/\",\"pinterest_link\":\"https:\\/\\/www.pinterest.com\\/\",\"about_heading\":\"Sobre N\\u00f3s\",\"about_description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod consequuntur amet eius, reprehenderit est consequatur tenetur ullam impedit recusandae cum ut voluptates similique non laborum nulla nam aperiam odit.\",\"card_text_1\":\"O Instituto\",\"card_text_2\":\"Miss\\u00e3o e Valores\",\"card_text_3\":\"Comit\\u00ea Cient\\u00edfico\",\"card_text_4\":\"A Equipe\",\"card_icon_1\":\"fa fa-university\",\"card_icon_2\":\"fa fa-handshake-o\",\"card_icon_3\":\"fa fa-user-md\",\"card_icon_4\":\"fa fa-users\",\"team_heading\":\"A Equipe\",\"facility_heading\":\"O Que Fazemos\",\"facility_description\":\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quam ipsum quas distinctio aut optio fuga veniam sit omnis quidem natus inventore aperiam\",\"services_heading\":\"O que Fazemos\",\"service_1_heading\":\"Nossas Causas\",\"service_2_heading\":\"Advocacy\",\"service_3_heading\":\"Educa\\u00e7\\u00e3o e Sa\\u00fade\",\"service_1_items\":\"Donec sollicitudin, Nulla porttitor accumsanmolestie\",\"service_2_items\":\"Donec sollicitudin, Nulla porttitor accumsanmolestie, Donec sollicitudin\",\"service_3_items\":\"Donec sollicitudin, Nulla porttitor accumsanmolestie, Donec sollicitudin\",\"footer_copyright\":\"Instituto de Oncologia  - 2019@Todos os direitos reservados\",\"color_primary\":\"#133d94\",\"color_primary_dark\":\"#0f0c7d\",\"color_secondary\":\"#fd9644\",\"color_secondary_dark\":\"#fa8231\",\"color_text\":\"#636e72\",\"color_text_light\":\"#ffffff\",\"color_text_dark\":\"#2d3436\",\"section_about\":\"1\",\"section_team\":\"1\",\"section_facility\":\"1\",\"section_services\":\"1\",\"hero_image\":\"\",\"facility_image\":\"\"}', '2019-09-21 13:10:07', '2019-09-23 18:54:51');

CREATE TABLE `cms_theme_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_template` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `old_content` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `cms_theme_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` int(10) UNSIGNED NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `deferred_bindings` (
  `id` int(10) UNSIGNED NOT NULL,
  `master_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `master_field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slave_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slave_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_bind` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci,
  `failed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `flosch_slideshow_slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slideshow_id` int(10) UNSIGNED DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0',
  `published_at` datetime DEFAULT NULL,
  `unpublished_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `flosch_slideshow_slides` (`id`, `name`, `description`, `link`, `sort_order`, `created_at`, `updated_at`, `slideshow_id`, `is_published`, `published_at`, `unpublished_at`) VALUES
(1, '0', 'Slide N°0', 'http://example.com/', 1, '2019-09-19 20:42:32', '2019-09-19 20:42:32', 1, 0, NULL, NULL),
(2, '1', 'Slide N°1', 'http://example.com/', 2, '2019-09-19 20:42:32', '2019-09-19 20:42:32', 1, 0, NULL, NULL),
(3, '2', 'Slide N°2', 'http://example.com/', 3, '2019-09-19 20:42:32', '2019-09-19 20:42:32', 1, 0, NULL, NULL);

CREATE TABLE `flosch_slideshow_slideshows` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `flosch_slideshow_slideshows` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Example', '2019-09-19 20:42:32', '2019-09-19 20:42:32');

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_10_01_000001_Db_Deferred_Bindings', 1),
(2, '2013_10_01_000002_Db_System_Files', 1),
(3, '2013_10_01_000003_Db_System_Plugin_Versions', 1),
(4, '2013_10_01_000004_Db_System_Plugin_History', 1),
(5, '2013_10_01_000005_Db_System_Settings', 1),
(6, '2013_10_01_000006_Db_System_Parameters', 1),
(7, '2013_10_01_000007_Db_System_Add_Disabled_Flag', 1),
(8, '2013_10_01_000008_Db_System_Mail_Templates', 1),
(9, '2013_10_01_000009_Db_System_Mail_Layouts', 1),
(10, '2014_10_01_000010_Db_Jobs', 1),
(11, '2014_10_01_000011_Db_System_Event_Logs', 1),
(12, '2014_10_01_000012_Db_System_Request_Logs', 1),
(13, '2014_10_01_000013_Db_System_Sessions', 1),
(14, '2015_10_01_000014_Db_System_Mail_Layout_Rename', 1),
(15, '2015_10_01_000015_Db_System_Add_Frozen_Flag', 1),
(16, '2015_10_01_000016_Db_Cache', 1),
(17, '2015_10_01_000017_Db_System_Revisions', 1),
(18, '2015_10_01_000018_Db_FailedJobs', 1),
(19, '2016_10_01_000019_Db_System_Plugin_History_Detail_Text', 1),
(20, '2016_10_01_000020_Db_System_Timestamp_Fix', 1),
(21, '2017_08_04_121309_Db_Deferred_Bindings_Add_Index_Session', 1),
(22, '2017_10_01_000021_Db_System_Sessions_Update', 1),
(23, '2017_10_01_000022_Db_Jobs_FailedJobs_Update', 1),
(24, '2017_10_01_000023_Db_System_Mail_Partials', 1),
(25, '2017_10_23_000024_Db_System_Mail_Layouts_Add_Options_Field', 1),
(26, '2013_10_01_000001_Db_Backend_Users', 2),
(27, '2013_10_01_000002_Db_Backend_User_Groups', 2),
(28, '2013_10_01_000003_Db_Backend_Users_Groups', 2),
(29, '2013_10_01_000004_Db_Backend_User_Throttle', 2),
(30, '2014_01_04_000005_Db_Backend_User_Preferences', 2),
(31, '2014_10_01_000006_Db_Backend_Access_Log', 2),
(32, '2014_10_01_000007_Db_Backend_Add_Description_Field', 2),
(33, '2015_10_01_000008_Db_Backend_Add_Superuser_Flag', 2),
(34, '2016_10_01_000009_Db_Backend_Timestamp_Fix', 2),
(35, '2017_10_01_000010_Db_Backend_User_Roles', 2),
(36, '2018_12_16_000011_Db_Backend_Add_Deleted_At', 2),
(37, '2014_10_01_000001_Db_Cms_Theme_Data', 3),
(38, '2016_10_01_000002_Db_Cms_Timestamp_Fix', 3),
(39, '2017_10_01_000003_Db_Cms_Theme_Logs', 3),
(40, '2018_11_01_000001_Db_Cms_Theme_Templates', 3);

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci,
  `last_activity` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `system_event_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `details` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `system_event_logs` (`id`, `level`, `message`, `details`, `created_at`, `updated_at`) VALUES
(1, 'error', 'ErrorException: file_put_contents(): Only 0 of 16 bytes written, possibly out of free disk space in /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php:122\nStack trace:\n#0 [internal function]: Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, \'file_put_conten...\', \'/var/www/html/o...\', 122, Array)\n#1 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(122): file_put_contents(\'/var/www/html/o...\', \'1569157378a:0:{...\', 2)\n#2 /var/www/html/october/install-master/vendor/october/rain/src/Filesystem/Filesystem.php(217): Illuminate\\Filesystem\\Filesystem->put(\'/var/www/html/o...\', \'1569157378a:0:{...\', true)\n#3 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cache/FileStore.php(65): October\\Rain\\Filesystem\\Filesystem->put(\'/var/www/html/o...\', \'1569157378a:0:{...\', true)\n#4 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cache/Repository.php(191): Illuminate\\Cache\\FileStore->put(\'system::setting...\', Array, 1440)\n#5 /var/www/html/october/install-master/vendor/october/rain/src/Halcyon/MemoryRepository.php(61): Illuminate\\Cache\\Repository->put(\'system::setting...\', Array, 1440)\n#6 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cache/Repository.php(323): October\\Rain\\Halcyon\\MemoryRepository->put(\'system::setting...\', Array, 1440)\n#7 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cache/CacheManager.php(304): Illuminate\\Cache\\Repository->remember(\'system::setting...\', 1440, Object(Closure))\n#8 /var/www/html/october/install-master/vendor/october/rain/src/Database/QueryBuilder.php(158): Illuminate\\Cache\\CacheManager->__call(\'remember\', Array)\n#9 /var/www/html/october/install-master/vendor/october/rain/src/Database/QueryBuilder.php(121): October\\Rain\\Database\\QueryBuilder->getCached(Array)\n#10 /var/www/html/october/install-master/vendor/october/rain/src/Database/QueryBuilder.php(92): October\\Rain\\Database\\QueryBuilder->getDuplicateCached(Array)\n#11 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php(481): October\\Rain\\Database\\QueryBuilder->get(Array)\n#12 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php(465): Illuminate\\Database\\Eloquent\\Builder->getModels(Array)\n#13 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Database/Concerns/BuildsQueries.php(77): Illuminate\\Database\\Eloquent\\Builder->get(Array)\n#14 /var/www/html/october/install-master/modules/system/behaviors/SettingsModel.php(114): Illuminate\\Database\\Eloquent\\Builder->first()\n#15 /var/www/html/october/install-master/modules/system/behaviors/SettingsModel.php(76): System\\Behaviors\\SettingsModel->getSettingsRecord()\n#16 /var/www/html/october/install-master/modules/system/behaviors/SettingsModel.php(135): System\\Behaviors\\SettingsModel->instance()\n#17 [internal function]: System\\Behaviors\\SettingsModel->get(\'log_events\')\n#18 /var/www/html/october/install-master/vendor/october/rain/src/Extension/ExtendableTrait.php(409): call_user_func_array(Array, Array)\n#19 /var/www/html/october/install-master/vendor/october/rain/src/Database/Model.php(635): October\\Rain\\Database\\Model->extendableCall(\'get\', Array)\n#20 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php(1489): October\\Rain\\Database\\Model->__call(\'get\', Array)\n#21 /var/www/html/october/install-master/modules/system/models/EventLog.php(37): Illuminate\\Database\\Eloquent\\Model::__callStatic(\'get\', Array)\n#22 /var/www/html/october/install-master/modules/system/ServiceProvider.php(275): System\\Models\\EventLog::useLogging()\n#23 [internal function]: System\\ServiceProvider->System\\{closure}(Object(Illuminate\\Log\\Events\\MessageLogged))\n#24 /var/www/html/october/install-master/vendor/october/rain/src/Events/Dispatcher.php(233): call_user_func_array(Object(Closure), Array)\n#25 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Log/Writer.php(295): October\\Rain\\Events\\Dispatcher->dispatch(\'Illuminate\\\\Log\\\\...\')\n#26 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Log/Writer.php(201): Illuminate\\Log\\Writer->fireLogEvent(\'error\', Object(ErrorException), Array)\n#27 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Log/Writer.php(114): Illuminate\\Log\\Writer->writeLog(\'error\', Object(ErrorException), Array)\n#28 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(221): Illuminate\\Log\\Writer->error(Object(ErrorException))\n#29 /var/www/html/october/install-master/vendor/october/rain/src/Foundation/Exception/Handler.php(50): Illuminate\\Support\\Facades\\Facade::__callStatic(\'error\', Array)\n#30 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(81): October\\Rain\\Foundation\\Exception\\Handler->report(Object(ErrorException))\n#31 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(32): Illuminate\\Routing\\Pipeline->handleException(Object(Illuminate\\Http\\Request), Object(ErrorException))\n#32 /var/www/html/october/install-master/modules/backend/classes/BackendController.php(68): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#33 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(131): Backend\\Classes\\BackendController->Backend\\Classes\\{closure}(Object(Illuminate\\Http\\Request), Object(Closure))\n#34 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#35 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#36 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#37 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#38 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#39 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#40 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#41 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#42 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#43 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#44 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#45 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#46 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#47 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#48 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#49 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#50 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#51 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#52 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#53 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#54 /var/www/html/october/install-master/vendor/october/rain/src/Router/CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#55 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#56 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#57 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#58 /var/www/html/october/install-master/vendor/october/rain/src/Foundation/Http/Middleware/CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#59 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#60 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#61 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#62 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#63 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#64 /var/www/html/october/install-master/index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#65 {main}', NULL, '2019-09-21 13:02:58', '2019-09-21 13:02:58'),
(2, 'error', 'ErrorException: file_put_contents(): Only 0 of 205 bytes written, possibly out of free disk space in /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php:122\nStack trace:\n#0 [internal function]: Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, \'file_put_conten...\', \'/var/www/html/o...\', 122, Array)\n#1 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(122): file_put_contents(\'/var/www/html/o...\', \'a:3:{s:6:\"_toke...\', 2)\n#2 /var/www/html/october/install-master/vendor/october/rain/src/Filesystem/Filesystem.php(217): Illuminate\\Filesystem\\Filesystem->put(\'/var/www/html/o...\', \'a:3:{s:6:\"_toke...\', true)\n#3 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Session/FileSessionHandler.php(83): October\\Rain\\Filesystem\\Filesystem->put(\'/var/www/html/o...\', \'a:3:{s:6:\"_toke...\', true)\n#4 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Session/Store.php(128): Illuminate\\Session\\FileSessionHandler->write(\'ZO8dLI5ZEaNCfSb...\', \'a:3:{s:6:\"_toke...\')\n#5 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(87): Illuminate\\Session\\Store->save()\n#6 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(218): Illuminate\\Session\\Middleware\\StartSession->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))\n#7 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(189): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))\n#8 /var/www/html/october/install-master/index.php(48): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))\n#9 {main}', NULL, '2019-09-21 13:02:58', '2019-09-21 13:02:58'),
(3, 'error', 'ErrorException: file_put_contents(): Only 0 of 16 bytes written, possibly out of free disk space in /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php:122\nStack trace:\n#0 [internal function]: Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, \'file_put_conten...\', \'/var/www/html/o...\', 122, Array)\n#1 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(122): file_put_contents(\'/var/www/html/o...\', \'1569157404a:0:{...\', 2)\n#2 /var/www/html/october/install-master/vendor/october/rain/src/Filesystem/Filesystem.php(217): Illuminate\\Filesystem\\Filesystem->put(\'/var/www/html/o...\', \'1569157404a:0:{...\', true)\n#3 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cache/FileStore.php(65): October\\Rain\\Filesystem\\Filesystem->put(\'/var/www/html/o...\', \'1569157404a:0:{...\', true)\n#4 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cache/Repository.php(191): Illuminate\\Cache\\FileStore->put(\'system::setting...\', Array, 1440)\n#5 /var/www/html/october/install-master/vendor/october/rain/src/Halcyon/MemoryRepository.php(61): Illuminate\\Cache\\Repository->put(\'system::setting...\', Array, 1440)\n#6 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cache/Repository.php(323): October\\Rain\\Halcyon\\MemoryRepository->put(\'system::setting...\', Array, 1440)\n#7 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cache/CacheManager.php(304): Illuminate\\Cache\\Repository->remember(\'system::setting...\', 1440, Object(Closure))\n#8 /var/www/html/october/install-master/vendor/october/rain/src/Database/QueryBuilder.php(158): Illuminate\\Cache\\CacheManager->__call(\'remember\', Array)\n#9 /var/www/html/october/install-master/vendor/october/rain/src/Database/QueryBuilder.php(121): October\\Rain\\Database\\QueryBuilder->getCached(Array)\n#10 /var/www/html/october/install-master/vendor/october/rain/src/Database/QueryBuilder.php(92): October\\Rain\\Database\\QueryBuilder->getDuplicateCached(Array)\n#11 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php(481): October\\Rain\\Database\\QueryBuilder->get(Array)\n#12 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php(465): Illuminate\\Database\\Eloquent\\Builder->getModels(Array)\n#13 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Database/Concerns/BuildsQueries.php(77): Illuminate\\Database\\Eloquent\\Builder->get(Array)\n#14 /var/www/html/october/install-master/modules/system/behaviors/SettingsModel.php(114): Illuminate\\Database\\Eloquent\\Builder->first()\n#15 /var/www/html/october/install-master/modules/system/behaviors/SettingsModel.php(76): System\\Behaviors\\SettingsModel->getSettingsRecord()\n#16 /var/www/html/october/install-master/modules/system/behaviors/SettingsModel.php(135): System\\Behaviors\\SettingsModel->instance()\n#17 [internal function]: System\\Behaviors\\SettingsModel->get(\'log_events\')\n#18 /var/www/html/october/install-master/vendor/october/rain/src/Extension/ExtendableTrait.php(409): call_user_func_array(Array, Array)\n#19 /var/www/html/october/install-master/vendor/october/rain/src/Database/Model.php(635): October\\Rain\\Database\\Model->extendableCall(\'get\', Array)\n#20 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php(1489): October\\Rain\\Database\\Model->__call(\'get\', Array)\n#21 /var/www/html/october/install-master/modules/system/models/EventLog.php(37): Illuminate\\Database\\Eloquent\\Model::__callStatic(\'get\', Array)\n#22 /var/www/html/october/install-master/modules/system/ServiceProvider.php(275): System\\Models\\EventLog::useLogging()\n#23 [internal function]: System\\ServiceProvider->System\\{closure}(Object(Illuminate\\Log\\Events\\MessageLogged))\n#24 /var/www/html/october/install-master/vendor/october/rain/src/Events/Dispatcher.php(233): call_user_func_array(Object(Closure), Array)\n#25 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Log/Writer.php(295): October\\Rain\\Events\\Dispatcher->dispatch(\'Illuminate\\\\Log\\\\...\')\n#26 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Log/Writer.php(201): Illuminate\\Log\\Writer->fireLogEvent(\'error\', Object(ErrorException), Array)\n#27 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Log/Writer.php(114): Illuminate\\Log\\Writer->writeLog(\'error\', Object(ErrorException), Array)\n#28 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(221): Illuminate\\Log\\Writer->error(Object(ErrorException))\n#29 /var/www/html/october/install-master/vendor/october/rain/src/Foundation/Exception/Handler.php(50): Illuminate\\Support\\Facades\\Facade::__callStatic(\'error\', Array)\n#30 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(81): October\\Rain\\Foundation\\Exception\\Handler->report(Object(ErrorException))\n#31 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(32): Illuminate\\Routing\\Pipeline->handleException(Object(Illuminate\\Http\\Request), Object(ErrorException))\n#32 /var/www/html/october/install-master/modules/backend/classes/BackendController.php(68): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#33 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(131): Backend\\Classes\\BackendController->Backend\\Classes\\{closure}(Object(Illuminate\\Http\\Request), Object(Closure))\n#34 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#35 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#36 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#37 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#38 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#39 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#40 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#41 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#42 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#43 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#44 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#45 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#46 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#47 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#48 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#49 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#50 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#51 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#52 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#53 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#54 /var/www/html/october/install-master/vendor/october/rain/src/Router/CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#55 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#56 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#57 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#58 /var/www/html/october/install-master/vendor/october/rain/src/Foundation/Http/Middleware/CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#59 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#60 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#61 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#62 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#63 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#64 /var/www/html/october/install-master/index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#65 {main}', NULL, '2019-09-21 13:03:24', '2019-09-21 13:03:24'),
(4, 'error', 'ErrorException: file_put_contents(): Only 0 of 205 bytes written, possibly out of free disk space in /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php:122\nStack trace:\n#0 [internal function]: Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, \'file_put_conten...\', \'/var/www/html/o...\', 122, Array)\n#1 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php(122): file_put_contents(\'/var/www/html/o...\', \'a:3:{s:6:\"_toke...\', 2)\n#2 /var/www/html/october/install-master/vendor/october/rain/src/Filesystem/Filesystem.php(217): Illuminate\\Filesystem\\Filesystem->put(\'/var/www/html/o...\', \'a:3:{s:6:\"_toke...\', true)\n#3 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Session/FileSessionHandler.php(83): October\\Rain\\Filesystem\\Filesystem->put(\'/var/www/html/o...\', \'a:3:{s:6:\"_toke...\', true)\n#4 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Session/Store.php(128): Illuminate\\Session\\FileSessionHandler->write(\'ZO8dLI5ZEaNCfSb...\', \'a:3:{s:6:\"_toke...\')\n#5 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(87): Illuminate\\Session\\Store->save()\n#6 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(218): Illuminate\\Session\\Middleware\\StartSession->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))\n#7 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(189): Illuminate\\Foundation\\Http\\Kernel->terminateMiddleware(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))\n#8 /var/www/html/october/install-master/index.php(48): Illuminate\\Foundation\\Http\\Kernel->terminate(Object(Illuminate\\Http\\Request), Object(Illuminate\\Http\\Response))\n#9 {main}', NULL, '2019-09-21 13:03:24', '2019-09-21 13:03:24'),
(5, 'error', 'Twig\\Error\\SyntaxError: Unexpected character \"\'\" in \"/var/www/html/october/install-master/themes/thebakerdev-waard/partials/services.htm\" at line 68. in /var/www/html/october/install-master/vendor/twig/twig/src/Lexer.php:365\nStack trace:\n#0 /var/www/html/october/install-master/vendor/twig/twig/src/Lexer.php(281): Twig\\Lexer->lexExpression()\n#1 /var/www/html/october/install-master/vendor/twig/twig/src/Lexer.php(182): Twig\\Lexer->lexBlock()\n#2 /var/www/html/october/install-master/vendor/twig/twig/src/Environment.php(542): Twig\\Lexer->tokenize(Object(Twig\\Source))\n#3 /var/www/html/october/install-master/vendor/twig/twig/src/Environment.php(595): Twig\\Environment->tokenize(Object(Twig\\Source))\n#4 /var/www/html/october/install-master/vendor/twig/twig/src/Environment.php(408): Twig\\Environment->compileSource(Object(Twig\\Source))\n#5 /var/www/html/october/install-master/vendor/twig/twig/src/Environment.php(381): Twig\\Environment->loadClass(\'__TwigTemplate_...\', \'/var/www/html/o...\', NULL)\n#6 /var/www/html/october/install-master/modules/cms/classes/Controller.php(1087): Twig\\Environment->loadTemplate(\'/var/www/html/o...\')\n#7 /var/www/html/october/install-master/modules/cms/twig/Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'services\', Array, true)\n#8 /var/www/html/october/install-master/storage/cms/twig/a1/a1b59ba222650201352af9a529edcded9e0aa2a0b01a7dd72a01bf7882585649.php(73): Cms\\Twig\\Extension->partialFunction(\'services\', Array, true)\n#9 /var/www/html/october/install-master/vendor/twig/twig/src/Template.php(407): __TwigTemplate_ecaeb2a1e510e001f6401e71195c1e49ca0670cd39e1687ccb65f0d460ab7c5a->doDisplay(Array, Array)\n#10 /var/www/html/october/install-master/vendor/twig/twig/src/Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#11 /var/www/html/october/install-master/vendor/twig/twig/src/Template.php(392): Twig\\Template->display(Array)\n#12 /var/www/html/october/install-master/modules/cms/classes/Controller.php(434): Twig\\Template->render(Array)\n#13 /var/www/html/october/install-master/modules/cms/classes/Controller.php(224): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#14 /var/www/html/october/install-master/modules/cms/classes/CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#15 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#16 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Controller.php(54): call_user_func_array(Array, Array)\n#17 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#18 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#19 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Route.php(169): Illuminate\\Routing\\Route->runController()\n#20 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(658): Illuminate\\Routing\\Route->run()\n#21 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#23 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#24 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#25 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#26 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#27 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#28 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#29 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#30 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#31 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#32 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#33 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#34 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#35 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#36 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#37 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#38 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#39 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#40 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#41 /var/www/html/october/install-master/vendor/october/rain/src/Router/CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#42 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#43 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#44 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#45 /var/www/html/october/install-master/vendor/october/rain/src/Foundation/Http/Middleware/CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#46 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#47 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#48 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#49 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#50 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#51 /var/www/html/october/install-master/index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#52 {main}', NULL, '2019-09-23 19:02:30', '2019-09-23 19:02:30'),
(6, 'error', 'Twig\\Error\\SyntaxError: Unexpected character \"\'\" in \"/var/www/html/october/install-master/themes/thebakerdev-waard/partials/services.htm\" at line 67. in /var/www/html/october/install-master/vendor/twig/twig/src/Lexer.php:365\nStack trace:\n#0 /var/www/html/october/install-master/vendor/twig/twig/src/Lexer.php(281): Twig\\Lexer->lexExpression()\n#1 /var/www/html/october/install-master/vendor/twig/twig/src/Lexer.php(182): Twig\\Lexer->lexBlock()\n#2 /var/www/html/october/install-master/vendor/twig/twig/src/Environment.php(542): Twig\\Lexer->tokenize(Object(Twig\\Source))\n#3 /var/www/html/october/install-master/vendor/twig/twig/src/Environment.php(595): Twig\\Environment->tokenize(Object(Twig\\Source))\n#4 /var/www/html/october/install-master/vendor/twig/twig/src/Environment.php(408): Twig\\Environment->compileSource(Object(Twig\\Source))\n#5 /var/www/html/october/install-master/vendor/twig/twig/src/Environment.php(381): Twig\\Environment->loadClass(\'__TwigTemplate_...\', \'/var/www/html/o...\', NULL)\n#6 /var/www/html/october/install-master/modules/cms/classes/Controller.php(1087): Twig\\Environment->loadTemplate(\'/var/www/html/o...\')\n#7 /var/www/html/october/install-master/modules/cms/twig/Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'services\', Array, true)\n#8 /var/www/html/october/install-master/storage/cms/twig/a1/a1b59ba222650201352af9a529edcded9e0aa2a0b01a7dd72a01bf7882585649.php(73): Cms\\Twig\\Extension->partialFunction(\'services\', Array, true)\n#9 /var/www/html/october/install-master/vendor/twig/twig/src/Template.php(407): __TwigTemplate_ecaeb2a1e510e001f6401e71195c1e49ca0670cd39e1687ccb65f0d460ab7c5a->doDisplay(Array, Array)\n#10 /var/www/html/october/install-master/vendor/twig/twig/src/Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#11 /var/www/html/october/install-master/vendor/twig/twig/src/Template.php(392): Twig\\Template->display(Array)\n#12 /var/www/html/october/install-master/modules/cms/classes/Controller.php(434): Twig\\Template->render(Array)\n#13 /var/www/html/october/install-master/modules/cms/classes/Controller.php(224): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#14 /var/www/html/october/install-master/modules/cms/classes/CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#15 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#16 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Controller.php(54): call_user_func_array(Array, Array)\n#17 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#18 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#19 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Route.php(169): Illuminate\\Routing\\Route->runController()\n#20 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(658): Illuminate\\Routing\\Route->run()\n#21 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#23 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#24 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#25 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#26 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#27 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#28 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#29 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#30 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#31 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#32 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#33 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#34 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#35 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#36 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#37 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#38 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#39 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#40 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#41 /var/www/html/october/install-master/vendor/october/rain/src/Router/CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#42 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#43 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#44 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#45 /var/www/html/october/install-master/vendor/october/rain/src/Foundation/Http/Middleware/CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#46 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#47 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#48 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#49 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#50 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#51 /var/www/html/october/install-master/index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#52 {main}', NULL, '2019-09-23 19:11:22', '2019-09-23 19:11:22');
INSERT INTO `system_event_logs` (`id`, `level`, `message`, `details`, `created_at`, `updated_at`) VALUES
(7, 'error', 'Twig\\Error\\SyntaxError: Unexpected \"}\" in \"/var/www/html/october/install-master/themes/thebakerdev-waard/partials/about.htm\" at line 36. in /var/www/html/october/install-master/vendor/twig/twig/src/Lexer.php:340\nStack trace:\n#0 /var/www/html/october/install-master/vendor/twig/twig/src/Lexer.php(292): Twig\\Lexer->lexExpression()\n#1 /var/www/html/october/install-master/vendor/twig/twig/src/Lexer.php(186): Twig\\Lexer->lexVar()\n#2 /var/www/html/october/install-master/vendor/twig/twig/src/Environment.php(542): Twig\\Lexer->tokenize(Object(Twig\\Source))\n#3 /var/www/html/october/install-master/vendor/twig/twig/src/Environment.php(595): Twig\\Environment->tokenize(Object(Twig\\Source))\n#4 /var/www/html/october/install-master/vendor/twig/twig/src/Environment.php(408): Twig\\Environment->compileSource(Object(Twig\\Source))\n#5 /var/www/html/october/install-master/vendor/twig/twig/src/Environment.php(381): Twig\\Environment->loadClass(\'__TwigTemplate_...\', \'/var/www/html/o...\', NULL)\n#6 /var/www/html/october/install-master/modules/cms/classes/Controller.php(1087): Twig\\Environment->loadTemplate(\'/var/www/html/o...\')\n#7 /var/www/html/october/install-master/modules/cms/twig/Extension.php(102): Cms\\Classes\\Controller->renderPartial(\'about\', Array, true)\n#8 /var/www/html/october/install-master/storage/cms/twig/a1/a1b59ba222650201352af9a529edcded9e0aa2a0b01a7dd72a01bf7882585649.php(62): Cms\\Twig\\Extension->partialFunction(\'about\', Array, true)\n#9 /var/www/html/october/install-master/vendor/twig/twig/src/Template.php(407): __TwigTemplate_ecaeb2a1e510e001f6401e71195c1e49ca0670cd39e1687ccb65f0d460ab7c5a->doDisplay(Array, Array)\n#10 /var/www/html/october/install-master/vendor/twig/twig/src/Template.php(380): Twig\\Template->displayWithErrorHandling(Array, Array)\n#11 /var/www/html/october/install-master/vendor/twig/twig/src/Template.php(392): Twig\\Template->display(Array)\n#12 /var/www/html/october/install-master/modules/cms/classes/Controller.php(434): Twig\\Template->render(Array)\n#13 /var/www/html/october/install-master/modules/cms/classes/Controller.php(224): Cms\\Classes\\Controller->runPage(Object(Cms\\Classes\\Page))\n#14 /var/www/html/october/install-master/modules/cms/classes/CmsController.php(50): Cms\\Classes\\Controller->run(\'/\')\n#15 [internal function]: Cms\\Classes\\CmsController->run(\'/\')\n#16 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Controller.php(54): call_user_func_array(Array, Array)\n#17 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction(\'run\', Array)\n#18 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Route.php(212): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(Cms\\Classes\\CmsController), \'run\')\n#19 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Route.php(169): Illuminate\\Routing\\Route->runController()\n#20 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(658): Illuminate\\Routing\\Route->run()\n#21 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(30): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#22 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(41): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#23 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#24 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#25 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/View/Middleware/ShareErrorsFromSession.php(49): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#26 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#27 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#28 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Session/Middleware/StartSession.php(63): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#29 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#30 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#31 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/AddQueuedCookiesToResponse.php(37): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#32 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#33 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#34 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Cookie/Middleware/EncryptCookies.php(66): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#35 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#36 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#37 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#38 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(660): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#39 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(635): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#40 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Router.php(601): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#41 /var/www/html/october/install-master/vendor/october/rain/src/Router/CoreRouter.php(20): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))\n#42 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(176): October\\Rain\\Router\\CoreRouter->dispatch(Object(Illuminate\\Http\\Request))\n#43 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(30): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#44 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/CheckForMaintenanceMode.php(46): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#45 /var/www/html/october/install-master/vendor/october/rain/src/Foundation/Http/Middleware/CheckForMaintenanceMode.php(24): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#46 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(149): October\\Rain\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode->handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#47 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php(53): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#48 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(102): Illuminate\\Routing\\Pipeline->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#49 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(151): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#50 /var/www/html/october/install-master/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(116): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#51 /var/www/html/october/install-master/index.php(43): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))\n#52 {main}', NULL, '2019-09-23 20:07:03', '2019-09-23 20:07:03');

CREATE TABLE `system_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `disk_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `content_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `system_mail_layouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_html` text COLLATE utf8mb4_unicode_ci,
  `content_text` text COLLATE utf8mb4_unicode_ci,
  `content_css` text COLLATE utf8mb4_unicode_ci,
  `is_locked` tinyint(1) NOT NULL DEFAULT '0',
  `options` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `system_mail_layouts` (`id`, `name`, `code`, `content_html`, `content_text`, `content_css`, `is_locked`, `options`, `created_at`, `updated_at`) VALUES
(1, 'Default layout', 'default', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n</head>\n<body>\n    <style type=\"text/css\" media=\"screen\">\n        {{ brandCss|raw }}\n        {{ css|raw }}\n    </style>\n\n    <table class=\"wrapper layout-default\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n\n        <!-- Header -->\n        {% partial \'header\' body %}\n            {{ subject|raw }}\n        {% endpartial %}\n\n        <tr>\n            <td align=\"center\">\n                <table class=\"content\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                    <!-- Email Body -->\n                    <tr>\n                        <td class=\"body\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                            <table class=\"inner-body\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\">\n                                <!-- Body content -->\n                                <tr>\n                                    <td class=\"content-cell\">\n                                        {{ content|raw }}\n                                    </td>\n                                </tr>\n                            </table>\n                        </td>\n                    </tr>\n                </table>\n            </td>\n        </tr>\n\n        <!-- Footer -->\n        {% partial \'footer\' body %}\n            &copy; {{ \"now\"|date(\"Y\") }} {{ appName }}. All rights reserved.\n        {% endpartial %}\n\n    </table>\n\n</body>\n</html>', '{{ content|raw }}', '@media only screen and (max-width: 600px) {\n    .inner-body {\n        width: 100% !important;\n    }\n\n    .footer {\n        width: 100% !important;\n    }\n}\n\n@media only screen and (max-width: 500px) {\n    .button {\n        width: 100% !important;\n    }\n}', 1, NULL, '2019-09-19 20:42:32', '2019-09-19 20:42:32'),
(2, 'System layout', 'system', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n</head>\n<body>\n    <style type=\"text/css\" media=\"screen\">\n        {{ brandCss|raw }}\n        {{ css|raw }}\n    </style>\n\n    <table class=\"wrapper layout-system\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n        <tr>\n            <td align=\"center\">\n                <table class=\"content\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                    <!-- Email Body -->\n                    <tr>\n                        <td class=\"body\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                            <table class=\"inner-body\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\">\n                                <!-- Body content -->\n                                <tr>\n                                    <td class=\"content-cell\">\n                                        {{ content|raw }}\n\n                                        <!-- Subcopy -->\n                                        {% partial \'subcopy\' body %}\n                                            **This is an automatic message. Please do not reply to it.**\n                                        {% endpartial %}\n                                    </td>\n                                </tr>\n                            </table>\n                        </td>\n                    </tr>\n                </table>\n            </td>\n        </tr>\n    </table>\n\n</body>\n</html>', '{{ content|raw }}\n\n\n---\nThis is an automatic message. Please do not reply to it.', '@media only screen and (max-width: 600px) {\n    .inner-body {\n        width: 100% !important;\n    }\n\n    .footer {\n        width: 100% !important;\n    }\n}\n\n@media only screen and (max-width: 500px) {\n    .button {\n        width: 100% !important;\n    }\n}', 1, NULL, '2019-09-19 20:42:32', '2019-09-19 20:42:32');

CREATE TABLE `system_mail_partials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_html` text COLLATE utf8mb4_unicode_ci,
  `content_text` text COLLATE utf8mb4_unicode_ci,
  `is_custom` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `system_mail_partials` (`id`, `name`, `code`, `content_html`, `content_text`, `is_custom`, `created_at`, `updated_at`) VALUES
(1, 'Header', 'header', '<tr>\n    <td class=\"header\">\n        {% if url %}\n            <a href=\"{{ url }}\">\n                {{ body }}\n            </a>\n        {% else %}\n            <span>\n                {{ body }}\n            </span>\n        {% endif %}\n    </td>\n</tr>', '*** {{ body|trim }} <{{ url }}>', 0, '2019-09-19 21:23:44', '2019-09-19 21:23:44'),
(2, 'Footer', 'footer', '<tr>\n    <td>\n        <table class=\"footer\" align=\"center\" width=\"570\" cellpadding=\"0\" cellspacing=\"0\">\n            <tr>\n                <td class=\"content-cell\" align=\"center\">\n                    {{ body|md_safe }}\n                </td>\n            </tr>\n        </table>\n    </td>\n</tr>', '-------------------\n{{ body|trim }}', 0, '2019-09-19 21:23:44', '2019-09-19 21:23:44'),
(3, 'Button', 'button', '<table class=\"action\" align=\"center\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n    <tr>\n        <td align=\"center\">\n            <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                <tr>\n                    <td align=\"center\">\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                            <tr>\n                                <td>\n                                    <a href=\"{{ url }}\" class=\"button button-{{ type ?: \'primary\' }}\" target=\"_blank\">\n                                        {{ body }}\n                                    </a>\n                                </td>\n                            </tr>\n                        </table>\n                    </td>\n                </tr>\n            </table>\n        </td>\n    </tr>\n</table>', '{{ body|trim }} <{{ url }}>', 0, '2019-09-19 21:23:44', '2019-09-19 21:23:44'),
(4, 'Panel', 'panel', '<table class=\"panel\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n    <tr>\n        <td class=\"panel-content\">\n            <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n                <tr>\n                    <td class=\"panel-item\">\n                        {{ body|md_safe }}\n                    </td>\n                </tr>\n            </table>\n        </td>\n    </tr>\n</table>', '{{ body|trim }}', 0, '2019-09-19 21:23:44', '2019-09-19 21:23:44'),
(5, 'Table', 'table', '<div class=\"table\">\n    {{ body|md_safe }}\n</div>', '{{ body|trim }}', 0, '2019-09-19 21:23:44', '2019-09-19 21:23:44'),
(6, 'Subcopy', 'subcopy', '<table class=\"subcopy\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n    <tr>\n        <td>\n            {{ body|md_safe }}\n        </td>\n    </tr>\n</table>', '-----\n{{ body|trim }}', 0, '2019-09-19 21:23:44', '2019-09-19 21:23:44'),
(7, 'Promotion', 'promotion', '<table class=\"promotion\" align=\"center\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n    <tr>\n        <td align=\"center\">\n            {{ body|md_safe }}\n        </td>\n    </tr>\n</table>', '{{ body|trim }}', 0, '2019-09-19 21:23:44', '2019-09-19 21:23:44');

CREATE TABLE `system_mail_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content_html` text COLLATE utf8mb4_unicode_ci,
  `content_text` text COLLATE utf8mb4_unicode_ci,
  `layout_id` int(11) DEFAULT NULL,
  `is_custom` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `system_mail_templates` (`id`, `code`, `subject`, `description`, `content_html`, `content_text`, `layout_id`, `is_custom`, `created_at`, `updated_at`) VALUES
(1, 'backend::mail.invite', NULL, 'Invite new admin to the site', NULL, NULL, 2, 0, '2019-09-19 21:23:44', '2019-09-19 21:23:44'),
(2, 'backend::mail.restore', NULL, 'Reset an admin password', NULL, NULL, 2, 0, '2019-09-19 21:23:44', '2019-09-19 21:23:44');

CREATE TABLE `system_parameters` (
  `id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `system_parameters` (`id`, `namespace`, `group`, `item`, `value`) VALUES
(1, 'system', 'update', 'count', '0'),
(2, 'system', 'core', 'hash', '\"7ecf00bd75e60458191bfcdc43dc14e5\"'),
(3, 'system', 'core', 'build', '\"458\"'),
(4, 'system', 'update', 'retry', '1569608706'),
(5, 'system', 'theme', 'history', '{\"Thebakerdev.Waard\":\"thebakerdev-waard\"}'),
(6, 'cms', 'theme', 'active', '\"thebakerdev-waard\"');

CREATE TABLE `system_plugin_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `system_plugin_history` (`id`, `code`, `type`, `version`, `detail`, `created_at`) VALUES
(1, 'October.Demo', 'comment', '1.0.1', 'First version of Demo', '2019-09-19 20:42:32'),
(2, 'RainLab.Pages', 'comment', '1.0.1', 'Implemented the static pages management and the Static Page component.', '2019-09-19 20:42:32'),
(3, 'RainLab.Pages', 'comment', '1.0.2', 'Fixed the page preview URL.', '2019-09-19 20:42:32'),
(4, 'RainLab.Pages', 'comment', '1.0.3', 'Implemented menus.', '2019-09-19 20:42:32'),
(5, 'RainLab.Pages', 'comment', '1.0.4', 'Implemented the content block management and placeholder support.', '2019-09-19 20:42:32'),
(6, 'RainLab.Pages', 'comment', '1.0.5', 'Added support for the Sitemap plugin.', '2019-09-19 20:42:32'),
(7, 'RainLab.Pages', 'comment', '1.0.6', 'Minor updates to the internal API.', '2019-09-19 20:42:32'),
(8, 'RainLab.Pages', 'comment', '1.0.7', 'Added the Snippets feature.', '2019-09-19 20:42:32'),
(9, 'RainLab.Pages', 'comment', '1.0.8', 'Minor improvements to the code.', '2019-09-19 20:42:32'),
(10, 'RainLab.Pages', 'comment', '1.0.9', 'Fixes issue where Snippet tab is missing from the Partials form.', '2019-09-19 20:42:32'),
(11, 'RainLab.Pages', 'comment', '1.0.10', 'Add translations for various locales.', '2019-09-19 20:42:32'),
(12, 'RainLab.Pages', 'comment', '1.0.11', 'Fixes issue where placeholders tabs were missing from Page form.', '2019-09-19 20:42:32'),
(13, 'RainLab.Pages', 'comment', '1.0.12', 'Implement Media Manager support.', '2019-09-19 20:42:32'),
(14, 'RainLab.Pages', 'script', '1.1.0', 'snippets_rename_viewbag_properties.php', '2019-09-19 20:42:32'),
(15, 'RainLab.Pages', 'comment', '1.1.0', 'Adds meta title and description to pages. Adds |staticPage filter.', '2019-09-19 20:42:32'),
(16, 'RainLab.Pages', 'comment', '1.1.1', 'Add support for Syntax Fields.', '2019-09-19 20:42:32'),
(17, 'RainLab.Pages', 'comment', '1.1.2', 'Static Breadcrumbs component now respects the hide from navigation setting.', '2019-09-19 20:42:32'),
(18, 'RainLab.Pages', 'comment', '1.1.3', 'Minor back-end styling fix.', '2019-09-19 20:42:32'),
(19, 'RainLab.Pages', 'comment', '1.1.4', 'Minor fix to the StaticPage component API.', '2019-09-19 20:42:32'),
(20, 'RainLab.Pages', 'comment', '1.1.5', 'Fixes bug when using syntax fields.', '2019-09-19 20:42:32'),
(21, 'RainLab.Pages', 'comment', '1.1.6', 'Minor styling fix to the back-end UI.', '2019-09-19 20:42:32'),
(22, 'RainLab.Pages', 'comment', '1.1.7', 'Improved menu item form to include CSS class, open in a new window and hidden flag.', '2019-09-19 20:42:32'),
(23, 'RainLab.Pages', 'comment', '1.1.8', 'Improved the output of snippet partials when saved.', '2019-09-19 20:42:32'),
(24, 'RainLab.Pages', 'comment', '1.1.9', 'Minor update to snippet inspector internal API.', '2019-09-19 20:42:32'),
(25, 'RainLab.Pages', 'comment', '1.1.10', 'Fixes a bug where selecting a layout causes permanent unsaved changes.', '2019-09-19 20:42:32'),
(26, 'RainLab.Pages', 'comment', '1.1.11', 'Add support for repeater syntax field.', '2019-09-19 20:42:32'),
(27, 'RainLab.Pages', 'comment', '1.2.0', 'Added support for translations, UI updates.', '2019-09-19 20:42:32'),
(28, 'RainLab.Pages', 'comment', '1.2.1', 'Use nice titles when listing the content files.', '2019-09-19 20:42:32'),
(29, 'RainLab.Pages', 'comment', '1.2.2', 'Minor styling update.', '2019-09-19 20:42:32'),
(30, 'RainLab.Pages', 'comment', '1.2.3', 'Snippets can now be moved by dragging them.', '2019-09-19 20:42:32'),
(31, 'RainLab.Pages', 'comment', '1.2.4', 'Fixes a bug where the cursor is misplaced when editing text files.', '2019-09-19 20:42:32'),
(32, 'RainLab.Pages', 'comment', '1.2.5', 'Fixes a bug where the parent page is lost upon changing a page layout.', '2019-09-19 20:42:32'),
(33, 'RainLab.Pages', 'comment', '1.2.6', 'Shared view variables are now passed to static pages.', '2019-09-19 20:42:32'),
(34, 'RainLab.Pages', 'comment', '1.2.7', 'Fixes issue with duplicating properties when adding multiple snippets on the same page.', '2019-09-19 20:42:32'),
(35, 'RainLab.Pages', 'comment', '1.2.8', 'Fixes a bug where creating a content block without extension doesn\'t save the contents to file.', '2019-09-19 20:42:32'),
(36, 'RainLab.Pages', 'comment', '1.2.9', 'Add conditional support for translating page URLs.', '2019-09-19 20:42:32'),
(37, 'RainLab.Pages', 'comment', '1.2.10', 'Streamline generation of URLs to use the new Cms::url helper.', '2019-09-19 20:42:32'),
(38, 'RainLab.Pages', 'comment', '1.2.11', 'Implements repeater usage with translate plugin.', '2019-09-19 20:42:32'),
(39, 'RainLab.Pages', 'comment', '1.2.12', 'Fixes minor issue when using snippets and switching the application locale.', '2019-09-19 20:42:32'),
(40, 'RainLab.Pages', 'comment', '1.2.13', 'Fixes bug when AJAX is used on a page that does not yet exist.', '2019-09-19 20:42:32'),
(41, 'RainLab.Pages', 'comment', '1.2.14', 'Add theme logging support for changes made to menus.', '2019-09-19 20:42:32'),
(42, 'RainLab.Pages', 'comment', '1.2.15', 'Back-end navigation sort order updated.', '2019-09-19 20:42:32'),
(43, 'RainLab.Pages', 'comment', '1.2.16', 'Fixes a bug when saving a template that has been modified outside of the CMS (mtime mismatch).', '2019-09-19 20:42:32'),
(44, 'RainLab.Pages', 'comment', '1.2.17', 'Changes locations of custom fields to secondary tabs instead of the primary Settings area. New menu search ability on adding menu items', '2019-09-19 20:42:32'),
(45, 'RainLab.Pages', 'comment', '1.2.18', 'Fixes cache-invalidation issues when RainLab.Translate is not installed. Added Greek & Simplified Chinese translations. Removed deprecated calls. Allowed saving HTML in snippet properties. Added support for the MediaFinder in menu items.', '2019-09-19 20:42:32'),
(46, 'RainLab.Pages', 'comment', '1.2.19', 'Catch exception with corrupted menu file.', '2019-09-19 20:42:32'),
(47, 'RainLab.Pages', 'comment', '1.2.20', 'StaticMenu component now exposes menuName property; added pages.menu.referencesGenerated event.', '2019-09-19 20:42:32'),
(48, 'RainLab.Pages', 'comment', '1.2.21', 'Fixes a bug where last Static Menu item cannot be deleted. Improved Persian, Slovak and Turkish translations.', '2019-09-19 20:42:32'),
(49, 'RainLab.Pages', 'comment', '1.3.0', 'Added support for using Database-driven Themes when enabled in the CMS configuration.', '2019-09-19 20:42:32'),
(50, 'Flosch.Slideshow', 'script', '1.0.1', 'create_slideshows_table.php', '2019-09-19 20:42:32'),
(51, 'Flosch.Slideshow', 'script', '1.0.1', 'create_slides_table.php', '2019-09-19 20:42:32'),
(52, 'Flosch.Slideshow', 'script', '1.0.1', 'seeder.php', '2019-09-19 20:42:32'),
(53, 'Flosch.Slideshow', 'comment', '1.0.1', 'First version of Slideshow', '2019-09-19 20:42:32'),
(54, 'Flosch.Slideshow', 'script', '1.0.2', 'table_update_flosch_slideshow_slides.php', '2019-09-19 20:42:32'),
(55, 'Flosch.Slideshow', 'comment', '1.0.2', 'Added is_published state and publication dates', '2019-09-19 20:42:32'),
(56, 'Flosch.Slideshow', 'comment', '1.0.3', 'Update documentation for Twitter Bootstrap sources', '2019-09-19 20:42:32'),
(57, 'Flosch.Slideshow', 'comment', '1.0.4', 'Update slides published query-scope (correct dates comparison)', '2019-09-19 20:42:32'),
(58, 'Flosch.Slideshow', 'comment', '1.0.5', 'Fix permission settings', '2019-09-19 20:42:32'),
(59, 'Flosch.Slideshow', 'comment', '1.0.6', 'Add persian translation (thanks to @cracki)', '2019-09-19 20:42:32'),
(60, 'Flosch.Slideshow', 'comment', '1.0.6', 'Add french translation', '2019-09-19 20:42:32'),
(61, 'Flosch.Slideshow', 'comment', '1.0.7', 'Add german translation (thanks to @danielbruni)', '2019-09-19 20:42:32'),
(62, 'Flosch.Slideshow', 'comment', '1.0.8', 'Correct columns definition (thanks to @Jeime)', '2019-09-19 20:42:32');

CREATE TABLE `system_plugin_versions` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `is_disabled` tinyint(1) NOT NULL DEFAULT '0',
  `is_frozen` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `system_plugin_versions` (`id`, `code`, `version`, `created_at`, `is_disabled`, `is_frozen`) VALUES
(1, 'October.Demo', '1.0.1', '2019-09-19 20:42:32', 0, 0),
(2, 'RainLab.Pages', '1.3.0', '2019-09-19 20:42:32', 0, 0),
(3, 'Flosch.Slideshow', '1.0.8', '2019-09-19 20:42:32', 0, 0);

CREATE TABLE `system_request_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `status_code` int(11) DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referer` text COLLATE utf8mb4_unicode_ci,
  `count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `system_revisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cast` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_value` text COLLATE utf8mb4_unicode_ci,
  `new_value` text COLLATE utf8mb4_unicode_ci,
  `revisionable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisionable_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `system_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE `backend_access_log`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `backend_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_unique` (`login`),
  ADD UNIQUE KEY `email_unique` (`email`),
  ADD KEY `act_code_index` (`activation_code`),
  ADD KEY `reset_code_index` (`reset_password_code`),
  ADD KEY `admin_role_index` (`role_id`);

ALTER TABLE `backend_users_groups`
  ADD PRIMARY KEY (`user_id`,`user_group_id`);

ALTER TABLE `backend_user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_unique` (`name`),
  ADD KEY `code_index` (`code`);

ALTER TABLE `backend_user_preferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_item_index` (`user_id`,`namespace`,`group`,`item`);

ALTER TABLE `backend_user_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_unique` (`name`),
  ADD KEY `role_code_index` (`code`);

ALTER TABLE `backend_user_throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `backend_user_throttle_user_id_index` (`user_id`),
  ADD KEY `backend_user_throttle_ip_address_index` (`ip_address`);

ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

ALTER TABLE `cms_theme_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_theme_data_theme_index` (`theme`);

ALTER TABLE `cms_theme_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_theme_logs_type_index` (`type`),
  ADD KEY `cms_theme_logs_theme_index` (`theme`),
  ADD KEY `cms_theme_logs_user_id_index` (`user_id`);

ALTER TABLE `cms_theme_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cms_theme_templates_source_index` (`source`),
  ADD KEY `cms_theme_templates_path_index` (`path`);

ALTER TABLE `deferred_bindings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deferred_bindings_master_type_index` (`master_type`),
  ADD KEY `deferred_bindings_master_field_index` (`master_field`),
  ADD KEY `deferred_bindings_slave_type_index` (`slave_type`),
  ADD KEY `deferred_bindings_slave_id_index` (`slave_id`),
  ADD KEY `deferred_bindings_session_key_index` (`session_key`);

ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `flosch_slideshow_slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flosch_slideshow_slides_slideshow_id_foreign` (`slideshow_id`);

ALTER TABLE `flosch_slideshow_slideshows`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`);

ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

ALTER TABLE `system_event_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_event_logs_level_index` (`level`);

ALTER TABLE `system_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_files_field_index` (`field`),
  ADD KEY `system_files_attachment_id_index` (`attachment_id`),
  ADD KEY `system_files_attachment_type_index` (`attachment_type`);

ALTER TABLE `system_mail_layouts`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `system_mail_partials`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `system_mail_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_mail_templates_layout_id_index` (`layout_id`);

ALTER TABLE `system_parameters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_index` (`namespace`,`group`,`item`);

ALTER TABLE `system_plugin_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_plugin_history_code_index` (`code`),
  ADD KEY `system_plugin_history_type_index` (`type`);

ALTER TABLE `system_plugin_versions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_plugin_versions_code_index` (`code`);

ALTER TABLE `system_request_logs`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `system_revisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_revisions_revisionable_id_revisionable_type_index` (`revisionable_id`,`revisionable_type`),
  ADD KEY `system_revisions_user_id_index` (`user_id`),
  ADD KEY `system_revisions_field_index` (`field`);

ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `system_settings_item_index` (`item`);


ALTER TABLE `backend_access_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `backend_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `backend_user_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `backend_user_preferences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `backend_user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `backend_user_throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `cms_theme_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `cms_theme_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `cms_theme_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `deferred_bindings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `flosch_slideshow_slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `flosch_slideshow_slideshows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
ALTER TABLE `system_event_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
ALTER TABLE `system_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `system_mail_layouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `system_mail_partials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
ALTER TABLE `system_mail_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `system_parameters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
ALTER TABLE `system_plugin_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
ALTER TABLE `system_plugin_versions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `system_request_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `system_revisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `system_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `flosch_slideshow_slides`
  ADD CONSTRAINT `flosch_slideshow_slides_slideshow_id_foreign` FOREIGN KEY (`slideshow_id`) REFERENCES `flosch_slideshow_slideshows` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
