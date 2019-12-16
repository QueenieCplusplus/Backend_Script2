# BackEnd

# MIME, 多用途網際網路郵件擴展

MIME是通過標準化電子郵件報文的頭部的附加域（fields）而實現的；這些頭部的附加域，描述新的報文類型的內容和組織形式。

# Content-Type, 資料傳輸型態

          Content-Type: [type]/[subtype]; parameter
         
[type]

          Text：用於標準化地表示的文本信息，文本消息可以是多種字符集和或者多種格式的；
          Multipart：用於連接消息體的多個部分構成一個消息，這些部分可以是不同類型的數據；
          Application：用於傳輸 "應用程式數據" 或者二進位數據；
          Message：用於包裝一個 "E-mail" 消息；
          Image：用於傳輸 "靜態" 圖片數據；
          Audio：用於傳輸音頻或者音聲數據；
          Video：用於傳輸 "動態影像" 數據，可以是與音頻編輯在一起的 "視頻" 數據格式。

[subtype]

         用於指定type的詳細形式:
          
          text/plain（純文本）
          text/html（HTML文檔）
          application/xhtml+xml（XHTML文檔）
          
          image/gif（GIF圖像）
          image/jpeg（JPEG圖像）【PHP中為：image/pjpeg】
          image/png（PNG圖像）【PHP中為：image/x-png】
          
          video/mpeg（MPEG動畫）
          
          application/x-www-form-urlencoded（使用HTTP的POST方法提交的表單）
          application/octet-stream（任意的二進位數據）
          application/pdf（PDF文檔）
          application/msword（Microsoft Word文件）
          application/vnd.wap.xhtml+xml (wap1.0+)
          application/xhtml+xml (wap2.0+)
            
          
          message/rfc822（RFC 822形式）
          
          multipart/alternative（HTML郵件的HTML形式和純文本形式，相同內容使用不同形式表示）
          multipart/form-data（同上，但主要用於表單提交時伴隨文件上傳的場合）
          
# Content-Transfer-Encoding, 內容傳輸編碼

          Content-Transfer-Encoding: [mechanism]
          
          7bit ASCII

          8bit ASCII

          binary
          Not only may non-ASCII characters be present but the lines are not necessarily short enough for SMTP transport.

          quoted-printable
          因為歐洲的一些文字和ASCII字符集中的某些字符有部分相同。如果郵件消息使用的是這些語言的話，與ASCII重疊的那些字符可以原樣使用，ASCII字符集中不存在的字符採用形如「=??」的方法編碼。這裡「??」需要用將字符編碼後的16進位數字來指定。採用quoted-printable編碼的消息，長度不會變得太長，而且大部分都是ASCII中的字符，即使不通過解碼也大致可以讀懂消息的內容。

          base64
          base64是一種將二進位的01序列轉化成ASCII字符的編碼方法。編碼後的文本或者二進位消息，就可以運用SMTP等只支持ASCII字符的協議傳送了。Base64一般被認為會平均增加33%的報文長度，而且，經過編碼的消息對於人類來說是不可讀的。

          x-encodingname
          這個值是預留的擴展。
          
# Error Code, 程式碼常見的錯誤代碼

           0 // no errors
           1 // generic error
           3 // configuration error
           4 // file not found
           5 // unknown class
           6 // unknown method, property
           7 // invalid user input
           8 // DB error
           9 // lowest automatically-assigned error code
           125 // highest automatically-assigned error code
