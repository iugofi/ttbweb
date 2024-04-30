<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.png') }}"
    type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/adminlogin.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/message.js') }}"></script>

   
</head>



<body>
    <div class="container">
        <div class="login" data-state="">
          
          <form method="post" id="login_form" class="login__form">
            @csrf
            <center>
        <div class="" style="color: red" id="login_save_alert"></div>

            <p class="login__title">TTB Admin Login <br /><span class="login__title--grey">(admin & password)</span></p>
           </center>
            <input type="text" class="form-control" name="signin_email" placeholder="Username"/>
            <input type="password" class="form-control" name="signin_password" placeholder="Password" />
          
            <input  type="submit" id="login_btn" value="Login">
         
           
            
        
        </form>
        
          
        
        </div>
      </div>

      <script>
        $(document).ready(function() {
            $('#login_form').submit(function(e){
                e.preventDefault();
                $('#login_btn').val('please wait..');
                $.ajax({
                    url: '{{ route('admin.signdata')}}',
                    method: 'post',
                    data: $(this).serialize(),
                    success:function(response) {
                        if(response.status === 400)
                        {
                            showError('signin_email', response.messages.signin_email);
                            showError('signin_password', response.messages.signin_password);
                            $('#login_btn').val('Login');
                        }
                        else if (response.status === 401)
                        {
                            $("#login_save_alert").html(showMessage('danger', response.messages));
                            $('#login_btn').val('Sign In');
                        }
                        else
                        {
                            if(response.status === 200 && response.messages === 'success')
                            {
                                window.location='{{route('admin.indexp')}}';
                            }
                            else {
                                // Handle other response statuses or messages
                            }
                        } 
                    },
                    error: function(xhr, status, error) {
                        // Handle AJAX errors here
                    }
                });
            });
        });
    </script>
</body>
</html>