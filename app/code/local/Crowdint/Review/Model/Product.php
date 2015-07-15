<?php

class Crowdint_Review_Model_Product extends Mage_Catalog_Model_Product
{


    public function hasReviews()
    {
        $review_resource = Mage::getModel('review/review');

        return (bool) $review_resource->getTotalReviews($this->getEntityId());
    }
}
