# TryDomEvent
JS access  the elements of an HTML doc by DOM, and trigger out Event by "on" method called.

# DOM, Selector, Filter 文件物件模型和選擇器與篩選器

https://pattyappier.blog/2019/03/11/selector-filter-in-jquery-元素選擇器或過濾器/#more-2352

https://pattyappier.blog/2019/02/13/browsers-security-concern-瀏覽器的安全性議題/#more-2151

DOM & Cookies, 瀏覽器對資訊的儲存

文件物件模型是瀏覽器的基礎概念，是文件透過物件而互動的 API，DOM 提供方法讓腳本語言和渲染引擎進行互動，方法是以物件型式提供參考給 HTML 元素。例如：頁面的修改無需發出新請求至網頁伺服器，也無需與使用者互動，直接運行於瀏覽器中的腳本來讀取/ 寫入即可。

儲存分為二：一是持久於本地端，一是存活於會話期間，前者能於有效期間跨越使用者多次的連結 ; 而會話僅適用於建立它的分頁。

介於 cookies 和 web 儲存之間的一個最主要差別在於後者能由 JS 建立，而非 HTTP header 建立。web 儲存能儲存比 cookies 還大的尺寸檔案，大小取決於瀏覽器，可大於 5 MB

# Security Concern for CORS, 跨來源資料共用攻擊的資安問題

https://pattyappier.blog/2019/02/19/cyber-attacks-探討攻擊/

Iframe Sandbox, 同源或是用來引入跨域來源不受信任的內容，例如某些社交媒體的插件，對此因應方式為提出規範提議，讓瀏覽器採納的 HTML5 屬性，為嵌入式頁框加入額外限制。（此限制包含：防止使用表單、停止腳本執行、不允許頂層導航、從源頭捕捉等等，這些限制衍生於每個父頁框，藉此確保任何巢狀 IFrames 時，均會自動繼承這些限制。）

# XSS, Cross-Sites Script, 跨境腳本注入

https://pattyappier.blog/2019/02/19/cyber-attacks-探討攻擊/#more-2211

XSS 肇因於 JS 的 eval 函式，能進行取值的函數，此攻擊允許使用者端腳本注入到網站網頁上，攻擊成功後，攻擊者能夠取得網站更高權限，進一步取得網站重要資訊，竊取有用的資料。

而能有效防止 XSS 攻擊的方式是瀏覽器沙盒，能減緩和縮小攻擊面範圍，因為沙盒能夠把瀏覽器極容易遭受損害的區域置於防護牆內。沙盒算是有歷史的解決方案，其他運算領域早就已經出現許多變體。例如：受限資源存取根據進程的權限。

沙盒能應用多種層面，從應用到內核，分隔不同的使用者。也能應用到硬體，以實現內核與使用者空間的權限隔離。

對於使用者空間的程式碼而言，瀏覽器沙盒可能是最高級別的沙盒，它是一道屏障，介於作業系統賦予瀏覽器的權限，以及子程序執行於瀏覽器的權限之間。

駭客們若想破壞瀏覽器，至少必須採用兩個步驟。另外，有些瀏覽器是以獨立的進程開啟每個網站，故很難透過惡意網站對目前連結的其他站點，或是對作業系統本身進一步採取影響性的攻擊。

Sandbox Bypass, 瀏覽器旁繞，尋找瀏覽器功能的漏洞，突破沙盒。

# Multi inline Methods
...wait...
