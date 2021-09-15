<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TinyMCE</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
	html,
        body {
            background-color: #E7E7E7;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        #action-div{
        	width: 100%;
        	display: flex;
        	justify-content: space-between;
        	background-color: #FFF7F7;
        	padding:5px;
        }
        #action-div a{
        	border: none;
        	outline: none;
        	font-weight: bolder;
        }
</style>

</head>
 
<body>

  <nav class="navbar navbar-light bg-light shadow-sm">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Post</span>
    <a href="/"><span class="badge bg-success">Add Post</span></a>
    <a href="/allpost"><span class="badge bg-primary">View Posts</span></a>
  </div>
</nav>


</body>


 <div class="container">
       <div class="row mt-3">
         @foreach($post as $p)
          <div class="col-md-12 mb-4 shadow-sm bg-light rounded p-2">

            {!! $p->post !!}
         


            <div id="action-div" class="shadow-sm">
            	<a href="{{ route('post.edit', $p->id) }}" id="edit-btn" class="btn shadow-sm bg-light text-primary">Edit</a>
            	<a href="{{ route('post.delete', $p->id) }}" id="edit-btn" class="btn shadow-sm bg-light text-danger">Delete</a>
                
            </div>
            

          </div>
        @endforeach
       </div>
</div>
</html>