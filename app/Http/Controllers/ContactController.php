<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class ContactController extends Controller
{
    public function contact()
    {
      return view('pages.contact');
    }

    public function sendContact(Request $request )
    {
      $this->validate($request,[
        'name'=>'required',
        'email'=>'required|email',
         'message'=>'required'
      ]);

      $data = array(
        'name'=>$request->name,
        'email'=>$request->email,
        'bodyMessage' => $request->message
        // 'hidden'=>$request->hidden
        // 'tel'=>$request->tel
      );

      Mail::send('emails.contact-message',$data,function($message)use($data){
        $message->from($data['email']);
        $message->to('sapnoka@aashyana.com')->subject('Contect Message');
      });

    /*  Mail::send('emails.contact-message',[
        'msg'=>$request->message
      ],function($mail)use($request){
        $mail->from($request->email, $request->name);
        $mail->to('sachin@example.com')->subject('Contect Message');
      }); */



      return redirect()->back()->with('flash_message','Thank you for your message!');

    }

    public function sendEnquiry(Request $request )
    {
      $this->validate($request,[
        'name'=>'required',
        'email'=>'required|email',
        // 'tel'=>'required'
      ]);

      $data = array(
        'name'=>$request->name,
        'email'=>$request->email,
        // 'phone' => $request->tel,
        // 'hidden'=>$request->hidden
      );

      Mail::send('emails.enquiry-message',$data,function($message)use($data){
        $message->from($data['email']);
        $message->to('sachin@example.com')->subject('Contect Message');
      });

    /*  Mail::send('emails.contact-message',[
        'msg'=>$request->message
      ],function($mail)use($request){
        $mail->from($request->email, $request->name);
        $mail->to('sachin@example.com')->subject('Contect Message');
      }); */



      return redirect()->back()->with('flash_message','Thank you for your message! We will contact soon' );

    }

    public function postEnquiry(Request $request)
    {
      // $this->validate($request,[
      //   'name'=>'required',
      //   'emial'=>'required|email',
      //   'message'=>'required'
      // ]);
      // $data = array(
      //   'name'=> $request->name,
      //   'email'=> $request->email,
      //   'bodyMessage' => $request->message
      // );

      // Mail::send('emails.enquiry-message',$data,function($message) use($data){
      //   $message->from($data['email']);
      //   $message->to('sapnoka@aashyana.com');
      //   $message->subject('enquiry message');
      // });


      $this->validate($request,[
        'name'=>'required',
        'email'=>'required|email',

        // 'tel'=>'required'
      ]);

      $data = array(
        'name'=>$request->name,
        'email'=>$request->email,
        // 'bodyMessage' => $request->message,
        'hidden'=>$request->hidden,
        'property_id'=>$request->property_id,

        'phone' => $request->phone
        // 'hidden'=>$request->hidden
      );

      Mail::send('emails.enquiry-message',$data,function($message)use($data){
        $message->from($data['email']);
        $message->to('sapnoka@aashyana.com')->subject('Enquiry Message');
      });

    /*  Mail::send('emails.contact-message',[
        'msg'=>$request->message
      ],function($mail)use($request){
        $mail->from($request->email, $request->name);
        $mail->to('sachin@example.com')->subject('Contect Message');
      }); */



      return redirect()->back()->with('flash_message','Thank you for your message! We will contact soon' );

    }

    public function feedback(Request $request)
    {

      $this->validate($request,[
        'name'=>'required',
        'email'=>'required|email',
        'message'=>'min:6',

        // 'tel'=>'required'
      ]);

      $data = array(
        'name'=>$request->name,
        'email'=>$request->email,
        'bodyMessage' => $request->message,
        // 'hidden'=>$request->hidden,
        // 'phone' => $request->phone
        // 'hidden'=>$request->hidden
      );

      Mail::send('emails.feedback-message',$data,function($message)use($data){
        $message->from($data['email']);
        $message->to('sapnoka@aashyana.com')->subject('Feedback Message');
      });


      return redirect()->back()->with('flash_message','Thank you for your feedback' );



    }

    public function getenquiry()
    {
    return view('pages.enquiry');
    }
}
