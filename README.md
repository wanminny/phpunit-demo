


##phpunit-demo
#### add build status
[![Build Status](https://travis-ci.org/wanminny/phpunit-demo.svg?branch=master)](https://github.com/wanminny/phpunit-demo)


##install phpunit for mac user

➜ wget https://phar.phpunit.de/phpunit.phar

➜ chmod +x phpunit.phar

➜ sudo mv phpunit.phar /usr/local/bin/phpunit

➜ phpunit --version

## simple  //需要测试的代码目录
   tests   //单元测试目录

## useage

➜  Di pwd
/demo/lib/Di
➜  Di phpunit --bootstrap  ./simple/autoloader.php tests

或者在根目录建立phpunit.xml中设置bootstrap 后

 phpunit tests/

##生成覆盖率

 phpunit  tests/  --coverage-html=./coverage  (在当前目录建立coverage)

 提示会有Error:         No whitelist configured, no code coverage will be generated

 需要在phpunit.xml中设置白名单

```
        <filter>
            <whitelist>
                <directory suffix=".php">./simple</directory>  // 需要测试的代码
            </whitelist>
        </filter>

```

## 简单完整的phpunit.xml


```
<phpunit bootstrap="simple/autoloader.php">
    <filter>
        <whitelist>
            <directory suffix=".php">./simple</directory>
        </whitelist>
    </filter>
</phpunit>

```
