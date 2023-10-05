<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="body-admin-index">
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="../img/account.svg" alt="" srcset="">
            <h1>Admin</h1>
        </div>
        <div class="underline-sidebar"></div>
        <ul class="sidebar-content">
            <li class="sidebar-active"><img src="../img/auction.svg" class="sidebar-img-active" alt=""><a href="./admin-auction-page.php">Auction</a></li>
            <li class="sidebar-inactive"><img src="../img/upload.svg" alt=""><a href="./admin-upload-page.php">Upload Auction</a></li>
            <li class="sidebar-inactive"><img src="../img/document.svg" alt=""><a href="./admin-document-page.php">Documents</a></li>
        </ul>
        <p>Closion.</p>
    </div> 
    <div class="main-page-admin">
        <h1>Auction</h1>
        <input class="search-input-admin" type="text" placeholder="Search">
        <a href="./admin-upload-page.php">
            <button class="btn-upload">+ add</button>
        </a>
    </div>
    <table class="table-container">
        <tr class="table-container-header">
            <th>Image</th>
            <th>Name</th>
            <th>Upload Date</th>
            <th>Open Bid</th>
            <th>Description</th>
            <th></th>
        </tr>
        <tr class="table-content">
            <th>Image</th>
            <th>Name</th>
            <th>Upload Date</th>
            <th>Open Bid</th>
            <th>Description</th>
            <th><button>More</button></th>
        </tr>
    </table>  
</body>