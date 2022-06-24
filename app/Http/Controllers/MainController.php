<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\flights;
use App\partners;

class MainController extends Controller
{
    public function Index()
    {
        $show=flights::with('partnerid')->latest()->take(4)->get();
        return view('index',compact('show'));
    }

    public function Contest_Details()
    {
        return view('contest-details');
    }

    public function Categories()
    {
        $show=flights::all();
        return view('categories',compact('show'));
    }

    public function Users()
    {
        return view('users');
    }

    public function Contest()
    {
        return view('contests');
    }

    public function Add()
    {
        $pr=partners::all();
        return view('addflight',compact('pr'));
    }

    public function AddToDB()
    {
        $any=new flights;
        $any->Num_flight=request('Fnum');
        $any->From=request('From');
        $any->To=request('To');
        $any->Price=request('Price');
        $any->Partner=request('Part');
        $any->Discreption=request('DIC');
        $any->Date=request('Date');
        $any->Time=request('Time');
        $any->save();
        return redirect('/home');
    }

    public function DelFoDB($id)
    {
        $del=flights::find($id);
        $del->delete();
        return redirect('/home');
    }

    public function partner()
    {
        return view('/addpartners');
    }

    public function Addpart()
    {
        $ad=new partners;
        $ad->name=request('name');
        $ad->email=request('email');
        $ad->pic=request()->file('pic') ? request()->file('pic')->store('public') : null;
        $ad->save();
        return redirect('/home');
    }
}
