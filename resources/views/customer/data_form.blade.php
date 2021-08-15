@extends('layouts.base')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <form action = "" method = "">
                        @csrf
                        <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Enter Your First Name</label>
                                <input type="email" class="form-control" id="fname" name= "fname">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Enter Your last Name</label>  
                                <input type="password" class="form-control" id="lname" name="lname">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Email</label>  
                                <input type="password" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Enter Your Student ID</label>  
                                <input type="password" class="form-control" id="stid" name="stid">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>  
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>          
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection
