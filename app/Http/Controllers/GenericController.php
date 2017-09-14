<?php namespace App\Http\Controllers;

/**
 * Created by Vextras.
 *
 * Name: Ryan Hungate
 * Email: ryan@vextras.com
 * Date: 9/14/17
 * Time: 12:02 PM
 */
class GenericController extends Controller
{
    /**
     * @param string $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke($page = 'default')
    {
        return view('generic', ['page' => $page]);
    }
}
