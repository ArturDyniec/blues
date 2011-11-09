<?php

/**
 * song actions.
 *
 * @package    blues
 * @subpackage song
 * @author     Włodzimierz Gajda
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class songActions extends sfActions
{
  
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */    
  public function executeIndex(sfWebRequest $request)
  {
/*
    $this->songs = Doctrine_Core::getTable('Song')
      ->createQuery('a')
      ->execute();
*/

    $this->pager = new sfDoctrinePager('Song', 10);
    $this->pager->setQuery(Doctrine_Core::getTable('Song')->createQuery('a'));
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();

  }

  /**
   * Executes show action
   *
   * @param sfRequest $request A request object
   */      
  public function executeShow(sfWebRequest $request)
  {
    $this->song = Doctrine_Core::getTable('Song')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->song);
  }

}
