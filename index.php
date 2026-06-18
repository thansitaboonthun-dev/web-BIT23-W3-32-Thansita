<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งานที่ 2 - ธันสิตา</title>
        <style>
 
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


        h1 {
            color: #1e40af; 
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 24px;
            text-shadow: 1px 2px 4px rgba(30, 64, 175, 0.1);
            letter-spacing: 0.5px;
        }


        form {
            background-color: #ffffff;
            padding: 35px 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(147, 197, 253, 0.4); 
            width: 100%;
            max-width: 360px;
            box-sizing: border-box;
            border: 1px solid rgba(255, 255, 255, 0.7);
        }


        label {
            display: block;
            font-weight: 600;
            margin-bottom: 10px;
            color: #1e3a8a;
            font-size: 15px;
        }


        input[type="number"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 24px;
            border: 2px solid #bfdbfe;
            border-radius: 10px;
            font-size: 16px;
            box-sizing: border-box;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background-color: #f8fafc;
            color: #334155;
        }

   
        input[type="number"]:focus {
            border-color: #3b82f6; 
            outline: none;
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15);
        }

       
        input[type="submit"] {
            width: 100%;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            color: #ffffff;
            border: none;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(29, 78, 216, 0.2);
            transition: all 0.2s ease;
        }

     
        input[type="submit"]:hover {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            box-shadow: 0 6px 16px rgba(29, 78, 216, 0.3);
        }

      
        input[type="submit"]:active {
            transform: scale(0.97);
            box-shadow: 0 2px 6px rgba(29, 78, 216, 0.2);
        }
    </style>
</head>
<body>

    <h1>งานที่ 2 ธันสิตา บุญทูล BIT2/3 เลขที่32</h1>

    <form action="result.php" method="post">
        
        <label Sartorially for="radius">ค่ารัศมี</label>
        <input type="number" name="p_qty" >

        <input type="submit" value="คำนวณผลลัพธ์">
    </form>

</body>
</html>