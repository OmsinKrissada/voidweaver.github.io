<head>
    <title>Language Corrector</title>
</head>
<body>
    <form action="correct()" method="post">
        Incorrectly typed message: <br>
        <input type="text" name="message" id="input"><br>
        <select name="language" id="lang">
            <option value="th-en">Thai -> English</option>
            <option value="en-th">English -> Thai</option>
        </select><br>
        <input type="submit" value="Submit"><br>
    </form>
    Result: <br>
    <input type="text" id="out" readonly value="<?php correct(); ?>">
    <?php 
        function correct(){
            $result = "";
            $en = [
                '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '-', '=', 
                'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', '[', ']', '\\', 
                'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', ';', '\'', 
                'z', 'x', 'c', 'v', 'b', 'n', 'm', ',', '.', '/', 

                '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', 
                'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', '{', '}', '|', 
                'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', ':', '"', 
                'Z', 'X', 'C', 'V', 'B', 'N', 'M', '<', '>', '?'
            ];

            $th = [
                'ๅ', '/', '-', 'ภ', 'ถ', 'ุ', 'ึ', 'ค', 'ต', 'จ', 'ข', 'ช', 
                'ๆ', 'ไ', 'ำ', 'พ', 'ะ', 'ั', 'ี', 'ร', 'น', 'ย', 'บ', 'ล', 'ฃ', 
                'ฟ', 'ห', 'ก', 'ด', 'เ', '้', '่', 'า', 'ส', 'ว', 'ง', 
                'ผ', 'ป', 'แ', 'อ', 'ิ', 'ื', 'ท', 'ม', 'ใ', 'ฝ', 

                '+', '๑', '๒', '๓', '๔', 'ู', '฿', '๕', '๖', '๗', '๘', '๙', 
                '๐', '"', 'ฎ', 'ฑ', 'ธ', 'ํ', '๊', 'ณ', 'ฯ', 'ญ', 'ฐ', ',', 'ฅ', 
                'ฤ', 'ฆ', 'ฏ', 'โ', 'ฌ', '็', '๋', 'ษ', 'ศ', 'ซ', '.', 
                '(', ')', 'ฉ', 'ฮ', 'ฺ', '์', '?', 'ฒ', 'ฬ', 'ฦ'
            ];
            
            $input = $_POST["input"];

            if($_POST["language"] === "th-en"){
                for($i = 0; $i < strlen($input); $i++){
                    $result += $en{array_search($input{$i}, $th)};
                }
            }else{
                for($i = 0; $i < strlen($input); $i++){
                    $result += $th{array_search($input{$i}, $en)};
                }
            }

            echo $result;
        }
    ?>
</body>