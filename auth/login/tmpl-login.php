<?php
include("../../layout/app-auth.php");
include("../../koneksi-db/config.php");
$db = new Database();
?>
        <div class="card-body">
            <div class="table-responsive">
                <a href="login.php" class="btn btn-primary mb-3"></a>
                <table class="table table-bordered table-md">
                    <tbody>
                   
                        <tr>
                            <?php
                            $data = 1;
                            foreach ($db->login() as $x) {
                                ?>
                            <tr>
                                <td>
                                    <?php echo $data++; ?>
                                </td>
                                <td>
                                    <?php echo $x['Username']; ?>
                                </td>
                                <td>
                                    <?php echo $x['Password']; ?>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include("../../layout/footer-auth.php");
?>