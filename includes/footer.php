    <div class="footer">
      <p>M.Holloway PHP Design &copy; <?php echo date('Y');?></p>
      <?php
      $current_role = array("Admin","Author");
      if (isset($_SESSION['user']['role']) && in_array($_SESSION['user']['role'],$current_role)){
        echo "<a href='admin/dashboard.php'>Admin Dashboard</a>";
      }?>
      </div>
    </div>
  </div>
  <!-- //container -->
</body>
<footer>
  <!-- Javascripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="scripts.js"></script>
</footer>
</html>
