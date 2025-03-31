<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerReviewModel extends Model
{
    protected $table = 'customer_reviews';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'review', 'created_at'];
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

        return $this->where(['home' => $slug])->first();
    }

    public function addReviews($data)
    {
        return $this->insert($data);
    }
}
