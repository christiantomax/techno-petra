
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6KN8PD5T92"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6KN8PD5T92');
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    @if (Session::get('role'))
        $(".btn-logout").click(function(e){

        e.preventDefault();

        $.ajax({
            type:'POST',
            url:"{{ route('logout.post') }}",
            data:{
                "_token": "{{ csrf_token() }}",
            },
            success:function(data){
                if(data.status == 200){
                    swal({
                        title: "Success",
                        text: "Logout success",
                        type: "success",
                        confirmButtonClass: "btn-success",
                        confirmButtonText: "OK",
                        closeOnConfirm: false
                        },
                        function(isConfirm) {
                        if (isConfirm) {
                            window.location.reload();
                        }
                    });
                }else{
                    swal("Fail", data.message, "warning");
                }
            },
            error: function(xhr, textStatus, error) {
                swal(textStatus, error, "warning");
            }
        });
        });
    @else
        $(".btn-login").click(function(e){

            e.preventDefault();

            let data = [
                $("input[name=email-login]").val(),
                $("input[name=password-login]").val(),
            ];

            $.ajax({
                type:'POST',
                url:"{{ route('login.post') }}",
                data:{
                    "_token": "{{ csrf_token() }}",
                    "data_post": {
                        email:data[0],
                        password:data[1]
                    }
                },
                success:function(data){
                    if(data.status == 200){
                        swal({
                            title: "Success",
                            text: "Login Success",
                            type: "success",
                            confirmButtonClass: "btn-success",
                            confirmButtonText: "OK",
                            closeOnConfirm: false
                            },
                            function(isConfirm) {
                            if (isConfirm) {
                                window.location.reload();
                            }
                        });
                    }else{
                        swal("Fail", data.message, "warning");
                    }
                },
                error: function(xhr, textStatus, error) {
                    swal(textStatus, error, "warning");
                }
            });
        });
    @endif
</script>
