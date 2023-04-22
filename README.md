## Simple IOT endponint 


### api 

#### روشن و خاموش کردن
برای خاموش یا روشن کردن لامپ از آدرس زیر استفاده می‌شود:
``` 
// روشن کردن
PUT http://endpointAddress/api/lights/on

// خاموش کردن
PUT http://endpointAddress/api/lights/off
```
مقدار بازگشتی یک json به فرمت زیر خواهد بود

```
{
	"status": true
}
```
در صورت true بودن عملیات موفقیت آمیز بوده است و در غیر این صورت عملیات انجام نشده است.



#### دریافت وضعیت 
جهت دریافت وضعیت خاموش یا روشن بودن لامپ از آدرس زیر استفاده می‌شود:

```
GET http://endpointAddress/api/lights/status
```

پاسخ یک مقدار json به صورت زیر خواهد بود:
```
{
	"lightsOn": true
}
```
مقدار true به معنی روشن بودن لامپ و false به معنی خاموش بودن لامپ است.
