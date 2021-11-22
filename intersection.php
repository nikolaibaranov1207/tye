<?php

interface AInterface {...}

interface BInterface {...}

class A implements AInterface {}
class B implements BInterface {}
class AB implements AInterface, BInterface  {}

function foo(AInterface&BInterface $value) {
  ...
}

function bar(AInterface|BInterface $value) {
  ...
}
