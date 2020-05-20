

    <html>
    <head>
    <title> Mengirim Email dengan Attachment </title>
    </head>
    <body>
    <?
    $to = $_POST['to'];
    $from = $_POST['from'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $fileatt = $_FILES['fileatt']['tmp_name'];
    $fileatt_type = $_FILES['fileatt']['type'];
    $fileatt_name = $_FILES['fileatt']['name'];

    $headers = "From: $from";

    if (is_uploaded_file($fileatt)) {
    $file = fopen($fileatt,'rb');
    $data = fread($file,filesize($fileatt));
    fclose($file);
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
    $headers .= "\nMIME-Version: 1.0\n" .
    "Content-Type: multipart/mixed;\n" .
    " boundary=\"{$mime_boundary}\"";
    $message = "Email dengan attachment dan MIME format.\n\n" .
    "--{$mime_boundary}\n" .
    "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" .
    $message . "\n\n";
    $data = chunk_split(base64_encode($data));

    $message .= "--{$mime_boundary}\n" .
    "Content-Type: {$fileatt_type};\n" .
    " name=\"{$fileatt_name}\"\n" .
    "Content-Transfer-Encoding: base64\n\n" .
    $data . "\n\n" .
    "--{$mime_boundary}--\n";
    }

    $ok = @mail($to, $subject, $message, $headers);
    if ($ok) {
    echo "<p>Email sudah dikirim</p>";
    } else {
    echo "<p>Email gagal terkirim!</p>";
    }
    ?>
    </body>
    </html>