<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerReviewModel extends Model
{
    protected $table = 'customer_reviews';
    protected $allowedFields = ['name', 'review'];
       /**
     * @param false|string $slug
     *
     * @return array|null
     */
    public function getReviews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['review' => $slug])->first();
    }


}

