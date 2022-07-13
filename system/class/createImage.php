<?php
class createImage {

  private $fontPath = '/../../font/jellyfish20140617.ttf';

  function Create($text1, $text2, $text3, $background, $directpost){

    include_once './system/function/systemFunction.php';
    include_once './system/extension/kxgenEmojis.php';

    //image width and height
    $image_w = 850;
    $image_h = 315;

    //create empty image
    if($directpost==2)
    {
      $image = imagecreate($image_w, $image_h);
      $transparent = imagecolorallocate($image, 0, 0, 0);
      imagecolortransparent($image, $transparent);
      imagefilledrectangle($image, 0, 0, $image_w, $image_h, $transparent);
    }
    else
      $image = imagecreatefromjpeg('images/board/'.$background.'.jpg');

    //colors
    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);
    $dimblack = imagecolorallocate($image, 40, 40, 40);
    $dimblack2 = imagecolorallocate($image, 60, 60, 60);
    $grey = imagecolorallocate($image, 128, 128, 128);
    $red = ImageColorAllocate($image, 211,12,14);
    $yellow = ImageColorAllocate($image, 253,240,2);
    $gold = ImageColorAllocate($image, 222, 202, 135);
    $gold2 = ImageColorAllocate($image, 203, 179, 110);

    //font path
    $font  = __DIR__ . $this->fontPath;

    //string to image
    $old_text1 = $text1;
    $text1 = str2img($text1);
    $text2 = str2img($text2);
    $text3 = str2img($text3);

    //font size
    switch ($background) {

      case 1:
        if(mb_strlen($text1,"utf-8") > 7) {
          $text1 = mb_substr($text1, 0, 7, "utf-8");
          $text1_fontsize = 60;
        }
        elseif(mb_strlen($text1,"utf-8") == 7) $text1_fontsize = 60;
        elseif(mb_strlen($text1,"utf-8") == 6) $text1_fontsize = 75;
        elseif(mb_strlen($text1,"utf-8") == 5) $text1_fontsize = 85;
        elseif(mb_strlen($text1,"utf-8") <= 4) $text1_fontsize = 110;
        $text2_fontsize = 18;
        $text3_fontsize = 18;
        $padding = 0;
        $textcolor = $gold;
        $shadowcolor = $dimblack;
        $offset = -10;
        $linemax = 10;
        $strlen_max = 20;
        break;

      case 2:
        if(mb_strlen($text1,"utf-8") > 7) {
          $text1 = mb_substr($text1, 0, 7, "utf-8");
          $text1_fontsize = 50;
        }
        elseif(mb_strlen($text1,"utf-8") == 7) $text1_fontsize = 50;
        elseif(mb_strlen($text1,"utf-8") == 6) $text1_fontsize = 65;
        elseif(mb_strlen($text1,"utf-8") == 5) $text1_fontsize = 75;
        elseif(mb_strlen($text1,"utf-8") <= 4) $text1_fontsize = 100;
        $text2_fontsize = 16;
        $text3_fontsize = 16;
        $padding = 35;
        $textcolor = $gold2;
        $shadowcolor = $dimblack2;
        $offset = -8;
        $linemax = 9;
        $strlen_max = 18;
        break;

      case 3:
        if(mb_strlen($text1,"utf-8") > 6) {
          $text1 = mb_substr($text1, 0, 6, "utf-8");
          $text1_fontsize = 75;
        }
        elseif(mb_strlen($text1,"utf-8") == 6) $text1_fontsize = 75;
        elseif(mb_strlen($text1,"utf-8") == 5) $text1_fontsize = 85;
        elseif(mb_strlen($text1,"utf-8") <= 4) $text1_fontsize = 110;
        $text2_fontsize = 18;
        $text3_fontsize = 18;
        $padding = 0;
        $textcolor = $gold;
        $shadowcolor = $dimblack2;
        $offset = -10;
        $linemax = 10;
        $strlen_max = 20;
        break;

      case 4:
        if(mb_strlen($text1,"utf-8") > 7) {
          $text1 = mb_substr($text1, 0, 7, "utf-8");
          $text1_fontsize = 50;
        }
        elseif(mb_strlen($text1,"utf-8") == 7) $text1_fontsize = 50;
        elseif(mb_strlen($text1,"utf-8") == 6) $text1_fontsize = 65;
        elseif(mb_strlen($text1,"utf-8") == 5) $text1_fontsize = 75;
        elseif(mb_strlen($text1,"utf-8") <= 4) $text1_fontsize = 100;
        $text2_fontsize = 16;
        $text3_fontsize = 16;
        $padding = 35;
        $textcolor = $gold2;
        $shadowcolor = $dimblack2;
        $offset = -8;
        $linemax = 9;
        $strlen_max = 18;
        break;

      case 5:
        if(mb_strlen($text1,"utf-8") > 7) {
          $text1 = mb_substr($text1, 0, 7, "utf-8");
          $text1_fontsize = 60;
        }
        elseif(mb_strlen($text1,"utf-8") == 7) $text1_fontsize = 60;
        elseif(mb_strlen($text1,"utf-8") == 6) $text1_fontsize = 75;
        elseif(mb_strlen($text1,"utf-8") == 5) $text1_fontsize = 85;
        elseif(mb_strlen($text1,"utf-8") <= 4) $text1_fontsize = 110;
        $text2_fontsize = 18;
        $text3_fontsize = 18;
        $padding = 0;
        $textcolor = $gold;
        $shadowcolor = $dimblack;
        $offset = -10;
        $linemax = 10;
        $strlen_max = 20;
        break;

      case 6:
        if(mb_strlen($text1,"utf-8") > 7) {
          $text1 = mb_substr($text1, 0, 7, "utf-8");
          $text1_fontsize = 50;
        }
        elseif(mb_strlen($text1,"utf-8") == 7) $text1_fontsize = 50;
        elseif(mb_strlen($text1,"utf-8") == 6) $text1_fontsize = 65;
        elseif(mb_strlen($text1,"utf-8") == 5) $text1_fontsize = 75;
        elseif(mb_strlen($text1,"utf-8") <= 4) $text1_fontsize = 100;
        $text2_fontsize = 16;
        $text3_fontsize = 16;
        $padding = 35;
        $textcolor = $gold2;
        $shadowcolor = $dimblack2;
        $offset = -8;
        $linemax = 9;
        $strlen_max = 18;
        break;

      default:
        if(mb_strlen($text1,"utf-8") > 7) {
          $text1 = mb_substr($text1, 0, 7, "utf-8");
          $text1_fontsize = 60;
        }
        elseif(mb_strlen($text1,"utf-8") == 7) $text1_fontsize = 60;
        elseif(mb_strlen($text1,"utf-8") == 6) $text1_fontsize = 75;
        elseif(mb_strlen($text1,"utf-8") == 5) $text1_fontsize = 85;
        elseif(mb_strlen($text1,"utf-8") <= 4) $text1_fontsize = 110;
        $text2_fontsize = 18;
        $text3_fontsize = 18;
        $padding = 0;
        $textcolor = $gold;
        $shadowcolor = $dimblack;
        $offset = -10;
        $linemax = 10;
        $strlen_max = 20;
        break;

    }

