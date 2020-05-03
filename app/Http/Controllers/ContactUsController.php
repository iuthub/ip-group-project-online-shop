<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
class ContactUSController extends Controller
{

    

   public function create()
   {
       return view('contact.create');
   }

   public function store(Request $request)
       {
           $data = request()->validate([
            'username' => 'required',
            'email' => 'required|email',
            'message' => 'required',

           ]);

           $contact = new ContactUs;
           $contact->username = $request->username;
           $contact->email = $request->email;
           $contact->message = $request->message;

           $contact->save();
            
          

           Mail::to('cyan.lemon954@gmail.com')->send(new ContactFormMail($data));
           return view('contact.thanks');
       }

       

          
}
?>