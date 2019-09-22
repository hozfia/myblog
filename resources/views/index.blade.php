@extends('layouts.app')
@section('head')
<style type="text/css">
            #page {
                position: fixed;
                bottom: 0;
                width: 40%;
                margin-left: 30%;
                margin-right: 30%
            }
            
            #card {
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 40px;
            }
            .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
    margin-bottom: 30px;
    margin-top: 15px;
}
.py-4 {
    padding-top:0px !important;
}
            
            body {
                overflow-x: hidden;
            }
            
            #sidebar-wrapper {
                min-height: 100vh;
                margin-left: -15rem;
                -webkit-transition: margin .25s ease-out;
                -moz-transition: margin .25s ease-out;
                -o-transition: margin .25s ease-out;
                transition: margin .25s ease-out;
            }
            
            #sidebar-wrapper .sidebar-heading {
                padding: 0.875rem 1.25rem;
                font-size: 1.2rem;
            }
            
            #sidebar-wrapper .list-group {
                width: 15rem;
            }
            
            #page-content-wrapper {
                min-width: 100vw;
            }
            
            #wrapper.toggled #sidebar-wrapper {
                margin-left: 0;
            }
            
            @media (min-width: 768px) {
                #sidebar-wrapper {
                    margin-left: 0;
                }
                #page-content-wrapper {
                    min-width: 0;
                    width: 100%;
                }
                #wrapper.toggled #sidebar-wrapper {
                    margin-left: -15rem;
                }
            }
            
            #fluid {
                background-image: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(11).jpg");
                /* Half height */
                height: auto;
                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            
            .card-image {
                width: 50px;
                height: 50px;
                background-image: url("https://previews.123rf.com/images/denphumi/denphumi1305/denphumi130500124/19911835-natural-green-spring-or-summer-season-abstract-nature-background.jpg");
            }
            
            ul {
                display: block;
                list-style-type: disc;
                margin-block-start: 1em;
                margin-block-end: 1em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
                padding-inline-start: 40px;
                width: 40%;
                margin-left: 30%;
                margin-right: 30%
            }
        </style>
@endsection('head')
@section('content')
<div class = "container">


</div>
<!-- ------------------------------------------------ -->
<!-- <nav aria-label="..." id="page">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active">
                    <a class="page-link" href="#">2 <span class="sr-only"></span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav> -->
<div class="d-flex" id="wrapper">
            <!--idebar -->
            
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Start Bootstrap </div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
                </div>
            </div>

            <div class="container-fluid" id="fluid">

              
            @foreach($artecls as $art)
            
            <div class="card w-50" id="card">
                    <div class="card-body">
                    <img src="/images/{{$art->pic_name->imagename }}" class="card-img-top" alt="...">
                        <h5 class="card-title">{{$art->title}}</h5>
                        <img class="card-image" />
                        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                        <a href= /show/{{$art->id}}  class="btn btn-primary">See More</a>
                    </div>
                </div>
            @endforeach 

            </div>


        </div>
        <!--/#sidebar-wrapper -->

    </body>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

<!-- --------------------------------------------------->
{{ $artecls->links() }}
@endsection('content') 