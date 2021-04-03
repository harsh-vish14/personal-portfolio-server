<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "porfolio-contact-form";
$con = mysqlI_connect($host, $username, $password, $database);
if($con){
    ?>
    <script>
        console.log('done connection');
    </script>
    <?php
}else{?>
<script>
    console.log('not connected')
</script>
<?php
}
?>