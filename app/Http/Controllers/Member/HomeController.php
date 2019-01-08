<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $temperatures = \auth()->user()->temperatures()->orderBy('created_at','desc')->limit(20)->get();

        $humdities = \auth()->user()->humidities()->orderBy('created_at','desc')->limit(20)->get();

        $label1 = [];
        $data1 = [];

        $label2 = [];
        $data2 = [];

        foreach ($temperatures as $temperature) {
            $label1[] = $temperature->created_at->format('h:i');
            $data1[] = $temperature->value;
        }

        foreach ($humdities as $humdity) {
            $label2[] = $humdity->created_at->format('h:i');
            $data2[] = $humdity->value;
        }

        $label1 = array_reverse($label1);
        $label2  = array_reverse($label2);

        $data1 = array_reverse($data1);
        $data2 = array_reverse($data2);

        $property = \auth()->user()->property;

        return view('member.home',compact('label1','label2','data1','data2','property'));
    }
    public function disconnect() {
        Auth::logout();
        return redirect()->route('guest.login');
    }

    public function settings() {
        $property = \auth()->user()->property;
        return view('member.settings',compact('property'));
    }

    public function security() {
        $securities = \auth()->user()->securities()->get();
        return view('member.security',compact('securities'));
    }

}
