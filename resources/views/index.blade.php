<!--header-->
@include('fe.layouts.master')

<style>
    /* Blogs */
    .blogs {
        padding: 80px 0;
    }

    .blogbox {
        margin: 10px 0 0 0;
    }

    .blogbox img {
        width: 100%;
        border-radius: 7px;
        margin: 0 0 15px 0;
    }

    .blogbox h4 {
        font-size: 16px;
        text-align: left;
        font-weight: 700;
        line-height: 25px;
        margin: 0;
        letter-spacing: .4px;
        padding: 0 0 7px 0;
        color: #333;
        -webkit-transition: .4s;
        -moz-transition: .4s;
        -o-transition: .4s;
        transition: .4s;
    }

    .blogbox:hover h4 {
        color: #92c63e;
    }

    .blogbox p {
        margin: 0;
        padding: 0;
        text-align: left;
    }

    .blogs .owl-dots,
    .services .owl-dots {
        display: none;
    }

    .blogs .owl-nav {
        top: -50px;
        margin: 0;
        width: auto;
        position: absolute;
        right: 0;
    }

    .blogs .owl-carousel .owl-nav button.owl-next {
        right: 0;
        position: absolute;
        width: 30px;
        background: #92c63e;
        color: #fff;
        border-radius: 5px;
        font-size: 30px;
        line-height: 25px;
        padding: 0 0 5px 0 !important;
        outline: none;
        opacity: .6;
        -webkit-transition: .4s;
        -moz-transition: .4s;
        -o-transition: .4s;
        transition: .4s;
    }

    .blogs .owl-carousel .owl-nav button.owl-prev {
        right: 36px;
        position: absolute;
        width: 30px;
        background: #92c63e;
        color: #fff;
        border-radius: 5px;
        font-size: 30px;
        line-height: 25px;
        padding: 0 0 5px 0 !important;
        outline: none;
        opacity: .6;
        -webkit-transition: .4s;
        -moz-transition: .4s;
        -o-transition: .4s;
        transition: .4s;

    }

    .blog-inner {
        text-align: center;
    }

    .blog-inner p {
        text-align: center;
    }

    .blog-inner .blog-box {
        border: 6px solid #cccccc59;
        border-radius: 10px;
        padding: 17px;
        /* background-color: #fff6f6; */
        -webkit-box-shadow: 0 10px 60px 0 rgb(31 34 120 / 10%);
        -moz-box-shadow: 0 10px 60px 0 rgb(31 34 120 / 10%);
        box-shadow: 0 10px 60px 0 rgb(31 34 120 / 10%);
    }

    /* Inner Blog */
    .button{
        color: #000000;
    }
</style>



<section class="inner-content sppd pb-5">
    <div class="container">
        <h2 class="title-inner text-center mb-2">BLOG POST MANAGEMENT </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a ante sit amet quam aliquet sollicitudin. Suspendisse dapibus turpis faucibus urna consectetur efficitur. Maecenas sit amet odio massa. Pellentesque facilisis sit amet velit eu pellentesque. Vivamus non hendrerit sem. Praesent a leo vitae dui molestie porta sit amet ac ipsum. Nam at convallis lorem, nec ultricies erat.</p>
    </div>
</section>
<section>
    <div class="container">
        <button ><a href="blog" >ADD NEW BLOG</a></button>
    </div>
</section>
<section class="inner-page blog-inner">
    <div class="container">
        <h3 class="title">Our Blogs</h3>
        <div class="row">
            @foreach($blogs as $val)
            <div class="col-lg-4">
                <div class="blog-box">
                    <div class="blog-img overflow-hidden"><a href="{{url('blog_details')}}/{{$val->id}}"> <img src="{{asset('Uploads/'.$val['image'])}}" alt="blog" width="100%" height="300px"> </a></div>
                    <h6 class="sub-title"><i class="far fa-calendar-alt me-2"></i></h6>
                    <h4>{{$val->name}}</h4>
                    <p>{{Str::limit(strip_tags($val->description) ,90)}}</p>
                    <!-- <a href="" class="btn-1">Read More </a> -->
                </div>
            </div>
            @endforeach
        </div>
</section>