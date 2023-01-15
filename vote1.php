<?php include ('head.php');?>

<body>

    <div id="wrapper">


        <?php include ('view_banner.php');?>

        <div id="page-wrapper">

            <heading class="menue-select">
                <center>
                    <select onchange="page(this.value)">
                        <option disabled selected>Select Candidate Group</option>
                        <option value="president_vote.php">President</option>
                        <option value="pm_vote.php" name="pm">Prime Minister</option>
                        <option value="mp_vote.php">MP</option>
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
        function page(src) {
            window.location = src;
        }

    </script>

</body>

</html>
