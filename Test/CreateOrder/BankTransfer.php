<?php
namespace Dfe\KassaCompleet\Test\CreateOrder;
# 2017-03-07
final class BankTransfer extends \Df\GingerPaymentsBase\Test\CreateOrder {
	/**
	 * 2017-03-07
	 * @override
	 * @see \Df\GingerPaymentsBase\Test\CreateOrder::method()
	 * @used-by \Df\GingerPaymentsBase\Test\CreateOrder::t01_success()
	 */
	protected function method():string {return 'bank-transfer';}
}