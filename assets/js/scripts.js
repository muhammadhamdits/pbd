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
  chartGas3KG();
  chartGas5KG();
  chartGas12KG();

  $("#tambah").on("click", function (event) {
    event.preventDefault();
    if ($("#sel1").val() == null || $("#jmls").val() < 0) {
      swal("Error", "Data belum lengkap/belum valid!", "warning");
    } else {
      $.ajax({
        url: "insert.php",
        method: "POST",
        data: $("#ftt").serialize(),
        success: function (data) {
          $("#ftt")[0].reset();
          $("#tambahTabung").modal("hide");
          if (data == "YES") {
            swal("Failed", "Tabung gagal ditambahkan!", "error");
          } else {
            swal("Success", "Tabung berhasil ditambahkan!", "success");
            reloadAll();
          }
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
            swal("Failed", "Jumlah yang diambil melebihi stok yang tersedia", "error");
          } else {
            swal("Success", "Tabung berhasil dijual!", "success");
            reloadAll();
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
          swal("Success", "Data pelanggan berhasil ditambahkan!", "success");
          reloadAll();
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
          className: "btn-primary",
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
  $("#hm35").DataTable({
    dom: "Bfrtip"
  });
  $("#reload2").on("click", function () {
    $("#pelanggans tbody").html("");
    $("#pelanggans tbody").load("data_pelanggan.php");
  });

  $("#r3kg").on("click", function () {
    chartGas3KG();
  });
  $("#r5kg").on("click", function () {
    chartGas5KG();
  });
  $("#r12kg").on("click", function () {
    chartGas12KG();
  });

  function reloadAll() {
    chartGas3KG();
    chartGas5KG();
    chartGas12KG();
  }

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
          swal("Success", "Berhasil memperbaharui data pelanggan!", "success");
        }
      });
    }));
  });

  $("#juallpg").on("click", function (event) {
    event.preventDefault();
    if ($("#sel5").val() == null || $("#sel6").val() == null) {
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
            swal("Success", "Berhasil menjual LPG!", "success");
            reloadAll();
          } else {
            swal("Failed", "Gagal menjual LPG", "error");
          }
        }
      });
    }
  });

  $("#rsg").on("click", function (event) {
    event.preventDefault();
    if ($("#sel7").val() == null || $("#jml4").val() < 0) {
      swal("Error", "Data belum lengkap/belum valid!", "warning");
    } else {
      $.ajax({
        url: "insert.php",
        method: "POST",
        data: $("#frg").serialize(),
        success: function (data) {
          $("#frg")[0].reset();
          $("#restockGas").modal("hide");
          if (data != "YES") {
            swal("Success", "Berhasil merestock LPG", "success");
            reloadAll();
          } else {
            swal("Failed", "Gagal merestock LPG, jumlah yang anda minta melebihi jumlah yang dapat di restock!", "error");
          }
        }
      });
    }
  });

  $("#rtg").on("click", function (event) {
    event.preventDefault();
    if ($("#sel8").val() == null || $("#sel9").val() == null || $("#jml5").val() <= 0) {
      swal("Error", "Data belum lengkap/belum valid!", "warning");
    } else {
      $.ajax({
        url: "insert.php",
        method: "POST",
        data: $("#frl").serialize(),
        success: function (data) {
          $("#frl")[0].reset();
          $("#returLPG").modal("hide");
          if (data != "YES") {
            swal("Success", "Berhasil meretur LPG!", "success");
            reloadAll();
          } else {
            swal("Failed", "Gagal merestock LPG, data transaksi tidak ditemukan atau jumlah yang akan diretur melebihi jumlah yang telah ditransaksikan", "error");
          }
        }
      });
    }
  });

  $("#repots").on("click", function (e) {
    e.preventDefault();
    $.ajax({
      url: "data_report.php",
      method: "GET",
      data: $("#frb").serialize(),
      success: function (data) {
        var bln = $("#bulan").val();
        var thn = $("#tahun").val();
        var ukur = $("#ukuran").val();
        $("#frb")[0].reset();
        $("#inputReport").modal("hide");
        window.open("data_report.php?bulan=" + bln + "&&tahun=" + thn + "&&ukuran=" + ukur);
        // var w = window.open();
        // $(w.document.body).html(data);
        // console.log(data);
        // window.open("data_report.php");
      }
    });
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

function chartGas3KG() {
  $.ajax({
    url: "data_dcharts.php",
    dataType: 'json',
    success: function (data) {
      var dataLPG = $("#3kg");
      var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration: 500,
      };
      var chartData = {
        labels: ["Berisi", "Kosong", "Retur"],
        datasets: [{
          label: "My First dataset",
          data: [
            data[0],
            data[1],
            data[2]
          ],
          backgroundColor: ['#00A5A8', '#626E82', '#FF7D4D'],
        }]
      };
      var config = {
        type: 'doughnut',
        options: chartOptions,
        data: chartData
      };
      var doughnutSimpleChart = new Chart(dataLPG, config);
    }
  });
}

function chartGas5KG() {
  $.ajax({
    url: "data_dcharts.php",
    dataType: 'json',
    success: function (data) {
      var dataLPG = $("#5kg");
      var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration: 500,
      };
      var chartData = {
        labels: ["Berisi", "Kosong", "Retur"],
        datasets: [{
          label: "My First dataset",
          data: [
            data[3],
            data[4],
            data[5]
          ],
          backgroundColor: ['#00A5A8', '#626E82', '#FF7D4D'],
        }]
      };
      var config = {
        type: 'doughnut',
        options: chartOptions,
        data: chartData
      };
      var doughnutSimpleChart = new Chart(dataLPG, config);
    }
  });
}

function chartGas12KG() {
  $.ajax({
    url: "data_dcharts.php",
    dataType: 'json',
    success: function (data) {
      var dataLPG = $("#12kg");
      var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration: 500,
      };
      var chartData = {
        labels: ["Berisi", "Kosong", "Retur"],
        datasets: [{
          label: "My First dataset",
          data: [
            data[6],
            data[7],
            data[8]
          ],
          backgroundColor: ['#00A5A8', '#626E82', '#FF7D4D'],
        }]
      };
      var config = {
        type: 'doughnut',
        options: chartOptions,
        data: chartData
      };
      var doughnutSimpleChart = new Chart(dataLPG, config);
    }
  });
}