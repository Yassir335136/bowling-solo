<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    // custom private variable to remove repeated code and have validation at one place
    private function validationForm($userid = 0): array
    {

        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => [
                'required',
                'email',
                'unique:users,email'
            ],
            // password requirements are 8 characters,capital letter, normal letter and number
            'password' => 'required|string|min:8|regex:/[A-Z]/|regex:/[a-z]/|regex:/[0-9]/',
            'password_repeated' => 'required|same:password',
        ];
    }

    // create methods

    public function create(): View
    {
        return view('employees.create');
    }

    public function store(): RedirectResponse
    {
        // data validation
        request()->validate($this->validationForm());
        // store function
        $data = request()->all();
        $data['role'] = 'Admin';
        user::create($data);
        // Redirect
        return Redirect::route('employees.index')->with('success', 'created successfully.');
    }

    // read methods

    public function index(): View
    {
        $user = User::all();
        return view('employees.index', ['tabledata' => $user]);
    }

    // update methods

    public function edit(string $id): View
    {
        $user = User::find($id);
        return view('employees.edit', ['employee' => $user]);
    }

    public function update(int $id): RedirectResponse
    {
        $user = User::find($id);
        // data validation
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => [
                'required',
                'email',

            ]
        ]);
        // update functionality
        $user->update(request()->all());


        // redirect
        return Redirect::route('employees.index', $user)->with('success', 'updated successfully.');
    }

    // delete methods

    public function destroy(int $id): RedirectResponse
    {
        // this already works because i'm better like that
        $user = User::find($id);
        $user->delete();

        return Redirect::route('employees.index')->with('success', 'deleted successfully.');
    }
}
