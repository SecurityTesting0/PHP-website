<?php
$db = new Database();
?> 
    
      
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>
	<div class="site_info_1">
    </div>
    <div id="site_info">
      <p>
        Copyright  &copy; <?php echo date("Y");?> Madrasatul Muslima
        </p>
    </div>
	   
</body>
</html>
