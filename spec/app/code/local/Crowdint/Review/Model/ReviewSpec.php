<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Crowdint_Review_Model_ReviewSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Crowdint_Review_Model_Review');
    }

    function it_extends_from_the_correct_class()
    {
        $this->shouldExtendsClass('Mage_Review_Model_Review');
    }

    public function getMatchers()
    {
        return [
            'extendsClass' => function ($subject, $key) {
                return get_parent_class($subject) === $key;
            }
        ];
    }
}
