
<div class="card text-dark bg-light m-3" >
    <div class="card-header">Praktikum 8</div>
    <div class="card-body">
        <h5 class="card-title">Daftar Mahasiswa</h5>
        <table class="table table-dark table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th>NO</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>IPK</th>
                    <th>Predikat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($list_mhs as $mhs) {
                ?>
                    <tr>
                        <td class="text-center"><?= $nomor ?></td>
                        <td class="text-center"><?= $mhs->nim ?></td>
                        <td class="text-center"><?= $mhs->nama ?></td>
                        <td class="text-center"><?= $mhs->gender ?></td>
                        <td class="text-end"><?= $mhs->ipk ?></td>
                        <td class="text-center"><?= $mhs->predikat() ?></td>
                    </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>

    </div>
</div>