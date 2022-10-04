<?php
interface a
{
 public function foo();
}
interface b
{
 public function bar();
}
interface c extends a, b
{
 public function baz();
}
class d implements c
{
 public function foo()
 {
 }
 public function bar()
 {
25
26
27
28
29
30
31
 }
 public function baz()
 {
 }
}
?>