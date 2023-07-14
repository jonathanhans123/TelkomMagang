<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataHost;
use App\Models\User;
use App\Models\DataInet;
use App\Models\DetailOdp;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function Logout(){
        Session::forget('cekuser');
        return redirect('/');
    }
    public function Login(){
        Session::forget('cekuser');
        return view('login');
    }
    public function doLogin(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = User::where('username',$request->username)->first();

        if ($user == null){
            return redirect()
            ->back()
            ->withErrors(["error"=>"Username tidak terdaftar"])
            ->withInput();
        }
        if ($user->password != $request->password){
            return redirect()
            ->back()
            ->withErrors(["error"=>"Password salah!"])
            ->withInput();
        }
        Session::put('cekuser',"cekuser");
        return redirect("/host");
    }
    public function AdminSearchHost(){
        return view('searchhost');
    }

    public function AdminSearch(Request $request){
        $param = [];
        $kolom = $request->input("kolom",[]);

        $rules = [
            'kolom' => 'required',
        ];

        $validatedData = $request->validate($rules);
        $query = DataHost::query();
        if (in_array('hostname',$kolom)){
            $request->validate([
                'keywordhostname' => ["required"],
            ]);
            $query->where('hostname','LIKE',"%$request->keywordhostname%");
        }
        if (in_array('label-odc',$kolom)){
            $request->validate([
                'keywordlabel-odc' => ["required"],
            ]);
            $query->where('label-odc','LIKE',"%$request->{'keywordlabel-odc'}%");
        }
        if (in_array('ea-rack',$kolom)){
            $request->validate([
                'keywordea-rack' => ["required"],
            ]);
            $query->where('ea-rack','LIKE',"%$request->{'keywordea-rack'}%");
        }
        if (in_array('oa-rack',$kolom)){
            $request->validate([
                'keywordoa-rack' => ["required"],
            ]);
            $query->where('oa-rack','LIKE',"%$request->{'keywordoa-rack'}%");
        }
        // dd($query);
        $param["DataHost"] = $query->get();

        return view('listhost',$param);

        // $keyword = $request->input("keyword");
        // $kolom = $request->input("kolom",[]);
        // if ($request->input("search")!="Advanced Search"){
        //     if ($keyword==""){
        //         return redirect()->back()->withErrors(['error' => 'Keyword harus diiisi.']);
        //     }

        //     $param = [];
        //     $query = DataHost::query();
        //     foreach($kolom as $k => $value){
        //         $query->where($value,'LIKE',"%{$keyword}%");
        //     }
        //     $param["DataHost"] = $query->get();
        // }else{
        //     $slot = $request->input("slot");
        //     $port = $request->input("port");
        //     $easlot = $request->input("ea-slot");
        //     $eaport = $request->input("ea-port");
        //     $oaslot = $request->input("oa-slot");
        //     $oaport = $request->input("oa-port");
        //     if ($keyword==""||
        //         ($slot==""&&$port==""&&
        //         $easlot==""&&$eaport==""&&
        //         $oaslot==""&&$oaport=="")){
        //             return redirect()->back()->withErrors(['error' => 'Keyword dan salah satu slot atau port harus diiisi.']);

        //     }

        //     $param = [];
        //     $query = DataHost::query();
        //     foreach($kolom as $k => $value){
        //         $query->where($value,'LIKE',"%{$keyword}%");
        //     }

        //     if ($slot!=""){
        //         $query->where("slot",$slot);
        //     }
        //     if ($port!=""){
        //         $query->where("port",$port);
        //     }
        //     if ($easlot!=""){
        //         $query->where("ea-slot",$easlot);
        //     }
        //     if ($eaport!=""){
        //         $query->where("ea-port",$eaport);
        //     }
        //     if ($oaslot!=""){
        //         $query->where("oa-slot",$oaslot);
        //     }
        //     if ($oaport!=""){
        //         $query->where("oa-port",$oaport);
        //     }

        //     $param["DataHost"] = $query->get();
        // }
    }
    public function AdminHostList(Request $request){
        $param = [];
        $param["DataHost"] = DataHost::get();
        return view("listallhost",$param);
    }
    public function AdminHostAdd(Request $request){
        return view("addhost");
    }
    public function doAdminHostAdd(Request $request){
        $validator = Validator::make($request->all(), [
            'hostname' => [
                'required',
                'max:15',
                Rule::unique('data_host')->where(function ($query) use ($request) {
                    return $query->where('label-odc', $request->input('label-odc'))
                                 ->where('slot', $request->input('slot'))
                                 ->where('port', $request->input('port'));
                }),
            ],
            'label-odc' => 'required|max:11',
            'slot' => 'required|integer',
            'port' => 'required|integer',
            'ea-rack' => 'required|max:4',
            'ea-slot' => 'required|integer',
            'ea-port' => 'required|integer',
            'ea-otb' => 'required|integer',
            'oa-rack' => 'required|max:5',
            'oa-slot' => 'required|integer',
            'oa-port' => 'required|integer',
            'oa-otb' => 'required|max:5',
        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $host = new DataHost();
        $host->hostname = $request->input('hostname');
        $host->{'label-odc'} = $request->input('label-odc');
        $host->slot = $request->input('slot');
        $host->port = $request->input('port');
        $host->{'ea-rack'} = $request->input('ea-rack');
        $host->{'ea-slot'} = $request->input('ea-slot');
        $host->{'ea-port'} = $request->input('ea-port');
        $host->{'ea-otb'} = $request->input('ea-otb');
        $host->{'oa-rack'} = $request->input('oa-rack');
        $host->{'oa-slot'} = $request->input('oa-slot');
        $host->{'oa-port'} = $request->input('oa-port');
        $host->{'oa-otb'} = $request->input('oa-otb');
        $host->{'jumlah-pelanggan'} = 0;

        // Save the new host
        $host->save();

        redirect('/host/list')->with('success',"Data successfully added");
    }
    public function AdminHostDetail(Request $request){
        $param = [];
        $host = DataHost::where("no",$request->id)->first();
        $detail = DetailOdp::where("hostname",$host->hostname)
        ->where("port",$host->port)
        ->where("slot",$host->slot)->get();
        $inet = DataInet::where("hostname",$host->hostname)
        ->where("port",$host->port)
        ->where("slot",$host->slot)->get();
        // dd($host);
        $param["DataHost"] = $host;
        $param["DetailOdp"] = $detail;
        $param["DataInet"] = $inet;
        return view('detailhost',$param);
    }
    public function AdminHostEdit(Request $request){
        $param = [];
        $host = DataHost::where("no",$request->id)->first();
        $detail = DetailOdp::where("hostname",$host->hostname)
        ->where("port",$host->port)
        ->where("slot",$host->slot)->get();
        $inet = DataInet::where("hostname",$host->hostname)
        ->where("port",$host->port)
        ->where("slot",$host->slot)->get();
        // dd($host);
        $param["DataHost"] = $host;
        $param["DetailOdp"] = $detail;
        $param["DataInet"] = $inet;
        return view('edithost',$param);
    }
    public function doAdminHostEdit(Request $request){
        $validator = Validator::make($request->all(), [
            'hostname' => [
                'required',
                'max:15',
                Rule::unique('data_host')->ignore($request->id, 'no')->where(function ($query) use ($request) {
                    return $query->where('label-odc', $request->input('label-odc'))
                                 ->where('slot', $request->input('slot'))
                                 ->where('port', $request->input('port'));
                }),
            ],
            'label-odc' => 'required|max:11',
            'slot' => 'required|integer',
            'port' => 'required|integer',
            'ea-rack' => 'required|max:4',
            'ea-slot' => 'required|integer',
            'ea-port' => 'required|integer',
            'ea-otb' => 'required|integer',
            'oa-rack' => 'required|max:5',
            'oa-slot' => 'required|integer',
            'oa-port' => 'required|integer',
            'oa-otb' => 'required|max:5',
        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        $host = DataHost::find($request->id);
        $host->hostname = $request->input('hostname');
        $host->{'label-odc'} = $request->input('label-odc');
        $host->slot = $request->input('slot');
        $host->port = $request->input('port');
        $host->{'ea-rack'} = $request->input('ea-rack');
        $host->{'ea-slot'} = $request->input('ea-slot');
        $host->{'ea-port'} = $request->input('ea-port');
        $host->{'ea-otb'} = $request->input('ea-otb');
        $host->{'oa-rack'} = $request->input('oa-rack');
        $host->{'oa-slot'} = $request->input('oa-slot');
        $host->{'oa-port'} = $request->input('oa-port');
        $host->{'oa-otb'} = $request->input('oa-otb');

        // Save the updated host
        $host->save();

        return redirect('/host/detail/' . $request->id)->with('success', 'Host updated successfully');
    }

    public function AdminInternetDetail(Request $request){
        $param = [];
        $host = DataHost::find($request->id);
        $detail = DetailOdp::where('onu-id',$request->{'onuid'})
        ->where("hostname",$host->hostname)
        ->where("port",$host->port)
        ->where("slot",$host->slot)->first();
        $internet = DataInet::where('onu-id',$request->{'onuid'})
        ->where("hostname",$host->hostname)
        ->where("port",$host->port)
        ->where("slot",$host->slot)->first();

        $param["DataHost"] = $host;
        $param["DetailOdp"] = $detail;
        $param["DataInet"] = $internet;

        return view('detailinternet',$param);
    }
}
