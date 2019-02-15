<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vendor;

class VendorController extends Controller
{
    public function index()
    {
    	$page = 'Pages.Vendor.vendor';
      $vendor = Vendor::all();
      return view($page)->with(compact('vendor'));
    }

    public function destroy($id)
    {
      $vendor = Vendor::findOrFail($id);
      $vendor->delete();
      return redirect()->route('vendor.index')->with('alert-success','Data berhasi dihapus!');
    }

        public function vendorStatus(Request $request, $id){
          $vendorStatus = Vendor::findOrFail($id);
          if($vendorStatus->status == 0 || null){
            $vendorStatus->status = $request->status = 1;
            $vendorStatus->save();
           return redirect()->route('vendor.index');
          }
          else {
            $vendorStatus->status = $request->status = 0;
            $vendorStatus->save();
            return redirect()->route('vendor.index');
          }
        }
}
