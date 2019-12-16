# My SQL
using MySQL Bench, in Unix system, which already installed Apache by default.

# RDB, Relational DB, 關聯式資料庫特點

https://pattyappier.blog/2019/01/23/mysql-關聯式資料庫引擎及其模組架構/

關聯式資料庫，儲存前要先定義每個欄位 cloumn (即 field) 的資料型態，之後便僅能在對應的欄位儲存對應型態的資料，而資料庫中擁有多個資料表，資料表之間可以利用 id 建立關聯，並且透過資料表結構 schema 確認資料表中各種資料間的關聯。

然而近年來，網站系統訪問量攀升，產生大筆多筆的資料數據，許多資料庫因為讀寫頻率高，導致性能問題產生，關聯式資料庫也因為欄位要預先設定型別，但是當寫入的資料太龐大時，這對資料庫管理員來說會越來越複雜和面對壓力。

這時，非關聯式資料庫出場！它補足了關聯式資料庫的不足，增加擴增和彈性。
https://github.com/QuinoaPy/MongoDB

關聯式資料庫是利用 Column-Row 來建立資料表 Table 的。（而非關聯式則是利用鍵值對格式存儲資料表 collection。）

# install IDE

MySQL WorkBench IDE

https://dev.mysql.com/doc/workbench/en/wb-installing-mac.html

# download & install MySQL DB

prefer DMG than Tar.

https://dev.mysql.com/downloads/mysql/

# Config DB on Mac, Password setup

打開 shell

    sudo su
    
開啟隱藏檔案用 open 或是 vim

     ~/.bash_profile
    
打開檔案，並使用 VIM ，先打入 / 做查詢

    /
    
使用 VIM 做編輯，藉此得以更改環境變數

    export PATH= "/usr/local/mysql/bin:$PATH"
    
修改與定義環境變數
//定義變數可以大小寫，可以加入路徑與指令至變數的字串來定義變數。
//然而變數定義等於的左右兩邊不可以有空格。

	//範例如下：
	export PATH="$PATH:/usr/local/mysql/bin"
	alias mysql_start="sudo /usr/local/mysql/support-files/mysql.server start"
	
	//完整定義如下：
	export PATH="$PATH:/usr/local/mysql/bin"
	alias mysql_start="sudo /usr/local/mysql/support-files/mysql.server start"
	alias mysql_stop="sudo /usr/local/mysql/support-files/mysql.server stop"
	alias mysql_restart="sudo /usr/local/mysql/support-files/mysql.server restart"

記得如下方式存擋

    press esc
    :wq
    
執行檔案

    source ~/.bash_profile
    
抑或開終端機新視窗

    cmd + T
   
照理說之後就可以用環境變數呼叫，取代之前繁瑣的絕對路徑！
總覽

	$ vi .bash_profile
	$ source .bash_profile
	$ mysql_start
	Password: [sudo root password]
	
	Starting MySQL
	......................................................................
    
http://developer.blackberry.com/devzone/develop/platform_services/install_mysql_mac_os_x_environment.html

# Basic VIM

    esc
    
    / <find>
    
    $ i
    
    $ a
    
    esc
    
    :wq

# Start MySQL Server

https://github.com/redpint819/mySQL/blob/master/MySQL_Server_Start.png

    sudo /usr/local/mysql/support-files/mysql.server start
    
    sudo /usr/local/mysql/support-files/mysql.server stop
    
    sudo /usr/local/mysql/support-files/mysql.server restart
    
# Log In MySQL 

http://mustgeorge.blogspot.com/2011/11/mysql-error-1045-28000-using-password.html

    mysql -u root -p
    
    Enter password: *******
    
    Welcome to the MySQL monitor.  Commands end with ; or \g.
    Your MySQL connection id is 8
    Server version: 8.0.17 MySQL Community Server - GPL

    Copyright (c) 2000, 2019, Oracle and/or its affiliates. All rights reserved.

    Oracle is a registered trademark of Oracle Corporation and/or its
    affiliates. Other names may be trademarks of their respective
    owners.
    
# Common Mysql CLI:

    ?         (\?) Synonym for `help'.
    clear     (\c) Clear the current input statement.
    connect   (\r) Reconnect to the server. Optional arguments are db and host.
    delimiter (\d) Set statement delimiter.
    edit      (\e) Edit command with $EDITOR.
    ego       (\G) Send command to mysql server, display result vertically.
    exit      (\q) Exit mysql. Same as quit.
    go        (\g) Send command to mysql server.
    help      (\h) Display this help.
    nopager   (\n) Disable pager, print to stdout.
    notee     (\t) Don't write into outfile.
    pager     (\P) Set PAGER [to_pager]. Print the query results via PAGER.
    print     (\p) Print current command.
    prompt    (\R) Change your mysql prompt.
    quit      (\q) Quit mysql.
    rehash    (\#) Rebuild completion hash.
    source    (\.) Execute an SQL script file. Takes a file name as an argument.
    status    (\s) Get status information from the server.
    system    (\!) Execute a system shell command.
    tee       (\T) Set outfile [to_outfile]. Append everything into given outfile.
    use       (\u) Use another database. Takes database name as argument.
    charset   (\C) Switch to another charset. Might be needed for processing binlog with multi-byte charsets.
    warnings  (\W) Show warnings after every statement.
    nowarning (\w) Don't show warnings after every statement.
    resetconnection(\x) Clean session context.

# Port 3306

https://ithelp.ithome.com.tw/questions/10190199

# Useful CLI

    $ netstat 

# Start DB Query Language Journey now ! 

https://github.com/redpint819/mySQL/blob/master/Local%20Instance%203306.png

