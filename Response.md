# send Response from Server 
HTTP status code, content-type, response body

# Http Header & NonSniff, 關閉前導嗅探的攻擊讓伺服器被誤導

https://pattyappier.blog/2019/02/19/cyber-attacks-探討攻擊/#more-2211

# setCookie, 伺服器設定特定源頭前導，告知瀏覽器做內容上的提供範疇

https://pattyappier.blog/2019/02/13/browsers-security-concern-瀏覽器的安全性議題/#more-2151

# Http Status code

https://waterisme.pixnet.net/blog/post/26192071

* 200 OK
* 301 res removed (redirect)
* 403 not allow
* 404 not found
* 500 server error
* 503 timeout

# Code in PHP engine

GET < URL >

    client.test("Request executed successfully", function() {
    
      client.assert(response.status === 200, "Response status is not 200");
      
    });


    client.test("Response content-type is json", function() {
    
      var type = response.contentType.mimeType;
      client.assert(type === "application/json", "Expected 'application/json' but received '" + type + "'");
      
    });
    
    client.test("Headers option exists", function() {
    
      client.assert(response.body.hasOwnProperty("headers"), "Cannot find 'headers' option in response");
      
    });
    
# Http Message in Response

Mthod 

    GET https://httpbin.org/get

Header

    HTTP/1.1 200 OK
    Access-Control-Allow-Credentials: true
    Access-Control-Allow-Origin: *
    Content-Type: application/json
    Date: Wed, 11 Sep 2019 08:22:42 GMT
    Referrer-Policy: no-referrer-when-downgrade
    Server: nginx
    X-Content-Type-Options: nosniff
    X-Frame-Options: DENY
    X-XSS-Protection: 1; mode=block
    Connection: keep-alive

Body

    {
      "args": {},
      "headers": {
        "Accept-Encoding": "gzip,deflate",
        "Cookie": "fake=fake_value; last_nonce=42cbf5faccc7c105f29c908520c049cd; stale_after=never",
        "Host": "httpbin.org",
        "User-Agent": "Apache-HttpClient/4.5.9 (Java/11.0.3)"
      },
      "origin": "1.34.138.144, 1.34.138.144",
      "url": "https://httpbin.org/get"
    }

Response code: 200 (OK); 

Time: 1660ms; 

Content length: 342 bytes

Cookies are preserved between requests:

    > /Users/katesapp2019/Desktop/Core/.idea/httpRequests/http-client.cookies



