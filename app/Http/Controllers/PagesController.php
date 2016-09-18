<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Theme;

use App\Category;



class PagesController extends Controller
{
    //

	public function getTheme(){
		$themes = Theme::all();
		$categories = Category::all();
		return view('main')->with('themes',$themes)->with('categories',$categories);
	}
   	public function postContact(Request $request){

   		$this->validate($request, [
		'email2' => 'required|email',
		'message2' => 'min:10'
		]);
	
	// $validator = $this->validate($request, [
	// 	'email2' => 'required|email',
	// 	'message2' => 'min:10'
	// 	]);
		// $this->validate($request , [
		// 	'email2' => 'required|email',			
		// 	'message2' => 'min:10'
		// 	]);

		// if($validator->fails())
		// {
		// 	//return redirect()->back()->withErrors($validator)->withInput();
		// }
	// 	$data = array(
	// 		'email' => $request->email,
	// 		'subject' => $request->subject,
	// 		'bodyMessage' => $request->message //you cant use message is reserved variable change to bodyMessage
	// 		);

	// 	Mail::send('emails.contact',$data,function($message) use ($data){
	// 		$message->from($data['email']);
	// 		$message->to('peter.leyva.bazan@gmail.com');
	// 		$message->subject($data['subject']);

	// 	} );

	// Session::flash('success','Your Email was Sent');

	 return redirect()->back();



	}
}
