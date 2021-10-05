$(document).ready(function () {
  //hilangkan tombol cari
  $('#tombol-cari').hide();
  $('.loader').hide();
  // event ketika keyword ditulis
  $('#keyword').on('keyup', function () {
    // munculkan loading
    $('.loader').show();

    // $.get()
    $.get('ajax/search.php?keyword=' + $('#keyword').val(), function (data) {
      $('#kontener').html(data);
      $('.loader').hide();
    });
  });
});
