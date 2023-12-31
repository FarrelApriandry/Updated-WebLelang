<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/main.js"></script>
</head>
<body class="body-admin-index">
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="../img/account.svg" alt="" srcset="">
            <h1>Admin</h1>
        </div>
        <div class="underline-sidebar"></div>
        <ul class="sidebar-content">
            <li class="sidebar-inactive"><img src="../img/auction.svg" alt=""><a href="./admin-auction-page.php">Auction</a></li>
            <li class="sidebar-active"><img src="../img/upload.svg" class="sidebar-img-active" alt=""><a href="./admin-upload-page.php">Upload Auction</a></li>
            <li class="sidebar-inactive"><img src="../img/document.svg" alt=""><a href="./admin-document-page.php">Documents</a></li>
        </ul>
        <p>Closion.</p>
    </div>
    <div class="upload-page-admin">
        <h1>Upload Auction</h1>
        <a href="./admin-auction-page.php">
            <button class="btn-upload">Auction</button>
        </a>
    </div>
    <div class="upload-auction-container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="upload-auction-content">
                <button class="btn-upload-file" onclick="document.getElementById('imageInput').click()"><img src="../img/upload-btn.svg" alt="">Your Image here</button>
                <input type='file' id="imageInput" style="display:none">
                <img id="previewImage" src="" alt="Preview Image">
                <input type="text"name="" id="" placeholder="Name">
                <input type="date" name="" id="" >
                <input type="number"name="" id="" placeholder="OpenBid">
                <textarea id="big-input-text" placeholder="Description"></textarea>
            </div>
        </form>
    </div>