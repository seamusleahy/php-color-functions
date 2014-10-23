<?php
namespace ColorFunctions\test;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/color-functions.php';

use PHPUnit_Framework_TestCase;
use ColorFunctions;

/**
 * Tests the parsing of color strings into color values
 */
class ColorHsvToRgbTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test RGB to HSV
	 */
	function testRgbToHsv() {
		// black
		$this->assertEquals(
			ColorFunctions\color_hsv_to_rgb( 0, 0, 0 ),
			array('r' => 0, 'g' => 0, 'b' => 0 )
		);

		// white
		$this->assertEquals(
			ColorFunctions\color_hsv_to_rgb( 0, 0, 1 ),
			array('r' => 255, 'g' => 255, 'b' => 255 )
		);

		// maroon
		$this->assertEquals(
			ColorFunctions\color_hsv_to_rgb( 0, 1, 0.5 ),
			array('r' => 128, 'g' => 0, 'b' => 0 )
		);

		// Olive
		$this->assertEquals(
			ColorFunctions\color_hsv_to_rgb( 60, 1, 0.5 ),
			array('r' => 128, 'g' => 128, 'b' => 0 )
		);
	}
}