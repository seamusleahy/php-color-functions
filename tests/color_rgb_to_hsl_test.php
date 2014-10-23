<?php
namespace ColorFunctions\test;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/color-functions.php';

use PHPUnit_Framework_TestCase;
use ColorFunctions;

/**
 * Tests the parsing of color strings into color values
 */
class ColorRgbToHslTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test RGB to HSL
	 */
	function testRgbToHsl() {
		// black
		$this->assertEquals(
			ColorFunctions\color_rgb_to_hsl( 0, 0, 0 ),
			array('r' => 0, 'g' => 0, 'b' => 0, 'h' => 0, 's' => 0, 'l' => 0 )
		);

		// white
		$this->assertEquals(
			ColorFunctions\color_rgb_to_hsl( 255, 255, 255 ),
			array('r' => 255, 'g' => 255, 'b' => 255, 'h' => 0, 's' => 0, 'l' => 1 )
		);

		// maroon
		$this->assertEquals(
			ColorFunctions\color_rgb_to_hsl( 128, 0, 0 ),
			array('r' => 128, 'g' => 0, 'b' => 0, 'h' => 0, 's' => 1, 'l' => 0.25 )
		);
	}
}