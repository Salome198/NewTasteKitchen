<?php

namespace App\Controllers;

use App\Models\FoodsModel;

class Pages extends BaseController
{
    // ...

    public function view(string $page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/navbar')
            . view('pages/' . $page)
            . view('templates/footer');
    }
    
    public function menupage()
    {
        $model = model(FoodsModel::class);

        $data = [
            'news_list' => $model->getNews(),
            'title'     => '..',
        ];

        return view('templates/header', $data)
            . view('pages/navbar')
            . view('pages/menu')
            . view('templates/footer');
    }

    public function reviewform()
    {
        $model = model(CustomerReviewModel::class);

        $data = [
            'name' => $model->getReview(),
            'review'     => '..',
        ];

        return view('templates/header', $data)
            . view('pages/navbar')
            . view('pages/home')
            . view('templates/footer');
    }




}
