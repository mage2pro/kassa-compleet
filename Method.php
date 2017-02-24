<?php
// 2017-02-24
namespace Dfe\KassaCompleet;
final class Method extends \Df\PaypalClone\Method\Normal {
	/**
	 * 2017-02-24
	 * Первый параметр — для test, второй — для live.
	 * @override
	 * @see \Df\PaypalClone\Method\Normal::stageNames()
	 * @used-by \Df\PaypalClone\Method\Normal::url()
	 * @used-by \Df\PaypalClone\Refund::stageNames()
	 * @return string[]
	 */
	function stageNames() {return ['', ''];}

	/**
	 * 2017-02-24
	 * @override
	 * @todo
	 * @see \Df\Payment\Method::amountLimits()
	 * @used-by \Df\Payment\Method::isAvailable()
	 * @return null
	 */
	protected function amountLimits() {return null;}

	/**
	 * 2017-02-24
	 * Does Kassa Compleet use browser redirects? https://mage2.pro/t/3347
	 * @override
	 * @see \Df\PaypalClone\Method\Normal::redirectUrl()
	 * @used-by \Df\PaypalClone\Method\Normal::getConfigPaymentAction()
	 * @return string
	 */
	protected function redirectUrl() {return '';}
}