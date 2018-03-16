<?php
namespace Lzodevelopement\Slider\Components;


use Cms\Classes\ComponentBase;
use Lzodevelopement\Slider\Models\Slider;


class DisplaySlider extends ComponentBase
{


    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name' => 'Display Slider Component',
            'description' => 'This renders the slider',
            'author' => 'Lzodevelopement'
        ];

    }


    /**
     * @method onRun()
     * @param null $slug
     * @author lzodevelopement
     *
     */
    public function onRender($slug = null)
    {


        $slug = $this->property('slider', 0);

        $data = [];

        switch ($slug) {

            case 'homepage-gallery':
                


                $slider = Slider::where('slug', $slug);

                $data["slider"]= $slider->first();

                return $this->renderPartial("displaySlider::".$slug,$data);

                break;

             case 'boats-gallery':
                


                $slider = Slider::where('slug', $slug);

                $data["slider"]= $slider->first();

                return $this->renderPartial("displaySlider::".$slug,$data);

                break;
            default:
                # code...
                break;
        }

      
    }


    /**
     * @return array
     */
    public function defineProperties()
    {

        return [
            'slider' => [
                'title' => 'Slider',
                'type' => 'dropdown',
                'default' => 'none'
            ]
        ];
    }


    /**
     * @method getSliderOptions
     * @return array
     */
    public function getSliderOptions()
    {
        $slider = new Slider();

        $return = [];

        foreach ($slider->get() as $slide) {

            $return[$slide->slug] = $slide->title;
        }

        return $return;

    }

}