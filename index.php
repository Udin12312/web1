<?php
    $nilai="";
    $nilai_message="";

    if(isset($_POST['button'])){
        $nilai = $_POST['input_field'];
        if (ctype_digit($nilai) == True){
            if ($nilai > 0 && $nilai <= 100){
                if ($nilai < 50){
                    $nilai_message = "Nilai Anda E";
                }elseif ($nilai <= 59 && $nilai >= 50){
                    $nilai_message = "Nilai Anda D"; 
                }elseif ($nilai <= 69 && $nilai >= 60 ){
                    $nilai_message = "Nilai Anda C";
                }elseif ($nilai <= 79 && $nilai >= 70 ){
                    $nilai_message = "Nilai Anda B";
                }else{
                    $nilai_message = "Nilai Anda A";}
            }
            else{
                $nilai_message = "Nilai Anda Lebih Dari 100 atau Kurang Dari 0";
         }
    }else{
        $nilai_message = "Inputan Harus Angka";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-sm">
        <h3 class="text-xl font-bold mb-4 text-center">Konversi Nilai Anda</h3>
        <form action="" method="POST">
            <input type="text" name="input_field" placeholder="Masukan Nilai" class="border border-gray-300 rounded p-2 w-full mb-4" required>
            <div class="mb-4 text-center text-gray-700 font-semibold"><?= $nilai_message ?></div>
            <button type="submit" name="button" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 rounded">
                Submit
            </button>
        </form>
    </div>
</body>
</html>