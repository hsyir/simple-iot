## Simple IOT endponint 


### api 
برای خاموش یا روشن کردن لامپ از آدرس زیر استفاده می‌شود:
``` 
// روشن کردن
http://endpointAddress/api/lights/on

// خاموش کردن
http://endpointAddress/api/lights/off
```


جهت دریافت وضعیت خاموش یا روشن بودن لامپ از آدرس زیر استفاده می‌شود:

```
http://endpointAddress/api/lights/getStatus
```

پاسخ یک مقدار json به صورت زیر خواهد بود:
```
{
	"lightsOn": true
}
```
مقدار true به معنی روشن بودن لامپ و false به معنی خاموش بودن لامپ است.
