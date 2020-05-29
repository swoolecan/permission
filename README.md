# Swoole权限管理组件

使用示例代码：<https://github.com/candocker/passport>

 - 无中间件,Hyperf目前还没有Auth组件，请自行创建中间件
 - 命令行只保留清除缓存
   ```
   php bin/hyperf.php permission:cache-reset
   ```

## 安装

 ```
  composer require swoolecan/permission
 ```
发布配置
```
 php bin/hyperf.php vendor:publish swoolecan/permission
```
修改配置文件config/autoload/permission.php

数据库迁移

```
php bin/hyperf.php migrate
```
将Swoolecan\Permission\Traits\HasRoles添加到你的用户Model

```
...
use Swoolecan\Permission\Traits\HasRoles;

class User extends Model {
    
    use HasRoles;
   ...
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
