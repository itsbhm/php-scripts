$(document).ready(function () {
  $("#syncData").on("click", function (e) {
    $.ajax({
      url: "syncRecords.php",
      type: "POST",
      success: function (resp) {
        $("#recordSets").html(resp);
      },
    });
  });
});
