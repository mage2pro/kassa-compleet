<?php
// 2017-02-24
namespace Dfe\KassaCompleet\T;
use Dfe\KassaCompleet\Settings as S;
final class Common extends TestCase {
	/** 2017-02-24 */
	function t00() {}

	/** @test 2017-02-24 */
	function t01() {echo S::s()->privateKey();}
}