<?php
namespace App\Controllers;
use App\Models\CustomerReviewModel;

class ReviewsController extends BaseController
{


    public function submitReview()
    {


        return view('templates/header', ['title' => 'Create a news item'])
            . view('pages/create')
            . view('templates/footer');
    }
    
    public function create()
    {
        
            $reviewModel = new CustomerReviewModel();
    
            // Get POST data
            $name = $this->request->getPost('name');
            $review = $this->request->getPost('review');
    
            // Validate if data is not empty
            if (empty($name) || empty($review)) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'All fields are required']);
            }
    
            // Insert into the database
            $data = [
                'name' => $name,
                'review' => $review
            ];
    
            if ($reviewModel->insert($data)) {
                return redirect()->to('/review.php')->with('success', '🎉 Review added successfully!');
            } else {
                // Redirect with error message
                return redirect()->to('/review.php')->with('error', '❗️ Failed to add review. Try again!');
            }

        }
    
        // Get All Reviews - To display on homepage
        public function getReviews()
        {
            $reviewModel = new CustomerReviewModel();
            $data['reviews'] = $reviewModel->orderBy('created_at', 'DESC')->findAll();
    
            return view('home', $data);
        }
       
}

