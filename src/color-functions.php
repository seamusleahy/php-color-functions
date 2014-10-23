<?php
/**
 * Color Functions
 *
 * Various functions for manipulating colors
 */
namespace ColorFunctions;

/**
 * Parse a string color into the components
 *
 * @param sring $string - the string value
 *
 * @return array('r'=> , 'g' =>, 'b' => )
 */
function color_parse_string( $string ) {
	$string = str_replace( ' ', '', strtolower( $string ) );

	// Named colors
	$named_colors = array(
		'aliceblue' => '#f0f8ff',
		'antiquewhite' => '#faebd7',
		'aqua' => '#00ffff',
		'aquamarine' => '#7fffd4',
		'azure' => '#f0ffff',
		'beige' => '#f5f5dc',
		'bisque' => '#ffe4c4',
		'black' => '#000000',
		'blanchedalmond' => '#ffebcd',
		'blue' => '#0000ff',
		'blueviolet' => '#8a2be2',
		'brown' => '#a52a2a',
		'burlywood' => '#deb887',
		'cadetblue' => '#5f9ea0',
		'chartreuse' => '#7fff00',
		'chocolate' => '#d2691e',
		'coral' => '#ff7f50',
		'cornflowerblue' => '#6495ed',
		'cornsilk' => '#fff8dc',
		'crimson' => '#dc143c',
		'cyan' => '#00ffff',
		'darkblue' => '#00008b',
		'darkcyan' => '#008b8b',
		'darkgoldenrod' => '#b8860b',
		'darkgray' => '#a9a9a9',
		'darkgrey' => '#a9a9a9',
		'darkgreen' => '#006400',
		'darkkhaki' => '#bdb76b',
		'darkmagenta' => '#8b008b',
		'darkolivegreen' => '#556b2f',
		'darkorange' => '#ff8c00',
		'darkorchid' => '#9932cc',
		'darkred' => '#8b0000',
		'darksalmon' => '#e9967a',
		'darkseagreen' => '#8fbc8f',
		'darkslateblue' => '#483d8b',
		'darkslategray' => '#2f4f4f',
		'darkslategrey' => '#2f4f4f',
		'darkturquoise' => '#00ced1',
		'darkviolet' => '#9400d3',
		'deeppink' => '#ff1493',
		'deepskyblue' => '#00bfff',
		'dimgray' => '#696969',
		'dimgrey' => '#696969',
		'dodgerblue' => '#1e90ff',
		'firebrick' => '#b22222',
		'floralwhite' => '#fffaf0',
		'forestgreen' => '#228b22',
		'fuchsia' => '#ff00ff',
		'gainsboro' => '#dcdcdc',
		'ghostwhite' => '#f8f8ff',
		'gold' => '#ffd700',
		'goldenrod' => '#daa520',
		'gray' => '#808080',
		'grey' => '#808080',
		'green' => '#008000',
		'greenyellow' => '#adff2f',
		'honeydew' => '#f0fff0',
		'hotpink' => '#ff69b4',
		'indianred' => '#cd5c5c',
		'indigo' => '#4b0082',
		'ivory' => '#fffff0',
		'khaki' => '#f0e68c',
		'lavender' => '#e6e6fa',
		'lavenderblush' => '#fff0f5',
		'lawngreen' => '#7cfc00',
		'lemonchiffon' => '#fffacd',
		'lightblue' => '#add8e6',
		'lightcoral' => '#f08080',
		'lightcyan' => '#e0ffff',
		'lightgoldenrodyellow' => '#fafad2',
		'lightgray' => '#d3d3d3',
		'lightgrey' => '#d3d3d3',
		'lightgreen' => '#90ee90',
		'lightpink' => '#ffb6c1',
		'lightsalmon' => '#ffa07a',
		'lightseagreen' => '#20b2aa',
		'lightskyblue' => '#87cefa',
		'lightslategray' => '#778899',
		'lightslategrey' => '#778899',
		'lightsteelblue' => '#b0c4de',
		'lightyellow' => '#ffffe0',
		'lime' => '#00ff00',
		'limegreen' => '#32cd32',
		'linen' => '#faf0e6',
		'magenta' => '#ff00ff',
		'maroon' => '#800000',
		'mediumaquamarine' => '#66cdaa',
		'mediumblue' => '#0000cd',
		'mediumorchid' => '#ba55d3',
		'mediumpurple' => '#9370d8',
		'mediumseagreen' => '#3cb371',
		'mediumslateblue' => '#7b68ee',
		'mediumspringgreen' => '#00fa9a',
		'mediumturquoise' => '#48d1cc',
		'mediumvioletred' => '#c71585',
		'midnightblue' => '#191970',
		'mintcream' => '#f5fffa',
		'mistyrose' => '#ffe4e1',
		'moccasin' => '#ffe4b5',
		'navajowhite' => '#ffdead',
		'navy' => '#000080',
		'oldlace' => '#fdf5e6',
		'olive' => '#808000',
		'olivedrab' => '#6b8e23',
		'orange' => '#ffa500',
		'orangered' => '#ff4500',
		'orchid' => '#da70d6',
		'palegoldenrod' => '#eee8aa',
		'palegreen' => '#98fb98',
		'paleturquoise' => '#afeeee',
		'palevioletred' => '#d87093',
		'papayawhip' => '#ffefd5',
		'peachpuff' => '#ffdab9',
		'peru' => '#cd853f',
		'pink' => '#ffc0cb',
		'plum' => '#dda0dd',
		'powderblue' => '#b0e0e6',
		'purple' => '#800080',
		'red' => '#ff0000',
		'rosybrown' => '#bc8f8f',
		'royalblue' => '#4169e1',
		'saddlebrown' => '#8b4513',
		'salmon' => '#fa8072',
		'sandybrown' => '#f4a460',
		'seagreen' => '#2e8b57',
		'seashell' => '#fff5ee',
		'sienna' => '#a0522d',
		'silver' => '#c0c0c0',
		'skyblue' => '#87ceeb',
		'slateblue' => '#6a5acd',
		'slategray' => '#708090',
		'slategrey' => '#708090',
		'snow' => '#fffafa',
		'springgreen' => '#00ff7f',
		'steelblue' => '#4682b4',
		'tan' => '#d2b48c',
		'teal' => '#008080',
		'thistle' => '#d8bfd8',
		'tomato' => '#ff6347',
		'turquoise' => '#40e0d0',
		'violet' => '#ee82ee',
		'wheat' => '#f5deb3',
		'white' => '#ffffff',
		'whitesmoke' => '#f5f5f5',
		'yellow' => '#ffff00',
		'yellowgreen' => '#9acd32',
	);
	
	if ( isset($named_colors[$string]) ) {
		$string = $named_colors[$string];
	}
	
	// Hex colors #000000
	if ( preg_match('/^#(?P<r>[0-9A-F]{2})(?P<g>[0-9A-F]{2})(?P<b>[0-9A-F]{2})$/i', $string, $matches ) ) {
		return array(
			'r' => hexdec( $matches['r'] ),
			'g' => hexdec( $matches['g'] ),
			'b' => hexdec( $matches['b'] ),
		);
	}

	// Hex color #000
	if ( preg_match('/^#(?P<r>[0-9A-F])(?P<g>[0-9A-F])(?P<b>[0-9A-F])$/i', $string, $matches ) ) {
		return array(
			'r' => hexdec( $matches['r'] . $matches['r'] ),
			'g' => hexdec( $matches['g'] . $matches['g'] ),
			'b' => hexdec( $matches['b'] . $matches['b'] ),
		);
	}

	// rgb(255,255,255)
	if ( preg_match('/^rgb(?P<is_a>a)?\((?P<r>\d+),(?P<g>\d+),(?P<b>\d+)(,(?P<a>\d(\.\d*)?))?\)$/i', $string, $matches ) ) {
		$r = array(
			'r' => intval( $matches['r'] ),
			'g' => intval( $matches['g'] ),
			'b' => intval( $matches['b'] ),
		);

		if ( $matches['is_a'] && isset($matches['a']) ) {
			$r['a'] = floatval( $matches['a'] );
		}

		return $r;
	}

	// rgb(50%,0%,100%)
	if ( preg_match('/^rgb(?P<is_a>a)?\((?P<r>\d+(\.\d*)?)%,(?P<g>\d+(\.\d*)?)%,(?P<b>\d+(\.\d*)?)%(,(?P<a>\d(\.\d*)?))?\)$/i', $string, $matches ) ) {
		$r = array(
			'r' => round( floatval( $matches['r'] ) * 2.55 ),
			'g' => round( floatval( $matches['g'] ) * 2.55 ),
			'b' => round( floatval( $matches['b'] ) * 2.55 ),
		);

		if ( $matches['is_a'] && isset($matches['a']) ) {
			$r['a'] = floatval( $matches['a'] );
		}

		return $r;
	}

	// hsl(360,0%,100%)
	if ( preg_match('/^hsl(?P<is_a>a)?\((?P<h>\d+(\.\d*)?),(?P<s>\d+(\.\d*)?)%,(?P<l>\d+(\.\d*)?)%(,(?P<a>\d(\.\d*)?))?\)$/i', $string, $matches ) ) {
		$r = array(
			'h' => floatval( $matches['h'] ),
			's' => floatval( $matches['s'] ) / 100,
			'l' => floatval( $matches['l'] ) / 100,
		);

		if ( $matches['is_a'] && isset($matches['a']) ) {
			$r['a'] = floatval( $matches['a'] );
		}

		return $r;
	}

	return array();
}

