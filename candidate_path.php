
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
       
        <div id="page-wrapper">

    <heading class="menue-select">
         <center style="padding: 8px">
                <select onchange = "page(this.value)" style="scale:2">
                <option disabled selected>Select Candidate Group</option>
                <option value = "candidates/president.php">President</option>
                <option value = "candidates/pm.php">Prime Minister</option>
                <option value = "candidates/mp.php">Member of Parliament</option>
                </select>
            </center>

    </heading> 
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php    
        include ('footer.php');
        ?>

    <script>
    function page (src){
        window.location=src;
    }
    </script>

</body>

</html>

