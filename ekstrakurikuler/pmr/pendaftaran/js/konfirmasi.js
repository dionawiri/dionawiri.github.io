$(document).ready(function () {
  $('.loader').hide();
  // event ketika keyword ditulis
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
