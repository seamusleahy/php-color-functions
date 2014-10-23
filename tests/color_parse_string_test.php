<?php
namespace ColorFunctions\test;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/color-functions.php';

use PHPUnit_Framework_TestCase;
use ColorFunctions;

/**
 * Tests the parsing of color strings into color values
 */
class ColorParseStringTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test parsing '#3344ff'
	 */
	function test6Hex() {
		// Black
		$this->assertEquals(
			ColorFunctions\color_parse_string( '#000000' ),
			array('r' => 0, 'g' => 0, 'b' => 0)
		);

		// White
		$this->assertEquals(
			ColorFunctions\color_parse_string( '#fFffFF' ),
			array('r' => 255, 'g' => 255, 'b' => 255)
		);

		// Light red AA = 170
		$this->assertEquals(
			ColorFunctions\color_parse_string( '#Aa0000' ),
			array('r' => 170, 'g' => 0, 'b' => 0)
		);

		// Light green AA = 170
		$this->assertEquals(
			ColorFunctions\color_parse_string( '#00Aa00' ),
			array('r' => 0, 'g' => 170, 'b' => 0)
		);

		// Light blue AA = 170
		$this->assertEquals(
			ColorFunctions\color_parse_string( '#0000Aa' ),
			array('r' => 0, 'g' => 0, 'b' => 170)
		);
	}

	/**
	 * Test parsing '#123'
	 */
	function test3Hex() {
		// Black
		$this->assertEquals(
			ColorFunctions\color_parse_string( '#000' ),
			array('r' => 0, 'g' => 0, 'b' => 0)
		);

		// White
		$this->assertEquals(
			ColorFunctions\color_parse_string( '#fFf' ),
			array('r' => 255, 'g' => 255, 'b' => 255)
		);

		// Light red AA = 170
		$this->assertEquals(
			ColorFunctions\color_parse_string( '#A00' ),
			array('r' => 170, 'g' => 0, 'b' => 0)
		);

		// Light green AA = 170
		$this->assertEquals(
			ColorFunctions\color_parse_string( '#0a0' ),
			array('r' => 0, 'g' => 170, 'b' => 0)
		);

		// Light blue AA = 170
		$this->assertEquals(
			ColorFunctions\color_parse_string( '#00a' ),
			array('r' => 0, 'g' => 0, 'b' => 170)
		);
	}

	/**
	 * Test named colors
	 */
	function testNamedColors() {
		// Black
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'black' ),
			array('r' => 0, 'g' => 0, 'b' => 0)
		);

		// White
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'White' ),
			array('r' => 255, 'g' => 255, 'b' => 255)
		);

		// RED
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'RED' ),
			array('r' => 255, 'g' => 0, 'b' => 0)
		);

		// green
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'green' ),
			array('r' => 0, 'g' => 128, 'b' => 0)
		);

		// Blue
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'bLuE' ),
			array('r' => 0, 'g' => 0, 'b' => 255)
		);
	}

	/**
	 * Test rgb(int, int, int)
	 */
	function testRgbInt() {
		// Black
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'rgb(0,0, 0)' ),
			array('r' => 0, 'g' => 0, 'b' => 0)
		);

		// White
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'rgba( 255, 255, 255, 0.5 )' ),
			array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0.5)
		);

		// RED
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'rgb(255,0 , 0 )' ),
			array('r' => 255, 'g' => 0, 'b' => 0)
		);

		// green
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'rgba(0,128,0, 1)' ),
			array('r' => 0, 'g' => 128, 'b' => 0, 'a' => 1 )
		);

		// Blue
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'rgb(0,0 , 255  )' ),
			array('r' => 0, 'g' => 0, 'b' => 255)
		);
	}

	/**
	 * Test rgb(%, %, %)
	 */
	function testRgbPercentage() {
		// Black
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'rgb(0%,0%, 0%)' ),
			array('r' => 0, 'g' => 0, 'b' => 0)
		);

		// White
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'rgba( 100%, 100%, 100%, 0 )' ),
			array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0)
		);

		// RED
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'rgb(100%,0% , 0% )' ),
			array('r' => 255, 'g' => 0, 'b' => 0)
		);

		// green
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'rgb(0%,50%,0%)' ),
			array('r' => 0, 'g' => 128, 'b' => 0)
		);

		// Blue
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'rgb(0%,0% , 100%  )' ),
			array('r' => 0, 'g' => 0, 'b' => 255)
		);
	}

	/**
	 * Test hsl(360, %, %)
	 */
	function testHsl() {
		// Black
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'hsl(0, 0%, 0%)' ),
			array('h' => 0, 's' => 0, 'l' => 0)
		);

		// White
		$this->assertEquals(
			ColorFunctions\color_parse_string( 'hsla( 0, 100%, 100%, 0 )' ),
			array('h' => 0, 's' => 1, 'l' => 1, 'a' => 0)
		);

		$this->assertEquals(
			ColorFunctions\color_parse_string( 'hsl(120,100%, 50% )' ),
			array('h' => 120, 's' => 1, 'l' => 0.5)
		);
	}
}