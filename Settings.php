<?php
// 2017-02-24
namespace Dfe\KassaCompleet;
/** @method static Settings s() */
final class Settings extends \Df\GingerPaymentsBase\Settings {
	/**
	 * 2017-02-26
	 * @override
	 * @see \Df\GingerPaymentsBase\Settings::apiDomain()
	 * @used-by \Df\GingerPaymentsBase\Settings::api()
	 * @return string
	 */
	protected function apiDomain() {return 'kassacompleet.nl';}
}