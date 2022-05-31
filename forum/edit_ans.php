<?php require '../partials/_dbconnect.php' ?>
<?php require '../partials/checklogin.php' ?>

<?php

//ambil key
$id = $_GET['id'];

if(isset($_POST['edit_ans'])){
    // $id_akun = $_SESSION['session_id_akun'];
    // $sql = "SELECT sno FROM users WHERE id_akun = '$id_akun'";
    // $qq = mysqli_query($conn, $sql);
    // $qqq = mysqli_fetch_array($qq);
    // $id_penjawab = $qqq['sno'];
    
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    // if($judul == '' or $isi == ''){
    //     $err .= "<li>Silakan masukkan judul dan juga isi jawaban.</li>";
    // }else{
        $sql = "UPDATE jawaban set
        inti_jawaban = '$judul',
        jawaban = '$isi'
        where id_jawaban = '$id'";
        $result = mysqli_query($conn, $sql);
        echo'-----';
        header("location:answer.php?id=$id");
    // }
}

//membuat query
$sql = "SELECT * FROM jawaban LEFT JOIN users ON jawaban.id_penjawab = users.sno WHERE id_jawaban =
    '$id';";
    $result = mysqli_query($conn, $sql);
    $noResult = true;
    $row = mysqli_fetch_array($result);
    $inti_jawaban = $row['inti_jawaban'];
    $jawaban = $row['jawaban'];

    echo $inti_jawaban . $jawaban . 'tes';

    
    echo'
    <div class="container my-4">
    <h1 class="py-2">Jawab Pertanyaan </h1>

    <form method="post">
        <div class="form-group">
            <label for="judul">Judul Jawaban</label>
            <input type="text" class="form-control" id="judul" name="judul" value="'. $inti_jawaban . '"
                aria-describedby="">
            <small id="" class="form-text text-muted">Judul ditulis sesingkat mungkin.</small>
        </div>
        <div class="form-group">
            <label for="isi">Jawaban</label>
            <textarea class="form-control" id="isi" name="isi" rows="3">' . $jawaban . '</textarea>
        </div>
        <button type="submit" name="edit_ans" class="btn btn-success">Submit</button>
    </form>
</div>';
    ?>