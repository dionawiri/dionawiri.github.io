$(document).ready(function () {
  // event ketika keyword ditulis
  $('.loader').hide();
  $('#tombol-cari').on('keypress', function () {
    // munculkan loading
    $('.loader').show();

    // $.get()
    $.get('ajax/search.php?keyword=' + $('#keyword').val(), function (data) {
      $('#kontener').html(data);
      $('.loader').hide();
    });
  });
});
