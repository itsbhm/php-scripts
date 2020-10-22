<?php
header_remove("X-Powered-By");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
            <th scope="col" style="width:100px;">Action</th>
          </tr>
        </thead>
        <tbody id="recordSets"></tbody>
      </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
