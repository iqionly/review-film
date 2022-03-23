@extends('layouts.master');

@section('title')
    table
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
            <th style="width: 10px;">#</th>
            <th>Task</th>
            <th>Progress</th>
            <th style="width: 40px;">Label</th>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>Update software</td>
                <td>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;"></div>
                    </div>
                </td>
                <td><span class="badge bg-success">25%</span></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Update software</td>
                <td>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 55%;"></div>
                    </div>
                </td>
                <td><span class="badge bg-info">55%</span></td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Update software</td>
                <td>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;"></div>
                    </div>
                </td>
                <td><span class="badge  bg-warning">75%</span></td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Update software</td>
                <td>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 95%;"></div>
                    </div>
                </td>
                <td><span class="badge bg-danger">95%</span></td>
            </tr>
        </tbody>
    </table>
@endsection