    //vertical string
    $text1 = $this->flipText($text1);
    if(mb_strlen($text2,"utf-8")>$strlen_max) $text2 = mb_substr($text2, 0, $strlen_max,"utf-8");
    if(mb_strlen($text3,"utf-8")>$strlen_max) $text3 = mb_substr($text3, 0, $strlen_max,"utf-8");
    $text2 = $this->verticalText($text2,$linemax);
    $text3 = $this->verticalText($text3,$linemax);

    //text position
    $text1_dimensions = imagettfbbox($text1_fontsize, 0, $font, $text1);
    $text1_w = abs($text1_dimensions[4] - $text1_dimensions[0]);
    $text1_h = abs($text1_dimensions[5] - $text1_dimensions[1]);
    $text1_x = ceil(($image_w - $text1_w)/2) + $offset;
    $text1_y = ceil(($image_h - $text1_h)/2) + ($text1_h/10)*8.5;

    $text2_dimensions = imagettfbbox($text2_fontsize, 0, $font, $text2);
    $text2_w = abs($text2_dimensions[4] - $text2_dimensions[0]);
    $text2_x = $image_w - $text2_w - 15;
    $text2_y = 40;

    $text3_dimensions = imagettfbbox($text3_fontsize, 0, $font, $text3);
    $text3_h = abs($text3_dimensions[5] - $text3_dimensions[1]);
    $text3_x = 15;
    $text3_y = imagesy($image) - $text3_h + 5;

