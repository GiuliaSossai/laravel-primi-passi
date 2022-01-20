<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <title>Laravel primi passi</title>
</head>
<body>
   <div class="container">
      <ul class="nav">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="/">home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/about">chi siamo</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/contacts">contatti</a>
         </li>
      </ul>

      <h1>home</h1>
      <h2>HELLO WORLD!</h2>
      <h3>HELLO {{$user}}!</h3>

      <p>tentativi di giri del mondo:</p>
      <ul>
         @foreach ($attempts as $attempt)
            <li>{{$attempt}}</li>
         @endforeach
      </ul>

      @if ($first_woman)
         <p>è stata la prima donna aviatrice a tentare il giro del mondo!! e la prima a sorvolare l'Oceano Atlantico!</p>
      @else
         <p>ritenta!</p>
      @endif
   </div>
   
</body>
</html>