<?php namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;

/**
 * Created by Vextras.
 *
 * Name: Ryan Hungate
 * Email: ryan@vextras.com
 * Date: 9/14/17
 * Time: 12:02 PM
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postContactForm(Request $request)
    {
        try {
            \Mail::to('ryan@vextras.com')->send(new ContactMessage($request->email, $request->name, $request->message));
        } catch (\Exception $e) {
            \Log::error("ContactControlle@post {$e->getMessage()}");
        }

        return back();
    }
}
