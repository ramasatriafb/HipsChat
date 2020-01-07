<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ URL::to('/') }}/img/Logo HipsChat.png">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <style>
    .container {
        background-image:url({{ URL::to('/') }}/img/bg1.png);
       
    }
    .list-group{
        overflow-y: scroll;
        height: 400px;
    }
    .list-group-item{
        font-family: Montserrat;
        font-size: 28px;
        font-weight: bold;
        border-radius: 10px !important
        
    }
    .list-group-item-success ,.list-group-item-warning{
        font-size: 16px !important;
    }
    .badge-success , .badge-warning{
        font-family: Montserrat;
        font-size: 14px;
        border-radius: 5px
    }
    </style>
    <title>HipsChat</title>
</head>
<body>
    <div class="container">
        <br>
        <div class="row" id="app">
            <div class="offset-4 col-4 offset-sm-1 col-sm-10">
                <li class="list-group-item list-group-item-action active">
                    HipsChat <span class="badge badge-pill badge-danger">@{{numberOfUsers}}</span>
                </li>
                <div class="badge badge-pill badge-primary">@{{ typing }}</div>
                <br>
                <ul class="list-group" v-chat-scroll>
                    <message
                    v-for="value,index in chat.message"  :key="value.index" 
                     :color= chat.color[index] :user = chat.user[index]
                     :time = chat.time[index] :position = chat.position[index] >
                    @{{value}}
                    </message>
                </ul>
                <input type="text" class="form-control" placeholder="Type your message here" v-model="message" @keyup.enter='send'>
                <br>
                <a href="" class="btn btn-warning btn-sm float-right" @click.prevent='deleteSession'>Delete Chats</a>
            </div>
        </div>
    </div>
    
<script src="{{URL::asset('js/app.js') }}" type="text/javascript" ></script>
</body>
</html>