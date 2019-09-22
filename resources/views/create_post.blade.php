@extends('layouts.app')
@section('content') 

<div class = 'container'>
<form action="{{url('/create')}}" method = 'post' enctype="multipart/form-data" >
@csrf
<input type="text" name = 'title' >
<div>
<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- Create the editor container -->
<div id="editor-container">
  <p>Hello World!</p>
  <p>Some initial <strong>bold</strong> text</p>
  <p><br></p>
</div>

<!-- Include the Quill library -->
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>


<!-- Initialize Quill editor -->
<script>
$(document).ready(function(){
  var fonts = ['sofia', 'slabo', 'roboto', 'inconsolata', 'ubuntu'];
  var Font = Quill.import('formats/font');
    Font.whitelist = fonts;
    Quill.register(Font, true);
// jQuery methods go here...
var quill = new Quill('#editor-container', {
  modules: {
    'syntax': false,
        'toolbar': [
          [{ 'font': fonts }, { 'size': [] }],
          [ 'bold', 'italic', 'underline', 'strike' ],
          [{ 'color': [] }, { 'background': [] }],
          [{ 'script': 'super' }, { 'script': 'sub' }],
          [{ 'header': '1' }, { 'header': '2' }, 'blockquote', 'code-block' ],
          [{ 'list': 'ordered' }, { 'list': 'bullet'}, { 'indent': '-1' }, { 'indent': '+1' }],
          [ {'direction': 'rtl'}, { 'align': [] }],
          [ 'link', 'image', 'video', 'formula' ],
          [ 'clean' ]
        ]
  },
  placeholder: 'Compose an epic...',
  theme: 'snow'
});

var form = document.querySelector('form');
form.onsubmit = function() {
  // Populate hidden form on submit
  var about = document.querySelector("input[name=body]");
  about.value = JSON.stringify(quill.getContents() );
  
  //to html : quill.root.innerHTML.trim() 
  
  //to json style content : quill.getContents() 

  //console.log("Submitted", $(form).serialize(), $(form).serializeArray());
  
  // No back end to actually submit to!
  
};

}); 


</script>
</div>
<div class="row">

  

<div class="col-md-3">

    <input type="file" name="image" class="form-control">

</div>
</div>

<input name="body" type="hidden">
<button class="btn btn-primary" type="submit">Save Post</button>

</form>
</div>
@endsection