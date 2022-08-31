$(document).ready(function () {
  getProvinsi();
});

function getProvinsi() {
  $(document).ready(function () {
    $.ajax({
      method: "GET",
      url: "http://dev.farizdotid.com/api/daerahindonesia/provinsi",
      success: function (response) {
        data = response;
        var listPreview = $("#selectProvinsi");
        var option = "<option disabled selected hidden>Pilih Provinsi</option>";
        listPreview.empty();
        listPreview.append(option);
        $.each(data.provinsi, function (i, provinsi) {
          // console.log(provinsi.provinsi);
          option =
            "<option id='" +
            provinsi.id +
            "' value='" +
            provinsi.nama +
            "'>" +
            provinsi.nama +
            "</option>";
          listPreview.append(option);
        });
      },
    });
  });
}

function getKota() {
  var prov = document.getElementById("selectProvinsi");
  var provinsi = prov.options[prov.selectedIndex].id;
  console.log(provinsi);
  $.ajax({
    method: "GET",
    url:
      "http://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=" +
      provinsi,
    success: function (response) {
      data = response.kota_kabupaten;
      console.log(data);

      var listPreview = $("#selectKota");
      var option = "<option disabled selected hidden>Pilih Kota</option>";
      listPreview.empty();
      listPreview.append(option);
      $.each(data, function (i, kota) {
        option =
          "<option id='" +
          kota.id +
          "' value='" +
          kota.nama +
          "'>" +
          kota.nama +
          "</option>";
        listPreview.append(option);
      });
    },
  });
}

function getKecamatan() {
  var ko = document.getElementById("selectKota");
  var kota = ko.options[ko.selectedIndex].id;
  $.ajax({
    method: "GET",
    url:
      "http://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=" + kota,
    success: function (response) {
      data = response.kecamatan;
      console.log(data);

      var listPreview = $("#selectKecamatan");
      var option = "<option disabled selected hidden>Pilih Kecamatan</option>";
      listPreview.empty();
      listPreview.append(option);
      $.each(data, function (i, kecamatan) {
        option =
          "<option id='" +
          kecamatan.id +
          "' value='" +
          kecamatan.nama +
          "'>" +
          kecamatan.nama +
          "</option>";
        listPreview.append(option);
      });
    },
  });
}
