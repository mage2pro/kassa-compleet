<?php
// 2017-02-24
namespace Dfe\KassaCompleet;
use GingerPayments\Payment\Ginger as G;
/** @method static Settings s() */
final class Settings extends \Df\GingerPaymentsBase\Settings {
	/**
	 * 2017-02-26
	 * @override
	 * @see \Df\GingerPaymentsBase\Settings::product()
	 * @used-by \Df\GingerPaymentsBase\Settings::api()
	 * @return string
	 */
	protected function product() {return G::P_KASSA_COMPLEET;}
}