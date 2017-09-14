<?php namespace App\Http\Controllers;

/**
 * Created by Vextras.
 *
 * Name: Ryan Hungate
 * Email: ryan@vextras.com
 * Date: 9/14/17
 * Time: 12:02 PM
 */
class CurriculumController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        return view('pages.curriculum');
    }
}
