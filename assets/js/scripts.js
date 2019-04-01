(function (window, undefined) {
  'use strict';

  $("#tt").click(function () {
    $("#tt2").click();
  });
  $("#rs").click(function () {
    $("#rs2").click();
  });
  $("#r").click(function () {
    $("#r2").click();
  });
  $("#jt").click(function () {
    $("#jt2").click();
  });
  $("#jl").click(function () {
    $("#jl2").click();
  });
  $("#rpt").click(function () {
    $("#rpt2").click();
  });

})(window);

$(document).ready(function () {

  $('#type-success').on('click', function () {
    swal("Success", "Tabung berhasil ditambahkan", "success");
  });
  $('#type-success-2').on('click', function () {
    swal("Success", "Tabung berhasil dijual", "success");
  });
  $('#type-success-3').on('click', function () {
    swal("Success", "Data pelanggan berhasil ditambahkan", "success");
  });
  $('#type-success-4').on('click', function () {
    swal("Success", "Data pelanggan berhasil diperbaharui", "success");
  });
  $('#type-success-5').on('click', function () {
    swal("Success", "LPG Berhasil dijual", "success");
  });
  $('#type-failed-1').on('click', function () {
    swal("Failed", "Jumlah yang diambil melebihi stok yang tersedia", "error");
  });

  $("#tambah").on("click", function (event) {
    event.preventDefault();
    if ($("#sel1").val() == null) {
      swal("Error", "Lengkapi data!", "warning");
    } else {
      $.ajax({
        url: "insert.php",
        method: "POST",
        data: $("#ftt").serialize(),
        success: function (data) {
          $("#ftt")[0].reset();
          $("#tambahTabung").modal("hide");
          $("#type-success").click();
        }
      });
    }
  });

  $("#jual").on("click", function (event) {
    event.preventDefault();
    if ($("#sel2").val() == null) {
      swal("Error", "Lengkapi data!", "warning");
    } else {
      $.ajax({
        url: "insert.php",
        method: "POST",
        data: $("#fjt").serialize(),
        success: function (data) {
          $("#fjt")[0].reset();
          $("#jualTabung").modal("hide");
          if (data == "YES") {
            $('#type-failed-1').click();
          } else {
            $("#type-success-2").click();
          }
        }
      });
    }
  });

  $("#hmm3").on("click", function (event) {
    event.preventDefault();
    if ($("#sel3").val() == null) {
      swal("Error", "Lengkapi data!", "warning");
    } else {
      $.ajax({
        url: "insert.php",
        method: "POST",
        data: $("#ftdp").serialize(),
        success: function (data) {
          $("#reload2").click();
          $("#ftdp")[0].reset();
          $("#tambahPelanggan").modal("hide");
          $("#type-success-3").click();
        }
      });
    }
  });

  $('.swalconf').on('click', function (e) {
    e.preventDefault();
    swal({
      title: "Are you sure?",
      text: "Anda tidak akan dapat mengembalikan data yang sudah terhapus!",
      icon: "warning",
      showCancelButton: true,
      buttons: {
        cancel: {
          text: "No, batalkan saja",
          value: null,
          visible: true,
          className: "btn-warning",
          closeModal: false,
        },
        confirm: {
          text: "Yes, hapus data ini!",
          value: true,
          visible: true,
          className: "",
          closeModal: false
        }
      }
    }).then(isConfirm => {
      if (isConfirm) {
        var id = $(this).data('id');
        $.ajax({
          method: 'POST',
          url: 'delete.php',
          data: {
            'id': id
          },
          success: function (data) {
            if (data == "YES") {
              swal("Deleted!", "Data yang anda pilih sudah berhasil dihapus", "success");
              $("#reload2").click();
            } else {
              swal("Failed", "Data gagal dihapus", "error");
            }
          }
        });
      } else {
        swal("Cancelled", "Anda membatalkannya", "error");
      }
    });
  });

  var tabels = $("#pelanggans").DataTable();
  $("#reload2").on("click", function () {
    // tabels.ajax.reload();
    $("#pelanggans tbody").html("");
    $("#pelanggans tbody").load("data_pelanggan.php");
  });

  $(document).on("click", "#edtpel", function () {
    var id = $(this).data('id');
    var nama = $(this).data('nama');
    var jenis = $(this).data('jenis');
    var alamat = $(this).data('alamat');
    var keperluan = $(this).data('keperluan');
    $("#editPelanggan .modal-body #idedpel").val(id);
    $("#editPelanggan .modal-body #nama2").val(nama);
    $("#editPelanggan .modal-body #sel4").val(jenis);
    $("#editPelanggan .modal-body #alamat2").val(alamat);
    $("#editPelanggan .modal-body #kep2").val(keperluan);
  })
  $(document).ready(function (e) {
    $("#fedp").on("submit", (function (e) {
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: "insert.php",
        data: $("#fedp").serialize(),
        success: function () {
          $("#reload2").click();
          $("#fedp")[0].reset();
          $("#editPelanggan").modal("hide");
          $("#type-success-4").click();
        }
      });
    }));
  });

  $("#juallpg").on("click", function (event) {
    event.preventDefault();
    if ($("#sel5").val() == null) {
      swal("Error", "Lengkapi data!", "warning");
    } else if ($("#sel6").val() == null) {
      swal("Error", "Lengkapi data!", "warning");
    } else {
      $.ajax({
        url: "insert.php",
        method: "POST",
        data: $("#fjg").serialize(),
        success: function (data) {
          $("#fjg")[0].reset();
          $("#jualGas").modal("hide");
          if (data != "YES") {
            $("#type-success-5").click();
          } else {
            $("#type-failed-1").click();
          }
        }
      });
    }
  });

  $("#rsg").on("click", function (event) {
    event.preventDefault();
    if ($("#sel7").val() == null) {
      swal("Error", "Lengkapi data!", "warning");
    } else {
      $.ajax({
        url: "insert.php",
        method: "POST",
        data: $("#frg").serialize(),
        success: function (data) {
          $("#frg")[0].reset();
          $("#restockGas").modal("hide");
          if (data != "YES") {
            $("#type-success-5").click();
          } else {
            $("#type-failed-1").click();
          }
        }
      });
    }
  });

  $("#rtg").on("click", function (event) {
    event.preventDefault();
    if ($("#sel8").val() == null) {
      swal("Error", "Lengkapi data!", "warning");
    } else if ($("#sel9").val() == null) {
      swal("Error", "Lengkapi data!", "warning");
    } else {
      $.ajax({
        url: "insert.php",
        method: "POST",
        data: $("#frl").serialize(),
        success: function (data) {
          $("#frl")[0].reset();
          $("#returLPG").modal("hide");
          if (data != "YES") {
            $("#type-success-5").click();
          } else {
            $("#type-failed-1").click();
          }
        }
      });
    }
  });

});

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('jam').innerHTML = h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}

function checkTime(i) {
  if (i < 10) {
    i = "0" + i
  }; // add zero in front of numbers < 10
  return i;
}