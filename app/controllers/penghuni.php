<?php
$while = $conn->query("select * from penghuni");
while ($whileRows = mysqli_fetch_array($while)) {
?>
    <tr>
        <td>
            <div class="flex items-center gap-3">
                <div class="avatar">
                    <div class="mask mask-squircle w-14 h-14">
                        <img src="../app/images/images.jpeg" alt="Avatar Tailwind CSS Component" />
                    </div>
                </div>
                <div>
                    <div class="font-bold"><?= $whileRows['nama'] ?></div>
                </div>
            </div>
        </td>
        <td style="text-align: center;"><?= $whileRows['nim'] ?></td>
        <td style="text-align: center;"><?= $whileRows['kelas'] ?></td>
    </tr>
<?php }

?>