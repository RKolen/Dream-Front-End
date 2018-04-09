@extends('layouts.master')



@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/upload.css') }}">
@stop

@section('content')
	
    <form id="upload" enctype="multipart/form-data" onSubmit="return false">
    	<label class="label">Title: </label>
    	<input type="text" name="title" id="title"><br />
    	<label class="label">Description: </label>
    	<textarea  rows="15" cols="100" name="description" id="description"></textarea><br />
        <label class="label">Category: </label>
            <select id="category_id" name="category_id">
                <option value="1">MMO</option>
                <option value="2">Simulations</option>
                <option value="3">Adventure</option>
                <option value="4">RTS</option>
                <option value="5">Puzzle</option>
                <option value="6">Action</option>
                <option value="7">Stealth Shooter</option>
                <option value="8">Combat</option>
                <option value="9">FPS</option>
                <option value="10">Sports</option>
                <option value="11">RPG</option>
                <option value="12">Educational</option>
            </select><br />
    	<label class="label">Picture: </label><input type="file" name="picture" accept=".jpg"><br />
        <label class="label">Game files: </label><input type="file" name="file" accept=".7z"><br />
        <input class="button" type="submit" value="Upload">
    </form>
    <div id="message"></div>

    <script>
        var form = document.getElementById('upload');
        var request = new XMLHttpRequest();

        form.addEventListener('submit', function(e)
        {
            e.preventDefault();
            var formdata = new FormData(form);
            request.open('post', "{{env('BACKEND_URL') . '/upload'}}");
            request.addEventListener("load", transferComplete);
            
            request.send(formdata);

        });
        function transferComplete(data)
        {
           response = JSON.parse( data.currentTarget.response);
           if(response.success)
           {
            document.getElementById("message").innerHTML = "Successfully uploaded files!";
            window.location.href = "/games/" + response["id"] + "/";
           }
        } 
    </script>
@stop

