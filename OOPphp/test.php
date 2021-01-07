<?php
class Render
{
  public static function displayDimensions($size)
  {
    return $size[0] . " x " . $size[1];
  }
  public static function detailsRoom($room)
  {
    return $room->getName() . " Dimensions: " . self::displayDimensions($room->getDimensions());
  }
}
