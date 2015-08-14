<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 14.08.2015
 * Time: 13:24
 */

namespace userinitials;


class UserInitials {

  private $options;

  public function __construct($options) {

    $default_options = UserInitials::getDefaultOptions();
    $this->options = array_merge($default_options, $options);

  }

  public function getOption($name) {
    return $this->options[$name];
  }

  public static function getDefaultOptions() {
    $options = array();
    $options['backgroundcolor'] = '#d6dadc';
    $options['color'] = '#000000';
    $options['width'] = '85';
    $options['height'] = '85';
    $options['borderradius'] = '20';
    return $options;

  }

  public function createSVGFile($text, $filename) {
    $svg = $this->createSVG($text);
    file_put_contents($filename, $svg);
  }

  public function createSVG($text) {

    return <<<EOF
      <svg width="{$this->getOption('width')}" height="{$this->getOption('height')}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
       <g>
        <rect id="svg_2" height="80" width="80" rx="4" ry="4" stroke-linecap="null" stroke-linejoin="null" stroke-width="0" stroke="#000000" fill="{$this->getOption('backgroundcolor')}"/>
        <text x="40" y="44" font-size="38" font-family="verdana,sans-serif" text-anchor="middle" alignment-baseline="middle" stroke="#000000" fill="{$this->getOption('color')}">$text</text>
       </g>
      </svg>
EOF;
  }
}