<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\gatepass;
use App\Barang;
use App\Gatebar;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;


class GatepassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasrole('admin'))
        {
            $gate = gatepass::all();
            $gatebar = Gatebar::all();
        }elseif(Auth::user()->hasrole('spv'))
        {
            $gate = gatepass::where('status','=','1')->get();
            $gatebar = Gatebar::all();
        }elseif(Auth::user()->hasrole('manager'))
        {
            $gate = gatepass::where('status','=','2')->get();
            $gatebar = Gatebar::all();
        }
        // dd($gate);
        return view('gatepass.index',compact('gate','gatebar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        return view('gatepass.form',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = Barang::all();
        $gate = new gatepass();
        // $gatebar->id_gatepass = $request->get('barang');
        $gate->GO = $request->GO;
        $gate->PO = $request->PO;
        $gate->tgl = $request->tgl;
        $gate->trans_agent = $request->trans_agent;
        $gate->truck = $request->truck;
        $gate->status = '0';
        if($gate->save())
        {
            foreach($request->barang as $key =>$barang)
            {
                // dd($request->all());
                $id_gatepass = $gate->id;
                $gatebar = new Gatebar();
                $gatebar->gatepass_id =  $id_gatepass;
                $gatebar->barang_id =  $request->barang[$key];
                $gatebar->quantity = $request->quantity[$key];
                $gatebar->remarks = $request->remarks[$key];
              
                $gatebar->save();
              }
            return redirect('gatepass');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gate = gatepass::findOrFail($id);
        $gatebar = Gatebar::where('gatepass_id',$id)->get();
        $data = [
            'gate' => $gate,
            'gatebar' => $gatebar
        ];
        // dd($gatebar);
        // dd($data);
        return view('gatepass/detail',compact('gate','gatebar','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function paraf(Request $request)
    {
        if(Auth::user()->hasrole('admin'))
        {
            $imagedata = base64_decode($request->img_data);
            $filename = md5(date("dmYhisA"));
            $paraf = '../public/uploads/paraf_authorized/'.$filename.'.png';
            file_put_contents($paraf,$imagedata);
    
            $gatepass = gatepass::find($request->gatepass_id);
            $gatepass->authorized_sign = 'uploads/paraf_authorized/'.$filename.'.png';
            $gatepass->status = '1';
            if($gatepass->save())
            {
                return response()->json([
                    'fail' => false,
                ]);
            }
        }elseif(Auth::user()->hasrole('spv'))
        {
            $imagedata = base64_decode($request->img_data);
            $filename = md5(date("dmYhisA"));
            $paraf = '../public/uploads/paraf_spv/'.$filename.'.png';
            file_put_contents($paraf,$imagedata);
    
            $gatepass = gatepass::find($request->gatepass_id);
            $gatepass->despatch_spv = 'uploads/paraf_spv/'.$filename.'.png';
            $gatepass->status = '2';
            if($gatepass->save())
            {
                return response()->json([
                    'fail' => false,
                ]);
            }
        }else
        {
            $imagedata = base64_decode($request->img_data);
            $filename = md5(date("dmYhisA"));
            $paraf = '../public/uploads/paraf_manag/'.$filename.'.png';
            file_put_contents($paraf,$imagedata);
    
            $gatepass = gatepass::find($request->gatepass_id);
            $gatepass->despatch_manag = 'uploads/paraf_manag/'.$filename.'.png';
            $gatepass->status = '3';
            if($gatepass->save())
            {
                return response()->json([
                    'fail' => false,
                ]);
            }
        }
        
        
    }
}
