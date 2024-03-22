<?php
include_once 'header.php';
?>

<div class="container">
    <h2>Data Mahasiswa</h2>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Mata Kuliah</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Rerata</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Fakhirul</td>
                <td>Statistika dan Probabilitas</td>
                <td>89</td>
                <td>95</td>
                <td>80</td>
                <td>87.95</td>
                <td>A</td>
                <td>Sangat Memuaskan</td>
                <td>Lulus</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rul</td>
                <td>Statistika dan Probabilitas</td>
                <td>78</td>
                <td>81</td>
                <td>80</td>
                <td>79.75</td>
                <td>B</td>
                <td>Memuaskan</td>
                <td>Lulus</td>
            </tr>

            <?php
            require_once 'libfungsi.php'; 

            if (isset($_POST['submit'])) {
                // Validasi input formulir di sini jika diperlukan
                
                $nama_lengkap = $_POST["nama_lengkap"];
                $matkul = $_POST["matkul"];
                $nilai_uts = $_POST["nilai_uts"];
                $nilai_uas = $_POST["nilai_uas"];
                $nilai_tugas = $_POST["nilai_tugas"];

                // Hitung rerata, grade, predikat, dan kelulusan
                $rerata = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
                $grade = grade($rerata);
                $predikat = predikat($grade);
                $lulus = kelulusan($rerata);
                ?>

                <tr> 
                    <td>3</td>
                    <td><?php echo $nama_lengkap; ?></td>
                    <td><?php echo $matkul; ?></td>
                    <td><?php echo $nilai_uts; ?></td>
                    <td><?php echo $nilai_uas; ?></td>
                    <td><?php echo $nilai_tugas; ?></td>
                    <td><?php echo number_format($rerata, 2); ?></td> <!-- Format rata-rata hingga 2 desimal -->
                    <td><?php echo $grade; ?></td>
                    <td><?php echo $predikat; ?></td>
                    <td><?php echo $lulus; ?></td>
                </tr>
            <?php 
            } else {
                // Pesan jika formulir belum disubmit
                echo "<tr><td colspan='10'>Silakan isi formulir di bawah untuk menambahkan data mahasiswa baru</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
