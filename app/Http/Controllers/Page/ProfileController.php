<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::guard('employee')->user();

        $appliedJobs = $user->applied_jobs()->filterOn()->paginate(10);

        return view('pages.employees.profile.index', compact('user', 'appliedJobs'));
    }

    public function savedJobs()
    {
        $user = Auth::guard('employee')->user();
        $savedJobs = $user->job_posts()->filterOn()->paginate(10);
        return view('pages.employees.profile.saved-jobs', compact('user', 'savedJobs'));
    }

    public function editProfile()
    {
        $user = Auth::guard('employee')->user();
        return view('pages.employees.profile.edit', compact('user'));
    }

    public function changePassword()
    {
        $user = Auth::guard('employee')->user();
        return view('pages.employees.profile.change-password', compact('user'));
    }

    public function changeInfo(Request $request)
    {
        $user = Employee::findOrFail(Auth::guard('employee')->id());

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'required|digits:11|unique:users,phone,' . $user->id
        ]);

        $user->update($request->only(['name', 'email', 'phone', 'desc']));

        return redirect()->back()->with('message', 'Profile Updated.');
    }

    public function updatepassword(Request $request)
    {
        $currentUser = Employee::findOrFail(Auth::guard('employee')->id());
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'new_confirm_password' => 'required_with:new_password|same:new_password|min:8',
        ]);

        if (!$currentUser || !Hash::check($request->current_password, $currentUser->password)) {
            throw ValidationException::withMessages([
                'credentials' => 'These credentials do not match our records.',
            ]);
        } else {
            $currentUser->password = bcrypt($request->new_password);
            $currentUser->update();

            // login again
            Auth::guard('employee')->logout();
            return redirect()->route('employee.login')->with('message', "Successfully Changed.Please Login Again");
        }
    }
}
