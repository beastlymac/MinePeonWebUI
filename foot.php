<footer class="container">
  <hr />
  Server Time: <?php echo date('D, d M Y H:i:s T') ?>
</footer>

<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
<script type="text/javascript" id="js">
  $(document).ready(function() {
    $(".tablesorter").tablesorter();
    console.log("Table sorted");
  });
</script>

</body>
</html>
