# PHP Color Functions

Several simple functions for parsing CSS colors and converting colors formats.

## Usage

Include the file `src/color-functions.php` into your project.

### `color_parse_string`

Parse the CSS string value into an array of the values

```php
ColorFunctions\color_parse_string( '#000000' ); // array('r' => 0, 'g' => 0, 'b' => 0)
ColorFunctions\color_parse_string( '#A00' ); // array('r' => 170, 'g' => 0, 'b' => 0)
ColorFunctions\color_parse_string( 'bLuE' ); // array('r' => 0, 'g' => 0, 'b' => 255)
ColorFunctions\color_parse_string( 'rgba( 255, 255, 255, 0.5 )' ); // array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0.5)
ColorFunctions\color_parse_string( 'hsl(120,100%, 50% )' ); // array('h' => 120, 's' => 1, 'l' => 0.5)
```

### `color_rgb_to_hex_string`

Convert an RGB color into a CSS HEX string. The parameters are each ints from 0 to 255 and are red, blue, and green.


```php
ColorFunctions\color_rgb_to_hex_string( 255, 0 0 ); // '#ff0000'
```

### `color_rgb_to_hsl`

Convert an RGB to HSL color format. The parameters are each ints from 0 to 255. The return value is an array with keys for each part of HSL along with the original RGB values.

```php
// Maroon
ColorFunctions\color_rgb_to_hsl( 128, 0, 0 ); // array('r' => 128, 'g' => 0, 'b' => 0, 'h' => 0, 's' => 1, 'l' => 0.25 )
```

### `color_rgb_to_hsv`

Convert an RGB to HSV color format. The parameters are each ints from 0 to 255. The return value is an array with keys for each part of HSV along with the original RGB values.

```php
ColorFunctions\color_rgb_to_hsv( 128, 0, 0 ); // array('r' => 128, 'g' => 0, 'b' => 0, 'h' => 0, 's' => 1.0, 'v' => 0.5 )
```

### `color_hsv_to_rgb`

Convert an HSV color into an RGB color. The first parameter is hue which is a degree from 0 to 360. The next two are saturation and value (brightness) and are floats from 0 to 1.

```php
ColorFunctions\color_hsv_to_rgb( 60, 1, 0.5 ); // array('r' => 128, 'g' => 128, 'b' => 0 )
```

## License

MIT Licence, see LICENSE file