/**
 * RGB to HSL
 *
 * @param int $r
 * @param int $g
 * @param int $b
 */
function color_rgb_to_hsl( $r, $g, $b ) {

	$rP = $r / 255;
	$gP = $g / 255;
	$bP = $b / 255;

	$Cmax = max( $rP, $gP, $bP );
	$Cmin = min( $rP, $gP, $bP );
	$delta = $Cmax - $Cmin;

	// Hue calculation
	if ( $delta == 0 ) {
		$H = 0;
	} elseif ( $delta == $rP ) {
		$H = 60 * (($gP - $bP) / $delta % 6);
	} elseif ( $delta == $gP ) {
		$H = 60 * (($bP - $rP) / $delta + 2);
	} elseif ( $delta == $bP ) {
		$H = 60 * (($rP - $gP) / $delta + 4);
	}


	// Lightness calculation
	$L = ($Cmax + $Cmin) / 2;

	// Saturation calculation
	if ( $delta == 0 ) {
		$S = 0;
	} else {
		$S = $delta / ( 1 - abs(2 * $L - 1));
	}

	// Round to the 100th
	$H = round( $H, 2 );
	$S = round( $S, 2 );
	$L = round( $L, 2 );

	return array( 'r' => $r, 'g' => $g, 'b' => $b, 'h' => $H, 's' => $S, 'l' => $L );
}

