<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function page(Request $request, $page)
    {
        if (file_exists('../resources/views/templates/' . $page . '.blade.php'))
        {
            return view('templates/' . $page, compact('request'));
        } else {
            return view('errors/404', compact('request'));
        }
    }
}
