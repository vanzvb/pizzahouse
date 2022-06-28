<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Search</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top:40px">
                <h4>Search Everything</h4><hr>
                <form action="{{ route('web.search') }}" method="GET">
                    <div class="form-group">
                        <label for="">Enter keyword</label>
                        <input type="text" class="form-control" name="query" placeholder="Search here.."><br>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                <br>
                <br>
                
                <br>
                <br>
                @if (isset($pizzas))
                    
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Base</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @if (count($pizzas) > 0)
                            @foreach ($pizzas as $pizza)
                                <tr>
                                    <td>{{ $pizza->name }}</td>
                                    <td>{{ $pizza->base }}</td>
                                    <td>{{ $pizza->type }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td>No Result!</td></tr>
                        @endif

                    </tbody>
                </table>
                    <div class="pagination-block">
                        {{ $pizzas->links('layouts.paginationlinks') }}
                    </div>

                @else
                    
                @endif
            </div>
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>