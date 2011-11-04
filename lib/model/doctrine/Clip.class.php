<?php

/**
 * Clip
 *
 * This class has been customized
 *
 * @package    Blues
 * @subpackage model
 * @author     Włodzimierz Gajda
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Clip extends BaseClip
{

  public function preSave($event)
  {
    $this->autoident();
  }

  public function autoident()
  {
    //if (!$this->getIdent())
    if (true)
    {

      $html = $this->getHtml();

      /*
        <iframe width="420" height="315" src="http://www.youtube.com/embed/c_DTdFppN9c" frameborder="0" allowfullscreen></iframe>
       */

      $re = '|<iframe width="(\d+)" height="(\d+)" src="http://www.youtube.com/embed/([^"]+)" frameborder="(\d+)" allowfullscreen></iframe>|';
      if (preg_match($re, $html, $m))
      {
        $this->setIdent(trim($m[3]));
        $this->setHeight(trim($m[2]));
        $this->setWidth(trim($m[1]));
      }
      //$this->save();
    }
  }

}