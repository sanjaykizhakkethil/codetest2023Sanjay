<head>

    <meta charset="utf-8">

    <meta name="/admin/viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin</title>

    <link href="{{url('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{url('admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{url('admin/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">

    <link href="{{url('admin/css/animate.css')}}" rel="stylesheet">

    <link href="{{url('admin/css/style.css')}}" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
    <link href="{{url('css/plugins/summernote/summernote.css')}}" rel="stylesheet">
    <link href="{{url('css/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet">

    <style>
        input[type=button],

        input[type=submit],

        input[type=reset] {

            background-color: #488AC7;

            border: none;

            color: white;

            padding: 8px 32px;

            text-decoration: none;

            margin: 2px 2px;

            cursor: pointer;

        }
    </style>

</head>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script>

        $(document).ready(function(){

          function applyswalfire(text){
            Swal.fire({
                    title: 'Error!',
                    text: text,
                    icon: 'error',
            })
     
          }

          $("#btn").click(function(){
    
            var name=$('#b_name').val();
            var des=$('#b_des').val();
            
            
            if(name==""){
              applyswalfire('Please enter the title');
              return false;
            }

            if(des==""){
              applyswalfire('Please enter the description');
              return false;
            }

            $('#form1').submit();
            return true;
          });
        });
      </script>


<script>

$(document).ready(function(){

  function applyswalfire(text){
    Swal.fire({
            title: 'Error!',
            text: text,
            icon: 'error',
    })

  }

  $("#btn1").click(function(){

   
    var veh_name=$('#veh_name').val();
    
    if(veh_name==""){
      applyswalfire('Please enter the Name');
      return false;
    }

    
    $('#form2').submit();
    return true;
  });
});
</script>