<?php namespace SoapBox\Csscolor\Tests;

use SoapBox\Csscolor\Csscolor;

class ColorTest extends \PHPUnit_Framework_TestCase {

	public function setUp() {
		parent::setUp();

	}
	/**
	 * A basic functional test for JSON to Array conversion
	 *
	 * @return void
	 */
	public function testBasicColor() {
		$colorHex = 'c9e3a6';

		$color = Csscolor::make($colorHex);

		$this->assertEquals($colorHex,$color->bg['0']);//$expected, $result);
	}

	public function testVariationOfColor() {
		$colorHex = 'c9e3a6';
		$colorHexVariation = '97aa7d';

		$color = Csscolor::make($colorHex);

		$this->assertEquals($colorHexVariation,$color->bg['-2']);//$expected, $result);
	}

}