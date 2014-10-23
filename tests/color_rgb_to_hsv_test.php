<?php
namespace ColorFunctions\test;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/color-functions.php';

use PHPUnit_Framework_TestCase;
use ColorFunctions;

/**
 * Tests the parsing of color strings into color values
 */
class ColorRgbToHsvTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test RGB to HSV
	 */
	function testRgbToHsv() {
		// black
		$this->assertEquals(
			ColorFunctions\color_rgb_to_hsv( 0, 0, 0 ),
			array('r' => 0, 'g' => 0, 'b' => 0, 'h' => 0, 's' => 0, 'v' => 0 )
		);

		// white
		$this->assertEquals(
			ColorFunctions\color_rgb_to_hsv( 255, 255, 255 ),
			array('r' => 255, 'g' => 255, 'b' => 255, 'h' => 0, 's' => 0, 'v' => 1.0 )
		);

		// maroon
		$this->assertEquals(
			ColorFunctions\color_rgb_to_hsv( 128, 0, 0 ),
			array('r' => 128, 'g' => 0, 'b' => 0, 'h' => 0, 's' => 1.0, 'v' => 0.5 )
		);

		// Olive
		$this->assertEquals(
			ColorFunctions\color_rgb_to_hsv( 128,128,0 ),
			array('r' => 128, 'g' => 128, 'b' => 0, 'h' => 60.0, 's' => 1.0, 'v' => 0.5 )
		);
	}
}