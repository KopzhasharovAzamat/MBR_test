<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function assignRole($userId, $roleName)
    {
        $user = User::find($userId);

        if (!$user) {
            abort(404, 'User not found');
        }

        $user->assignRole($roleName);

        return redirect()->route('user.show', $userId)
            ->with('success', 'Role assigned successfully');
    }
}
