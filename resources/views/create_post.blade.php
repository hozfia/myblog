@extends('layouts.app')
@section('content') 

<div class = 'container'>
<form action="{{url('/create')}}" method = 'post'>
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
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
$(document).ready(function(){

// jQuery methods go here...
var quill = new Quill('#editor-container', {
  modules: {
    toolbar: [
      [{ header: [1, 2, false] }] , 
      ['bold', 'italic'],
      ['link', 'blockquote', 'code-block', 'image'],
      [{ list: 'ordered' }, { list: 'bullet' }]
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
<input name="body" type="hidden">
<button class="btn btn-primary" type="submit">Save Post</button>
</form>
</div>
@endsection