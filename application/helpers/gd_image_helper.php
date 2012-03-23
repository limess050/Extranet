<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
* File: SimpleImage.php
* Author: Simon Jarvis
* Copyright: 2006 Simon Jarvis
* Date: 08/11/06
* Link: http://www.white-hat-web-design.co.uk/articles/php-image-resizing.php
* 
* This program is free software; you can redistribute it and/or 
* modify it under the terms of the GNU General Public License 
* as published by the Free Software Foundation; either version 2 
* of the License, or (at your option) any later version.
* 
* This program is distributed in the hope that it will be useful, 
* but WITHOUT ANY WARRANTY; without even the implied warranty of 
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the 
* GNU General Public License for more details: 
* http://www.gnu.org/licenses/gpl.html
*
*/
 
class gd_image{
   
   public $image;
   public $image_type;
 
   function load($filename) {
      $image_info = getimagesize($filename);
      $this->image_type = $image_info[2];
      if( $this->image_type == IMAGETYPE_JPEG ) {
         $this->image = imagecreatefromjpeg($filename);
      } elseif( $this->image_type == IMAGETYPE_GIF ) {
         $this->image = imagecreatefromgif($filename);
      } elseif( $this->image_type == IMAGETYPE_PNG ) {
			$this->image = imagecreatefrompng($filename);
		}
   }
   function save($filename, $image_type=IMAGETYPE_JPEG, $compression=75, $permissions=null) {
      if( $image_type == IMAGETYPE_JPEG ) {
         imagejpeg($this->image,$filename.'.jpg',$compression);
      } elseif( $image_type == IMAGETYPE_GIF ) {
         imagegif($this->image,$filename.'.gif');         
      } elseif( $image_type == IMAGETYPE_PNG ) {
         imagepng($this->image,$filename.'.png');
      }   
      if( $permissions != null) {
         chmod($filename,$permissions);
      }
   }
   function output($image_type=IMAGETYPE_JPEG) {
      if( $image_type == IMAGETYPE_JPEG ) {
         imagejpeg($this->image);
      } elseif( $image_type == IMAGETYPE_GIF ) {
         imagegif($this->image);         
      } elseif( $image_type == IMAGETYPE_PNG ) {
         imagepng($this->image);
      }   
   }
   function getWidth() {
      return imagesx($this->image);
   }
   function getHeight() {
      return imagesy($this->image);
   }
   function resizeToHeight($height) {
      $ratio = $height / $this->getHeight();
      $width = $this->getWidth() * $ratio;
      $this->resize($width,$height);
   }
   function resizeToWidth($width) {
      $ratio = $width / $this->getWidth();
      $height = $this->getheight() * $ratio;
      $this->resize($width,$height);
   }
   function scale($scale) {
      $width = $this->getWidth() * $scale/100;
      $height = $this->getheight() * $scale/100; 
      $this->resize($width,$height);
   }
   function resize($width,$height) {
      $new_image = imagecreatetruecolor($width, $height);
      imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
      $this->image = $new_image;   
   }

	//the variables represent the proportions in percentage to crop down to.
   function crop($wProp,$hProp){
		$width = $this->getWidth();
		$height = $this->getHeight();
		
		$newWidth = $width;
		$newHeight = $height;
		
		$x=0;
		$y=0;
		
		$wComp = ceil(($width/$wProp)*100);
		$hComp = ceil(($height/$hProp)*100);
		
		if ($hComp > $wComp){
			$newHeight = ceil(($width/$wProp) *$hProp);
			$y = ceil(($height - $newHeight)/2);
		} else {
			$newWidth = ceil(($height/$hProp) *$wProp);
			$x = ceil(($width - $newWidth)/2);
		}
		
		$new_image = imagecreatetruecolor($newWidth, $newHeight);
		imagecopyresampled($new_image, $this->image, 0, 0, $x, $y, $newWidth, $newHeight, $newWidth, $newHeight);
		$this->image = $new_image;   
   }
   
	function paste($img,$x,$y,$img_width,$img_height){
		imagecopy($this->image, $img, $x, $y, 0, 0, $img_width, $img_height);
	}
	
	function color_swap($old_color,$new_color)
	{		
		$count = count($old_color);
	
		for($a=1;$a<=$count;$a++)
		{
			$index = imagecolorexact($this->image,$old_color[$a][0],$old_color[$a][1],$old_color[$a][2] );
			imagecolorset($this->image,$index,$new_color[$a][0],$new_color[$a][1],$new_color[$a][2]);
		}
	}
	
	function flip_horizontal($filename)
	{
		$size_x = $this->getWidth();
		$size_y = $this->getHeight();
		
		$temp = imagecreatetruecolor($size_x, $size_y);
		
		//keep transparency
		imagecolortransparent($temp, imagecolorallocatealpha($temp, 0, 0, 0, 127));
		imagealphablending($temp, false);
		imagesavealpha($temp, true);
		
		$x = imagecopyresampled($temp, $this->image, 0, 0, ($size_x-1), 0, $size_x, $size_y, 0-$size_x, $size_y);
		if ($x)
		{
			imagepng($temp, $filename.'.png');
		}
		else
		{
			die("Unable to flip image");
		}
	}
}
?>