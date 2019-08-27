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
                    <a href="{{ route('get:articles') }}">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="search-result" style="margin-top: 20px;">
        <p>Search Result</p>
        <table class="table table-bordered">
            <tr>
                <th>Title</th>
            </tr>
            @foreach($searchResults as $searchResult)
                <tr>
                    <td>{{ $searchResult->title }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>