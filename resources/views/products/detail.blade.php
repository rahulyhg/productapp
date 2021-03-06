@extends('layouts.app')

@section('title', 'Product Page')

@push('styles')
    <link rel="stylesheet" href="{{ URL::asset('css/nouislider.css') }}" />
    <style>

        .wrapper-product{
            position:relative;
            top:55px;
        }

        .wrapper-header-comment{
            position:relative;
            top:75px;
        }

        .wrapper-comments{
            position:relative;
            top:95px;
        }

        .wraps-product{
            position:relative;
        }
        .form-box{
            position:relative;
            width:800px;
            margin:0 auto;

        }
        .comment-box{
            top:15px;
            position:relative;
            width:1200px;
        }
    </style>
@endpush
@section('content')

    <div class="row justify-content-md-center wrapper-product">
        <div class="col-sm-3">
            <img src="https://static.businessinsider.sg/2018/12/12/5c1c90f8e04d6243c7019cf6.png" width="250" height="200"/>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <h2> Nissan </h2>
            </div>
            <div class="row">
                Car Model   : Serena
            </div>
            <div class="row">
                Price       : Rp 150.000.000
            </div>
            <div class="row">
                Fuel        : Gasoline
            </div>
            <div class="row">
                Year        : 2014
            </div>
            <div class="row">
                Engine Type : Injection
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center wrapper-product">
        <div class="comment-box">
            <form>
                <div class="form-group">
                    <textarea class="form-control col-md-12" id="comments" rows="3" placeholder="add your comments here"></textarea>
                </div>
                <button class="btn btn-info">Add Comment</button>
            </form>
        </div>
    </div>
    <div class="row justify-content-md-center wrapper-header-comment">
        <h3>Comments</h3>
    </div>
    <div class="row justify-content-md-center wrapper-comments">

        <div class="col-sm-2">
            Aditya Wiguna
        </div>
        <div class="col-sm-7">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet consequat diam. Phasellus venenatis at quam a cursus. Proin sed diam sed erat vulputate vestibulum. Aliquam erat volutpat. Vestibulum consectetur dignissim semper. Vestibulum ut nisi lobortis, ornare sapien eu, aliquam ipsum. Fusce ut accumsan urna. Nulla luctus nisl aliquam facilisis porta. Nulla nisi purus, euismod sit amet erat rutrum, porttitor bibendum neque. Maecenas egestas, eros vitae dictum convallis, quam elit gravida mauris, a eleifend nisl leo tristique felis. Sed pulvinar neque sit amet purus ultrices hendrerit. Curabitur sit amet pellentesque diam, nec hendrerit lacus. Vivamus eleifend massa et erat tempor, id accumsan risus commodo. Maecenas bibendum sodales eros, porttitor mollis arcu aliquet nec.
            <br/>
            <button class="btn btn-primary">Upvote</button>
            <button class="btn btn-secondary">Downvote</button>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">Sugih Hartono</div>
                    <div class="col-sm-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet consequat diam. Phasellus venenatis at quam a cursus. Proin sed diam sed erat vulputate vestibulum. Aliquam erat volutpat. Vestibulum consectetur dignissim semper. Vestibulum ut nisi lobortis, ornare sapien eu, aliquam ipsum. Fusce ut accumsan urna. Nulla luctus nisl aliquam facilisis porta. Nulla nisi purus, euismod sit amet erat rutrum, porttitor bibendum neque. Maecenas egestas, eros vitae dictum convallis, quam elit gravida mauris, a eleifend nisl leo tristique felis. Sed pulvinar neque sit amet purus ultrices hendrerit. Curabitur sit amet pellentesque diam, nec hendrerit lacus. Vivamus eleifend massa et erat tempor, id accumsan risus commodo. Maecenas bibendum sodales eros, porttitor mollis arcu aliquet nec.
                        <br/>
                        <button class="btn btn-primary">Upvote</button>
                        <button class="btn btn-secondary">Downvote</button>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </div>
        </div>
        <div class="col-sm-3">
            <!--<button class="btn btn-default">Upvote</button>
            <button class="btn btn-default">Downvote</button>-->
            <button class="btn btn-primary">Edit</button>
            <button class="btn btn-danger">Delete</button>
        </div>
    </div>
@endsection

@push('scripts')

    <script>

    </script>
@endpush