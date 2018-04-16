@extends('layouts.master')

@section('content')

    <h2>Register here</h2>

    <div>
    	
    	<form id="store" enctype="multipart/form-data" onSubmit="return false">
    		{{ csrf_field() }}
    		<div>
                <label for="name">Name</label>
                <div>
                    <input type="text" name="name" id="name" required autofocus>
                </div>
            </div>

            <div>
                <label for="email">E-Mail Address</label>
                <div>
                    <input type="email" name="email" id="email" required>          
                </div>
            </div>

            <div>
                <label for="password">Password</label>

                <div>
                    <input id="password" type="password" name="password" required>
                </div>
            </div>

            <div>
                <label for="password-confirm">Confirm Password</label>
                <div>
                    <input id="password-confirm" type="password" name="password_confirmation" required>
                </div>
            </div>

            <div>
                <div>
                    <button type="submit" value="store">
                        Register
                    </button>
                </div>
            </div>
    	</form>

    </div>

    <script>
            
            var form = document.getElementById('store');
            var request = new XMLHttpRequest();

            form.addEventListener('submit', function(e)
            {
                e.preventDefault();
                var formdata = new FormData(form);
                request.open('post', "{{env('BACKEND_URL') . '/store'}}");
                request.addEventListener("load", transferComplete);
                
                request.send(formdata);

            });

            function transferComplete(data)
            {
               response = JSON.parse( data.currentTarget.response);
               if(response.success)          
               {          
                window.location.href = "/login";
               }
            } 
    </script>
@stop

