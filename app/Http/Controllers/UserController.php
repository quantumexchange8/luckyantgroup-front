<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class UserController extends Controller
{
    public function index()
    {
        return view('layout.index');
    }
    public function trading()
    {
        return view('layout.trading');
    }

    public function forex()
    {
        return view('layout.forex');
    }
    public function stock()
    {
        return view('layout.stock');
    }
    public function cfd()
    {
        return view('layout.cfd');
    }
    public function indices()
    {
        return view('layout.indices');
    }
    public function copytrading()
    {
        return view('layout.copytrading');
    }
    public function about()
    {
        return view('layout.about');
    }
    public function error()
    {
        return view('layout.404error');
    }
  public function contact(){
    return view('layout.contactus');
  }
  public function terms(){
    return view('layout.terms');
  }
  public function privacy(){
    return view('layout.privacy');
  }
  public function copytradepolicy(){
    return view('layout.copytradepolicy');
  }
  public function disclosure(){
    return view('layout.disclosure');
  }
  public function customer(){
    return view('layout.customer');
  }

  public function pdf()
  {
    $path = public_path('AML_POLICY.pdf');

    if (file_exists($path)) {
      $filename = 'AML_POLICY.pdf';

      return response()->file($path, ['Content-Disposition' => 'inline; filename="' . $filename . '"']);
    } else {
        // File not found
        abort(404);
    }
  }
}

