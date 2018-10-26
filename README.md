# PHP简短编程题

## 运行

`git clone https://github.com/yahaphper/algorithm.git`

运行`composer instll`

## 目录结构

```
./tests    单元测试目录
├── CalculationTest		计算相关单元测试
│   ├── GrowthOfAPopulationTest.php
│   └── PersistentBuggerTest.php
├── FilterTest			过滤相关单元测试
│   ├── DontGiveMeFiveTest.php
│   ├── OddOrEverTest.php
│   ├── ShortestWordTest.php
│   └── UniqueInOrderTest.php
└── JudgeTest			判断相关单元测试
    └── IsogramsTest.php
./src
├── Calculation			计算相关
│   ├── GrowthOfAPopulation.php
│   └── PersistentBugger.php
├── Filter				过滤相关
│   ├── DontGiveMeFive.php
│   ├── OddOrEven.php
│   ├── ShortestWord.php
│   └── UniqueInOrder.php
└── Judge				判断相关
    └── Isograms.php
```

## 测试

`./vendor/bin/phpunit tests/Isograms/IsogramsTest.php`

## 社交讨论群

QQ群：680531281