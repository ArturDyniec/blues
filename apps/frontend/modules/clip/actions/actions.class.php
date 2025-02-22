<?php

/**
 * clip actions.
 *
 * @package    blues
 * @subpackage clip
 * @author     Włodzimierz Gajda
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class clipActions extends sfActions
{
  
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */    
  public function executeIndex(sfWebRequest $request)
  {
/*
    $this->clips = Doctrine_Core::getTable('Clip')
      ->createQuery('a')
      ->execute();
*/

    $this->pager = new sfDoctrinePager('Clip', 9);
    $this->pager->setQuery(Doctrine_Core::getTable('Clip')->createQuery('a'));
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
    $this->clip = Doctrine_Core::getTable('Clip')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->clip);
  }

}
