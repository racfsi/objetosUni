jQuery(function ($) {
  var mxFr1 = new Intl.NumberFormat("de-DE", { maximumFractionDigits: 3 });
  //SAVE DATA | WEEKS FORM
  $("#frm-newuser").submit(function (e) {
    e.preventDefault();
    var clave1 = $("#clave_us").val();
    var clave2 = $("#clave_us2").val();
    if (clave1 != clave2) {
      alert("Las contraseñas son diferentes. Por favor intente nuevamente");
    } else {
      $.ajax({
        type: "POST",
        url: "index.php?c=ajax&a=SaveUser",
        data: $("#frm-newuser").serialize(),
        dataType: "json",
        beforeSend: function (e) {
          respAjaxBefore();
        },
      })
        .done(function (e) {
          respAjaxDone();
          window.location.replace("index.php?c=objetos");
        })
        .fail(function (e) {
          console.log(e);
          respAjaxFail();
        });
    }
  });
  $("#frm-newobject").submit(function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    var files = $("#imageprod")[0].files[0];
    formData.append("file", files);
    $.ajax({
      type: "POST",
      url: "index.php?c=ajax&a=SaveObj",
      data: formData,
      dataType: "json",
      contentType: false,
      processData: false,
      beforeSend: function (e) {
        respAjaxBefore();
      },
    })
      .done(function (e) {
        respAjaxDone();
        window.location.replace("index.php?c=objetos");
      })
      .fail(function (e) {
        console.log(e);
        respAjaxFail();
      });
  });
  //===================RESPUESTAS AJAX===================//
  // RESPONSE AJAX | BEFORE SEND
  function respAjaxBefore() {
    $("#responseAjax").addClass("responseAjax-beforeSend");
    $("#responseAjax").html("<p>Enviando...</p>");
  }
  // RESPONSE AJAX | DONE
  function respAjaxDone() {
    $("#responseAjax").removeClass("responseAjax-beforeSend");
    $("#responseAjax").addClass("responseAjax-done");
    $("#responseAjax").html("<p>Enviado con éxito</p>");
    setTimeout(function () {
      $("#responseAjax").removeClass("responseAjax-done");
      $("#responseAjax").html("");
    }, 5000);
  }
  // RESPONSE AJAX | FAIL
  function respAjaxFail() {
    $("#responseAjax").removeClass("responseAjax-beforeSend");
    $("#responseAjax").addClass("responseAjax-fail");
    $("#responseAjax").html("<p>Error!! revisar la consola....</p>");
    setTimeout(function () {
      $("#responseAjax").removeClass("responseAjax-fail");
      $("#responseAjax").html("");
    }, 5000);
  }
});
