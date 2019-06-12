<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <!-- <a href="#">About</a> -->
  <a href="{{ url('/login') }}">Login</a>
  <a href="{{ url('/home') }}">Sale/Rent</a>
  <!-- <a href="#">Home Loan</a> -->
  <a href="{{ url('/contact') }}">Contact</a>
</div>


<!-- sidebar -->
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<!-- /sidebar -->
