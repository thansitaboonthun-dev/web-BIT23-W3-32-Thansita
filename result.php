<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* ตั้งค่าพื้นหลังด้วยการไล่เฉดสีฟ้าอ่อนพาสเทล ให้เข้ากับหน้าฟอร์ม */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e6f2ff 0%, #d0e7ff 100%); 
            color: #334155;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        /* กล่องข้อความแสดงผลลัพธ์ */
        .result-container {
            background-color: #ffffff;
            padding: 35px 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(147, 197, 253, 0.4); 
            width: 100%;
            max-width: 360px;
            box-sizing: border-box;
            border: 1px solid rgba(255, 255, 255, 0.7);
            text-align: center;
            font-size: 18px;
            line-height: 2;
            font-weight: 600;
            color: #1e3a8a; /* ข้อความสีน้ำเงินเข้ม */
        }

        /* ตกแต่งเน้นย้ำตัวเลขผลลัพธ์ */
        .result-container br + br {
            display: none; /* จัดระเบียบช่องว่าง */
        }

        /* ตกแต่งปุ่มลิงก์ข้ามหน้าให้สวยงามเหมือนปุ่มกด */
        a {
            display: inline-block;
            width: 100%;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            color: #ffffff !important;
            text-decoration: none;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 10px;
            margin-top: 24px;
            box-shadow: 0 4px 12px rgba(29, 78, 216, 0.2);
            transition: all 0.2s ease;
            box-sizing: border-box;
        }

        /* เอฟเฟกต์เมื่อวางเมาส์เหนือปุ่มลิงก์ */
        a:hover {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            box-shadow: 0 6px 16px rgba(29, 78, 216, 0.3);
        }

        /* เอฟเฟกต์เมื่อกดปุ่มลิงก์ */
        a:active {
            transform: scale(0.97);
        }
    </style>
</head>
<body>
    
    <div class="result-container">
        <?php
            $p_am = $_POST["p_am"];

            $total = 4/3*5*($p_am*$p_am*$p_am);
          
           
            echo "ค่ารัศมี : "   . $p_am . "<br>";
            echo "ปริมาณทรงกลม : " . $total . "<br>"; 

        ?>
     
        <a href="index.php">กลับหน้าแรก</a>  
    </div>
 
</body>
</html>