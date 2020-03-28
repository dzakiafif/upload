<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <form action="{{ route('upload.proses') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <input type="file" name="upload1" id="" class="form-control" placeholder="masukkan file 1">
                </div>
                <div class="form-group">
                    <input type="file" name="upload2" id="" class="form-control" placeholder="masukkan file 2">
                </div>
                <div class="form-group">
                    <input type="file" name="upload3" id="" class="form-control" placeholder="masukkan file 3">
                </div>
                <input type="submit" value="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>