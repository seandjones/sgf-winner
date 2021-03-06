<!DOCTYPE html>
<html>
<head>
    <title>SGF Web Devs Signup</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
            font-size:24px;
        }
        input {
            font-size: 24px;
        }
        button {
            font-size: 24px;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <h3>SGF Web Devs Signup</h3>
        {{--@if (count($errors) > 0)--}}
            {{--<div class="alert alert-danger">--}}
                {{--<ul>--}}
                    {{--@foreach ($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}
        <form action="/" method="post">
            <input type="text" name="name" id="name" required="required" placeholder="Name"  />
            <input type="email" name="email" id="email" required="required" placeholder="Email Address" />
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
