<?php

namespace Lzodevelopement\Slider\Controllers;



use BackendMenu;

use Backend\Classes\Controller;


class Slider extends Controller
{


    public $implement = [

        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',

    ];


    public $formConfig = 'form.yaml';

    public $listConfig = 'list.yaml';



    public function __construct()
    {
        parent::__construct();


        BackendMenu::setContext('Lzodevelopement.slider', 'slider', 'slider');

    }


    /**
     * @return mixed
     */
    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $itemId) {
                if (!$slider = Slider::find($itemId))
                    continue;
                $slider->delete();
            }
            Flash::success('Successfully deleted those selected.');
        }
        return $this->listRefresh();
    }



}
