<?php
require_once(dirname(__FILE__) . "/mollie.php");

class ControllerExtensionPaymentMollieMisterCash extends ControllerExtensionPaymentMollie
{
	const MODULE_NAME = MollieHelper::MODULE_NAME_MISTERCASH;
}
