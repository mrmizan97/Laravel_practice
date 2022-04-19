<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-300 w-full h-full font-sans">
<div class="flex h-screen">
    <div class="m-auto">
        <h1 class="text-center pb-11 text-2xl font-bold">News letter</h1>
  <form action="{{route('subscribe')}}" method="POST">
    @csrf
<input type="text" name="email" placeholder="Enter email" class="px-4 shadow-2xl rounded-xl placeholder-gray-50::placeholder">
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2">submit</button>
</form>
    </div>
</div>
</body>
</html>
