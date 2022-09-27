<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="Nis" value="<?= $Nis ?>">
        <div>
            <label>Nis</label>
            <input type="text" nis="Nis" values="<?= $data['Nis'] ?>">
        </div>
        <div>
            <label>Nama</label>
            <input type="text" nama="Nama" values="<?= $data['Nama'] ?>">
        </div>
        <div>
            <label>Kelas</label>
            <input type="text" kelas="Kelas" values="<?= $data['Kelas'] ?>">
        </div>
        <input type="submit" value="simpan">
    </form>
</body>
</html>