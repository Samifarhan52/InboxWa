<?php
/**
 * HelloBotz contact numbers & support channels (single source of truth)
 */
require_once __DIR__ . '/cms.php';

return [
  'support_whatsapp' => cms_setting('support_whatsapp', '918050854449'),
  'enquiry_whatsapp' => cms_setting('enquiry_whatsapp', '918050854448'),
  'support_phone'    => cms_setting('support_phone', '+918050854449'),
  'enquiry_phone'    => cms_setting('enquiry_phone', '+918050854448'),
  'phone_number'     => cms_setting('phone_number', '+918050854448'),
  'data_marketplace_whatsapp' => cms_setting('enquiry_whatsapp', '918050854448'),
  'sales_email'      => cms_setting('sales_email', 'mail@hellobotz.com'),
  'support_email'    => cms_setting('support_email', 'mail@hellobotz.com'),
  'official_email'   => 'mail@hellobotz.com',
];
