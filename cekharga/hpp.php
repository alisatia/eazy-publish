<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HPP</title>
    <style>
        .spek{
            display: grid;
            grid-template-columns: 1fr 3fr; 
            border: 1px solid red;
            padding: 10px
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="spek">Isian User</label>
        <div class="spek">
            <label for="judul">Judul</label>
            <input type="text" name="judul">

            <label for="bw">Halaman BW</label>
            <input type="number" name="bw">

            <label for="fc">Halaman FC</label>
            <input type="number" name="fc">

            <label for="cover">Cover</label>
            <select name="cover" id="">
                <option value="">AP 210 gr</option>
                <option value="">AP 260 gr</option>
                <option value="">AP 310 gr</option>
            </select>

            <label for="ukuran">Ukuran</label>
            <select name="ukuran" id="">
                <option value="">A3</option>
                <option value="">A4</option>
                <option value="">A5</option>
                <option value="">b5</option>
            </select>

            <label for="jenis">Jenis Cover</label>
            <select name="jenis" id="">
                <option value="">Hard</option>
                <option value="">Soft</option>
            </select>

            <label for="isi">Bahan Isi</label>
            <input type="text" name="isi">

            <label for="qty">QTY</label>
            <input type="number" name="qty">

            <label for="finishing">Finishing</label>
            <input type="text" name="finishing">

            <label for="laminasi">Laminasi</label>
            <input type="text" name="laminasi">

            <label for="spot">Spot UV</label>
            <input type="text" name="spot">
        </div>

        
    </form>
</body>
</html>