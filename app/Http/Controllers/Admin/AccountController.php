<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditAccountRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $userName = auth()->user()->user_name;
        return view('admin.account.show', compact('userName'));
    }

    /**
     * @return Application|Factory|View
     */
    public function showEditAccountForm()
    {
        return view('admin.account.edit');
    }

    /**
     * @param EditAccountRequest $request
     * @return RedirectResponse
     */
    public function editAccount(EditAccountRequest $request): RedirectResponse
    {
        $inputs = $request->validated();

        $user = User::where('user_name', $inputs['username'])->first();

        if (!$user) {
            Session::flash('error', 'Wrong credentials.');
            return redirect()->back();
        }

        if (!password_verify($request->$inputs['current_password'], $user->password)) {
            Session::flash('error', 'Wrong credentials.');
            return redirect()->back();
        }

        User::where('id', auth()->id())->update([
            'user_name' => $inputs['username'],
            'password' => bcrypt($inputs['password'])
        ]);

        auth()->logout();
        return redirect()->route('admin.login');
    }
}
