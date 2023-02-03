@extends('master')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.17/sweetalert2.min.css">

<style>

    img.center {

        display: block;
        padding-top:25px;
        position: relative;
        left: 70px;
        border-radius: 40px;
    }

    .container-profile{
        background-color: #3e567c;
        margin: 0 auto;
        width: 1100px;
        height: 260px;
        border-radius: 25px;
    }

    .container-form{
        background-color: #a7bbcb;
        margin: 0 auto;
        width: 1100px;
        height: 360px;
        padding-top: 20px;
        margin-top: 20px;
        border-radius: 25px;
    }

    .table-profile{
        width: 600px;
        height: 145px
    }

    .box{
        display:inline-block;
        margin: 0 auto;
        width:33%;
        padding-top:20px;
        padding-left: 25px;
    }

    .ind-profile{
        border: black 1px solid;
    }

    .left-column{

        width: 100px;
        height: 45px;
    }

    .center-column{

        width: 10px;
    }

    .table-form{
        display: table;
        margin-right: auto;
        margin-left: auto;
        border: 1px solid #ccc;
        width: 80%;
    }

    .row-form{
        display: table-row;
        width: auto;
        clear: both;
    }

    .col-form {
        float: left;
        display: table-column;
        width: 200px
    }

    .col-left {
        width:300px;
        text-align: right;
    }

    .col-center{
        width: 50px;
        text-align: center;
    }

    .col-right {
        text-align: left;
    }

    .title-form{
        text-align: center;
        font-weight: bold;
        font-size: 20px;
    }

    .rubricLink{
        text-align: center;
        margin-bottom: auto;
        margin-left: auto;
        margin-right: auto;
        font-size: 14px;
    }


</style>

<p class="h2">Add Industry Evaluation Mark</p>

<div class="container-profile">
    <div class="box">
        <img class="center" src="{{ asset('images/students/'.$data->student_pic) }}" width="200px" height="200px" title="Student Picture" alt="Student Pic"/>
    </div>

    <div class="box">
    <table class="table-profile table table-striped table-dark">
    <tr>
        <td class="left-column">Name</td>
        <td class="center-column">:</td>
        <td>{{$data->student_name}}</td>
    </tr>
    <tr>
        <td class="left-column">Matric ID</td>
        <td class="center-column">:</td>
        <td>{{$data->student_ID}}</td>
    </tr>
    <tr>
        <td class="left-column">Project Title</td>
        <td class="center-column">:</td>
        <td>{{$data->project_title}}</td>
    </tr>
    </table>
    </div>
</div>

<div class="container-form">
    <form action="/indAddMark/{id}/add" method="POST">
        @csrf
        <input type="hidden" name="student_ID" value="{{$data->student_ID}}">
    <p class="title-form">Industry Evaluation</p>
    <div class="rubricLink"><a href="" target="_blank">Click here for marking rubric</a></div>
    <div class="table-form">
        <br>
        <div class="row-form">
            <div class="col-form col-left">Total Mark</div>
            <div class="col-form col-center">=</div>
            <div class="col-form col-right"><input type="number" step="0.01" name="addTotalMark" size="5" id="inputMark"></div>
        </div>
        <br>
        <div class="row-form">
            <div class="col-form col-left">Comment</div>
            <div class="col-form col-center">=</div>
            <div class="col-form col-right"><textarea name="addComment" rows="4" cols="50"></textarea></div>
        </div>
        <br>
    </div>
    <button type="submit" style="float: right; margin-right: 30px; margin-top:20px" class="btn btn-primary" id="saveBtn">Save Mark</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.17/sweetalert2.min.js"></script>

    <script>
        $('#saveBtn').on('click', function(){
            console.log("Incorrect Value");
            var data = $('#inputMark').val();

            if (data == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Empty Mark Value!',
                    text: 'Please Make Sure You Entered Proper Value for the Mark',
                })
            }
            else{
                Swal.fire(
                    'Mark Saved!',
                    'The Mark Value was successfully saved',
                    'success'
                )
            }
        })
    </script>
</div>

@endsection
