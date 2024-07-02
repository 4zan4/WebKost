<?php

include "../koneksi.php";

?>
<section class="accomodation_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">Kos Available</h2>
            <p>We have various types of rooms available for your needs.</p>
        </div>
        <div class="row mb_30">
            <?php
            // Select data from data_kos table
            $query = "SELECT * FROM data_kos";
            $result = mysqli_query($conn, $query); // Assuming $conn is your MySQLi connection

            // Check for errors in query execution
            if (!$result) {
                die("Database query failed."); // Handle gracefully in production
            }

            // Loop through the data and display each accommodation item
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id_kos'];
                $namakos = htmlspecialchars($row['namakos']); // Prevent XSS by escaping HTML
                $alamatkos = htmlspecialchars($row['alamatkos']); // Prevent XSS by escaping HTML
                $harga = $row['harga'];
                $gambar = htmlspecialchars($row['gambar_kos']); // Prevent XSS by escaping HTML

                // Output each accommodation item
            ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img aspect-ratio-4x3">
                            <img src="<?php echo $gambar; ?>" class="img-fluid" alt="<?php echo $namakos; ?>">
                            <a href="detailkost.php?id=<?php echo $id; ?>" class="btn theme_btn button_hover">Detail</a>
                        </div>
                        <a href="detailkost.php?id=<?php echo $id; ?>">
                            <h4 class="sec_h4"><?php echo $namakos; ?></h4>
                        </a>
                        <h5><?php echo $harga; ?><small>/bulan</small></h5>
                    </div>
                </div>

            <?php
            }

            // Free result set
            mysqli_free_result($result);

            // Close connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</section>
