# A simple php API for inserting data into a database

## You can alter this API as per your use case. Thi is a bare minimum API.

#### Some important notes
* __This API uses POST method__ instead of GET to protect the information being sent from being captured easily.
* __All the information which is to be added to the database must be sent as header variables__.
* Below I have posted the API request reference codes for most languages.
> The database which I used for building and testing this API can be created along with the table using the customer_information.sql file.
##### About response
* If the request was successfully processed on the server side the API will return a single string "done"
* If the request fails then the API will return "error"
* For database connectivity error it will show the error outputted by `mysqli_error($conn)` function
> Note: I have not tested this API enough to handle different types of errors

> Important: These codes are generated with the Postman API testing utility. They are just for reference purposes. They should not be used directly as they are not tested.

###### Python (using Requests):
```python
import requests

url = "http://localhost/"

payload = ""
headers = {
    'name': "ashish shetty",
    'occupation': "web developer",
    'gender': "male",
    'contact_no': "9856321245",
    'User-Agent': "PostmanRuntime/7.11.0",
    'Accept': "*/*",
    'Cache-Control': "no-cache",
    'Postman-Token': "1f38c457-1c1e-46c3-afb3-7a4925f87d15,2de7354b-70ab-447c-a548-e0530d25fdf5",
    'Host': "localhost",
    'accept-encoding': "gzip, deflate",
    'content-length': "",
    'Connection': "keep-alive",
    'cache-control': "no-cache"
    }

response = requests.request("POST", url, data=payload, headers=headers)

print(response.text)
```

###### C language (using LibCurl):
```c
CURL *hnd = curl_easy_init();

curl_easy_setopt(hnd, CURLOPT_CUSTOMREQUEST, "POST");
curl_easy_setopt(hnd, CURLOPT_URL, "http://localhost/");

struct curl_slist *headers = NULL;
headers = curl_slist_append(headers, "cache-control: no-cache");
headers = curl_slist_append(headers, "Connection: keep-alive");
headers = curl_slist_append(headers, "content-length: ");
headers = curl_slist_append(headers, "accept-encoding: gzip, deflate");
headers = curl_slist_append(headers, "Host: localhost");
headers = curl_slist_append(headers, "Postman-Token: 1f38c457-1c1e-46c3-afb3-7a4925f87d15,373d9e6b-cc75-45a5-b57e-39b2a80ff3c8");
headers = curl_slist_append(headers, "Cache-Control: no-cache");
headers = curl_slist_append(headers, "Accept: */*");
headers = curl_slist_append(headers, "User-Agent: PostmanRuntime/7.11.0");
headers = curl_slist_append(headers, "contact_no: 9856321245");
headers = curl_slist_append(headers, "gender: male");
headers = curl_slist_append(headers, "occupation: web developer");
headers = curl_slist_append(headers, "name: ashish shetty");
curl_easy_setopt(hnd, CURLOPT_HTTPHEADER, headers);

CURLcode ret = curl_easy_perform(hnd);
```

###### JavaScript (using jQuery AJAX):
```javascript
var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://localhost/",
  "method": "POST",
  "headers": {
    "name": "ashish shetty",
    "occupation": "web developer",
    "gender": "male",
    "contact_no": "9856321245",
    "User-Agent": "PostmanRuntime/7.11.0",
    "Accept": "*/*",
    "Cache-Control": "no-cache",
    "Postman-Token": "1f38c457-1c1e-46c3-afb3-7a4925f87d15,c0b2b438-986b-443e-b6f8-b0f035f6e327",
    "Host": "localhost",
    "accept-encoding": "gzip, deflate",
    "content-length": "",
    "Connection": "keep-alive",
    "cache-control": "no-cache"
  }
}

$.ajax(settings).done(function (response) {
  console.log(response);
});
```

###### JavaScript (using XHR):
```javascript
var data = null;

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("POST", "http://localhost/");
xhr.setRequestHeader("name", "ashish shetty");
xhr.setRequestHeader("occupation", "web developer");
xhr.setRequestHeader("gender", "male");
xhr.setRequestHeader("contact_no", "9856321245");
xhr.setRequestHeader("User-Agent", "PostmanRuntime/7.11.0");
xhr.setRequestHeader("Accept", "*/*");
xhr.setRequestHeader("Cache-Control", "no-cache");
xhr.setRequestHeader("Postman-Token", "1f38c457-1c1e-46c3-afb3-7a4925f87d15,13d81548-447e-4af1-9797-45e48829f4f8");
xhr.setRequestHeader("Host", "localhost");
xhr.setRequestHeader("accept-encoding", "gzip, deflate");
xhr.setRequestHeader("content-length", "");
xhr.setRequestHeader("Connection", "keep-alive");
xhr.setRequestHeader("cache-control", "no-cache");

xhr.send(data);
```

###### JavaScript - NodeJS (using Request):
```javascript
var request = require("request");

var options = { method: 'POST',
  url: 'http://localhost/',
  headers: 
   { 'cache-control': 'no-cache',
     Connection: 'keep-alive',
     'content-length': '',
     'accept-encoding': 'gzip, deflate',
     Host: 'localhost',
     'Postman-Token': '1f38c457-1c1e-46c3-afb3-7a4925f87d15,937fca56-ae87-4ee8-a206-bddfeae1c862',
     'Cache-Control': 'no-cache',
     Accept: '*/*',
     'User-Agent': 'PostmanRuntime/7.11.0',
     contact_no: '9856321245',
     gender: 'male',
     occupation: 'web developer',
     name: 'ashish shetty' } };

request(options, function (error, response, body) {
  if (error) throw new Error(error);

  console.log(body);
});

```

###### Java (using OK HTTP):
```java
OkHttpClient client = new OkHttpClient();

Request request = new Request.Builder()
  .url("http://localhost/")
  .post(null)
  .addHeader("name", "ashish shetty")
  .addHeader("occupation", "web developer")
  .addHeader("gender", "male")
  .addHeader("contact_no", "9856321245")
  .addHeader("User-Agent", "PostmanRuntime/7.11.0")
  .addHeader("Accept", "*/*")
  .addHeader("Cache-Control", "no-cache")
  .addHeader("Postman-Token", "1f38c457-1c1e-46c3-afb3-7a4925f87d15,44d80a22-d4d4-4ff1-9630-7d0292cc0c8b")
  .addHeader("Host", "localhost")
  .addHeader("accept-encoding", "gzip, deflate")
  .addHeader("content-length", "")
  .addHeader("Connection", "keep-alive")
  .addHeader("cache-control", "no-cache")
  .build();

Response response = client.newCall(request).execute();
```

###### Java (using Unirest)
```java
HttpResponse<String> response = Unirest.post("http://localhost/")
  .header("name", "ashish shetty")
  .header("occupation", "web developer")
  .header("gender", "male")
  .header("contact_no", "9856321245")
  .header("User-Agent", "PostmanRuntime/7.11.0")
  .header("Accept", "*/*")
  .header("Cache-Control", "no-cache")
  .header("Postman-Token", "1f38c457-1c1e-46c3-afb3-7a4925f87d15,27e847d4-2de0-4d33-a067-ff43870d3450")
  .header("Host", "localhost")
  .header("accept-encoding", "gzip, deflate")
  .header("content-length", "")
  .header("Connection", "keep-alive")
  .header("cache-control", "no-cache")
  .asString();
```

### API built using: XAMPP and Postman (for testing)
### Licensed under [MIT license](https://raw.githubusercontent.com/Shetty073/simple-php-insert-api/master/LICENSE)
