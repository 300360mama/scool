<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles/crud/read.css">
    <link rel="stylesheet" href="/css/fontawesome/all.css">
</head>

<body>

    <div class="wrapper">
        <h2 class="title">CRUD panel</h2>
        <div id="readWrapper" class="read_wrapper">

           <form action="" method="post">
           @foreach($fields as $name => $field)

           @if(array_key_exists($name, $relationships)) 
           <select name="{{ $name }}">

           @foreach($relationships[$name] as $value)

           <option value="{{ $value }}">{{ $value }}</option>

           @endforeach
           
           </select>
           @else
           <input type="text" value="{{ $field }}">
           @endif
           
           @endforeach
           </form>
        </div>

    </div>

    @push('scripts')
    <script src="/js/crud/read.js"></script>
    @endpush

    @stack('scripts') 
</body>
</html>



