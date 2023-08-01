<!DOCTYPE html>

<html>

@include('admin.layouts.master')

<style>
    .blog .row {
        padding: 1rem;
    }

    .blog .row span {
        font-size: larger;
    }
</style>


<head>



    <meta charset="utf-8">

    <script src="/https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="/stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</head>



<body>

    @include('admin.layouts.side')



    <div class="wrapper wrapper-content">

        <div class="container">

            <div class="col-lg-12">

                <div class="card">

                    <div class="card-body">

                        <div class="card-body">
                            @if(isset($flag))
                            <h1> Edit BLOG POSTS</h1>
                            @else
                            <h1> Add Blog</h1>
                            @endif
                            @if(session()->has('messages'))
                            <div class="alert alert-success">
                                {{ session()->get('messages') }}
                            </div>
                            @endif
                            <table>
                                @if(isset($flag))

                                <form action="/updateblog/{{$item->id}}" method="POST" enctype="multipart/form-data">

                                    @else
                                    <form action="/add-blog" id="form1" method="POST" enctype="multipart/form-data">
                                    @endif

                                        @csrf
                                        <div class="blog">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    @if(isset($flag))

                                                    <span>Edit Title</span>

                                                    @else

                                                    <span>Title</span>

                                                    @endif
                                                    <input type="text" name="name" id="b_name" placeholder="Enter title" value="{{$item->name ?? old('name') }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <span>Content</span>
                                                    <textarea name="description" id="b_des" placeholder="Enter Description" class="form-control">{{$item->description ?? old('description') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                @if(isset($flag))

                                                <span></span><img src="{{asset('/uploads/'.$item['image'])}}" width="200px" height="100px "></span>

                                                @else
                                                <span><img class="view-image hidden"></span>

                                                @endif

                                                <div class="row">
                                                    @if(isset($flag))


                                                    <span>Edit Image</span>

                                                    @else

                                                    <span>Image</span>

                                                    @endif
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-3">

                                                        <button type="submit" name="submit" value="Save" class="form-control">@if(isset($flag)) Update @else Sumbit @endif</button>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <button type="" name="" id="btn" value="cancel" style="color: black;" class="form-control">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">

                <div class="col-lg-12">

                    <div class="ibox float-e-margins">

                        <div class="ibox-title">

                            <h5> Blogs</h5>

                            <div class="ibox-tools">

                                <a class="collapse-link">

                                    <i class="fa fa-chevron-up"></i>

                                </a>

                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                                    <i class="fa fa-wrench"></i>

                                </a>

                                <ul class="dropdown-menu dropdown-user">

                                    <li><a href="#">Config option 1</a>

                                    </li>

                                    <li><a href="#">Config option 2</a>

                                    </li>

                                </ul>

                                <a class="close-link">

                                    <i class="fa fa-times"></i>

                                </a>

                            </div>

                        </div>

                        <div class="ibox-content">



                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover dataTables-example">

                                    <thead>

                                        <tr>

                                            <th>Id</th>

                                            <th> Name</th>


                                            <th>Content</th>

                                            <th>Image</th>
                                            <th>Action</th>



                                        </tr>

                                    </thead>

                                    <tbody>
                                        @php
                                        $sl=1;
                                        @endphp
                                        @foreach($blogs as $val)
                                        <tr>
                                            <td>{{$sl++}}</td>

                                            <td>{{$val->name}}</td>
                                            <td>{{$val->description}}</td>
                                            <td><img src="{{url('Uploads')}}/{{$val['image']}}" height="100" width="200px"></td>

                                            <td><button class="btn"><a href="{{url('editblog')}}/{{$val->id}}" class="fa fa-edit"> Edit</a></button>
                                                &nbsp
                                                <button class="btn"><a href="delete/{{$val->id}}" class="fa fa-trash">Delete</a> </button>
                                            </td>
                                        <tr>
                                            @endforeach



                                            </tfoot>

                                </table>

                            </div>



                        </div>

                    </div>

                </div>

            </div>

        </div>


        @include('admin.layouts.footer')


        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function() {

                function applyswalfire(text) {
                    Swal.fire({
                        title: 'Error!',
                        text: text,
                        icon: 'error',
                    })

                }

                $("#btn").click(function() {

                    var veh_date = $('#b-name').val();
                    var veh_num = $('#b-des').val();


                    if (b - name == "") {
                        applyswalfire('Please enter the title');
                        return false;
                    }

                    if (b - des == "") {
                        applyswalfire('Please enter the description');
                        return false;
                    }

                    $('#form1').submit();
                    return true;
                });
            });
        </script>


</body>




</html>