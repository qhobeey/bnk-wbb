<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminModuleController extends Controller
{
    
    public function dashboard(Request $request)
    {
        $account = Account::first();
        $transactions = Transaction::orderBy('date', 'desc')->get();
        return view('admin.pages.dashboard', compact('account', 'transactions'));
    }
    public function transfer(Request $request)
    {
        return view('admin.pages.transfer');
    }
    public function login(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'email' => 'required', 'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        $request->session()->flash('alert-danger', 'Error logging in');
        return redirect()->route('frontend.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
