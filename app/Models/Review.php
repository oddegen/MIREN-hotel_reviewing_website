<?php

namespace App\Models;

use PDO;

class Review {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Create a new review
    public function createReview($user_id, $review, $rating) {
        $this->db->query(
            'INSERT INTO reviews (user_id, review, rating) 
             VALUES (:user_id, :review, :rating)',
            [
                'user_id' => $user_id,
                'review' => $review,
                'rating' => $rating
            ]
        );
    }

    public function getReviewById($review_id) {
        return $this->db->query('SELECT * FROM reviews WHERE review_id = :review_id', [
            'review_id' => $review_id
        ])->find();
    }

    public function updateReview($review_id, $review, $rating) {
        $this->db->query(
            'UPDATE reviews 
             SET review = :review, rating = :rating, updated_at = NOW() 
             WHERE review_id = :review_id',
            [
                'review_id' => $review_id,
                'review' => $review,
                'rating' => $rating
            ]
        );
    }

    public function deleteReview($review_id) {
        $this->db->query('DELETE FROM reviews WHERE review_id = :review_id', [
            'review_id' => $review_id
        ]);
    }

    public function getReviews() {
        return $this->db->query('SELECT review FROM reviews LIMIT 5')->find(PDO::FETCH_COLUMN);
    }
}
