# 说明文档
基于 欢拓云直播WEB API 封装,适合laravel开箱即用
### 安装
`composer require rachel/talkfun-sdk -vvv`
### 配置
在使用本扩展之前，你需要去 [欢拓云](http://www.talk-fun.com/) 合作接入,申请相应的 `openID` 和 `openToken`.
然后在 config/services.php 中配置相应的配置项
```php

'talkfun'=>[
        'openID' => xxxx,
        'openToken' => 'xxxx'),
    ],
    
```
### 使用

``` php

//获取某场直播的记录信息及回放地址

//通过单例模式
$res = app('talkfun')->liveGet(1861102,$expire = 3600);

//通过 Facade 直接使用
$res = Talkfun::liveGet(1861102,$expire = 3600)

```
示例:
```json

{
  "data": {
    "liveid": "1861102",
    "title": "\u7b2c\u4e03\u8bb2\u4e2d\u5b66\u751f\u5b66\u4e60\u5fc3\u7406\uff08\u4e09\uff092h",
    "bid": "107671",
    "roomid": "785414",
    "startTime": "1546085178",
    "endTime": "1546089085",
    "duration": "3906",
    "scoreTotal": "10000",
    "flower": "66",
    "playback": "1",
    "url": "http:\/\/open.talk-fun.com\/play\/PDY5ISAiIWggaiIt.html?st=TKoxvGbxyOyArEkXWSthbw&e=1546501951&from=api",
    "album_id": "0",
    "pv": "82",
    "uv": "30",
    "uv_peak": "26"
  },
  "cache": true,
  "code": 0
}

```