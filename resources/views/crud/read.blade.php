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

            <section class="row">
            @foreach ($values[0] as $title=>$value) 
                @if($title === 'id' || $title === 'created_at' || $title === 'updated_at')
                <div class="cell cell_fixed_size">{{ $title }}</div>
                @else
                <div class="cell">{{ $title }}</div>
                @endif     
                
            @endforeach
            </section>
            @foreach($values as $value)
           
            <section class="row">
                @foreach($value as $title=>$field) 

                @if($title === 'id' || $title === 'created_at' || $title === 'updated_at')
                <div class="cell cell_fixed_size">{{ $field }}</div>
                @else
                <div class="cell">{{ $field }}</div>
                @endif 
               
                @endforeach
                <form method="post" action="/crud/delete/{{ $table }}"  class="cell cell_fixed_size">
                    {{ csrf_field() }}
                    <input type="hidden" name="id_row" value="{{ $value['id'] }}">
                    <button type="submit" name="remove"  class="remove change">Remove</button>
                </form>
                 <form method="post" action="/crud/show/{{ $table }}"  class="cell cell_fixed_size">
                    {{ csrf_field() }}
                    <input type="hidden" name="id_row" value="{{ $value['id'] }}">
                    <button type="submit" value="{{ $value['id'] }}" class="update change">Update</button>
                </form>

            </section>

            @endforeach
        </div>

    </div>

    @push('scripts')
    <script src="/js/crud/read.js"></script>
    @endpush

    @stack('scripts') 
</body>
</html>



