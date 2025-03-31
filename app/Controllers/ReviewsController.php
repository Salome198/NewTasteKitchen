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
    
            
            $name = $this->request->getPost('name');
            $review = $this->request->getPost('review');
    
            
            if (empty($name) || empty($review)) {
                return $this->response->setJSON(['status' => 'error', 'message' => 'All fields are required']);
            }
    
            
            $data = [
                'name' => $name,
                'review' => $review
            ];
    
            if ($reviewModel->insert($data)) {
                return redirect()->to('/review.php')->with('success', '🎉 Review added successfully!');
            } else {
                
                return redirect()->to('/review.php')->with('error', '❗️ Failed to add review. Try again!');
            }

        }
    

            // Get All Reviews - AJAX
    public function getReviews()
        {
            $reviewModel = new CustomerReviewModel();
                
            // Get all reviews ordered by created_at DESC
            $reviews = $reviewModel->orderBy('created_at', 'DESC')->findAll();
        
            // Return JSON response
            return $this->response->setJSON($reviews);
        }
        
