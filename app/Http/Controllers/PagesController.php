<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stripe;


class PagesController extends Controller
{
    public $data = array();

    public function __construct(){

    }


    /**
     * About Us View Function
     */
    public function aboutUs(Request $request){

        $this->data['title']            = 'About Us - Draft View';  
        $this->data['activeLink']       = 'about';

        return view('about-us', $this->data);

    }

    /**
     * Our Process View Function
     */
    public function ourProcess(Request $request){

        $this->data['title']            = 'Our Process - Draft View';  
        $this->data['activeLink']       = 'our-process';

        return view('our-process', $this->data);

    }

    /**
     * Services View Function
     */
    public function services(Request $request){

        $this->data['title']            = 'Services - Draft View';  
        $this->data['activeLink']       = 'services';

        return view('services', $this->data);

    }

    /**
     * Pricing View Function
     */
    public function pricing(Request $request){

        $this->data['title']            = 'Pricing - Draft View';  
        $this->data['activeLink']       = 'pricing';

        return view('pricing', $this->data);

    }

    /**
     * Terms & Condition View Function
     */
    public function termsCondition(Request $request){

        $this->data['title']            = 'Terms & Condition - Draft View';  
        $this->data['activeLink']       = 'terms-conditions';

        return view('terms-conditions', $this->data);

    }

    /**
     * Privay Policy View Function
     */
    public function privacyPolicy(Request $request){

        $this->data['title']            = 'Privacy Policy - Draft View';  
        $this->data['activeLink']       = 'privacy-policy';

        return view('privacy-policy', $this->data);

    }

    /**
     * Refund Policy View Function
     */
    public function refundPolicy(Request $request){

        $this->data['title']            = 'Refund Policy - Draft View';  
        $this->data['activeLink']       = 'refund-policy';

        return view('refund-policy', $this->data);

    }

    /**
     * Refund Policy View Function
     */
    public function faq(Request $request){

        $this->data['title']            = 'FAQ - Draft View';  
        $this->data['activeLink']       = 'faq';

        return view('faq', $this->data);

    }

    /**
     * Contact View Function
     */
    public function contact(Request $request){

        $this->data['title']            = 'Contact - Draft View';  
        $this->data['activeLink']       = 'contact';

        return view('contact', $this->data);

    }

    /**
     * Contact Submit Function
     */
    public function contactSubmit(Request $request){
        
        $request->validate([
            'first_name' => 'required',
            'email_address'     => 'required|email',
        ]);

        Mail::to($request->email_address)->send(new ContactMail($request));

        return redirect(route('thankyou'));
    }

    /**
     * Thankyou View Function
     */
    public function thankyou(Request $request){

        $this->data['title']            = 'Thankyou - Draft View';  
        $this->data['activeLink']       = 'thankyou';

        return view('thankyou', $this->data);

    }

    /**
     * Payment Thankyou View Function
     */
    public function paymentThankyou(Request $request){

        $this->data['title']            = 'Thankyou - Draft View';  
        $this->data['activeLink']       = 'thankyou';

        return view('payment-thankyou', $this->data);

    }

    /**
     * Reviews View Function
     */
    public function reviews(Request $request){

        $this->data['title']            = 'Customer Reviews - Draft View';  
        $this->data['activeLink']       = 'reviews';

        $this->data['reviews']          = array(
            array(
                'author'                => 'Jack Brown',
                'author_designation'    => 'UI/UX Designer',
                'rating'                => 5,
                'title'                 => 'Amazing Service Ever',
                'review'                => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia',
                'review_type'           => 'text'
            ),

            array(
                'author'                => 'Jack Brown',
                'author_designation'    => 'UI/UX Designer',
                'rating'                => 5,
                'title'                 => 'Amazing Service Ever',
                'review'                => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia',
                'review_type'           => 'text'
            ),

            array(
                'author'                => 'Jack Brown',
                'author_designation'    => 'UI/UX Designer',
                'rating'                => 5,
                'title'                 => 'Amazing Service Ever',
                'review'                => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia',
                'review_type'           => 'text'
            ),

            array(
                'author'                => 'Jack Brown',
                'author_designation'    => 'UI/UX Designer',
                'rating'                => 5,
                'review_url'            => 'https://www.youtube.com/embed/D0UnqGm_miA',
                'review_thumbnail'      => '/images/review-thumbnail.jpg',
                'review_type'           => 'video'
            ),

            array(
                'author'                => 'Jack Brown',
                'author_designation'    => 'UI/UX Designer',
                'rating'                => 4,
                'title'                 => 'Amazing Service Ever',
                'review'                => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia',
                'review_type'           => 'text'
            ),

            array(
                'author'                => 'Jack Brown',
                'author_designation'    => 'UI/UX Designer',
                'rating'                => 3,
                'title'                 => 'Amazing Service Ever',
                'review'                => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia',
                'review_type'           => 'text'
            ),
        );

        return view('reviews', $this->data);

    }

    /**
     * Select Pacakge
     * 
     */
    public function selectPackage(Request $request){

        $this->data['title']            = 'Select Package - Draft View';  
        $this->data['activeLink']       = 'select-package';

        return view('select-package', $this->data);

    }


    /**
     * Select Pacakge
     * 
     */
    public function stripePost(Request $request){

        
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
    
        Stripe\Charge::create ([
                "amount" => $request->amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Draft View - " . $request->description . ' Payment' 
        ]);
      
        return response()->json(array(
            'status' => true,
            'thankyou' => route('payment-thankyou')
        ));


    }
    
}
