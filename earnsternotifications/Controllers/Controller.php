<?php

namespace packages\actionMnotifications\themes\earnsternotifications\Controllers;

use packages\actionMnotifications\themes\earnsternotifications\Views\Main;
use packages\actionMnotifications\themes\earnsternotifications\Views\View as ArticleView;
use packages\actionMnotifications\themes\earnsternotifications\Models\Model as ArticleModel;

class Controller extends \packages\actionMnotifications\Controllers\Controller {

    /* @var ArticleView */
    public $view;

    /* @var ArticleModel */
    public $model;
    public $title;

    public function __construct($obj){
        parent::__construct($obj);
    }



}