/**
 * HSL to RGB
 *
 * @param float $h - Hue from 0 to 360
 * @param float $s - Saturation from 0 to 1
 * @param float $l - Lightness from 0 to 1
 */
function color_hsl_to_rgb( $h, $s, $l ) {
	$C = (1 - abs(2 * $l - 1)) * $s;
	$X = $C * (1 - abs($h/60 % 2 - 1));
	$m = $L - $C/2;

	$rP = 0;
	$gP = 0;
	$bP = 0;

	if ( $h < 60 ) {
		$rP = $C;
		$gP = $X;
	} elseif ( 60 <= $h && $h < 120 ) {
		$rP = $X;
		$gP = $C;
	} elseif ( 120 <= $h && $h < 180 ) {
		$gP = $C;
		$bP = $X;
	} elseif ( 180 <= $h && $h < 240 ) {
		$bP = $C;
		$gP = $X;
	} elseif ( 240 <= $h && $h < 300 ) {
		$bP = $C;
		$rP = $X;
	} elseif ( 300 <= $h ) {
		$rP = $C;
		$bP = $X;
	}

	$r = $rP + $m;
	$g = $gP + $m;
	$b = $bP + $m;

	return array( 'r' => $r, 'g' => $g, 'b' => $b );
}

/**
 * RGB to hex string
 *
 * @param int $r - Red from 0 to 255
 * @param int $g - Green from 0 to 255
 * @param int $b - Blue from 0 to 255
 */
function color_rgb_to_hex_string( $r, $g, $b ) {
	$r = dechex( $r );
	$g = dechex( $g );
	$b = dechex( $b );

	return sprintf( '#%02s%02s%02s', $r, $g, $b );
}

/**
 * RGB to HSV
 *
 * @param int $r - Red from 0 to 255
 * @param int $g - Green from 0 to 255
 * @param int $b - Blue from 0 to 255
 */
function color_rgb_to_hsv( $r, $g, $b ) {
	$rP = $r / 255;
	$gP = $g / 255;
	$bP = $b / 255;

	$Cmax = max( $rP, $gP, $bP );
	$Cmin = min( $rP, $gP, $bP );
	$delta = $Cmax - $Cmin;

	// Hue calculation
	if ( $delta == 0 ) {
		$H = 0;
	} else {
		if ( $Cmax == $rP ) {
			$H = 60 * (($gP - $bP)/ $delta % 6);
		} elseif ( $Cmax == $gP ) {
			$H = 60 * (($bP - $rP)/ $delta + 2);
		} elseif ( $Cmax == $bP ) {
			$H = 60 * (($rP - $gP)/ $delta +4);
		}
	}

	// Saturation calculation
	if ( $delta == 0 ) {
		$S = 0;
	} else {
		$S = $delta / $Cmax;
	}

	// Value/Brightness calculation
	$V = $Cmax;

	$H = round( $H, 2 );
	$S = round( $S, 2 );
	$V = round( $V, 2 );

	return array( 'r' => $r, 'g' => $g, 'b' => $b, 'h' => $H, 's' => $S, 'v' => $V );
}

/**
 * HSV to RGB
 *
 * @param float $h - Hue
 * @param float $s - Saturation from 0 to 1
 * @param float $v - Value (Brightness) from 0 to 1
 */
function color_hsv_to_rgb( $h, $s, $v ) {
	$C = $v * $s;
	$X = $C * (1 - abs($h/60 % 2 - 1));
	$m = $v - $C;

	$rP = 0;
	$gP = 0;
	$bP = 0;

	if ( $h < 60 ) {
		$rP = $C;
		$gP = $X;
	} elseif ( 60 <= $h && $h < 120 ) {
		$rP = $X;
		$gP = $C;
	} elseif ( 120 <= $h && $h < 180 ) {
		$gP = $C;
		$bP = $X;
	} elseif ( 180 <= $h && $h < 240 ) {
		$bP = $C;
		$gP = $X;
	} elseif ( 240 <= $h && $h < 300 ) {
		$bP = $C;
		$rP = $X;
	} elseif ( 300 <= $h ) {
		$rP = $C;
		$bP = $X;
	}

	$r = $rP + $m;
	$g = $gP + $m;
	$b = $bP + $m;

	$r = round( $r * 255 );
	$g = round( $g * 255 );
	$b = round( $b * 255 );

	return array( 'r' => $r, 'g' => $g, 'b' => $b );
}
