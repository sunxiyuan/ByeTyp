<p align="center"><img src="https://github.com/ibadboy-net/ByeTyp/blob/master/image/logo.png"></p>

<p align="center">
<a href="https://github.com/ibadboy-net/ByeTyp/releases"><img src="https://img.shields.io/badge/pod-v1.2-yellow.svg"></a>
<a href="https://github.com/ibadboy-net/ByeTyp/blob/master/LICENSE"><img src="https://img.shields.io/badge/license-mit-000000.svg"></a>
</p>

再见typecho！此插件将帮助你将typecho上的资源无缝迁移到WordPress上。  
插件是原理是：将Typecho中的资源导出为WordPress可识别的XWR格式文件，再通过WordPress导入工具导入该文件。  

## 支持的软件版本
插件已在Typecho1.1和WordPress5.2.2上测试通过。

## 安装方法
请移步[https://github.com/ibadboy-net/ByeTyp/releases](https://github.com/ibadboy-net/ByeTyp/releases)，下载当前最新版的插件，并安装到你的Typecho上。 
注意：上传插件时需要去掉目录后面的版本号，例如：ByeTyp-1.2，需要修改为ByeTyp再上传。    

## 使用方法
在Typecho上启用插件后，依次点击：控制台->数据导出->导出XML文件，下载并保存此文件。  
在WordPress上运行WordPress导入工具，导入前面下载的XML文件。     
WordPress导入工具的运行方法见下图：  
![image](https://github.com/ibadboy-net/ByeTyp/blob/master/image/wp.png)

## 后续步骤
将Typecho站点中的/usr/uploads目录迁移到WordPress的/wp-content目录下。  
在数据库中替换图片资源路径，执行以下SQL语句：  
```sql
UPDATE wp_posts SET post_content = REPLACE( post_content, '/usr/uploads/', '/wp-content/uploads/');
```

## 关于问题
有任何问题请移步[https://github.com/ibadboy-net/ByeTyp/issues](https://github.com/ibadboy-net/ByeTyp/issues)提出，我会及时解决的。  

## 附加说明
此项目基于[TypExport](https://github.com/panxianhai/TypExport)项目二次开发并提供长期维护。  
