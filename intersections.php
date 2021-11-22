<?php

interface AInterface {...}
interface BInterface {...}

class A implements AInterface {...}
class B implements BInterface {...}
class AB implements AInterface, BInterface  {...}

function function_for_A_and_B(AInterface&BInterface $value) {
  ...
}
function function_for_A_or_B(AInterface|BInterface $value) {
  ...
}
