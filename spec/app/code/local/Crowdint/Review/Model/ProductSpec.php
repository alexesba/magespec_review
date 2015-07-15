<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Crowdint_Review_Model_ProductSpec extends ObjectBehavior
{
    public function __construct(){
        \Mage::init();
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Crowdint_Review_Model_Product');

    }


    function it_extends_from_the_correct_class()
    {
        $this->shouldExtendsClass('Mage_Catalog_Model_Product');
    }

    function  it_returns_a_collection_product()
    {
        $this->getCollection()->shouldHaveType('Mage_Catalog_Model_Resource_Product_Collection');
    }

    function it_tells_if_a_product_has_reviews()
    {
        $this->load(423);
        $this->hasReviews()->shouldReturn(true);
//        $this->shouldModuleBeActive();
//        $this->shouldbeOnCodePool('local');
    }

    public function getMatchers()
    {
        return [
            'extendsClass' => function ($subject, $key) {
                return get_parent_class($subject) === $key;
            },
            'moduleBeActive' => function($subject){
                $module_name = implode('_', array_slice(explode('_', get_class($subject)), 0, 2));
                eval(\Psy\sh());
                return \Mage::getConfig()->getModuleConfig($module_name)->active;
            },
            'beOnCodePool' => function($subject, $codepool){
                $module_name = implode('_', array_slice(explode('_', get_class($subject)), 0, 2));
                return \Mage::getConfig()->getModuleConfig($module_name)->codePool == $codepool;
            }
        ];
    }
}
