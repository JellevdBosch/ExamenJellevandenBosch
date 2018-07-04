<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Account_Status;
use App\Http\Controllers\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = DB::table('users')
            ->orderBy('id', 'asc')
            ->get();
        return view('/admin/accounts/index', ['accounts' => $accounts]);
    }

}
