<?php
namespace Dfe\KassaCompleet\T\CreateOrder;
// 2017-03-07
final class BankTransfer extends \Df\GingerPaymentsBase\T\CreateOrder {
	/**
	 * 2017-03-07
	 * @override
	 * @see \Df\GingerPaymentsBase\T\CreateOrder::method()
	 * @used-by \Df\GingerPaymentsBase\T\CreateOrder::t01_success()
	 * @return string
	 */
	protected function method() {return 'bank-transfer';}
}