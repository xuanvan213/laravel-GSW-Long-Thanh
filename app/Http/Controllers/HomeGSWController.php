<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use \Swift_Mailer;
use \Swift_SmtpTransport;

class HomeGSWController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    // Send mail to contact
    public static function sendEmailContacts(Request $request )
    {
        // Backup your default mailer
        $backup = Mail::getSwiftMailer();

        //comment vì đã set config ở file .env. Nếu bỏ comment thì bị lỗi
        // // Setup your gmail mailer
        // $transport = new Swift_SmtpTransport('mail.babaza.vn', 587, 'tls');
        // $transport->setUsername('duan.anzbds@gmail.com');
        // $transport->setPassword('Anzbds@1808.');
        // // Any other mailer configuration stuff needed...

        // $gmail = new Swift_Mailer($transport);

        // Set the mailer as gmail
        // Mail::setSwiftMailer($gmail);

        $data = ['email'=>$request->email, 'name'=>$request->name, 'content'=>$request->content];

        Mail::send('emails.mailContact', $data, function ($message) {
            $message->to('vantx2103@gmail.com');
            $message->subject("Mail Contact Project ANZ Bất Động Sản Gem Sky World");
            $message->from('duan.anzbds@gmail.com', 'Anzbds');
        });
        
        // Restore your original mailer
        Mail::setSwiftMailer($backup);

        // echo alert and redirect to Homepage
        echo "<script>";
        echo " alert('Cảm ơn quý khách đã liên hệ với với chúng tôi! Chúng tôi sẽ liên hệ với bạn ngây khi có thông tin mới nhất');      
            window.location.href='".url('/')."';
        </script>";
    }
    public function sitemap(){
        return response()->view('sitemap.sitemap-gsw')->header('Content-Type', 'text/xml');
   
    }
}
