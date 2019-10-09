<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;


class UserController extends Controller
{
    /** 
     * Get the active users
     * 
     * @return \Illuminate\Http\Response 
     */
    public function getUsers(Request $request, $status = "active")
    {
        $users = User::select(['name', 'email'])
            ->when($status == "all", function ($query) {
                return $query->withTrashed();
            })
            ->when($status == "inactive", function ($query) {
                return $query->onlyTrashed();
            })
            ->get();

        return response()->json(['users' => $users], 200);
    }

    /** 
     * Remove user users
     * 
     * @return \Illuminate\Http\Response 
     */
    public function deleteUser(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        if ($input['email'] == Auth::user()->email) {
            return response()->json(['error' => 'Forbidden action'], 401);
        }

        $success = User::where('email', $input['email'])->delete();
        return response()->json(['success' => $success], 200);
    }
}
