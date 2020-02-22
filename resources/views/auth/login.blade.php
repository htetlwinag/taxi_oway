@extends('layout.app')

@section('title') POS @stop

@section('body')
<div class="container">
    <div class="row">
        <div class="col-sm-4 offset-4">
            <div class="card shadow">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop