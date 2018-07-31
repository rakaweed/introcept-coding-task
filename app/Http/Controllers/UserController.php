<?php

namespace App\Http\Controllers;

use Validator;
use Session;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id')->get();
        return view('users.index', ['users' => $users]);
    }

    public function usersFromCSV()
    {
        // $csvFile = fopen('./data/usersLists.csv', 'r')?true:false;
        $filename = './data/usersList.csv';
        
        $users = array();
        
        if (file_exists($filename)) {
            $header = null;

            if (($handle = fopen($filename, 'r')) !== false) {
                while (($row = fgetcsv($handle, 1000, ',')) !== false) {
                    if (!$header)
                        $header = $row;
                    else
                        $users[] = array_combine($header, $row);
                }
                fclose($handle);
            }
        }
        $users = json_decode(json_encode($users));
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'gender' => 'required|string',
            'phone' => 'required|unique:tbl_users,phone',
            'email' => 'required|email|unique:tbl_users,email',
            'address' => 'required',
            'nationality' => 'required|string',
            'date_of_birth' => 'required',
            'education' => 'required',
            'preferred_mode_contact' => 'required|string'
        ]);

        /* Save to database */
        /*$data = $request->all();
        User::create($data);
        Session::flash('success', $data['name'] . ' added successfully!');
        return redirect('users');*/
        /* Save to database */

        /* Save to CSV File */
        $data_header = ['name', 'gender', 'phone', 'email', 'address', 'nationality', 'date_of_birth', 'education', 'preferred_mode_contact'];
        $data = $request->only($data_header);
        $data_values = array_values($data);
        $filename = './data/usersList.csv';

        // If the file does not exist, create it and write the headers
        if (!file_exists($filename)) {
            if (($handle = fopen($filename, 'w')) !== false) {
                fputcsv($handle, $data_header);
                fclose($handle);
            }
        } 

        // Append the new data to the existing CSV file
        if (($handle = fopen($filename, 'a')) !== false) {
            fputcsv($handle, $data_values);
            fclose($handle);
        }

        Session::flash('success', $data['name'] . ' added to CSV successfully!');
        return redirect('usersFromCSV');
        /* Save to CSV File */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
