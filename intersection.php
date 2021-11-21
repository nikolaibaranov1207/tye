<?php

interface AInterface {...}

interface BInterface {...}

interface ABInterface {...}

class A implements AInterface {}
class B implements BInterface {}
class AB implements ABInterface {}

function foo(ABInterface $value) {
  ...
}

function bar(AInterface|BInterface $value) {
  ...
}
