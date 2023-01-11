<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterTenantRequest;
use App\Models\Tenant;
use Illuminate\Http\Request;

class RegisterTenantController extends Controller
{
    //
    public function create(){

        return view('tenant.register');

    }
    public function store(RegisterTenantRequest $request){

        $tenant = Tenant::create($request->validated());
       $tenant->domains()->create(['domain'=>$request->domain]);
       dd($tenant);
       return redirect(tenant_route($tenant->domains->first()->domain,'tenant.login'));

   }

}
