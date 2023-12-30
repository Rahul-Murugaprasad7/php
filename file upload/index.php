<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILE UPLOAD</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data" id="frm">
        <h1>Uploading a File Using PHP</h1>
        <label for="fileSelect">Select the file to upload:</label>
        <input type="file" name="file" id="fileSelect">
        <input type="submit" name="submit" value="submit">
        <p>Only .pdf, .docx formats</p>
    </form>

    <?php
        if(isset($_POST['submit']))
        {
            $allow = array("pdf"=> "application/pdf", "doc"=> "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
            $name = $_FILES["file"]["name"];
            $type = $_FILES["file"]["type"];
            $ext = pathinfo($name, PATHINFO_EXTENSION);

            if (!array_key_exists($ext,$allow)) die("Select the valid file format");

            if(in_array($type,$allow))
            {
                if(file_exists("files/".$_FILES["file"]["name"]))
                {
                    echo "this file is already exist";
                }
                else
                {
                    move_uploaded_file($_FILES["file"]["tmp_name"],"Files/".$_FILES["file"]["name"]);
                    echo "your file is uploaded successfully";
                }
            }
            else{
                echo "File ant be uploaded";
            }
        }
    ?>
</body>
</html>