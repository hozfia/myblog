      @extends('layouts.app')
      @section('head')
      @endsection('head')

      @section('content')
      <!-- Include stylesheet -->
      <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
      <!-- Include the Quill library -->
      <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
      <!-- ----------------------------------------------- -->
      <div class='container'>

        <div class="row">

          <!-- Post Content Column -->
          <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">{{$art->title}}</h1>

            <!-- Author -->
            <p class="lead">
              by
              <a href="#">ADMIN</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>Posted on {{$art->created_at}}</p>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="/images/{{$art->pic_name->imagename }}" alt="">

            <hr>


            <div id="scrolling-container">


              <div id="quill-container">
                <!-- {!!$art->body!!} -->
              </div>

            </div>
          </div>
          <div  class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
              <h5 class="card-header">Search</h5>
              <div class="card-body">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
                <!-- Side Widget -->
                <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                  You can put anything you want inside of these side widgets. 
                </div>
      </div>
      </div>
      </div>
        </div>
        <!-- ----------------------------------------------------------------------- -->
        <script>var quill = new Quill('#quill-container', {
            modules: {
              //     toolbar: [
              //       [{ header: [1, 2, false] }],
              //       ['bold', 'italic', 'underline'],
              //       ['image', 'code-block']
              //     ]
              //   },
              //   scrollingContainer: '#scrolling-container', 
              //   placeholder: 'Compose an epic...',
              //   theme: 'bubble'
            }
          });
          quill.enable(false);
          quill.setContents({!!$art -> body!!});
        </script>
         <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; myblog 2019</p>
    </div>
    <!-- /.container -->
</footer>
        @endsection