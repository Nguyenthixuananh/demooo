<?php
  //1.addcslashes ($str, $char_list)
//Hàm này sẽ thêm dấu gạch chéo (\) đằng trước những ký tự trong
// chuỗi $str mà ta liệt kê ở $char_list.

// a..z là gồm các từ từ a => z
echo (addcslashes('freetuts.net FREETUTS.NET', 'a..z'));
// kết quả: \f\r\e\e\t\u\t\s.\n\e\t

echo '<br />';

// a..zA..Z là gồm các từ từ a => z và A => Z
echo (addcslashes('freetuts.net FREETUTS.NET', 'a..zA..Z'));

  //2.addslashes ( $str )
//Hàm này sẽ thêm dấu gách
//chéo trước những ký tự (‘, “, \) trong chuỗi $str.

