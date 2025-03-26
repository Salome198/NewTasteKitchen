<?php
namespace App\Controllers;
use App\Models\CustomerReviewModel;
use CodeIgniter\Controller;

class ReviewController extends Controller
{


    public function submitReview() 
    {
        $model = model(CustomerReviewModel::class);

        $data = [
            'news_list' => $model->getReview(),
            'title'     => '..',
        ];

        helper('form');

        return view('templates/header', ['title' => 'Create a news item'])
            . view('page/create')
            . view('templates/footer');
    }
    public function create()
    {
        helper('form');

        $data = $this->request->getPost(['name', 'review']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'name' => 'required|max_length[255]|min_length[3]',
            'review'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(CustomerReviewModel::class);

        $model->save([
            'name' => $post['name'],
            'slug'  => url_title($post['title'], '-', true),
            'review'  => $post['review'],
        ]);

        return view('templates/header', ['title' => 'Create Review'])
            . view('pages/success')
            . view('templates/footer');
    }


}
