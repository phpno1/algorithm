# PHP简短编程题

## 运行

`git clone https://github.com/yahaphper/algorithm.git`

运行`composer instll`

## 目录结构

```    

    ├── README.md
    ├── composer.json
    ├── composer.lock
    ├── phpunit.xml
    ├── src
    │   ├── Calculation
    │   │   ├── BuyingCarCases.php
    │   │   ├── Calc.php
    │   │   ├── DoubleLinear.php
    │   │   ├── PersistentBugger.php
    │   │   ├── PiApprox.php
    │   │   ├── SeriesSum.php
    │   │   └── SumString.php
    │   ├── Filter
    │   │   ├── ArrayPluck.php
    │   │   ├── DontGiveMeFive.php
    │   │   ├── OddOrEven.php
    │   │   ├── ShortestWord.php
    │   │   ├── UniqueInOrder.php
    │   │   └── ValidIP.php
    │   ├── Judge
    │   │   ├── AverageString.php
    │   │   ├── BackwardsPrime.php
    │   │   ├── ConsecutiveStrings.php
    │   │   ├── Isograms.php
    │   │   └── TwoToOne.php
    │   └── Transformation
    │       └── AlphabetPosition.php
    └── tests
        ├── CalculationTest
        │   ├── BuyingCarCasesTest.php
        │   ├── CalcTest.php
        │   ├── DoubleLinearTest.php
        │   ├── PersistentBuggerTest.php
        │   ├── PiApproxTest.php
        │   ├── SeriesSumTest.php
        │   └── SumStringTest.php
        ├── FilterTest
        │   ├── ArrayPluckTest.php
        │   ├── DontGiveMeFiveTest.php
        │   ├── OddOrEverTest.php
        │   ├── ShortestWordTest.php
        │   ├── UniqueInOrderTest.php
        │   └── ValidIPTest.php
        ├── JudgeTest
        │   ├── AverageStringTest.php
        │   ├── BackwardsPrimeTest.php
        │   ├── ConsecutiveStringsTest.php
        │   ├── IsogramsTest.php
        │   └── TwoToOneTest.php
        └── Transformation
            └── AlphabetPositionTest.php
		
```

## 测试

`./vendor/bin/phpunit tests/Isograms/IsogramsTest.php`
或者使用`phpunit`可使用`pear`进行安装，安装完成后直接在项目根目录输入`phpunit`命令

## 社交讨论群

QQ群：680531281