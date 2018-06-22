>   千呼万唤始出来，犹抱琵琶半遮面

介绍
==

Yangtuo 是一款 非常轻量的 响应式主题； 基于  purecss 响应式布局；无论是手机，平板，PC都有良好展示效果。

目前压缩包21kB左右。NO JS；全局没有引用任何JS，**是一款能和官方原版主题媲美的轻量级主题哦** 。

下载
==

github开源地址：[ https://github.com/wangbuhui/yangtuo][1]

**最新版本下载：** [【前往下载】][2]

使用说明
====

1.下载 yangtuo 上传到 模板目录。后台启用即可

FAQ
===

**怎么设置背景里的那只羊驼？**

**答：**修改  `yangtuo\style\img\yt.png` 替换 `yt.png`; 或者修改 `yangtuo\style\css\yangtuo.css` 样式的 `.splash-img`样式属性；  

**怎么设置底部链接？**
修改根目录的 `footer.php` 即可；

**怎么设置友链**
虽说有添加模板页的功能；不过时间问题还没完善；选择友情链接模板，添加内容如下
```
!!!
    <ul>
    <li> <a href="http://www.3gjn.com/" title="抓住那只羊驼" target="_blank"> <img src="http://www.3gjn.com/favicon.ico">
     <div class="xlinks-body">
       <b>抓住那只羊驼</b>
       <br>隐约雷鸣,阴霾天空,但盼风雨来,能留你在此 ── 《言叶之庭》
    </div>
    </a>
    </li>
    <li> <a href="http://www.3gjn.com/" title="抓住那只羊驼" target="_blank"> <img src="http://www.3gjn.com/favicon.ico">
     <div class="xlinks-body">
       <b>抓住那只羊驼</b>
       <br>隐约雷鸣,阴霾天空,但盼风雨来,能留你在此 ── 《言叶之庭》
    </div>
    </a>
    </li>
    <li> <a href="http://www.3gjn.com/" title="抓住那只羊驼" target="_blank"> <img src="http://www.3gjn.com/favicon.ico">
     <div class="xlinks-body">
       <b>抓住那只羊驼</b>
       <br>隐约雷鸣,阴霾天空,但盼风雨来,能留你在此 ── 《言叶之庭》
    </div>
    </a>
    </li>
    <li> <a href="http://www.3gjn.com/" title="抓住那只羊驼" target="_blank"> <img src="http://www.3gjn.com/favicon.ico">
     <div class="xlinks-body">
       <b>抓住那只羊驼</b>
       <br>隐约雷鸣,阴霾天空,但盼风雨来,能留你在此 ── 《言叶之庭》
    </div>
    </a>
    </li>
    </ul>
!!!
```
**演示如下：**  [我的邻居][3]

**[注]** ：记得加上开头和结尾的`!!!`符号，作用是在Markdown中使用 HTML

更新
==

**2018/06/18**

1.优化评论页分页问题
2.优化文章页，图片，视频 实现自适应显示
3.新增404错误页 http://www.3gjn.com/404.html

**2018/06/22**
1.优化评论及局部样式
2.新增归档页，友链页面

  [1]: https://github.com/wangbuhui/yangtuo
  [2]: https://github.com/wangbuhui/yangtuo/releases
  [3]: http://www.3gjn.com/links.html
