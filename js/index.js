$(function () {
  $("#landing-page-extent").on("click", function() {
    $("#landing-page-hidden-text").slideDown();
    $("#landing-page-extent").hide();
    $("#landing-page-hide").show();
  })

  $("#landing-page-hide").on("click", function() {
    $("#landing-page-hidden-text").slideUp();
    $("#landing-page-extent").show();
    $("#landing-page-hide").hide();
  })
})
