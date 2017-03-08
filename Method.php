<?php
// 2017-02-24
namespace Dfe\KassaCompleet;
final class Method extends \Df\GingerPaymentsBase\Method {
	/**
	 * 2017-02-26
	 * @override
	 * @see \Df\GingerPaymentsBase\Settings::Method()
	 * @used-by \Df\GingerPaymentsBase\Method::api()
	 * @return string
	 */
	function apiDomain() {return 'kassacompleet.nl';}

	/**
	 * 2017-02-28
	 * Kassa Compleet and Ginger Payments use different formats
	 * for the «order_lines/order_line/vat_percentage» property
	 * of a «POST /v1/orders/» request: https://mage2.pro/t/3451
	 * «Percentage of tax rate, multiplied by 100 and provided as an integer.
	 * i.e. 17.50% should be sent as 1750.
	 * "minimum": 0, "maximum": 10000».
	 * @override
	 * @see \Df\GingerPaymentsBase\Method::vatIsInteger()
	 * @used-by \Df\GingerPaymentsBase\Charge::pOrderLines_products()
	 * @used-by \Df\GingerPaymentsBase\T\CreateOrder::t01_success()
	 * @return int
	 */
	function vatIsInteger() {return true;}

	/**
	 * 2017-03-07
	 * https://mage2.pro/t/3355/2
	 * @override
	 * @see \Df\GingerPaymentsBase\Method::bankTransferId()
	 * @used-by \Df\GingerPaymentsBase\Method::optionT()
	 * @return bool
	 */
	protected function bankTransferId() {return 'bank-transfer';}
}