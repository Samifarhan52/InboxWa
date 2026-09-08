<?php
/**
 * InboxWa contact numbers & support channels (single source of truth)
 */
require_once __DIR__ . '/cms.php';

return [
  'support_whatsapp' => cms_setting('support_whatsapp', '918050854445'),
  'phone_number' => cms_setting('phone_number', '+91 80508 54445'),
  'data_marketplace_whatsapp' => cms_setting('support_whatsapp', '918050854445'),
  'sales_email' => cms_setting('sales_email', 'mail@inboxwa.com'),
  'support_email' => cms_setting('support_email', 'support@inboxwa.com'),
];
