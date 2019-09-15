@extends('layouts.app')
@section('content') 
<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<!-- ----------------------------------------------- -->
<div class = 'container'>
<div id="scrolling-container">
  
  
  <div id="quill-container">
  <!-- {!!$art->body!!} -->
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
}}) ;
quill.enable(false); 
quill.setContents({!!$art->body!!});
</script>
@endsection