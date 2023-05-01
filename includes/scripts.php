<!-- Swiper JS link -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap5.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>

<!-- Custom Javascript file link -->
<script src="js/script.js"></script>
<script src="js/sweetalert.min.js"></script>

    <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] != '')
    {
    ?>
    <script>
        swal({
            title: "<?php $_SESSION['status']; ?>",
            text: "<?php $_SESSION['status_msg']; ?>",
            icon: "<?php $_SESSION['status_icon']; ?>",
            button: "Ok",
            });
     </script>

    <?php
        unset($_SESSION['status']);
    }

    ?>
    
</script>

</body>
</html>