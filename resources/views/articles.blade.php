<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background: #f5f5f5;">

    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li>
                        <a href="javascript:void(0);">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <form action="{{ route('get:search:result') }}">
            <div class="col-sm-12" style="margin-top:20px;">
                <div class="row" style="float:right;">
                    <div class="col-sm-8">
                        <div class="search-wrapper">
                            <input type="text" name="search"/>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-sm">Search</button>
                    </div>
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <tr>
                <th>#id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created</th>
            </tr>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->name }}</td>
                    <td>{{ $article->description }}</td>
                    <td>{{ \Carbon\Carbon::parse($article->created_at)->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </table>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>