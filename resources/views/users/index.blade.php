@extends('users.templates.master')

@section('maincontent')
<div class="row">
    <div class="col-12">
        <h2 class="text-center">Users from {{ $data_from == 'CSV' ? 'CSV' : 'Database' }}</h2>
    </div>
    @if (!empty($data_from))
    <div class="col-12">
        <a href="{!! URL::to('/') !!}/users/{{ $data_from == 'CSV' ? '' : 'fromCSV' }}">See Users from {{ $data_from == 'CSV' ? 'Database' : 'CSV' }}</a>
    </div>
    @endif
    <div class="col-12 col-sm-10">
        @if (Session::has('success'))
        <div class="alert alert-success">
            {!! Session::get('success') !!}
        </div>
        @endif
    </div>
    <div class="col-12 col-sm-2">
        <p class="text-right"><a href="{!! URL::to('/') !!}/users/create" class="btn btn-primary">Add</a></p>
    </div>
    <div class="col">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Preferred Mode of Contact</th>
                    <th>Address</th>
                    <th>Nationality</th>
                    <th>Date of Birth</th>
                    <th>Education</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @if (count($users)>0)
                @foreach ($users as $user)
                    <tr>
                        <td>{!! $user->name !!}</td>
                        <td>{!! $user->gender !!}</td>
                        <td>{!! $user->phone !!}</td>
                        <td>{!! $user->email !!}</td>
                        <td>{!! $user->preferred_mode_contact !!}</td>
                        <td>{!! $user->address !!}</td>
                        <td>{!! $user->nationality !!}</td>
                        <td>{!! $user->date_of_birth !!}</td>
                        <td>{!! $user->education !!}</td>
                        <td><a href="{!! URL::to('/') !!}/users/edit" class="btn btn-success"><span class="fas fa-edit"></span></a> <a href="{!! URL::to('/') !!}/users/delete" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a></td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan="10">No User Found</td>
            </tr>
            @endif
            </tbody>
        </table>
    </div>
</div>
@endsection