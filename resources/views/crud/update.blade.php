<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles/crud/update.css">
    <link rel="stylesheet" href="/css/fontawesome/all.css">
</head>

<body>

    <div class="wrapper">
        <h2 class="title">CRUD panel</h2>
        <div id="readWrapper" class="update_wrapper">

           <form class="update_form" action="" method="post">
           @foreach($fields as $name => $field)
            @continue($name === "created_at" || $name === "updated_at" || $name === "id")

           <fieldset class="field_section">
            <span class="field_title">{{ $name }}</span>

            @if(array_key_exists($name, $relationships)) 
            <select class="row" name="{{ $name }}">

            @foreach($relationships[$name] as $values)

            @foreach($values as $value)
            <option value="{{ $value }}">{{ $value }}</option>

            @endforeach

            @endforeach

            </select>
            @else 

            <input class="row" type="text" value="{{ $field }}">
            @endif

           </fieldset>

         
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



