<?php
header_remove("X-Powered-By");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
      integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
      crossorigin="anonymous"
    />
  </head>
  <body>

<div class="container mt-5">
<div class="text-center">
<div id="getData">
<pre>
<label>First Name: </label>
<input type="text" id="f_name">
<label>Last Name: </label>
<input type="text" id="l_name">

<input type="submit" id="save-data" value="Save">
</pre>
</div>
</div>
</div>

    <hr />

    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col" style="width:80px;">Edit</th>
            <th scope="col" style="width:80px;">Delete</th>
          </tr>
        </thead>
        <tbody id="recordSets"></tbody>
      </table>
    </div>

    <div>

      <div class="modal fade" id="model-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Student Details</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">First Name:</label>
                  <input type="text" class="form-control" id="first-name">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Last Name:</label>
                  <input type="text" class="form-control" id="last-name">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Update Details</button>
            </div>
          </div>
        </div>
      </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
