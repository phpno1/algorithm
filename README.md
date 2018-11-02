# PHP简短编程题

## 运行

`git clone https://github.com/yahaphper/algorithm.git`

运行`composer instll`

## 目录结构

```    

    ./tests				单元测试目录
    ├── CalculationTest		计算相关单元测试
    │   ├── BuyingCarCasesTest.php
    │   ├── CalcTest.php
    │   ├── GrowthOfAPopulationTest.php
    │   ├── InterpreterTest.php
    │   └── PersistentBuggerTest.php
    ├── FilterTest			过滤相关单元测试
    │   ├── ArrayPluckTest.php
    │   ├── DontGiveMeFiveTest.php
    │   ├── OddOrEverTest.php
    │   ├── ShortestWordTest.php
    │   ├── UniqueInOrderTest.php
    │   └── ValidIPTest.php
    └── JudgeTest			判断相关单元测试
        ├── ConsecutiveStringsTest.php
        ├── IsogramsTest.php
        └── TwoToOneTest.php
        
    ./src
    ├── Calculation			计算相关
    │   ├── BuyingCarCases.php
    │   ├── Calc.php
    │   ├── GrowthOfAPopulation.php
    │   ├── Interpreter.php
    │   └── PersistentBugger.php
    ├── Filter				过滤相关
    │   ├── ArrayPluck.php
    │   ├── DontGiveMeFive.php
    │   ├── OddOrEven.php
    │   ├── ShortestWord.php
    │   ├── UniqueInOrder.php
    │   └── ValidIP.php
    └── Judge				计算相关
        ├── ConsecutiveStrings.php
        ├── Isograms.php
        └── TwoToOne.php
		
```

## 测试

`./vendor/bin/phpunit tests/Isograms/IsogramsTest.php`

## 社交讨论群

QQ群：680531281