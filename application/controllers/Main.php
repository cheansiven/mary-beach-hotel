<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    function __construct()
    {
        parent::__construct();

        $this->title = "Otres Hotel: Mary Beach Hotel & Resort";
        $this->meta_title = "Otres Hotel: Mary Beach Hotel & Resort";
        $this->meta_keywords = "mary hotel, otres beach, otres beach hotel, otres accommodation";
        $this->meta_description = "Mary Beach hotel in Otres, in perfect condition, with extra amenities that you would only find in luxury hotels";
    }

    public function index()
    {
        $data['page_name'] = 'home';
        $data['bg_image'] = 'mary-beach-hotel-2.jpg';
        
        $this->load->view('mary/index', $data);
    }
	
    public function luxury_hotel(){
    	 redirect("/");
    }
    
    public function error404()
    {
        redirect("404#open");
    }
	
	
	  public function page404()
    {
		$this->title = "404 : Page not foud";
        $this->meta_title = "404 : Page not foud";
        $data['page_name'] = 'home';
		$data['bg_image'] = 'mary-beach-hotel-2.jpg';
        $this->load->view('mary/page-404', $data);
    }

    public function sleepPage()
    {
        $this->title = "Otres Beach accommodation: luxury suites & rooms";
        $this->meta_title = "Otres Beach accommodation: luxury suites & rooms";
        $this->meta_keywords = "beach accommodation, otres beach hotel";
        $this->meta_description = "Mary beach Otres offers you 3 types of accommodation to choose from. The price is Net, everything is included";

        $data['page_name'] = 'sleep';
        $data['bg_image'] = 'img_6889.jpg';
        $this->load->view('mary/pages/sleep', $data);
    }

    public function singleRoomPage()
    {
        $this->title = "Otres Beach accommodation: luxury suites & rooms";
        $this->meta_title = "Otres Beach accommodation: luxury suites & rooms";
        $this->meta_keywords = "beach accommodation, otres beach hotel";
        $this->meta_description = "Mary beach Otres offers you 3 types of accommodation to choose from. The price is Net, everything is included";

        $data['page_name'] = 'sleep';
        $data['bg_image'] = 'mary-beach-hotel-2.jpg';
        $this->load->view('mary/pages/single-room', $data);
    }

    public function eatPage()
    {
        $this->title = "Fine dining on Otres Beach";
        $this->meta_title = "Fine dining on Otres Beach";
        $this->meta_keywords = "restaurant, otres beach, dining, menu";
        $this->meta_description = "Eating and dining on Otres Beach. Restaurant with a french chef: Olivier";

        $data['page_name'] = 'eat';
        $data['bg_image'] = 'mary-restaurant-main.jpg';
        $data['bg_image_lt'] = 'mary-restaurant-main-lt.jpg';
        $this->load->view('mary/pages/eat', $data);
    }
    
    public function restaurantRoomService()
    {
        $this->title = "Fine dining on Otres Beach";
        $this->meta_title = "Fine dining on Otres Beach";
        $this->meta_keywords = "restaurant, otres beach, dining, menu";
        $this->meta_description = "Eating and dining on Otres Beach. Restaurant with a french chef: Olivier";

        $data['page_name'] = 'room-service';
        $data['bg_image'] = 'mary-restaurant-main.jpg';
        $data['bg_image_lt'] = 'mary-restaurant-main-lt.jpg';
        $this->load->view('mary/pages/room-service', $data);
    }
    
    public function beachRestaurant()
    {
        $this->title = "Fine dining on Otres Beach";
        $this->meta_title = "Fine dining on Otres Beach";
        $this->meta_keywords = "restaurant, otres beach, dining, menu";
        $this->meta_description = "Eating and dining on Otres Beach. Restaurant with a french chef: Olivier";

        $data['page_name'] = 'beach-restaurant';
        $data['bg_image'] = 'mary-restaurant-main.jpg';
        $data['bg_image_lt'] = 'mary-restaurant-main-lt.jpg';
        $this->load->view('mary/pages/beach-restaurant', $data);
    }
    
    public function coffeeShop()
    {
        $this->title = "Fine dining on Otres Beach";
        $this->meta_title = "Fine dining on Otres Beach";
        $this->meta_keywords = "restaurant, otres beach, dining, menu";
        $this->meta_description = "Eating and dining on Otres Beach. Restaurant with a french chef: Olivier";

        $data['page_name'] = 'beach-restaurant';
        $data['bg_image'] = 'mary-restaurant-main.jpg';
        $data['bg_image_lt'] = 'mary-restaurant-main-lt.jpg';
        $this->load->view('mary/pages/coffee-shop', $data);
    }
    
    public function sushiRestaurant()
    {
        $this->title = "Fine dining on Otres Beach";
        $this->meta_title = "Fine dining on Otres Beach";
        $this->meta_keywords = "restaurant, otres beach, dining, menu";
        $this->meta_description = "Eating and dining on Otres Beach. Restaurant with a french chef: Olivier";

        $data['page_name'] = 'beach-restaurant';
        $data['bg_image'] = 'mary-restaurant-main.jpg';
        $data['bg_image_lt'] = 'mary-restaurant-main-lt.jpg';
        $this->load->view('mary/pages/sushi-restaurant', $data);
    }

    public function movePage()
    {
        $this->title = "Activities on the beach of Otres";
        $this->meta_title = "Activities on the beach of Otres";
        $this->meta_keywords = "Sports, leisure at Otres Beach Resort";
        $this->meta_description = "Activities &amp; leisure at Otres In light of the quietness surrounding these beaches, this is simply the perfect spot for all kinds of activity. Of course the most interesting adventures lies around the nautical activities, you will find a wide range of things to get occupied: &lt;li...";

        $data['page_name'] = 'move';
        $data['bg_image'] = 'activities-sihanoukville-bg.jpg';
        $data['bg_image_lt'] = 'mary-restaurant-main-lt.jpg';
        $this->load->view('mary/pages/move', $data);
    }

    public function socialPage()
    {
        $this->title = "Otres Beach social activities";
        $this->meta_title = "Otres Beach social activities";
        $this->meta_keywords = "we are social, otres social media";
        $this->meta_description = "Find us on the most common social platform around";

        $data['page_name'] = 'social';
        $data['bg_image'] = 'mary-bungalow-social.jpg';
        $this->load->view('mary/pages/social', $data);
    }

    public function otresPage()
    {
        $this->title = "The new beach in Sihanoukville: Otres";
        $this->meta_title = "The new beach in Sihanoukville: Otres";
        $this->meta_keywords = "otres beach, otres in cambodia, otres beach in sihanoukville";
        $this->meta_description = "Otres Beach in Cambodia : the trendiest spot in Cambodia for 2015. Travelers are moving to Otres for the quietness and environment";

        $data['page_name'] = 'otres';
        $data['bg_image'] = 'mary-bungalow-otres.jpg';
        $this->load->view('mary/pages/otres', $data);
    }

    public function beachPage()
    {
        $this->title = "Beachside hotel & resort: Otres";
        $this->meta_title = "Beachside hotel & resort: Otres";
        $this->meta_keywords = "otres beach, otres in cambodia, otres beach in sihanoukville";
        $this->meta_description = "Long Chairs &amp; Cocktails Come and relax on this beautiful white sand beach, which we have fitted with long beach chairs with black cotton mattresses. Choose whether you want to lay in the shade of our rattan umbrellas, or take in the sun beams as they come.";

        $data['page_name'] = 'beach';
        $data['bg_image'] = 'mary-bungalow-beach.jpg';
        $this->load->view('mary/pages/beach', $data);
    }

    public function spaPage()
    {
        $this->title = "Spa and massage at Otres beach";
        $this->meta_title = "Spa and massage at Otres beach";
        $this->meta_keywords = "massage, spa, manicure, beach, otres";
        $this->meta_description = "Getting pampered with a massage or a manicure while laying on the beach is luxury in its purest form";

        $data['page_name'] = 'spa';
        $data['bg_image'] = 'otres-spa-hotel-suite.jpg';
        $data['bg_image_lt'] = 'otres-spa-hotel-suite-lt.jpg';
        $this->load->view('mary/pages/spa', $data);
    }
    
     public function contactPage()
    {
       // $this->load->library('session');

        $this->title = "Find the hotel on Otres Beach";
        $this->meta_title = "Find the hotel on Otres Beach";
        $this->meta_keywords = "Find the hotel on Otres Beach";
        $this->meta_description = "Find the hotel on Otres Beach";

        $data['page_name'] = 'contact';
        $data['bg_image'] = 'Otres-Beach.jpg';
        $this->load->view('mary/pages/contact', $data);
    }
    public function submitted () 
    {
    	$data['page_name'] = 'contact';
        $data['bg_image'] = 'Otres-Beach.jpg';
        $this->load->view('mary/pages/success-form', $data);
    }
    
     public function mailCoupon()
    {
        
        $email = $this->input->post('email');

        $messages = '
            <html>
            <head>
            <title>Mary Beach Hotel E-mail</title>
            </head>
            <body>
                <p>Hello Admin<br />
                A new client has signup to Mary Beach Hotel Website with following details:<br /><br />
                Signup date: '.date("M d, Y").'<br />
                Email: '.$email.'<br />
                </p>
            </body>
            </html>
        ';

        $this->load->library('email');

        $this->email->set_mailtype("html");
        $this->email->from($email, "Mary Beach Hotel");
        $this->email->to('resort@mary-hotel.com');
        $this->email->bcc('sothy@lox-design.com, info@lox-design.com');

        $this->email->subject('Mary Beach Hotel: request for coupon');
        $this->email->message($messages);
        $this->email->send();
        
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode('Thank you for your request, our team will be in touch with you today. In the meantime, we invite you to visit our <a href="https://www.facebook.com/marybeachhotel" target="_blank">Facebook page</a>.</p>'));
    }
    
     public function ContactBooking()
    {
       
        $fullname = ucfirst($this->input->post('lastname')). ' '. ucfirst($this->input->post('firstname'));
        $email = $this->input->post('email');
        $comment = $this->input->post('comment');
        $phone = $this->input->post('phone');

        $messages = '
            <html>
            <head>
            <title>Mary Beach Hotel E-mail</title>
            </head>
            <body>
                <p>Dear Mary Beach Hotel & Resort,<br />
                You have received a new message from your website:<br /><br />
                Contact date: '.date("M d, Y").'<br />
                Full name: '.$fullname.'<br />
                Email: '.$email.'<br />
                Phone: '.$phone.'<br />
                Comment: '.$comment.'<br />
                </p>
            </body>
            </html>
        ';
        
        
          $client_body ='<p>
                            Dear <strong class="text-danger" style="color: #24677e"">'.$fullname.'</strong>,   </p>
                            We have well received your request, and we will come back to you shortly.<br />
                            In the meantime, you can go and visit our <a style="text-decoration: underline; color: #24677e" href="https://www.facebook.com/marybeachhotel">facebook page</a>
                            <div style="font-size: 12px;"><br><br><br>
                            <div style="background-color:#24677e; width:180px;"><img src="http://www.mary-beach-hotel.com/public/img/logo.png" /></div>
                            <br>Marina Rd<br>
Otres 2, Sikanoukville<br>
Krong Preah Sihanouk<br>
Cambodia<br><br>
+855 99 566 999 <br>
<a href="mailto:resort@mary-hotel.com" style="text-decoration: underline; color: #24677e">resort@mary-hotel.com</a>
</div>
                      ';
        
        

        $this->load->library('email');

        $this->email->set_mailtype("html");
        $this->email->from($email, $fullname);
        $this->email->reply_to($email, $fullname);
        //$this->email->to('sothy@lox-design.com');
        $this->email->to('resort@mary-hotel.com');
        $this->email->bcc('sothy@lox-design.com, info@lox-design.com');

        $this->email->subject('New contact from Mary Beach Hotel & Resort');
        $this->email->message($messages);

        $ok = $this->email->send();
        
         $this->email->from("resort@mary-hotel.com", "Mary Beach Hotel & Resort");
         $this->email->reply_to("resort@mary-hotel.com", "Mary Beach Hotel & Resort");
        $this->email->to($email);
        //$this->email->to('resort@mary-hotel.com');
        $this->email->bcc('sothy@lox-design.com, info@lox-design.com');

        $this->email->subject('Warmest greeting from Mary Beach Hotel');
        $this->email->message($client_body);


        $ok = $this->email->send();

        if($ok)
        {
            $this->session->set_userdata(['lastname'  => $this->input->post('lastname'), 'get_session' => TRUE]);
            redirect("http://www.mary-beach-hotel.com/contact-the-hotel-directly.html");
        }
    }
}