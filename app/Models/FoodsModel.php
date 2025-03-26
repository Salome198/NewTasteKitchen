<?php

namespace App\Models;

use CodeIgniter\Model;

class FoodsModel extends Model
{
    protected $table = 'foods';
       /**
     * @param false|string $slug
     *
     * @return array|null
     */
    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}