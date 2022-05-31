<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <h1> </h1>
    <div class="container">
        <form action="#" method="POST" id="form-book" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="book-cover" class="form-label">Upload Materi</label>
                <input class="form-control" type="file" id="book-cover" name="book-cover" required>
            </div>
            <!-- <div class="mb-3">
                <label for="book-category">Genre</label>
                <select class="form-select" aria-label="Category" id="book-category" name="book-category" required>
                    <option value="Pilih"> Pilih </option>
                    <option value="Alpro"> Alpro </option>
                    <option value="Basdat"> Basdat </option>
                </select>
            </div> -->
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-info " name="btn-book-add" id="btn-book-add" form="form-book">Upload
                Materi</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="assets/scripts/script.js"></script>
</body>

</html>