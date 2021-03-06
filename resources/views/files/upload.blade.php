<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiple File Upload</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row  justify-content-center mt-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">File upload</div>
                    <div class="card-body">
                        <form action="{{ route('files.upload') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="custom-file">
                                <input type="file" name="image[]" multiple class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>

                            <div class="form-group mt-3">
                            <button type = "submit" class = "btn btn-success" > Upload</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>