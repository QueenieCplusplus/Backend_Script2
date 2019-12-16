# CrawlerPhp
Rate in Bank of TW

# Rex 

https://codeday.me/bug/20190404/879607.html

    $a = "POLYGON((1 1,2 2,3 3,1 1))";
    preg_match_all("/\((.*)\)/U", $a, $pat_array);
    print_r($pat_array);

# preg_match_all()

https://stackoverflow.com/questions/28301248/understanding-preg-match-all-use-and-regex-u-pattern

    function strtr_utf8($str)
    {
       $keys = array();
       $values = array();
       preg_match_all('/./u', 'ĘÓĄŚŁŻŹĆŃęóąśłżźćń', $keys);
       preg_match_all('/./u', 'EOASLZZCNeoaslzzcn', $values);
       $mapping = array_combine($keys[0], $values[0]);
       return strtr($str, $mapping);
    }
    
# str_replace()

https://www.w3school.com.cn/php/func_string_str_replace.asp

       str_replace(find,replace,string,count)
       str_ireplace() // 不區分字母大小寫
       
# Bot is not a Bot, it is a Bank

https://rate.bot.com.tw/xrt?Lang=zh-TW
