XECryption-Decrypt
==================

A simple PHP function that decrypts the very weak XECryption algorithm.

**Caveat:** This decryption algorithm works by assuming that the [space] character is the most common one in the message, so it may not be as effective for strings that are only a couple words long.


## Requirements

- webserver
- PHP 5.4.36+ (may work on lower versions, but untested)

## Usage

Include the `xecryption-decrypt.php` file wherever you want to use it. The function `decrypt($encoded_message);` will then return a string containing HTML ASCII characters, ready to be printed out on the page.

## Demo

You can play with the [live demo](http://nimirea.com/scripts/xecryption-decrypt/demo) now, or navigate to the /demo folder on your own webserver. Decipher the following encrypted string, or generate your own encrypted messages using [this page](https://www.hackthissite.org/missions/realistic/6/encryption.php).

```
.698.693.646.689.671.697.681.700.669.708.684.671.656.714.690.673.713.682.679.653.653.686.705.664.692.693.679.660.705.702.639.651.695.675.664.713.709.714.634.674.707.673.684.699.669.656.674.730.685.691.682.692.715.656.676.680.700.655.653.677.680.697.687.676.670.724.659.707.703.691.666.628.681.660.728.675.686.696.676.696.682.672.646.667.694.655.704.661.663.730.704.665.693.686.673.705.675.635.676.643.635.707.673.680.670.686.712.672.672.700.691.632.646.707.689.659.721.707.709.642.659.667.736.677.678.699.711.663.694.670.663.652.660.702.695.695.705.650.710.663.680.637.670.678.665.672.714.704.702.668.686.640.659.686.663.701.709.691.661.683.678.700.671.652.676
```
