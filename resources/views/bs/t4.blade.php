@extends('layouts.bs')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            table
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                <tr>
                    <th>name</th>
                    <th>gender</th>
                    <th>age</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>andy</td>
                    <td>男</td>
                    <td>28</td>
                </tr>
                <tr>
                    <td>tomy</td>
                    <td>男</td>
                    <td>29</td>
                </tr>
                <tr>
                    <td>Lily</td>
                    <td>女</td>
                    <td>23</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@stop
