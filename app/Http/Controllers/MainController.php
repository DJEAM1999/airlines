<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\flights;
use App\partners;
use App\reservation;
use App\User;
use Auth;

class MainController extends Controller
{
    public function Index()
    {
        $show=flights::with('partnerid')->latest()->get();
        return view('index',compact('show'));
    }

    public function Requstes()
    {
        $show=reservation::with('user','flighte.partnerid')->get();

        // dd($show);
        return view('req',compact('show'));
    }

    public function Categories()
    {
        $user_reservation = reservation::where('user_id','=',Auth::id())->get();
        $show=flights::all();
        return view('categories',compact('show','user_reservation'));
    }

    public function Users()
    {
        $show=partners::all();
        return view('users',compact('show'));
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

    public function delpar($id)
    {
        $del=partners::find($id);
        $del->delete();
        return redirect()->back();
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
        $ad->Discreption=request('DIC');
        $ad->pic=request()->file('pic') ? request()->file('pic')->store('public') : null;
        $ad->save();
        return redirect('/home');
    }

    public function editFlight($id)
    {
        $flight = flights::with('partnerid')->find($id);
        // dd($flight);
        $pr=partners::all();
        return view('editflight',compact('flight','pr'));
    }
    public function editPartner($id)
    {
        $par = partners::find($id);
        return view('editpartner',compact('par'));
    }
    public function updatePartner($id)
    {
        $any = partners::find($id);
        $any->name=request('name');
        $any->emil=request('email');
        $any->Discreption=request('DIC');
        if(request()->file('pic'))
        {
            $any->pic=request()->file('pic')->store('public');
        }
        return redirect()->back()->with('message', 'edited succussfuly');
    }
    public function updateFlight($id)
    {
        $any= flights::find($id);
        $any->Num_flight=request('Fnum');
        $any->From=request('From');
        $any->To=request('To');
        $any->Price=request('Price');
        $any->Partner=request('Part');
        $any->Discreption=request('DIC');
        $any->Date=request('Date');
        $any->Time=request('Time');
        $any->save();
        return redirect()->back()->with('message', 'edited succussfuly');

    }
    public function searchPartner(Request $request)
    {
        $search = $request->input('searchF');
        $show = partners::query()->where('name','LIKE',"%{$search}%")->get();
        if($show->isEmpty())
        {
            return redirect()->back()->with('message', 'NOT MATCH');
        }
        else
        {
            return view('users',compact('show'));
        }
    
    }   

    public function searchFlight(Request $request)
    {
        $search = $request->input('searchF');
        $show = flights::query()->where('Num_flight','LIKE',"%{$search}%")->with('partnerid')->get();
        if($show->isEmpty())
        {
            return redirect()->back()->with('message', 'NOT MATCH');
        }
        else
        {
            return view('categories',compact('show'));
        }       
    
    }   

    public function reservation($id)
    {
        
        
        try {
            $result = DB::transaction(function () use($id) {
                $user = Auth::user();
                flights::find($id)->users()->attach($user);
                return true;
            });
            if($result === true) {
                return back();
            }
        }
        catch (\Throwable $e) {
            return redirect('/');
            // Do something with your exception
        }
        
    }   

    public function reservationdel($id)
    {
        $del=reservation::find($id);
        $del->delete();
        return redirect()->back();
    }
}
