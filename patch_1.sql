ALTER TABLE `cms_shop`  ADD `promotion` INT(11) NOT NULL DEFAULT '0'  AFTER `quantity`;
ALTER TABLE `cms_shop`  ADD `visible` INT(1) NOT NULL DEFAULT '1'  AFTER `promotion`;

INSERT INTO `cms_settings` (`setting`, `value`, `default_value`, `description`) VALUES ('credit_dedipass_html_data', 'a0c0a885ebb947b897be499cf2011b16', '<div data-dedipass=\"[this]\" data-dedipass-custom=\"\">', 'Dedipass HTML data-dedipass value'), ('credit_dedipass_public_key', 'a0c0a885ebb947b897be499cf2011b16', '$dedipass = file_get_contents(\'http://api.dedipass.com/v1/pay/?public_key=[this]&private_key=[not this]&code=\' . $code);\r\n', 'Dedipass public key');
INSERT INTO `cms_settings` (`setting`, `value`, `default_value`, `description`) VALUES ('credit_dedipass_private_key', '03ec01c36f74c9f3bf267e71c1dea054e73662d7', '$dedipass = file_get_contents(\'http://api.dedipass.com/v1/pay/?public_key=[not this]&private_key=[this]&code=\' . $code);\r\n', 'Dedipass private key');

INSERT INTO `cms_lang` (`string_id`, `str_key`, `text`, `language`) VALUES (NULL, 'administration_shop_promo_placeholder', '% promo', 'fr'), (NULL, 'administration_shop_promo_placeholder', '% promo', 'en');
INSERT INTO `cms_lang` (`string_id`, `str_key`, `text`, `language`) VALUES (NULL, 'administration_shop_visible_yes', 'Visible', 'fr'), (NULL, 'administration_shop_visible_yes', 'Visible', 'en');
INSERT INTO `cms_lang` (`string_id`, `str_key`, `text`, `language`) VALUES (NULL, 'administration_shop_visible_no', 'Invisible', 'fr'), (NULL, 'administration_shop_visible_no', 'Invisible', 'en');
INSERT INTO `cms_lang` (`string_id`, `str_key`, `text`, `language`) VALUES (NULL, 'administration_shop_column_promotion', 'Promotion', 'fr'), (NULL, 'administration_shop_column_promotion', 'Discount', 'en');
INSERT INTO `cms_lang` (`string_id`, `str_key`, `text`, `language`) VALUES (NULL, 'administration_shop_column_visible', 'Visible ?', 'fr'), (NULL, 'administration_shop_column_visible', 'Visible ?', 'en');
INSERT INTO `cms_lang` (`string_id`, `str_key`, `text`, `language`) VALUES (NULL, 'administration_translate_title', 'Gérer la traduction', 'fr'), (NULL, 'administration_translate_title', 'Manage traduction', 'en');
