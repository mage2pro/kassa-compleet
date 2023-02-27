<?php
namespace Dfe\KassaCompleet\Source;
# 2017-03-01
# [Kassa Compleet] Available payment options: https://mage2.pro/t/3248
/** @method static Option s() */
final class Option extends \Dfe\GingerPaymentsBase\Source\Option {
	/**
	 * 2017-03-01
	 * @override
	 * @see \Dfe\GingerPaymentsBase\Source\Option::mapExtra()
	 * @used-by \Dfe\GingerPaymentsBase\Source\Option::map()
	 * @return array(string => string)
	 */
	protected function mapExtra():array {return ['cash-on-delivery' => 'Cash on Delivery'];}
}