<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataUser = User::with('detail')->get();
        $title = 'User Management';

        return view('admin.user.index', compact('dataUser', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add User";
        return view("admin.user.create", [
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:5',
            'password' => 'required',
            'email' => 'required|email',
            'role' => 'required|in:admin,super,user',
            'status' => 'required|in:0,1',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'phone' => 'required|string|max:20',
            'address1' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'photo' => 'nullable|file|image|max:2048',
            'noted' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        DB::beginTransaction();

        try {
            $user = User::create([
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'email' => $request->email,
                'role' => $request->role,
                'status' => $request->status,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $detailUser = new DetailUser([
                'iduser' => $user->id,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'noted' => $request->noted,
            ]);

            // Handle file upload if there's a photo
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('user/photo', 'public');
                $detailUser->photo = $photoPath;
            }

            $detailUser->save();

            DB::commit();

            return redirect()->route('user.index')->with('info', 'User has been added successfully.');
        } catch (\Exception $e) {
            DB::rollback();

            return back()->withErrors(['error' => 'Failed to add user. Please try again.'])->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with('detail')->findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:5',
            'password' => 'nullable|min:6',
            'email' => 'required|email',
            'role' => 'required|in:admin,super,user',
            'status' => 'required|in:0,1',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'phone' => 'required|string|max:20',
            'address1' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'photo' => 'nullable|file|image|max:2048',
            'noted' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        DB::beginTransaction();

        try {
            $user = User::findOrFail($id);
            $user->update([
                'username' => $request->username,
                'password' => $request->password ? bcrypt($request->password) : $user->password,
                'email' => $request->email,
                'role' => $request->role,
                'status' => $request->status,
                'updated_at' => Carbon::now(),
            ]);

            $detailUser = DetailUser::where('iduser', $user->id)->first();
            $detailUser->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'noted' => $request->noted,
            ]);

            // Handle file upload if there's a new photo
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('photos', 'public');
                $detailUser->photo = $photoPath;
            }

            $detailUser->save();

            DB::commit();

            return redirect()->route('user.index')->with('info', 'User has been updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();

            return back()->withErrors(['error' => 'Failed to update user. Please try again.'])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('info', 'User has been deleted successfully.');
    }
}
