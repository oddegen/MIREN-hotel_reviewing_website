<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class FAQSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'How do I create an account?',
                'answer' => 'To create an account, click on the "Sign Up" button on the top right corner of the homepage. Fill in the required details such as your username, email address, and password. Once completed, click "Register".',
            ],
            [
                'question' => 'How do I write a review for a hotel?',
                'answer' => 'To write a review, log in to your account and search for the hotel you want to review. On the hotel\'s page, click the "Write a Review" button. Fill in the review form with your rating and comments you\'d like to share. Click "Submit" to publish your review.',
            ],
            [
                'question' => 'Can I edit my review after submitting it?',
                'answer' => 'Yes, you can edit your review. Go to your profile, find the review you want to edit, and click the "Edit" button. Make the necessary changes and click "Save" to update your review.',
            ],
            [
                'question' => 'How do I rate a hotel?',
                'answer' => 'To rate a hotel, navigate to the hotel\'s page and look for the rating section. Select the number of stars you want to give the hotel (from 1 to 5 stars) and provide any additional comments if you\'d like. Click "Submit" to finalize your rating.',
            ],
            [
                'question' => 'Is it possible to delete my review?',
                'answer' => 'Yes, you can delete your review. Go to your profile, find the review you want to delete, and click the "Delete" button. Confirm your decision, and the review will be permanently removed.',
            ],
            [
                'question' => 'What should I include in my hotel review?',
                'answer' => 'In your review, you should include details about your experience, such as the cleanliness of the hotel, the quality of service, amenities provided, location convenience, and any other relevant information.',
            ],
            [
                'question' => 'Can I see reviews from other users before booking a hotel?',
                'answer' => 'Yes, you can read reviews from other users on each hotel\'s page. These reviews can help you make an informed decision before booking your stay.',
            ],
            [
                'question' => 'How do I search for hotels on your website?',
                'answer' => 'To search for hotels, use the search bar on the homepage. Enter the destination, check-in and check-out dates, and the number of guests. Click "Search" to see a list of available hotels that match your criteria.',
            ],
            [
                'question' => 'How are hotel ratings calculated on your website?',
                'answer' => 'Hotel ratings are calculated based on the average of all user ratings submitted for that hotel. Each review contributes to the overall rating, helping other users make informed decisions.',
            ],
        ];

        $table = $this->table('faqs');
        $table->insert($faqs)->saveData();
    }
}
