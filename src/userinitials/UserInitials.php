<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 14.08.2015
 * Time: 13:24
 */

namespace userinitials;

/**
 * Class UserInitials
 * @package userinitials
 */
class UserInitials {

  private $options;

  /**
   * Constructor with optional $options
   * @param array $options
   *   An arary with options
   * @see UserInitials::getDefaultOptions() for available options
   */
  public function __construct($options = array()) {

    $default_options = UserInitials::getDefaultOptions();
    $this->options = array_merge($default_options, $options);

  }

  /**
   * Get an option
   * @param $name
   *   The name/key of the option
   * @return mixed
   * @see UserInitials::getDefaultOptions() for available options
   */
  public function getOption($name) {
    return $this->options[$name];
  }

  /**
   * Set an option
   * @param $name
   *   The name/key of the option
   * @param $val
   *   The value of the option
   * @see UserInitials::getDefaultOptions() for available options
   */
  public function setOption($name, $val) {
    $this->options[$name] = $val;
  }

  /**
   * A list of default options
   * @return array
   */
  public static function getDefaultOptions() {
    $options = array();
    $options['backgroundcolor'] = '#d6dadc';
    $options['color'] = '#000000';
    $options['width'] = '85';
    $options['height'] = '85';
    $options['borderradius'] = '20';
    return $options;

  }

  /**
   * Create the image as an svg file
   * @param $text
   *   The initials string
   * @param $filename
   *   The filename, relative or absolute path)
   */
  public function createSVGFile($text, $filename) {
    $svg = $this->createSVG($text);
    file_put_contents($filename, $svg);
  }

  /**
   * Generate svg xml for the text $text
   * @param $text
   *  The initials string
   * @return string
   *   The svg xml
   */
  public function createSVG($text) {

    return <<<EOF
      <svg width="{$this->getOption('width')}" height="{$this->getOption('height')}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
       <g>
        <rect id="svg_2" height="80" width="80" rx="{$this->getOption('width')}" ry="{$this->getOption('width')}" stroke-linecap="null" stroke-linejoin="null" stroke-width="0" stroke="#000000" fill="{$this->getOption('backgroundcolor')}"/>
        <text x="40" y="44" font-size="38" font-family="verdana,sans-serif" text-anchor="middle" alignment-baseline="middle" stroke="#000000" fill="{$this->getOption('color')}">$text</text>
       </g>
      </svg>
EOF;
  }
}