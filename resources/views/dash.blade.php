<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('Card.index')}}">Cards</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('Card.index')}}">Home</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container text-center">
        <div class="row">
    @forelse ($Card as $card)

        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="/images/{{$card->image}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$card->title}}</h5>
            <p class="card-text">{{$card->description}}</p>
            <a href="{{route('Card.show',$card->id)}}" class="btn btn-primary">view</a>
            <a href="{{route('Card.edit',$card->id)}}" class="btn btn-primary">update</a>
            <form method="POST" action="{{route('Card.destroy',$card->id)}}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">destroy</button>
            </form>
            </div>
        </div>
      </div>



    @empty
        <h1>database is empty</h1>
      

    @endforelse
  
</div>
</div>
    <a href="{{route('Card.create')}}">create a new service</a>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>