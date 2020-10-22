$(document).ready(function () {
  function loadData() {
    $.ajax({
      url: "syncRecords.php",
      type: "POST",
      success: function (resp) {
        $("#recordSets").html(resp);
      },
    });
  }

  $("#save-data").on("click", function (e) {
    e.preventDefault();

    const fname = $("#f_name").val();
    const lname = $("#l_name").val();

    $.ajax({
      url: "ajax-insert.php",
      type: "POST",
      data: { first_name: fname, last_name: lname },
      success: function (res) {
        if (res == 1) {
          loadData();

          $("#f_name").val("");
          $("#l_name").val("");
        } else {
          alert("Unable to save record");
        }
      },
    });
  });
});
