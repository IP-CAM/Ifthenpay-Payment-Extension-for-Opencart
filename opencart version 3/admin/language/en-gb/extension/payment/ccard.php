<?php

// Heading
$_['heading_title'] = 'Credit Card';

// Text
$_['text_extension'] = 'Extensions';
$_['text_payment'] = 'Payment';
$_['text_success'] = 'Success: You have modified Credit Card payment module!';


$_['text_ccard'] = '<a href="https:www.ifthenpay.com" target="_blank"><img src="view/image/payment/ifthenpay/ccard.png" class="ccardLogo" alt="Credit Card Logo" title="Credit Card" style="border: 1px solid #EEEEEE; width: 133px; height: 38px;" /><br /></a>';
$_['create_account_now'] = 'Create an account now!';

//Entry
$_['entry_backoffice_key'] = 'Backoffice Key';
$_['help_backoffice_key'] = 'Backoffice key that is sent to your email after creation of contract.';
$_['help_place_holder_backoffice_key'] = 'xxxx-xxxx-xxxx-xxxx';
$_['switch_enable'] = 'Enable';
$_['switch_disable'] = 'Disable';
$_['add_new_accounts'] = 'Added a new account to your contract?';
$_['add_new_accounts_explain'] = 'To set a different account press the reset button, doing so will clear this payment method\'s current settings, and allow you to insert a new backoffice key associated with your contract.';
$_['reset_accounts'] = 'Reset Accounts';
$_['sandbox_help'] = 'Activate sandbox mode, to test the module without activating the callback.';
$_['sandbox_mode'] = 'Sandbox Mode';
$_['dontHaveAccount_ccard'] = 'Don\'t have an Credit Card account?';
$_['requestAccount_ccard'] = 'Request Credit Card account creation';
$_['activate_cancelCcardOrder'] = 'Cancel Credit Card Order';
$_['ccardOrderCancel_help'] = 'Cancel Credit Card order after payment data expire.';
$_['newUpdateAvailable'] = 'New update is available!';
$_['moduleUpToDate'] = 'Your module is up to date!';
$_['downloadUpdateModule'] = 'Download Update Module';
$_['entry_minimum_value'] = 'Order Minimum Value';
$_['help_entry_minimum_value'] = 'Only show customer this payment method if order value equal or greater than minimum value';
$_['entry_maximum_value'] = 'Order Maximum Value';
$_['help_entry_maximum_value'] = 'Only show customer this payment method if order value equal or less than maximum value';
$_['request_new_account_success'] = 'Email requesting new account send with success.';
$_['request_new_account_error'] = 'Error sending email requesting new account.';
$_['entry_payment_method_title'] = 'Payment Method Title';


$_['label_cron_url'] = 'Cron URL';
$_['btn_copy'] = 'Copy';

$_['text_cron_documentation'] = 'Cron Job\'s are scheduled tasks that are run periodically. To setup your servers to use cron job you can read the <a href="http://docs.opencart.com/extension/cron/" target="_blank" class="alert-link">opencart documentation</a> page.';

$_['head_cancel_cron'] = '(Cron Job) Cancel Credit Card Order';
$_['text_cancel_cron_desc'] = 'You can set up this cron job to change orders status to "Canceled", if order is not payed within 30 minutes after order confirmation.';
$_['text_cancel_cron_schedule'] = 'Schedule the cron job to run every 1 minute.';

$_['head_check_cron'] = '(Cron Job) Check Status of Credit Card Order';
$_['text_check_cron_desc_1'] = 'This method does not make use of the callback function to change order state, this is handled internally. To test credit card payed orders you must use a test card which you can request from Ifthenpay.';
$_['text_check_cron_desc_2'] = 'If having issues updating status of payed orders, you can set up this cron job to check the payment status of the orders instead.';
$_['text_check_cron_schedule'] = 'Schedule the cron job to run every day at 1:00 am.';


// Entry
$_['activate_callback'] = 'Activate Callback';
$_['switch_enable'] = 'Enable';
$_['switch_disable'] = 'Disable';
$_['entry_order_status_pending'] = 'Order Status Pending:';
$_['help_entry_order_status_pending'] = 'This status is assigned to the order upon it\'s creation and normaly, it is set as Pending';
$_['entry_order_status_complete'] = 'Order Status Paid:';
$_['entry_order_status_canceled'] = 'Order Status Canceled:';
$_['entry_order_status_failed'] = 'Order Status Failed:';
$_['entry_geo_zone'] = 'Geo Zone:';
$_['entry_status'] = 'Status:';
$_['entry_sort_order'] = 'Sort Order:';
$_['entry_ccard_ccardKey'] = 'Credit Card Key';
$_['choose_key'] = 'Choose a key';
$_['entry_antiPhishingKey'] = 'Anti-Phishing key';
$_['entry_urlCallback'] = 'Callback Url';
$_['callbackIsActivated'] = 'Callback is activated';
$_['callbackNotActivated'] = 'Callback not activated';
$_['sandboxActivated'] = 'Sandbox mode activated';
$_['show_paymentMethod_logo'] = 'Show Payment Method Logo on Checkout';

// Error
$_['error_permission'] = 'Warning: No permission to modify Credit Card!';
$_['error_backofficeKey_required'] = 'Backoffice key is required!';
$_['error_backofficeKey_already_reset'] = 'Backoffice key already blank!';

$_['error_backofficeKey_error'] = 'Error saving Backoffice key!';
$_['reset_account_success'] = 'Ifthenpay account reset with success!';
$_['reset_account_error'] = 'Error Reseting Ifthenpay Accounts!';
$_['error_invalid_max_number'] = 'Warning: Order Maximum Value invalid number!';
$_['error_invalid_min_number'] = 'Warning: Order Minimum Value invalid number!';
$_['error_incompatible_min_max'] = 'Warning: Order Minimum and Maximum Values are not compatible!';
$_['error_key_required'] = 'Warning: Ccard key required!';
?>
