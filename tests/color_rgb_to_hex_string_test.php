<?php
namespace ColorFunctions\test;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/color-functions.php';

use PHPUnit_Framework_TestCase;
use ColorFunctions;

/**
 * Tests the parsing of color strings into color values
 */
class ColorRgbToHexStringTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test parsing '#3344ff'
	 */
	function testRgbToHexString() {
		// Black
		$this->assertEquals(
			ColorFunctions\color_rgb_to_hex_string( 0, 0, 0 ),
			'#000000'
		);

		// White
		$this->assertEquals(
			ColorFunctions\color_rgb_to_hex_string( 0, 0, 0 ),
			'#000000'
		);
		$this->assertEquals(
			ColorFunctions\color_parse_string( '#fFffFF' ),
			array('r' => 255, 'g' => 255, 'b' => 255)
		);

		// Light red
		$this->assertEquals(
			ColorFunctions\color_rgb_to_hex_string( 170, 0, 0 ),
			'#aa0000'
		);

		// Light green
		$this->assertEquals(
			ColorFunctions\color_rgb_to_hex_string( 0, 170, 0 ),
			'#00aa00'
		);

		// Light blue
		$this->assertEquals(
			ColorFunctions\color_rgb_to_hex_string( 0, 0, 170 ),
			'#0000aa'
		);
	}
}