    //draw shadow
    imagettftext($image, $text1_fontsize, 0, $text1_x + 1, $text1_y, $shadowcolor, $font, $text1);
    imagettftext($image, $text1_fontsize, 0, $text1_x - 2, $text1_y, $shadowcolor, $font, $text1);
    imagettftext($image, $text1_fontsize, 0, $text1_x, $text1_y + 1, $shadowcolor, $font, $text1);
    imagettftext($image, $text1_fontsize, 0, $text1_x, $text1_y - 2, $shadowcolor, $font, $text1);
    imagettftext($image, $text2_fontsize, 0, $text2_x + 1 - $padding, $text2_y + $padding, $shadowcolor, $font, $text2);
    imagettftext($image, $text2_fontsize, 0, $text2_x - 1 - $padding, $text2_y + $padding, $shadowcolor, $font, $text2);
    imagettftext($image, $text2_fontsize, 0, $text2_x - $padding, $text2_y + 1 + $padding, $shadowcolor, $font, $text2);
    imagettftext($image, $text2_fontsize, 0, $text2_x - $padding, $text2_y - 1 + $padding, $shadowcolor, $font, $text2);
    imagettftext($image, $text3_fontsize, 0, $text3_x + 1 + $padding, $text3_y - $padding, $shadowcolor, $font, $text3);
    imagettftext($image, $text3_fontsize, 0, $text3_x - 1 + $padding, $text3_y - $padding, $shadowcolor, $font, $text3);
    imagettftext($image, $text3_fontsize, 0, $text3_x + $padding, $text3_y + 1 - $padding, $shadowcolor, $font, $text3);
    imagettftext($image, $text3_fontsize, 0, $text3_x + $padding, $text3_y - 1 - $padding, $shadowcolor, $font, $text3);

    //draw text
    imagettftext($image, $text1_fontsize, 0, $text1_x, $text1_y, $textcolor, $font, $text1);
    imagettftext($image, $text2_fontsize, 0, $text2_x - $padding, $text2_y + $padding, $textcolor, $font, $text2);
    imagettftext($image, $text3_fontsize, 0, $text3_x + $padding, $text3_y - $padding, $textcolor, $font, $text3);

    switch ($directpost) {
      case 1:
        header('Content-Type: image/png');
        $filename=time();
        $save = "./temp/".$filename.".png";
        imagepng($image,$save,0,null);
        $url="facebookpost/?photo=".$filename;
        header("Location: $url");
        break;

      case 2:
        ob_start();
        imagepng($image,null,0,null);
        $image = ob_get_contents();
        //destroy
        ob_end_clean();
        @imagedestroy($image);
        @imagedestroy($roleimage);
        print '<img src="data:image/png;base64,'.base64_encode($image).'"/>';
        break;

      default:
        $filename = '「'.$old_text1.'」匾額.png';
        header('Content-Type: image/png');
        header("Content-Transfer-Encoding: binary");
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename='.$filename);

        imagepng($image,null,0,null);
        @imagedestroy($image);
        break;
    }
  }
  function verticalText($text,$linemax){
    $text=str_replace(' ','　',$text);
    $text=str_replace('\r','',$text);
    $text=str_replace('\n','',$text);
    $text_array=$this->utf8_str_split($text);
    $length=count($text_array);

    if($length>$linemax)
    {
      $lines=ceil($length/$linemax);
      for($i=0;$i<$linemax;$i++)
      {
        for($j=$lines-1;$j>=0;$j--)
        {
          if(isset($text_array[($j*$linemax+$i)])) $x=$text_array[($j*$linemax+$i)];
          else $x='　';
          $newString=$newString.$x.' ';
        }
        $newString=$newString.'
';
      }
    }
    else
    {
      for($i=0;$i<$length;$i++)
      {
        $newString=$newString.$text_array[$i].'
';
      }
    }
    return $newString;
  }
  function flipText($text){
    $text=str_replace(' ','　',$text);
    $text=str_replace('\r','',$text);
    $text=str_replace('\n','',$text);
    $text_array=$this->utf8_str_split($text);
    $length=count($text_array);

    for($i=$length;$i>=0;$i--)
    {
      if($i==$length || $i==0) $newString=$newString.$text_array[$i];
      else $newString=$newString.$text_array[$i].' ';
    }
    return $newString;
  }
  function utf8_str_split($str, $split_len = 1){
      if (!preg_match('/^[0-9]+$/', $split_len) || $split_len < 1)
          return FALSE;

      $len = mb_strlen($str, 'UTF-8');
      if ($len <= $split_len)
          return array($str);

      preg_match_all('/.{'.$split_len.'}|[^\x00]{1,'.$split_len.'}$/us', $str, $ar);

      return $ar[0];
  }
}
?>
