<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع عقارات مصر </title>
    <link rel="icon" href="image/favicon-32x32.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="add.css">
</head>

<body>
    <header>
        <!-- start nav -->
        <nav>
            <div>
                <a class="enter" href="login.php">
                    <button class="enter">تسجيل الدخول</button>
                </a>
            </div>
            <div>
                <a class="active" href="add.php">
                    <i class="fa-solid fa-house-medical-circle-check">إضافة عقار</i>

                </a>
            </div>
            <div>
                <a class="link" href="sale.html">
                    <i class="fa-solid fa-house-medical">للبيع</i>
                </a>
            </div>
            <div>
                <a class="link" href="rent.html">
                    <i class="fa-solid fa-tag"> للإيجار </i>
                </a>
            </div>
            <div>
                <a class="link" href="index.php">
                    <i class="fa-solid fa-house"> الرئيسية </i>
                </a>
            </div>
            <div>
                <a href="index.php">
                    <img class="logo" src="image/عقارات-مصر-2.webp" alt="">
                </a>
            </div>
        </nav>
        <!-- end nav -->

    </header>

    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">

                <img src="image/عقارات-مصر-2.webp" alt="logo">

                <h2>إضافة عقار</h2>

                <input type="text" name='price' dir="rtl" placeholder="السعر">
                <br>
                <input type="text" name='details' dir="rtl" placeholder="التفاصيل">
                <br>
                <input type="text" name='place' dir="rtl" placeholder="المكان">
                <br>

                <input type="file" id="file" name='image' style="display: none;">

                <label for="file">اختيار صورة للعقار</label>

                <button class="button" name='upload'>رفع العقار</button>
                <br><br>
                <a href="index.php">عرض جميع النتجات</a>


            </form>
        </div>

    </center>
    
</body>

</html>