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

    <div class="update_wrapper" id="updateWrapper">
        <h2 class="title">CRUD panel</h2>

        <a href="{{ url()->previous() }}">Попередня</a>

        <div id="readWrapper" class="update_wrapper">
            <div class="message"></div>

           <form class="update_form" id="updateForm" action="/crud/update/articles" method="post">
            {{ csrf_field() }}
            @foreach($fields as $name => $field)
                @continue($name === "created_at" || $name === "updated_at")
                <fieldset class="field_section">
                    <span class="field_title">{{ $name }}</span>

                    @if(array_key_exists($name, $relationships)) 
                        <select class="row" name="{{ $name }}">

                        @foreach($relationships[$name] as $values)

                            @foreach($values as $key=>$value)

                                @continue($key === 'id')
                                @if($fields[$name] === $values['id'])
                                    <option value="{{ $values['id'] }}" selected >{{ $value }}</option>
                                @else
                                    <option value="{{ $values['id'] }}">{{ $value }}</option>
                                @endif      

                            @endforeach

                        @endforeach

                        </select>
                    @elseif($name === 'id')
                        <input name="id" type="hidden" id="id" value="{{ $field }}">
                    @else 
                        <textarea name="{{ $name }}"class="row" type="text" rows="5">{{ $field }}</textarea>
                    @endif
    
                </fieldset>
            @endforeach

            <input type="submit" name="update" id="update">
           </form>
        </div>

    </div>

    @push('scripts')
    <script src="/js/crud/update.js"></script>
    @endpush

    @stack('scripts') 
</body>
</html>



